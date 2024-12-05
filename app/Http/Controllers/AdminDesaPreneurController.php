<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preneur;
use App\Models\Homepage;
use App\Models\LaporanPreneur;
use App\Models\Visit;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


class AdminDesaPreneurController extends Controller
{
    public function showDashboard(Request $request)
    {
        // Mengambil semua data produk Desa Prima
        $Preneur = Preneur::all();
    
        // Menghitung total produk
        $totalPreneur = Preneur::count(); // Menghitung jumlah produk
    
        // Data kunjungan
        $totalVisitsDesaPreneur = Visit::getVisitCountByDesa('Desa Preneur');
        $desaPreneurVisits = Visit::selectRaw('DATE(created_at) as date, COUNT(*) as total')
            ->where('desa_name', 'Desa Preneur')
            ->whereDate('created_at', '>=', Carbon::now()->subDays(7))
            ->groupBy('date')
            ->orderBy('date')
            ->get();
    
        $dataDesa = [
            'preneur' => [
                'date' => $desaPreneurVisits->pluck('date'),
                'total' => $desaPreneurVisits->pluck('total'),
            ],
        ];
         // Mengambil semua data preneur
         $preneur = preneur::all();

         // Mengambil jumlah kunjungan untuk Desa preneur bulan ini
         $totalVisitsDesapreneur = Visit::getVisitCountByDesa('Desa preneur');
         
         // Menghitung total preneur
         $totalpreneur = preneur::count();
 
         $desaPreneurVisits = Visit::selectRaw('DATE(created_at) as date, COUNT(*) as total')
         ->where('desa_name', 'Desa Preneur')
         ->whereDate('created_at', '>=', Carbon::now()->subDays(7))
         ->groupBy('date')
         ->orderBy('date')
         ->get();
 
         // Mengubah data menjadi array untuk digunakan di chart
         $dataDesa = [
             'preneur' => [
             'date' => $desaPreneurVisits->pluck('date'),
             'total' => $desaPreneurVisits->pluck('total')
             ],
         ];
 
         // Mendapatkan nama desa dari URL, default ke 'Desa preneur'
         $desaName = $request->get('desa', 'Desa Preneur');
 
         // Filter (default: daily)
         $filter = $request->get('filter', 'daily');
 
         $data = [];
         $labels = [];
 
         if ($filter === 'daily') {
             // Contoh untuk filter harian
             $dates = collect(range(0, 6))->map(function ($day) {
                 return now()->subDays($day)->format('Y-m-d');
             })->reverse();
 
             foreach ($dates as $date) {
                 $visitCount = Visit::where('desa_name', $desaName)
                     ->whereDate('created_at', $date)
                     ->count();
 
                 $data[] = $visitCount;
                 $labels[] = $date;
             }
         } elseif ($filter === 'weekly') {
             // Contoh untuk filter mingguan
             $weeks = collect(range(0, 3))->map(function ($week) {
                 return now()->subWeeks($week)->format('W');
             })->reverse();
 
             foreach ($weeks as $week) {
                 $visitCount = Visit::where('desa_name', $desaName)
                     ->whereRaw('WEEK(created_at) = ?', [$week])
                     ->count();
 
                 $data[] = $visitCount;
                 $labels[] = 'Minggu ' . ($weeks->search($week) + 1);
             }
         } elseif ($filter === 'monthly') {
             // Contoh untuk filter bulanan
             $months = range(1, 12);
 
             foreach ($months as $month) {
                 $visitCount = Visit::where('desa_name', $desaName)
                     ->whereMonth('created_at', $month)
                     ->whereYear('created_at', now()->year)
                     ->count();
 
                 $data[] = $visitCount;
                 $labels[] = Carbon::create()->month($month)->format('M');
             }
         } elseif ($filter === 'yearly') {
             // Contoh untuk filter tahunan
             $years = Visit::selectRaw('YEAR(created_at) as year')
                 ->distinct()
                 ->pluck('year');
 
             foreach ($years as $year) {
                 $visitCount = Visit::where('desa_name', $desaName)
                     ->whereYear('created_at', $year)
                     ->count();
 
                 $data[] = $visitCount;
                 $labels[] = $year;
             }
         }
 
         // Kirim data ke view
         return view('admin.adminpreneur.adminpreneur', compact(
             'totalVisitsDesaPreneur',
             'totalPreneur',
             'dataDesa',
             'desaName', 
             'preneur',
             'data',
             'labels',
             'filter'
         ));
     }


    public function tambahPreneur()
    {
        return view('admin.adminpreneur.tambahpreneur');
    }

    public function simpanPreneur(Request $request)
    {
        // Validasi data produk
        $request->validate([
            'kategori_produk' => 'required',
            'nama_produk' => 'required',
            'harga_produk' => 'required|numeric',
            'nomor_whatsapp' => 'required',
            'deskripsi' => 'required',
            'foto_card' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'foto_produk.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'foto_produk' => 'required|array',
        ]);
    
        // Menghilangkan simbol "Rp" dan menyimpan harga dalam format numerik
        $harga = preg_replace('/[^0-9]/', '', str_replace('Rp', '', $request->harga_produk));
    
        // Simpan data produk
        $produk = new Preneur();
        $produk->kategori_produk = $request->kategori_produk;
        $produk->nama_produk = $request->nama_produk;
        $produk->harga_produk = $harga; // Menyimpan harga sebagai angka
        $produk->nomor_whatsapp = $request->nomor_whatsapp;
        $produk->deskripsi = $request->deskripsi;
    
        // Menyimpan foto card
        if ($request->hasFile('foto_card')) {
            $produk->foto_card = $request->file('foto_card')->store('uploads/desapreneur', 'public');
        }
    
        // Menyimpan foto produk (opsional, multiple upload)
        if ($request->hasFile('foto_produk')) {
            $fotoProdukPaths = array_map(
                fn($file) => $file->store('uploads/desapreneur', 'public'),
                $request->file('foto_produk')
            );
            $produk->foto_produk = json_encode($fotoProdukPaths);
        }
    
        // Menyimpan foto slider (opsional, multiple upload)
        if ($request->hasFile('foto_produk')) {
            $fotoSliderPaths = [];
            foreach ($request->file('foto_produk') as $file) {
                $path = $file->store('uploads/foto_produk', 'public');
                $fotoProdukPaths[] = str_replace('\\', '/', $path); // Pastikan path menggunakan '/'
            }
            $produk->foto_slider = json_encode($fotoSliderPaths);
        }
    
        // Simpan produk ke database
        $produk->save();
    
        // Redirect ke halaman kelolapreneur dengan pesan sukses
        return redirect()->route('kelolapreneur')->with('success', 'Produk dan varian berhasil ditambahkan');
    }
    

    
    public function kelolaPreneur()
    {
        $produks = Preneur::all();
        return view('admin.adminpreneur.kelolapreneur', compact('produks'));
    }

    public function editPreneur($id)
    {
        $produk = Preneur::findOrFail($id);

        return view('admin.adminpreneur.editpreneur', compact('produk'));
    }


    public function updatePreneur(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga_produk' => 'required|string',
            'kategori_produk' => 'required|string|max:255',
            'nomor_whatsapp' => 'required|string|max:15',
            'deskripsi' => 'nullable|string',
            'foto_card' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'foto_produk.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Temukan produk berdasarkan ID
        $produk = Preneur::findOrFail($id);
    
        // Pastikan harga_produk hanya berupa angka
        $harga_produk = preg_replace('/\D/', '', $request->harga_produk);
    
        // Perbarui informasi utama produk
        $produk->update([
            'nama_produk' => $request->nama_produk,
            'harga_produk' => $harga_produk,
            'kategori_produk' => $request->kategori_produk,
            'nomor_whatsapp' => $request->nomor_whatsapp,
            'deskripsi' => $request->deskripsi,
        ]);
    
        // Update foto card
        if ($request->hasFile('foto_card')) {
            // Hapus foto card lama jika ada
            if ($produk->foto_card && Storage::disk('public')->exists($produk->foto_card)) {
                Storage::disk('public')->delete($produk->foto_card);
            }
    
            // Simpan foto card baru
            $fotoCardName = $request->file('foto_card')->store('uploads/desapreneur', 'public');
            $produk->foto_card = $fotoCardName;
        }
    
        
       // Update foto produk
        $fotoProdukData = $produk->foto_produk;

        // Pastikan $fotoProdukData adalah string sebelum di-decode
        if (is_string($fotoProdukData)) {
            $fotoProdukPaths = json_decode($fotoProdukData, true) ?? [];
        } else {
            $fotoProdukPaths = is_array($fotoProdukData) ? $fotoProdukData : [];
        }

        // Hapus foto produk yang diinginkan
        if ($request->has('hapus_foto_produk') && is_array($request->hapus_foto_produk)) {
            foreach ($request->hapus_foto_produk as $hapusFoto) {
                if (($key = array_search($hapusFoto, $fotoProdukPaths)) !== false) {
                    if (Storage::disk('public')->exists($hapusFoto)) {
                        Storage::disk('public')->delete($hapusFoto);
                    }
                    unset($fotoProdukPaths[$key]);
                }
            }
        }
    
        // Tambahkan foto produk baru
        if ($request->hasFile('foto_produk')) {
            foreach ($request->file('foto_produk') as $file) {
                $fotoName = $file->store('uploads/desapreneur', 'public');
                $fotoProdukPaths[] = $fotoName;
            }
        }
    
        // Simpan path foto produk yang diperbarui
        $produk->foto_produk = json_encode(array_values($fotoProdukPaths));
    
        // Simpan perubahan produk
        $produk->save();
    
        return redirect()->to('/kelolapreneur')->with('success', 'Produk dan varian berhasil diperbarui');
    }
    

    public function hapusPreneur($id)
{
    $preneur = Preneur::findOrFail($id);

    // Hapus foto card
    if ($preneur->foto_card && Storage::disk('public')->exists('uploads/desapreneur/' . $preneur->foto_card)) {
        Storage::disk('public')->delete('uploads/desapreneur/' . $preneur->foto_card);
    }

    // Hapus semua foto produk
    $fotoProdukPaths = is_string($preneur->foto_produk) ? json_decode($preneur->foto_produk, true) : $preneur->foto_produk;
    foreach ($fotoProdukPaths as $foto) {
        if (Storage::disk('public')->exists('uploads/desapreneur/' . $foto)) {
            Storage::disk('public')->delete('uploads/desapreneur/' . $foto);
        }
    }

    // Hapus data dari database
    $preneur->delete();

    return redirect()->back()->with('success', 'Data produk beserta semua foto terkait berhasil dihapus');
}


    public function transaksiPreneur()
    {
        return view('admin.adminPreneur.transaksiPreneur');
    }

    public function kelolaHomepage()
    {
        $homepageData = Homepage::where('desa_name', 'preneur')->first();
        return view('admin.adminpreneur.kelolahomepagepreneur', compact('homepageData'));
    }

    // Mengelola update banner gambar untuk homepage preneur
    public function updateBannerPreneur(Request $request)
    {
        // Ambil data homepage preneur berdasarkan desa_name 'preneur'
        $homepageData = Homepage::where('desa_name', 'Preneur')->first();

        // Jika data tidak ditemukan, buat data baru untuk desa preneur
        if (!$homepageData) {
            $homepageData = new Homepage;
            $homepageData->desa_name = 'preneur'; // Tentukan desa yang sedang diproses
        }

        // Mengelola upload gambar banner jika ada
        if ($request->hasFile('banner_image')) {
            // Hapus gambar lama jika ada
            if ($homepageData->gambar_banner && Storage::disk('public')->exists($homepageData->gambar_banner)) {
                Storage::disk('public')->delete($homepageData->gambar_banner);
            }

            // Simpan gambar baru ke folder 'uploads/preneur'
            $bannerImageName = $request->file('banner_image')->store('uploads/desapreneur', 'public');
            $homepageData->gambar_banner = $bannerImageName;
        }

        // Simpan perubahan ke dalam database
        $homepageData->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Banner Desa preneur berhasil diperbarui');
    }


    public function simpanPesanan(Request $request)
    {
        // Validasi data input
        $validated = $request->validate([
            'nama_produk' => 'required|string',
            'harga' => 'required|numeric',
            'jumlah' => 'required|integer|min:1',
            'total_harga' => 'required|numeric',
            'tanggal' => 'required|date',
        ]);

        // Simpan ke database
        $laporan = new LaporanPreneur();
        $laporan->judul = $validated['nama_produk'];
        $laporan->deskripsi = 'Pesanan Produk';
        $laporan->tanggal = $validated['tanggal'];
        $laporan->total = $validated['total_harga'];
        $laporan->save();

        // Redirect ke WhatsApp
        $whatsappNumber = '628123456789'; // Ganti dengan nomor WhatsApp tujuan
        $pesan = urlencode("Detail Pesanan:\n" . 
            "Nama Produk: {$validated['nama_produk']}\n" . 
            "Harga: Rp " . number_format($validated['harga'], 0, ',', '.') . "\n" . 
            "Jumlah: {$validated['jumlah']}\n" . 
            "Total Harga: Rp " . number_format($validated['total_harga'], 0, ',', '.'));

        return redirect("https://wa.me/{$whatsappNumber}?text={$pesan}");
    }

    public function laporanPreneur()
    {
        $laporanPreneur = LaporanPreneur::all();
        return view('admin.adminpreneur.laporanpreneur', compact('laporanPreneur'));
    }
}
