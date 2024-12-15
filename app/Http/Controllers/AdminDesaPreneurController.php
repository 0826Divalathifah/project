<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preneur;
use App\Models\Homepage;
use App\Models\Visit;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminDesaPreneurController extends Controller
{

  

    // Method untuk menampilkan halaman dashboard admin
    public function showDashboard(Request $request)
    {
        // Mengambil semua data produk Desa Preneur
        $preneur = Preneur::all();
    
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
         // Mengambil jumlah kunjungan untuk Desa Preneur bulan ini
         $totalVisitsDesapreneur = Visit::where('desa_name', 'Desa Preneur')->count();
         
         // Menghitung total Preneur
         $totalPreneur = Preneur::count();
 
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
 
         // Mendapatkan nama desa dari URL, default ke 'Desa Preneur'
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

    // Method untuk menambahkan produk
    public function tambahPreneur()
    {
        return view('admin.adminpreneur.tambahpreneur');
    }

    public function simpanPreneur(Request $request)
    {
        // Validasi input form
        $validatedData = $request->validate([
            'kategori_produk' => 'required',
            'nama_produk' => 'required|string|max:255',
            'harga_produk' => 'required|numeric',
            'nomor_whatsapp' => 'required|string|max:15',
            'deskripsi' => 'required|string',
            'foto_card' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
            'foto_slider.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        // Proses upload foto_card
        $validatedData['foto_card'] = $request->file('foto_card')->store('uploads/preneur', 'public');

        // Proses upload foto_slider
        if ($request->hasFile('foto_slider')) {
            foreach ($request->file('foto_slider') as $foto) {
                $fotoSliderPaths[] = $foto->store('uploads/preneur', 'public');
            }
            $validatedData['foto_slider'] = json_encode($fotoSliderPaths);
        } else {
            $validatedData['foto_slider'] = json_encode([]);
        }

        // Simpan data ke database
        Preneur::create($validatedData);

        return redirect()->to('/kelolapreneur')->with('success', 'Produk dan varian berhasil ditambahkan');
    }
    

    
    public function kelolaPreneur()
    {
        $preneur = Preneur::all();
        return view('admin.adminpreneur.kelolapreneur', compact('preneur'));
    }

    public function editPreneur($id)
    {
        $preneur = Preneur::findOrFail($id);

        return view('admin.adminpreneur.editpreneur', compact('preneur'));
    }


    public function updatePreneur(Request $request, $id)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'nama_produk' => 'required|string|max:255',
            'harga_produk' => 'required|numeric',
            'kategori_produk' => 'required|string|max:255',
            'nomor_whatsapp' => 'required|string|max:15',
            'deskripsi' => 'nullable|string',
            'foto_card' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'foto_slider.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Temukan produk berdasarkan ID
        $preneur = Preneur::findOrFail($id);

        // Update foto card
        if ($request->hasFile('foto_card')) {
            if ($preneur->foto_card && Storage::disk('public')->exists($preneur->foto_card)) {
                Storage::disk('public')->delete($preneur->foto_card);
            }
            $fotoCardName = $request->file('foto_card')->store('uploads/preneur', 'public');
            $preneur->foto_card = $fotoCardName;
        }

        // Update foto slider
        $fotoSliderPaths = json_decode($preneur->foto_slider, true) ?? [];

        // Hapus foto slider yang dipilih
        if ($request->has('hapus_foto_slider') && is_array($request->hapus_foto_slider)) {
            foreach ($request->hapus_foto_slider as $hapusFoto) {
                if (($key = array_search($hapusFoto, $fotoSliderPaths)) !== false) {
                    if (Storage::disk('public')->exists($hapusFoto)) {
                        Storage::disk('public')->delete($hapusFoto);
                    }
                    unset($fotoSliderPaths[$key]);
                }
            }
        }

        // Tambahkan foto slider baru
        if ($request->hasFile('foto_slider')) {
            foreach ($request->file('foto_slider') as $foto) {
                $fotoName = $foto->store('uploads/preneur', 'public');
                $fotoSliderPaths[] = $fotoName;
            }
        }

        // Update data produk
        $preneur->update([
            'nama_produk' => $request->nama_produk,
            'harga_produk' => $request->harga_produk,
            'kategori_produk' => $request->kategori_produk,
            'nomor_whatsapp' => $request->nomor_whatsapp,
            'deskripsi' => $request->deskripsi,
            'foto_slider' => json_encode(array_values($fotoSliderPaths)),
        ]);

        return redirect()->to('/kelolapreneur')->with('success', 'Produk berhasil diperbarui');
    }

    

    public function hapusPreneur($id)
    {
        // Ambil data Preneur berdasarkan ID
        $preneur = Preneur::findOrFail($id);
        
        // Hapus foto card jika ada
        if ($preneur->foto_card && Storage::disk('public')->exists($preneur->foto_card)) {
            Storage::disk('public')->delete($preneur->foto_card);
        }
        
        // Hapus semua foto slider
        $fotoSliderPaths = json_decode($preneur->foto_slider, true); // Decode menjadi array
    
        // Cek apakah $fotoSliderPaths adalah array yang valid
        if (is_array($fotoSliderPaths)) {
            foreach ($fotoSliderPaths as $foto) {
                if (Storage::disk('public')->exists($foto)) {
                    Storage::disk('public')->delete($foto);
                }
            }
        }
        
        // Hapus data produk dari database
        $preneur->delete();
        
        // Kembalikan dengan notifikasi sukses
        return redirect()->back()->with('success', 'Data produk beserta semua foto terkait berhasil dihapus');
    }
    

    public function transaksiPreneur()
    {
        return view('admin.adminpreneur.transaksipreneur');
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
        $homepageData = Homepage::where('desa_name', 'preneur')->first();

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
            $bannerImageName = $request->file('banner_image')->store('uploads/preneur', 'public');
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