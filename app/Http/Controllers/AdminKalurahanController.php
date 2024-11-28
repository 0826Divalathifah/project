<?php

namespace App\Http\Controllers;

use App\Models\AdminKalurahan;
use Illuminate\Support\Facades\Hash; 
use App\Models\Admin;
use App\Models\User;
use App\Models\Homepage;
use App\Models\Feedback;
use Illuminate\Http\Request;

class AdminKalurahanController extends Controller
{
    // Method untuk menampilkan halaman dashboard admin
    public function showDashboard()
    {
        return view('admin.adminkalurahan.adminkalurahan'); 
    }

    public function kelolaAdmin()
    {
        // Ambil semua data admin dari database
        $admins = Admin::all(); // Anda bisa menambahkan filter jika perlu

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

    public function kelolafeedback()
    {
        $feedback = Feedback::all(); // Mengambil semua data dari tabel feedback
        return view('admin.adminkalurahan.kelolaFeedback', compact('feedback'));
    }
    
    public function simpanFeedback(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);
    
        Feedback::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);
    
        return redirect('/kelolafeedback')->with('success', 'Pesan berhasil disimpan!');
    }
    
    

    public function hapusAdmin($id)
    {
        // Cari admin berdasarkan ID
        $admin = Admin::find($id);

        // Hapus admin
        $admin->delete();

        // Redirect dengan pesan sukses
        return redirect('/kelolaadmin')->with('success', 'Admin berhasil dihapus!');
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
            'deskripsi_index' => 'nullable|string|max:500',
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
        if ($request->filled('deskripsi_index')) {
            $homepageData->deskripsi = $request->deskripsi_index;
        }

        // Simpan perubahan ke dalam database
        $homepageData->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Homepage Kalurahan berhasil diperbarui');
    }










    public function charts()
    {
        return view('admin.adminkalurahan.charts.chartjs'); 
    }
    public function forms()
    {
        return view('admin.adminkalurahan.forms.basic_elements'); 
    }
    public function tables()
    {
        return view('admin.adminkalurahan.tables.basic-table'); 
    }
    public function icons()
    {
        return view('admin.adminkalurahan.icons.mdi'); 
    }
    public function samples1()
    {
        return view('admin.adminkalurahan.samples.error-404'); 
    }
    public function samples2()
    {
        return view('admin.adminkalurahan.samples.error-500'); 
    }
    public function docs()
    {
        return view('admin.adminkalurahan.docs.documentation'); 
    }
    public function uifeatures1()
    {
        return view('admin.adminkalurahan.ui-features.buttons'); 
    }
    public function uifeatures2()
    {
        return view('admin.adminkalurahan.ui-features.dropdowns'); 
    }
    public function uifeatures3()
    {
        return view('admin.adminkalurahn.ui-features.typography'); 
    }
}
