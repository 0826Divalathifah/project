<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDesaBudayaController extends Controller
{
    // Menampilkan daftar budaya
    public function daftarBudaya()
    {
        return view('admin.adminbudaya.daftarbudaya');
    }
    public function kelolaBudaya()
    {
        return view('admin.adminbudaya.kelolabudaya');
    }
    public function tambahBudaya()
    {
        return view('admin.adminbudaya.tambahbudaya');
    }

    public function kelolaHomepage()
    {
        return view('admin.adminbudaya.kelolahomepage');
    }

    public function laporanBudaya()
    {
        return view('admin.adminbudaya.laporanbudaya');
    }
}
