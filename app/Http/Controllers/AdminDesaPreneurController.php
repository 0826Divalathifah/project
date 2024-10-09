<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDesaPreneurController extends Controller
{
    // Method untuk menampilkan halaman dashboard admin
    public function showDashboard()
    {
        return view('admin.adminpreneur.adminpreneur'); 
    }
    public function tambahPreneur()
    {
        return view('admin.adminpreneur.tambahpreneur');
    }

    public function transaksiPreneur()
    {
        return view('admin.adminpreneur.transaksipreneur');
    }

    public function laporanPreneur()
    {
        return view('admin.adminpreneur.laporanpreneur');
    }
    public function kelolaPreneur()
    {
        return view('admin.adminpreneur.kelolapreneur');
    }

}
