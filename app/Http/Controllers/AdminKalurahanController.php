<?php

namespace App\Http\Controllers;

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
        $users = User::all();

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
            'users',
            'desaName',
            'data',
            'labels',
            'filter'
        ));
    }


    public function kelolaAdmin()
    {
        // Ambil semua data admin dari database
        $users = User::all(); 

        // Kirim data admin ke view
        return view('admin.adminkalurahan.kelolaadmin', compact('users'));
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
            User::create([
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
        $users = User::findOrFail($id);
        return view('admin.adminkalurahan.editadmin', compact('users'));
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
            $users = User::findOrFail($id);
            $users->name = $request->name;
            $users->email = $request->email;
            $users->role = $request->role;

            // Jika password diisi, update password dengan hash baru
            if ($request->password) {
                $users->password = Hash::make($request->password);
            }

            $users->save();

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
        User::findOrFail($id)->delete();

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
    
        return redirect('/kelolafeedback')->with('success', 'Pesan berhasil disimpan!');
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
        
        return view('admin.adminkalurahan.kelolahomepagekalurahan', compact('homepageData'));
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
            $request->validate([
                'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'deskripsi_index' => 'required|string',
                'slider_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            // Simpan banner image
            if ($request->hasFile('banner_image')) {
                $bannerPath = $request->file('banner_image')->store('uploads/homepage', 'public');
            } else {
                $bannerPath = $request->input('existing_banner');
            }

            // Simpan slider images
            $sliderPaths = [];
            if ($request->hasFile('slider_images')) {
                foreach ($request->file('slider_images') as $image) {
                    $sliderPaths[] = $image->store('uploads/homepage', 'public');
                }
            }

            // Update data di database untuk Tentang Kami
            KelolaHomepage::updateOrCreate(
                ['nama_menu' => 'tentang_kami'],
                [
                    'banner_image' => $bannerPath ?? null,
                    'deskripsi' => $request->deskripsi_index,
                    'slider_images' => $sliderPaths ? json_encode($sliderPaths) : null,
                ]
            );

            return back()->with('success', 'Halaman Tentang Kami berhasil diperbarui.');
    }

    public function updateHomepageKontak(Request $request)
    {
        $request->validate([
            'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

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
