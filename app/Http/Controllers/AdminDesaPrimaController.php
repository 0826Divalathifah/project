<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prima;
use App\Models\Homepage;
use App\Models\Visit;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminDesaPrimaController extends Controller
{
    // Method untuk menampilkan halaman dashboard admin
    public function showDashboard(Request $request)
    {
        // Mengambil semua data produk Desa Prima
        $prima = Prima::all();
    
        // Menghitung total produk
        $totalPrima = Prima::count(); // Menghitung jumlah produk
    
        // Data kunjungan
        $totalVisitsDesaPrima = Visit::getVisitCountByDesa('Desa Prima');
        $desaPrimaVisits = Visit::selectRaw('DATE(created_at) as date, COUNT(*) as total')
            ->where('desa_name', 'Desa Prima')
            ->whereDate('created_at', '>=', Carbon::now()->subDays(7))
            ->groupBy('date')
            ->orderBy('date')
            ->get();
    
        $dataDesa = [
            'prima' => [
                'date' => $desaPrimaVisits->pluck('date'),
                'total' => $desaPrimaVisits->pluck('total'),
            ],
        ];
         // Mengambil jumlah kunjungan untuk Desa Prima bulan ini
         $totalVisitsDesaprima = Visit::where('desa_name', 'Desa Prima')->count();
         
         // Menghitung total Prima
         $totalPrima = Prima::count();
 
         $desaPrimaVisits = Visit::selectRaw('DATE(created_at) as date, COUNT(*) as total')
         ->where('desa_name', 'Desa Prima')
         ->whereDate('created_at', '>=', Carbon::now()->subDays(7))
         ->groupBy('date')
         ->orderBy('date')
         ->get();
 
         // Mengubah data menjadi array untuk digunakan di chart
         $dataDesa = [
             'prima' => [
             'date' => $desaPrimaVisits->pluck('date'),
             'total' => $desaPrimaVisits->pluck('total')
             ],
         ];
 
         // Mendapatkan nama desa dari URL, default ke 'Desa Prima'
         $desaName = $request->get('desa', 'Desa Prima');
 
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
         return view('admin.adminprima.adminprima', compact(
             'totalVisitsDesaPrima',
             'totalPrima',
             'dataDesa',
             'desaName', 
             'prima',
             'data',
             'labels',
             'filter'
         ));
     }

    // Method untuk menambahkan produk
    public function tambahPrima()
    {
        return view('admin.adminprima.tambahprima');
    }

    public function simpanPrima(Request $request)
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
        $validatedData['foto_card'] = $request->file('foto_card')->store('uploads/prima', 'public');

        // Proses upload foto_slider
        if ($request->hasFile('foto_slider')) {
            foreach ($request->file('foto_slider') as $foto) {
                $fotoSliderPaths[] = $foto->store('uploads/prima', 'public');
            }
            $validatedData['foto_slider'] = json_encode($fotoSliderPaths);
        } else {
            $validatedData['foto_slider'] = json_encode([]);
        }

        // Simpan data ke database
        Prima::create($validatedData);

        return redirect()->to('/kelolaprima')->with('success', 'Produk dan varian berhasil ditambahkan');
    }
    

    
    public function kelolaPrima()
    {
        $prima = Prima::all();
        return view('admin.adminprima.kelolaprima', compact('prima'));
    }

    public function editPrima($id)
    {
        $prima = Prima::findOrFail($id);

        return view('admin.adminprima.editprima', compact('prima'));
    }


    public function updatePrima(Request $request, $id)
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
        $prima = Prima::findOrFail($id);

        // Update foto card
        if ($request->hasFile('foto_card')) {
            if ($prima->foto_card && Storage::disk('public')->exists($prima->foto_card)) {
                Storage::disk('public')->delete($prima->foto_card);
            }
            $fotoCardName = $request->file('foto_card')->store('uploads/prima', 'public');
            $prima->foto_card = $fotoCardName;
        }

        // Update foto slider
        $fotoSliderPaths = json_decode($prima->foto_slider, true) ?? [];

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
                $fotoName = $foto->store('uploads/prima', 'public');
                $fotoSliderPaths[] = $fotoName;
            }
        }

        // Update data produk
        $prima->update([
            'nama_produk' => $request->nama_produk,
            'harga_produk' => $request->harga_produk,
            'kategori_produk' => $request->kategori_produk,
            'nomor_whatsapp' => $request->nomor_whatsapp,
            'deskripsi' => $request->deskripsi,
            'foto_slider' => json_encode(array_values($fotoSliderPaths)),
        ]);

        return redirect()->to('/kelolaprima')->with('success', 'Produk berhasil diperbarui');
    }

    

    public function hapusPrima($id)
    {
        $prima = Prima::findOrFail($id);
    
        // Hapus foto card
        if ($prima->foto_card && Storage::disk('public')->exists($prima->foto_card)) {
            Storage::disk('public')->delete($prima->foto_card);
        }
    
         // Hapus semua foto slider
        $fotoSliderPaths = is_string($prima->foto_slider) ? json_decode($prima->foto_slider, true) : [];

        // Pastikan $fotoSliderPaths adalah array sebelum digunakan dalam foreach
        if (is_array($fotoSliderPaths)) {
            foreach ($fotoSliderPaths as $foto) {
                if (Storage::disk('public')->exists($foto)) {
                    Storage::disk('public')->delete($foto);
                }
            }
        }
        // Hapus data dari database
        $prima->delete();
    
        return redirect()->back()->with('success', 'Data produk beserta semua foto terkait berhasil dihapus');
    }

    public function transaksiPrima()
    {
        return view('admin.adminprima.transaksiprima');
    }

    public function kelolaHomepage()
    {
        $homepageData = Homepage::where('desa_name', 'prima')->first();
        return view('admin.adminprima.kelolahomepageprima', compact('homepageData'));
    }

    // Mengelola update banner gambar untuk homepage prima
    public function updateBannerPrima(Request $request)
    {
        // Ambil data homepage prima berdasarkan desa_name 'prima'
        $homepageData = Homepage::where('desa_name', 'prima')->first();

        // Jika data tidak ditemukan, buat data baru untuk desa prima
        if (!$homepageData) {
            $homepageData = new Homepage;
            $homepageData->desa_name = 'prima'; // Tentukan desa yang sedang diproses
        }

        // Mengelola upload gambar banner jika ada
        if ($request->hasFile('banner_image')) {
            // Hapus gambar lama jika ada
            if ($homepageData->gambar_banner && Storage::disk('public')->exists($homepageData->gambar_banner)) {
                Storage::disk('public')->delete($homepageData->gambar_banner);
            }

            // Simpan gambar baru ke folder 'uploads/prima'
            $bannerImageName = $request->file('banner_image')->store('uploads/prima', 'public');
            $homepageData->gambar_banner = $bannerImageName;
        }

        // Simpan perubahan ke dalam database
        $homepageData->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Banner Desa prima berhasil diperbarui');
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
        $laporan = new LaporanPrima();
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

    public function laporanPrima()
    {
        $laporanPrima = LaporanPrima::all();
        return view('admin.adminprima.laporanprima', compact('laporanPrima'));
    }
}