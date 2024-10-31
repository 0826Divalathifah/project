<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Budaya;
use App\Models\Agenda;


class PageController extends Controller
{
    public function index()
    {
        return view('beranda.index');
    }

            // Menampilkan halaman Desa Budaya
            public function desabudaya()
            {
                $budaya = Budaya::all(); // Mengambil semua data budaya
                return view('beranda.desabudaya', compact('budaya'));
            }

            public function detail_budaya($id)
            {
                // Mengambil data budaya berdasarkan ID
                $budaya = Budaya::findOrFail($id);
                
                // Pastikan foto_slider didecode menjadi array
                $budaya->foto_slider = json_decode($budaya->foto_slider, true);
        
                // Mengambil semua agenda untuk ditampilkan pada kalender
                $agenda = Agenda::all();
        
                // Konversi link Google Maps menjadi format embed
                $link_google_maps = $budaya->link_google_maps;
                $embed_map_link = $link_google_maps;
                if ($link_google_maps) {
                    if (strpos($link_google_maps, 'embed') === false) {
                        $urlParts = parse_url($link_google_maps);
                        if (isset($urlParts['query'])) {
                            parse_str($urlParts['query'], $queryParams);
                            if (isset($queryParams['q'])) {
                                $query = urlencode($queryParams['q']);
                                $embed_map_link = "https://www.google.com/maps/embed?pb=" . $query;
                            }
                        }
                    }
                }
        
                // Konversi YouTube link menjadi format embed
                $link_youtube = $budaya->link_youtube;
                $embed_youtube_link = '';
                if ($link_youtube) {
                    if (preg_match('/^https:\/\/www\.youtube\.com\/watch\?v=([^&]+)/', $link_youtube, $matches)) {
                        $embed_youtube_link = 'https://www.youtube.com/embed/' . $matches[1];
                    }
                }
        
                // Mengirim data budaya, agenda, embed link Google Maps dan YouTube ke tampilan
                return view('beranda.detail_budaya', compact('budaya', 'agenda', 'embed_map_link', 'embed_youtube_link'));
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
