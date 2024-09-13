<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDesaPreneur extends Controller
{
    // Method untuk menampilkan halaman dashboard admin
    public function showDashboard()
    {
        return view('admin.adminpreneur.adminpreneur'); // Mengarahkan ke view 'admin.adminbudaya'
    }

    // Method lain bisa ditambahkan sesuai kebutuhan
}
