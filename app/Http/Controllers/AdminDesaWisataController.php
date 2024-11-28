<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use App\Models\Wisata;
use App\Models\Homepage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminDesaWisataController extends Controller
{
    public function showDashboard(Request $request)
    {
        // Mengambil semua data wisata
        $wisata = Wisata::all();

        // Total kunjungan keseluruhan untuk Desa Budaya
        $totalVisitsDesaWisata = Visit::where('desa_name', 'Desa Wisata')->count(); // Menghitung jumlah kunjungan
        
        // Menghitung total wisata
        $totalWisata = Wisata::count();

        // Mendapatkan nama desa dari URL, default ke 'Desa Wisata'
        $desaName = $request->get('desa', 'Desa Wisata');

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
        return view('admin.adminwisata.adminwisata', compact(
            'totalVisitsDesaWisata',
            'totalWisata',
            'desaName', 
            'wisata',
            'data',
            'labels',
            'filter'
        ));
    }



    // Tampilkan daftar wisata untuk dikelola
    public function kelolaWisata()
    {
        $wisata = Wisata::all();
        return view('admin.adminwisata.kelolawisata', compact('wisata'));
    }
    
    // Tampilkan form tambah wisata
    public function tambahWisata()
    {
        return view('admin.adminwisata.tambahwisata');
    }

    public function simpanWisata(Request $request)
    {
        // Validasi input form
        $validatedData = $request->validate([
            'nama_wisata' => 'required|string|max:100',
            'hari' => 'required|array',
            'jam_buka' => 'required|array',
            'jam_tutup' => 'required|array',
            'alamat' => 'nullable|string|max:255',
            'harga_masuk' => 'nullable|numeric',
            'deskripsi' => 'nullable|string',
            'foto_card' => 'required|image|mimes:jpeg,png,jpg|max:5120',
            'brosur' => 'required|image|mimes:jpeg,png,jpg|max:5120',
            'foto_wisata.*' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
        ]);

    
        // Gabungkan hari, jam buka, dan jam tutup dalam satu array
        $jadwalKunjungan = [];
        foreach ($request->hari as $index => $hari) {
            $jadwalKunjungan[] = [
                'hari' => $hari,
                'jam_buka' => $request->jam_buka[$index],
                'jam_tutup' => $request->jam_tutup[$index],
            ];
        }
        $validatedData['waktu_kunjung'] = json_encode($jadwalKunjungan);
    
        // Proses upload foto_card
        if ($request->hasFile('foto_card')) {
        $validatedData['foto_card'] = $request->file('foto_card')->store('uploads/wisata', 'public');
        }

        // Proses upload brosur
        if ($request->hasFile('brosur')) {
        $validatedData['brosur'] = $request->file('brosur')->store('uploads/wisata', 'public');
        }

        // Proses upload foto_wisata
        $fotoWisataPaths = [];
        if ($request->hasFile('foto_wisata')) {
            foreach ($request->file('foto_wisata') as $file) {
                $fotoWisataPaths[] = $file->store('uploads/wisata', 'public');
            }
        }
        $validatedData['foto_wisata'] = json_encode($fotoWisataPaths);
    
        // Simpan data ke database
        Wisata::create($validatedData);
    
        return redirect()->to('/kelolawisata')->with('success', 'Wisata berhasil ditambahkan!');
    }         
    
    // Tampilkan form edit wisata
    public function editWisata($id)
    {
        $wisata = Wisata::findOrFail($id);
        return view('admin.adminwisata.editwisata', compact('wisata'));
    }

    public function updateWisata(Request $request, $id)
    {
        // Validasi input form
        $validator = Validator::make($request->all(), [
            'nama_wisata' => 'required|string|max:100',
            'hari' => 'nullable|array',
            'jam_buka' => 'nullable|array',
            'jam_tutup' => 'nullable|array',
            'alamat' => 'nullable|string|max:255',
            'harga_masuk' => 'nullable|numeric',
            'waktu_kunjung' => 'nullable|string', // Sesuaikan di sini
            'deskripsi' => 'nullable|string',
            'foto_card' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
            'brosur' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
            'foto_wisata' => 'nullable|array',
            'foto_wisata.*' => 'image|mimes:jpeg,png,jpg|max:5120',
        ]);
        
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $wisata = Wisata::findOrFail($id);
        

        // Update foto card
        if ($request->hasFile('foto_card')) {
            if ($wisata->foto_card && Storage::disk('public')->exists($wisata->foto_card)) {
                Storage::disk('public')->delete($wisata->foto_card);
            }
            $fotoCardPath = $request->file('foto_card')->store('uploads/wisata', 'public');
            $wisata->foto_card = $fotoCardPath;
        }

        // Update brosur
        if ($request->hasFile('brosur')) {
            if ($wisata->brosur && Storage::disk('public')->exists($wisata->brosur)) {
                Storage::disk('public')->delete($wisata->brosur);
            }
            $fotoCardPath = $request->file('brosur')->store('uploads/wisata', 'public');
            $wisata->brosur = $fotoCardPath;
        }
    
        // Update foto wisata
        $fotoWisataPaths = json_decode($wisata->foto_wisata, true) ?? [];
    
        // Hapus foto wisata lama yang ingin dihapus
        if ($request->has('hapus_foto_wisata') && is_array($request->hapus_foto_wisata)) {
            foreach ($request->hapus_foto_wisata as $hapusFoto) {
                if (($key = array_search($hapusFoto, $fotoWisataPaths)) !== false) {
                    if (Storage::disk('public')->exists($hapusFoto)) {
                        Storage::disk('public')->delete($hapusFoto);
                    }
                    unset($fotoWisataPaths[$key]);
                }
            }
        }
    
        // Tambahkan foto wisata baru
        if ($request->hasFile('foto_wisata')) {
            foreach ($request->file('foto_wisata') as $foto) {
                $fotoWisataPaths[] = $foto->store('uploads/wisata', 'public');
            }
        }
    
        // Logika untuk menyimpan waktu kunjungan
        $waktuKunjung = [];
        if ($request->has('hari') && $request->has('jam_buka') && $request->has('jam_tutup')) {
            $setiapHariDipilih = in_array('Setiap Hari', $request->hari);
    
            if ($setiapHariDipilih) {
                // Jika "Setiap Hari" dipilih, simpan hanya satu set jadwal
                $index = array_search('Setiap Hari', $request->hari);
                $waktuKunjung[] = [
                    'hari' => 'Setiap Hari',
                    'jam_buka' => $request->jam_buka[$index],
                    'jam_tutup' => $request->jam_tutup[$index],
                ];
            } else {
                // Jika "Setiap Hari" tidak dipilih, simpan setiap hari yang dipilih dengan jamnya
                foreach ($request->hari as $index => $hari) {
                    if (isset($request->jam_buka[$index]) && isset($request->jam_tutup[$index])) {
                        $waktuKunjung[] = [
                            'hari' => $hari,
                            'jam_buka' => $request->jam_buka[$index],
                            'jam_tutup' => $request->jam_tutup[$index],
                        ];
                    }
                }
            }
        }
    
        // Update data di database
        $wisata->update([
            'nama_wisata' => $request->nama_wisata,
            'alamat' => $request->alamat,
            'harga_masuk' => $request->harga_masuk,
            'deskripsi' => $request->deskripsi,
            'foto_card' => $wisata->foto_card,
            'brosur' => $wisata->brosur,
            'foto_wisata' => json_encode(array_values($fotoWisataPaths)),
            'waktu_kunjung' => json_encode($waktuKunjung),
        ]);
    
        return redirect()->back()->with('success', 'Wisata berhasil diperbarui!');
    }


    public function deleteWisata($id)
    {
        $wisata = Wisata::findOrFail($id); // Pastikan data ditemukan
    
        // Hapus foto card jika ada
        if ($wisata->foto_card && Storage::disk('public')->exists($wisata->foto_card)) {
            Storage::disk('public')->delete($wisata->foto_card);
        }

        // Hapus brosur jika ada
        if ($wisata->brosur && Storage::disk('public')->exists($wisata->brosur)) {
            Storage::disk('public')->delete($wisata->brosur);
        }
    
        // Hapus semua foto yang ada di kolom foto_wisata (json array)
        $fotoWisataPaths = json_decode($wisata->foto_wisata, true) ?? [];
        foreach ($fotoWisataPaths as $foto) {
            if (Storage::disk('public')->exists($foto)) {
                Storage::disk('public')->delete($foto);
            }
        }
    
        // Hapus data wisata dari database
        $wisata->delete();
    
        return redirect()->to('/kelolawisata')->with('success', 'Wisata beserta semua foto terkait berhasil dihapus');
    }

    public function kelolaHomepage()
    {
        $homepageData = Homepage::where('desa_name', 'wisata')->first();
        return view('admin.adminwisata.kelolahomepagewisata', compact('homepageData'));
    }

    // Mengelola update banner gambar untuk homepage wisata
    public function updateBannerWisata(Request $request)
    {
        // Ambil data homepage wisata berdasarkan desa_name 'wisata'
        $homepageData = Homepage::where('desa_name', 'wisata')->first();

        // Jika data tidak ditemukan, buat data baru untuk desa wisata
        if (!$homepageData) {
            $homepageData = new Homepage;
            $homepageData->desa_name = 'wisata'; // Tentukan desa yang sedang diproses
        }

        // Mengelola upload gambar banner jika ada
        if ($request->hasFile('banner_image')) {
            // Hapus gambar lama jika ada
            if ($homepageData->gambar_banner && Storage::disk('public')->exists($homepageData->gambar_banner)) {
                Storage::disk('public')->delete($homepageData->gambar_banner);
            }

            // Simpan gambar baru ke folder 'uploads/wisata'
            $bannerImageName = $request->file('banner_image')->store('uploads/wisata', 'public');
            $homepageData->gambar_banner = $bannerImageName;
        }

        // Simpan perubahan ke dalam database
        $homepageData->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Banner Desa Wisata berhasil diperbarui');
    }
    
}
