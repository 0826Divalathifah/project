<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualController extends Controller
{
    // Method untuk menampilkan halaman dashboard penjual
    public function showDashboard()
    {
        return view('admin.penjual.penjual');
    }

    // Budaya
    public function kelolaBudaya()
    {
        return view('admin.penjual.budaya.kelolabudaya');
    }
    public function tambahBudaya()
    {
        return view('admin.penjual.budaya.tambahbudaya');
    }

    public function transaksiBudaya()
    {
        return view('admin.penjual.budaya.transaksibudaya');
    }

    public function laporanBudaya()
    {
        return view('admin.penjual.budaya.laporanbudaya');
    }

    // Preneur
    public function tambahPreneur()
    {
        return view('admin.penjual.preneur.tambahpreneur');
    }

    public function transaksiPreneur()
    {
        return view('admin.penjual.preneur.transaksipreneur');
    }

    public function laporanPreneur()
    {
        return view('admin.penjual.preneur.laporanpreneur');
    }
    public function kelolaPreneur()
    {
        return view('admin.penjual.preneur.kelolapreneur');
    }

    // Prima
        public function tambahPrima()
    {
        return view('admin.penjual.prima.tambahprima');
    }

    public function transaksiPrima()
    {
        return view('admin.penjual.prima.transaksiprima');
    }

    public function laporanPrima()
    {
        return view('admin.penjual.prima.laporanprima');
    }
    public function kelolaPrima()
    {
        return view('admin.penjual.prima.kelolaprima');
    }


    // Wisata
    public function tambahWisata()
    {
        return view('admin.penjual.wisata.tambahwisata');
    }

    public function transaksiWisata()
    {
        return view('admin.penjual.wisata.transaksiwisata');
    }

    public function laporanWisata()
    {
        return view('admin.penjual.wisata.laporanwisata');
    }
    public function kelolaWisata()
    {
        return view('admin.penjual.wisata.kelolawisata');
    }

    // Laporan Penjual
    public function laporanPenjual()
    {
        return view('admin.penjual.laporanpenjual');
    }
}
