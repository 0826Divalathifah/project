<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDesaBudaya extends Controller
{
    // Method untuk menampilkan halaman dashboard admin
    public function showDashboard()
    {
        return view('admin.adminbudaya.adminbudaya'); // Mengarahkan ke view 'admin.adminbudaya'
    }

    // Method lain bisa ditambahkan sesuai kebutuhan
}
