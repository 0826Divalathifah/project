<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDesaBudayaController extends Controller
{
    // Menampilkan daftar budaya
    public function showDashboard()
    {
        return view('admin.adminbudaya.adminbudaya');
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
    public function kelolaAgenda()
    {
        return view('admin.adminbudaya.kelolaagenda');
    }
    public function laporanBudaya()
    {
        return view('admin.adminbudaya.laporanbudaya');
    }
}
