<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminKelurahan extends Controller
{
    // Method untuk menampilkan halaman dashboard admin
    public function showDashboard()
    {
        return view('admin.adminkelurahan.adminkelurahan'); 
    }

    // Method lain bisa ditambahkan sesuai kebutuhan
}
