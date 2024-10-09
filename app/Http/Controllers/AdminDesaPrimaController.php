<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDesaPrimaController extends Controller
{
    // Method untuk menampilkan halaman dashboard admin
    public function showDashboard()
    {
        return view('admin.adminprima.adminprima'); 
    }
    public function tambahPrima()
    {
        return view('admin.adminprima.tambahprima');
    }

    public function transaksiPrima()
    {
        return view('admin.adminprima.transaksiprima');
    }

    public function laporanPrima()
    {
        return view('admin.adminprima.laporanprima');
    }
    public function kelolaPrima()
    {
        return view('admin.adminprima.kelolaprima');
    }


}
