<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Agenda;
use App\Models\Budaya;
use App\Models\Feedback;
use App\Models\Homepage;
use App\Models\KelolaHomepage;
use App\Models\Preneur;
use App\Models\Prima;
use App\Models\User;
use App\Models\Visit;
use App\Models\Wisata;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class AdminKalurahanController extends Controller
{
    // Method untuk menampilkan halaman dashboard admin
    public function showDashboard(Request $request)
    {
        // Total kunjungan keseluruhan untuk Setiap Desa 
        $totalVisitsDesaBudaya = Visit::where('desa_name', 'Desa Budaya')->count();
        $totalVisitsDesaPreneur = Visit::where('desa_name', 'Desa Preneur')->count();
        $totalVisitsDesaPrima = Visit::where('desa_name', 'Desa Prima')->count();
        $totalVisitsDesaWisata = Visit::where('desa_name', 'Desa Wisata')->count();

        // Total item untuk setiap kategori (Budaya, Preneur, Prima, Wisata)
        $totalBudaya = Budaya::count();
        $totalPreneur = Preneur::count();
        $totalPrima = Prima::count();
        $totalWisata = Wisata::count();

        // Daftar Setiap Desa
        $budaya = Budaya::all();
        $preneur = Preneur::all();
        $prima = Prima::all();
        $wisata = Wisata::all();

        // Ambil semua data admin dari database
        $admins = Admin::all();

        // Mendapatkan nama desa dari URL (misalnya: Desa Budaya, Desa Wisata)
        $desaName = $request->get('desa', 'total'); // Menggunakan 'total' untuk statistik keseluruhan

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
                $visitCount = Visit::where(function ($query) use ($desaName) {
                        if ($desaName !== 'total') {
                            $query->where('desa_name', $desaName);
                        }
                    })
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
                $visitCount = Visit::where(function ($query) use ($desaName) {
                        if ($desaName !== 'total') {
                            $query->where('desa_name', $desaName);
                        }
                    })
                    ->whereRaw('WEEK(created_at) = ?', [$week])
                    ->count();

                $data[] = $visitCount;
                $labels[] = 'Minggu ' . ($weeks->search($week) + 1);
            }
        } elseif ($filter === 'monthly') {
            // Contoh untuk filter bulanan
            $months = range(1, 12);

            foreach ($months as $month) {
                $visitCount = Visit::where(function ($query) use ($desaName) {
                        if ($desaName !== 'total') {
                            $query->where('desa_name', $desaName);
                        }
                    })
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
                $visitCount = Visit::where(function ($query) use ($desaName) {
                        if ($desaName !== 'total') {
                            $query->where('desa_name', $desaName);
                        }
                    })
                    ->whereYear('created_at', $year)
                    ->count();

                $data[] = $visitCount;
                $labels[] = $year;
            }
        }

        return view('admin.adminkalurahan.adminkalurahan', compact(
            'totalVisitsDesaBudaya',
            'totalVisitsDesaPreneur',
            'totalVisitsDesaPrima',
            'totalVisitsDesaWisata',
            'totalBudaya',
            'totalPreneur',
            'totalPrima',
            'totalWisata',
            'budaya',
            'preneur',
            'prima',
            'wisata',
            'admins',
            'desaName',
            'data',
            'labels',
            'filter'
        ));
    }


    public function kelolaAdmin()
    {
        // Ambil semua data admin dari database
        $admin = Admin::all(); 

        // Kirim data admin ke view
        return view('admin.adminkalurahan.kelolaadmin', compact('admins'));
    }
    
    public function tambahadmin()
    {
        return view('admin.adminkalurahan.tambahadmin'); // Menampilkan halaman tambah admin
    }
    
    public function simpanadmin(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admin,email', // Perbaikan nama tabel
            'role' => 'required|in:super_admin,admin_budaya,admin_preneur,admin_prima,admin_wisata',
            'password' => 'required|string|min:8|confirmed',
        ]);
    
        try {
            // Membuat admin baru berdasarkan role yang dipilih
            Admin::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password), // Meng-hash password
                'role' => $request->role,
            ]);
    
            // Redirect dengan pesan sukses setelah admin berhasil disimpan
            return redirect('/kelolaadmin')->with('success', 'Admin berhasil ditambahkan');
        } catch (\Exception $e) {
            // Menangani kesalahan tak terduga
            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan saat menambahkan admin.']);
        }
    }
    
    public function editAdmin($id)
    {
        $admin = Admin::findOrFail($id);
        return view('admin.adminkalurahan.editadmin', compact('admin'));
    }


    public function updateAdmin(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admin,email,' . $id, // Perbaikan nama tabel
            'role' => 'required|string',
            'password' => 'nullable|string|min:8|confirmed', // Password hanya wajib jika diubah
        ]);

        try {
            $admin = Admin::findOrFail($id);
            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->role = $request->role;

            // Jika password diisi, update password dengan hash baru
            if ($request->password) {
                $admin->password = Hash::make($request->password);
            }

            $admin->save();

            return redirect('/kelolaadmin')->with('success', 'Admin berhasil diperbarui');

        } catch (ModelNotFoundException $e) {
            return redirect()->back()->withErrors(['error' => 'Admin tidak ditemukan.']);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan saat memperbarui admin.']);
        }
    }

    // Menghapus Admin
     public function hapusAdmin($id)
    {
        // Cari dan hapus agenda berdasarkan ID
        Admin::findOrFail($id)->delete();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Admin berhasil dihapus.');
    }

    public function kelolafeedback()
    {
        $feedback = Feedback::all(); // Mengambil semua data dari tabel feedback
        return view('admin.adminkalurahan.kelolaFeedback', compact('feedback'));
    }
    
    public function simpanFeedback(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
        ]);
    
        Feedback::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);
    
        return response()->json(['success' => true, 'message' => 'Feedback berhasil disimpan.']);
    }
    
    public function respond($id, Request $request)
    {
        // Cari feedback berdasarkan ID
        $feedback = Feedback::find($id);
    
        if ($feedback) {
            // Update status is_responded menjadi true/false
            $feedback->is_responded = $request->is_responded;
            $feedback->save();
    
            return response()->json(['success' => true, 'message' => 'Feedback berhasil ditanggapi']);
        }
    
        return response()->json(['success' => false, 'message' => 'Feedback tidak ditemukan'], 404);
    }
    
    // Menghapus agenda
    public function hapusFeedback($id)
    {
        // Cari dan hapus agenda berdasarkan ID
        Feedback::findOrFail($id)->delete();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Feedback berhasil dihapus.');
    }   

     // Menampilkan halaman kelola homepage kalurahan
    public function kelolaHomepage()
    {
        $homepageData = Homepage::where('desa_name', 'kalurahan')->first();
        $tentangKamiData = KelolaHomepage::where('nama_menu', 'tentang_kami')->first();
        $kontakData = KelolaHomepage::where('nama_menu', 'kontak')->firstOrNew(['nama_menu' => 'kontak']);
        
        return view('admin.adminkalurahan.kelolahomepagekalurahan', compact('homepageData','tentangKamiData','kontakData'));
    }

   // Mengupdate banner dan deskripsi untuk homepage kalurahan
    public function updateHomepageKalurahan(Request $request)
    {
        // Validasi input
        $request->validate([
            'deskripsi_index' => 'required|string|max:500',
            'banner_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Ambil atau buat data homepage kalurahan
        $homepageData = Homepage::where('desa_name', 'kalurahan')->firstOrNew(['desa_name' => 'kalurahan']);

        // Mengelola upload gambar banner jika ada
        if ($request->hasFile('banner_image')) {
            // Hapus gambar banner lama jika ada
            if ($homepageData->gambar_banner && Storage::disk('public')->exists($homepageData->gambar_banner)) {
                Storage::disk('public')->delete($homepageData->gambar_banner);
            }

            // Simpan gambar banner baru ke folder 'uploads/kalurahan'
            $homepageData->gambar_banner = $request->file('banner_image')->store('uploads/kalurahan', 'public');
        }

        // Menyimpan deskripsi 
        $homepageData->deskripsi = $request->deskripsi_index;
        $homepageData->save();

        // Simpan perubahan ke dalam database
        $homepageData->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Homepage Kalurahan berhasil diperbarui');
    }


    public function updateHomepageTentangKami(Request $request)
    {
        // Validasi input
        $request->validate([
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:5048',
            'deskripsi' => 'required|string',
            'slider_images' => 'nullable|array',
            'slider_images.*' => 'image|mimes:jpeg,png,jpg,svg|max:5048',
            'hapus_foto_slider' => 'nullable|array',
            'hapus_foto_slider.*' => 'string',
        ]);

        // Ambil data tentang kami yang ada di database
        $tentangKamiData = KelolaHomepage::where('nama_menu', 'tentang_kami')->first();

        if (!$tentangKamiData) {
            return back()->withErrors(['error' => 'Data tidak ditemukan.']);
        }

        // Ambil gambar slider yang sudah ada
        $sliderImages = is_array($tentangKamiData->slider_images) 
                        ? $tentangKamiData->slider_images 
                        : json_decode($tentangKamiData->slider_images, true);

        // Hapus foto slider yang dipilih
        if ($request->has('hapus_foto_slider') && is_array($request->hapus_foto_slider)) {
            foreach ($request->hapus_foto_slider as $file) {
                if (in_array($file, $sliderImages)) {
                    // Hapus dari storage
                    if (Storage::disk('public')->exists($file)) {
                        Storage::disk('public')->delete($file);
                    }

                    // Hapus dari array sliderImages
                    $sliderImages = array_diff($sliderImages, [$file]);
                }
            }
        }

        // Tambahkan gambar slider baru jika ada
        if ($request->hasFile('slider_images')) {
            foreach ($request->file('slider_images') as $file) {
                $sliderPath = $file->store('uploads/slider', 'public');
                $sliderImages[] = $sliderPath; // Tambahkan ke array sliderImages
            }
        }

        // Simpan slider_images yang diperbarui ke database
        $tentangKamiData->slider_images = json_encode(array_values($sliderImages));

        // Update deskripsi
        $tentangKamiData->deskripsi = $request->deskripsi;

        // Upload banner jika ada
        if ($request->hasFile('banner_image')) {
            // Hapus gambar banner lama jika ada
            if ($tentangKamiData->banner_image && Storage::disk('public')->exists($tentangKamiData->banner_image)) {
                Storage::disk('public')->delete($tentangKamiData->banner_image);
            }
            // Simpan gambar banner baru
            $tentangKamiData->banner_image = $request->file('banner_image')->store('uploads/homepage', 'public');
        }

        $tentangKamiData->save();

        return redirect()->back()->with('success', 'Homepage Tentang Kami berhasil diperbarui.');
    }


    public function updateHomepageKontak(Request $request)
    {
        $request->validate([
            'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $kontakData = KelolaHomepage::where('nama_menu', 'kontak')->firstOrNew(['nama_menu' => 'kontak']);

        // Simpan banner image
        if ($request->hasFile('banner_image')) {
            $bannerPath = $request->file('banner_image')->store('uploads/homepage', 'public');
        }

        // Update data di database untuk Kontak
        KelolaHomepage::updateOrCreate(
            ['nama_menu' => 'kontak'],
            [
                'banner_image' => $bannerPath ?? null,
                'deskripsi' => null,
                'slider_images' => null,
            ]
        );

        return back()->with('success', 'Banner Kontak berhasil diperbarui.');
    }


}
