<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prima;

class AdminKelurahanController extends Controller
{
    // Method untuk menampilkan halaman dashboard admin
    public function showDashboard()
    {
        return view('admin.adminkelurahan.adminkelurahan'); 
    }
    public function kelolahomepage()
    {
        return view('admin.adminkelurahan.kelolahomepage'); 
    }
    public function kelolaAdmin()
    {
        return view('admin.adminkelurahan.kelolaAdmin'); 
    }
 
    public function simpanAdmin(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:admins,username',
            'email' => 'required|string|email|max:255|unique:admins,email',
            'nomor_telepon' => 'required|string|max:20',
            'peran' => 'required|string',
            'password' => 'required|string|confirmed|min:6',
            'status_aktif' => 'required|boolean',
            'foto_profil' => 'nullable|image|max:2048',
        ]);

        $admin = new Admin();
        $admin->nama_lengkap = $request->nama_lengkap;
        $admin->username = $request->username;
        $admin->email = $request->email;
        $admin->nomor_telepon = $request->nomor_telepon;
        $admin->peran = $request->peran;
        $admin->password = Hash::make($request->password);
        $admin->alamat = $request->alamat;
        $admin->status_aktif = $request->status_aktif;

        if ($request->hasFile('foto_profil')) {
            $filename = time() . '.' . $request->foto_profil->getClientOriginalExtension();
            $request->foto_profil->move(public_path('uploads/foto_profil'), $filename);
            $admin->foto_profil = 'uploads/foto_profil/' . $filename;
        }

        $admin->save();

        return redirect()->route('admin.adminkelurahan.tambahAdmin.tambahAdmin')->with('success', 'Admin berhasil ditambahkan.');
    }

    public function kelolafeedback()
    {
        return view('admin.adminkelurahan.kelolafeedback'); 
    }
   
}
