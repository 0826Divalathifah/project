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
    public function chartjs()
    {
        return view('admin.adminkelurahan.charts.chartjs'); // Mengarah ke resources/views/beranda/shop.blade.php
    }
    public function basic_elements()
    {
        return view('admin.adminkelurahan.forms.basic_elements'); // Mengarah ke resources/views/beranda/shop.blade.php
    }
    // Method lain bisa ditambahkan sesuai kebutuhan
}
