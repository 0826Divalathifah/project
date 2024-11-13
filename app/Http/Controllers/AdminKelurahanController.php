<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminKelurahan;
use App\Models\Feedback;
use Illuminate\Support\Facades\Hash;

class AdminKelurahanController extends Controller
{
    public function kelolaAdmin()
    {
        // Menampilkan daftar admin
        $admins = AdminKelurahan::all();
        return view('admin.adminkelurahan.kelolaAdmin', compact('admins'));
    }

    public function showDashboard()
    {
        return view('admin.adminkelurahan.adminkelurahan'); // pastikan file 'dashboard.blade.php' ada di dalam folder yang benar
    }


    public function tambahadmin()
    {
        return view('admin.adminkelurahan.tambahadmin'); // Menampilkan halaman tambah admin
    }
        public function simpanAdmin(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:admin_kelurahan,username',
            'email' => 'required|string|email|max:255|unique:admin_kelurahan,email',
            'nomor_telepon' => 'required|string|max:20',
            'peran' => 'required|string',
            'password' => 'required|string|confirmed|min:6',
            'alamat' => 'nullable|string|max:255',
        ]);

        $admin = new AdminKelurahan();
        $admin->username = $request->username;
        $admin->email = $request->email;
        $admin->nomor_telepon = $request->nomor_telepon;
        $admin->peran = $request->peran;
        $admin->password = bcrypt($request->password); // Gunakan bcrypt untuk hashing password
        $admin->alamat = $request->alamat;
        $admin->save();


        return redirect()->back()->with('success', 'Admin berhasil ditambahkan.');
    }

     // Menampilkan halaman kelola feedback
     public function kelolafeedback()
     {
         $feedback = AdminKelurahan::all();
         return view('admin.adminkelurahan.kelolaFeedback', compact('feedback'));
     }
 
     // Menyimpan feedback dari form "Kesan dan Pesan"
     public function simpanFeedback(Request $request)
{
    $request->validate([
        'nama_pengguna' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'pesan' => 'required|string',
    ]);

    Feedback::create([
        'nama_pengguna' => $request->name,
        'email' => $request->email,
        'pesan' => $request->message,
        'status_baca' => 0, // Set default status sebagai belum dibaca
    ]);

    return redirect()->back()->with('success', 'Feedback berhasil dikirim.');
}

 
     // Hapus feedback
     public function hapusFeedback($id)
     {
         Feedback::destroy($id);
         return redirect()->back()->with('success', 'Feedback berhasil dihapus.');
     }


    
}
