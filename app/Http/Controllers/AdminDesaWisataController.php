<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDesaWisataController extends Controller
{
    // Method untuk menampilkan halaman dashboard admin
    public function showDashboard()
    {
        return view('admin.adminwisata.adminwisata'); 
    }
    public function tambahWisata()
    {
        return view('admin.adminwisata.tambahwisata');
    }

    public function transaksiWisata()
    {
        return view('admin.adminwisata.transaksiwisata');
    }

    public function laporanWisata()
    {
        return view('admin.adminwisata.laporanwisata');
    }
    public function kelolaWisata()
    {
        return view('admin.adminwisata.kelolawisata');
    }

}
