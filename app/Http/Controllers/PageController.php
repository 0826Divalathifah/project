<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('beranda.index');
    }

            public function desabudaya()
            {
                return view('beranda.desabudaya'); 
            }
                public function detail_budaya()
                {
                    return view('beranda.detail_budaya'); 
                }
                
            public function desaprima()
            {
                return view('beranda.desaprima'); // Mengarah ke resources/views/beranda/shop.blade.php
            }
                public function detail_produk()
                {
                    return view('beranda.detail_produk'); // Mengarah ke resources/views/beranda/shop.blade.php
                }
            public function desapreneur()
            {
                return view('beranda.desapreneur'); // Mengarah ke resources/views/beranda/shop.blade.php
            }
            public function desawisata()
            {
                return view('beranda.desawisata'); // Mengarah ke resources/views/beranda/shop.blade.php
            }
                public function detail_wisata()
                {
                    return view('beranda.detail_wisata'); 
                }


    public function about()
    {
        return view('beranda.about'); // Mengarah ke resources/views/beranda/about.blade.php
    }
    

    public function contact()
    {
        return view('beranda.contact'); // Mengarah ke resources/views/beranda/contact.blade.php
    }

    public function elements()
    {
        return view('beranda.elements'); // Mengarah ke resources/views/beranda/contact.blade.php
    }

    public function transaksi()
    {
        return view('beranda.transaksi'); // Mengarah ke resources/views/beranda/contact.blade.php
    }

}
