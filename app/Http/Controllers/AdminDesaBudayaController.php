<?php

namespace App\Http\Controllers;

use App\Models\Budaya;
use App\Models\Agenda;
use App\Models\Homepage;
use App\Models\Visit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class AdminDesaBudayaController extends Controller
{

    public function showDashboard(Request $request)
    {
        // Total budaya di database
        $totalBudaya = Budaya::count(); // Menghitung jumlah budaya

        // Total agenda di database
        $totalAgenda = Agenda::count(); // Menghitung jumlah agenda

        // Total kunjungan keseluruhan untuk Desa Budaya
        $totalVisitsDesaBudaya = Visit::where('desa_name', 'Desa Budaya')->count(); // Menghitung jumlah kunjungan

        // Agenda yang akan datang
        $agendaComing = Agenda::where('tanggal_acara', '>=', Carbon::now()) // Mengambil agenda yang tanggal acara-nya lebih besar dari atau sama dengan sekarang
            ->orderBy('tanggal_acara', 'asc')
            ->get();

        // Data agenda per bulan (untuk chart agenda bulanan)
        $month = $request->input('month'); // Ambil bulan dari query string
        $year = $request->input('year', date('Y')); // Ambil tahun, default ke tahun sekarang

        // Data agenda berdasarkan filter bulan dan tahun
        $agendaQuery = Agenda::query();

        if ($month) {
            $agendaQuery->whereMonth('created_at', $month);
        }

        if ($year) {
            $agendaQuery->whereYear('created_at', $year);
        }

        $agendaPerMonth = $agendaQuery->selectRaw('MONTH(created_at) as month, COUNT(*) as total_agenda')
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $agendaLabels = $agendaPerMonth->pluck('month')->map(fn($m) => Carbon::create()->month($m)->format('F'));
        $agendaTotals = $agendaPerMonth->pluck('total_agenda');

        // Daftar budaya
        $budaya = Budaya::all(); // Mengambil semua data budaya (tidak digunakan langsung untuk total)

        // Mendapatkan nama desa dari URL, default ke 'Desa Budaya'
        $desaName = $request->get('desa', 'Desa Budaya');

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
        return view('admin.adminbudaya.adminbudaya', compact(
            'totalBudaya',
            'totalAgenda',
            'totalVisitsDesaBudaya',
            'agendaComing', // Agenda yang akan datang
            'agendaLabels',
            'agendaTotals',
            'year',
            'month',
            'budaya', // Data budaya jika diperlukan untuk ditampilkan
            'desaName', 
            'data',
            'labels',
            'filter'
        ));
    }


    public function kelolaBudaya()
    {
        $budaya = Budaya::all(); // Ambil semua data budaya
        return view('admin.adminbudaya.kelolabudaya', compact('budaya'));
    }

    // Menambahkan budaya
    public function tambahBudaya()
    {
        return view('admin.adminbudaya.tambahbudaya');
    }

    public function simpanBudaya(Request $request)
    {
        // Validasi input form
        $validatedData = $request->validate([
            'nama_budaya' => 'required|string|max:255',
            'nama_desa_budaya' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'harga_min' => 'nullable|numeric',
            'harga_max' => 'nullable|numeric',
            'link_youtube' => 'nullable|url|max:255',
            'nomor_whatsapp' => 'required|string|max:15',
            'deskripsi' => 'required|string',
            'foto_card' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
            'foto_slider.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        // Konversi link YouTube ke format embed jika ada
        $link_youtube = $request->input('link_youtube');
        if ($link_youtube) {
            if (preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/', $link_youtube, $matches)) {
                $validatedData['link_youtube'] = 'https://www.youtube.com/embed/' . $matches[1];
            }
        }

        // Proses upload foto_card
        $validatedData['foto_card'] = $request->file('foto_card')->store('uploads/budaya', 'public');

        // Proses upload foto_slider
        if ($request->hasFile('foto_slider')) {
            foreach ($request->file('foto_slider') as $foto) {
                $fotoSliderPaths[] = $foto->store('uploads/budaya', 'public');
            }
            $validatedData['foto_slider'] = json_encode($fotoSliderPaths);
        } else {
            $validatedData['foto_slider'] = json_encode([]);
        }

        // Simpan data ke database
        Budaya::create($validatedData);

        return redirect()->to('/kelolabudaya')->with('success', 'Data budaya berhasil ditambahkan');
    }


    // Menampilkan form edit budaya
    public function editBudaya($id)
    {
        $budaya = Budaya::findOrFail($id); 
        return view('admin.adminbudaya.editbudaya', compact('budaya'));
    }   

    // Memperbarui budaya
    public function updateBudaya(Request $request, $id)
    {
        // Validasi input form
        $validator = Validator::make($request->all(), [
            'nama_budaya' => 'required|string|max:255',
            'nama_desa_budaya' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'harga_min' => 'nullable|numeric',
            'harga_max' => 'nullable|numeric',
            'link_youtube' => 'nullable|url|max:255',
            'nomor_whatsapp' => 'required|string|max:15',
            'deskripsi' => 'required|string',
            'foto_card' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'foto_slider.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $budaya = Budaya::findOrFail($id);

        // Update foto card
        if ($request->hasFile('foto_card')) {
            if ($budaya->foto_card && Storage::disk('public')->exists($budaya->foto_card)) {
                Storage::disk('public')->delete($budaya->foto_card);
            }
            $fotoCardName = $request->file('foto_card')->store('uploads/budaya', 'public');
            $budaya->foto_card = $fotoCardName;
        }

        // Update foto slider
        $fotoSliderPaths = json_decode($budaya->foto_slider, true) ?? [];

        // Hapus foto slider yang diinginkan
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
                $fotoName = $foto->store('uploads/budaya', 'public');
                $fotoSliderPaths[] = $fotoName;
            }
        }

        // Konversi link YouTube ke format embed jika tersedia
        $link_youtube = $request->input('link_youtube');
        if ($link_youtube) {
            if (preg_match('/(?:https?:\/\/)?(?:www\.)?youtube\.com\/watch\?v=([a-zA-Z0-9_-]+)/', $link_youtube, $matches)) {
                $link_youtube = 'https://www.youtube.com/embed/' . $matches[1];
            } elseif (preg_match('/(?:https?:\/\/)?(?:www\.)?youtu\.be\/([a-zA-Z0-9_-]+)/', $link_youtube, $matches)) {
                $link_youtube = 'https://www.youtube.com/embed/' . $matches[1];
            }
        }

    // Update data di database
    $budaya->update([
        'nama_budaya' => $request->nama_budaya,
        'nama_desa_budaya' => $request->nama_desa_budaya,
        'alamat' => $request->alamat,
        'harga_min' => $request->harga_min,
        'harga_max' => $request->harga_max,
        'link_youtube' => $link_youtube,
        'nomor_whatsapp' => $request->nomor_whatsapp,
        'deskripsi' => $request->deskripsi,
        'foto_slider' => json_encode(array_values($fotoSliderPaths)),
    ]);

    return redirect()->to('/kelolabudaya')->with('success', 'Data budaya berhasil diperbarui');
}


    // Menghapus budaya
    public function hapusBudaya($id)
    {
        $budaya = Budaya::findOrFail($id);

        // Hapus foto card
        if ($budaya->foto_card && Storage::disk('public')->exists($budaya->foto_card)) {
            Storage::disk('public')->delete($budaya->foto_card);
        }

        // Hapus semua foto slider
        $fotoSliderPaths = json_decode($budaya->foto_slider, true) ?? [];
        foreach ($fotoSliderPaths as $foto) {
            if (Storage::disk('public')->exists($foto)) {
                Storage::disk('public')->delete($foto);
            }
        }

        $budaya->delete();

        return redirect()->back()->with('success', 'Data budaya beserta semua foto terkait berhasil dihapus');
    }


     // Mengelola agenda
     public function kelolaAgenda()
     {
         $agendaList = Agenda::all(); // Mengambil semua agenda dari database
         return view('admin.adminbudaya.kelolaagenda', compact('agendaList'));
     }
 
     // Menyimpan agenda
     public function simpanAgenda(Request $request)
     {
         $validator = Validator::make($request->all(), [
             'nama_acara' => 'required|string|max:255',
             'tanggal_acara' => 'required|date',
             'deskripsi_acara' => 'required|string',
             'alamat' => 'nullable|string|max:255',
         ]);
 
         if ($validator->fails()) {
             return redirect()->back()->withErrors($validator)->withInput();
         }
 
         // Simpan data agenda ke database
         Agenda::create([
             'nama_acara' => $request->nama_acara,
             'tanggal_acara' => $request->tanggal_acara,
             'deskripsi_acara' => $request->deskripsi_acara,
             'alamat' => $request->alamat,
         ]);
 
         return redirect()->to('/kelolaagenda')->with('success', 'Agenda berhasil ditambahkan');
     }
 
     // Menampilkan form edit agenda
     public function editAgenda($id)
     {
         $agenda = Agenda::findOrFail($id); // Mencari agenda berdasarkan ID
         return view('admin.adminbudaya.editagenda', compact('agenda')); // Menampilkan view edit dengan data agenda
     }
 
     // Memperbarui agenda
     public function updateAgenda(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_acara' => 'required|string|max:255',
            'tanggal_acara' => 'required|date',
            'deskripsi_acara' => 'required|string',
            'alamat' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $agenda = Agenda::findOrFail($id);
        $agenda->update([
            'nama_acara' => $request->nama_acara,
            'tanggal_acara' => $request->tanggal_acara,
            'deskripsi_acara' => $request->deskripsi_acara,
            'alamat' => $request->alamat,
        ]);

        return redirect()->to('/kelolaagenda')->with('success', 'Agenda berhasil diperbarui');
    }
 
     // Menghapus agenda
     public function hapusAgenda($id)
    {
        // Cari dan hapus agenda berdasarkan ID
        Agenda::findOrFail($id)->delete();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Agenda berhasil dihapus.');
    }

         
    // Menampilkan halaman kelola homepage budaya
    public function kelolaHomepage()
    {
        $homepageData = Homepage::where('desa_name', 'budaya')->first();
        return view('admin.adminbudaya.kelolahomepagebudaya', compact('homepageData'));
    }

    // Mengupdate banner gambar untuk homepage budaya
    public function updateBannerBudaya(Request $request)
    {
        // Ambil data homepage budaya berdasarkan desa_name 'budaya'
        $homepageData = Homepage::where('desa_name', 'budaya')->first();

        // Jika data tidak ditemukan, buat data baru untuk desa budaya
        if (!$homepageData) {
            $homepageData = new Homepage;
            $homepageData->desa_name = 'budaya'; // Tentukan desa yang sedang diproses
        }

        // Mengelola upload gambar banner jika ada
        if ($request->hasFile('banner_image')) {
            // Hapus gambar lama jika ada
            if ($homepageData->gambar_banner && Storage::disk('public')->exists($homepageData->gambar_banner)) {
                Storage::disk('public')->delete($homepageData->gambar_banner);
            }

            // Simpan gambar baru ke folder 'uploads/budaya'
            $bannerImageName = $request->file('banner_image')->store('uploads/budaya', 'public');
            $homepageData->gambar_banner = $bannerImageName;
        }

        // Simpan perubahan ke dalam database
        $homepageData->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Banner Desa Budaya berhasil diperbarui');
    }

    // Mengupdate card welcome untuk homepage budaya
    public function updateWelcomeCard(Request $request)
    {
        // Validasi input
        $request->validate([
            'deskripsi_welcome' => 'required|string|max:500',
            'gambar_welcome' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Ambil atau buat data homepage budaya
        $homepageData = Homepage::where('desa_name', 'budaya')->firstOrNew(['desa_name' => 'budaya']);

        // Mengelola upload gambar welcome jika ada
        if ($request->hasFile('gambar_welcome')) {
            // Hapus gambar lama jika ada
            if ($homepageData->gambar_welcome && Storage::disk('public')->exists($homepageData->gambar_welcome)) {
                Storage::disk('public')->delete($homepageData->gambar_welcome);
            }

            // Simpan gambar baru ke folder 'uploads/budaya'
            $homepageData->gambar_welcome = $request->file('gambar_welcome')->store('uploads/budaya', 'public');
        }

        // Menyimpan deskripsi welcome
        $homepageData->deskripsi = $request->deskripsi_welcome;
        $homepageData->save();

        // Redirect kembali dengan data terbaru
        return redirect()->back()->with('success', 'Card Selamat Datang berhasil diperbarui');
    }
 
    
}
