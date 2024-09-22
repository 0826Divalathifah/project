<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Penjual extends Controller
{
    // Method untuk menampilkan halaman dashboard admin
    public function showDashboard()
    {
        return view('admin.penjual.penjual'); 
    }
    public function tambahbudaya()
    {
        return view('admin.penjual.budaya.tambahbudaya'); 
    }
    public function transaksibudaya()
    {
        return view('admin.penjual.budaya.transaksibudaya'); 
    }
    public function laporanbudaya()
    {
        return view('admin.penjual.budaya.laporanbudaya'); 
    }
    public function tambahpreneur()
    {
        return view('admin.penjual.preneur.tambahpreneur'); 
    }
    public function transaksipreneur()
    {
        return view('admin.penjual.preneur.transaksipreneur'); 
    }
    public function laporanpreneur()
    {
        return view('admin.penjual.preneur.laporanpreneur'); 
    }
    public function tambahprimer()
    {
        return view('admin.penjual.primer.tambahprimer'); 
    }
    public function transaksiprimer()
    {
        return view('admin.penjual.primer.transaksiprimer'); 
    }
    public function laporanprimer()
    {
        return view('admin.penjual.primer.laporanprimer'); 
    }
    public function tambahwisata()
    {
        return view('admin.penjual.wisata.tambahwisata'); 
    }
    public function transaksiwisata()
    {
        return view('admin.penjual.wisata.transaksiwisata'); 
    }
    public function laporanwisata()
    {
        return view('admin.penjual.wisata.laporanwisata'); 
    }
    public function laporanpenjual()
    {
        return view('admin.penjual.laporanpenjual'); 
    }
}
