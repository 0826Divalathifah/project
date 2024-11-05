<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Budaya;
use App\Models\Preneur;
use App\Models\Prima;
use App\Models\HomepageBudaya;
use App\Models\Agenda;
use App\Models\Wisata;


class PageController extends Controller
{

    public function index()
    {
        // Ambil data pertama dari `HomepageBudaya`
        $homepageData = HomepageBudaya::first();

        // Periksa apakah data ditemukan
        if ($homepageData) {
            // Jika ditemukan, ambil gambar_banner dari database
            $gambar_banner = $homepageData->gambar_banner;
        } else {
            // Jika tidak ada, beri nilai default
            $gambar_banner = 'uploads/default_banner.jpg';
        }

        return view('beranda.index', compact('gambar_banner'));
    }
        
                
    public function desabudaya()
    {
        // Mengambil semua data budaya
        $budaya = Budaya::all();

        // Ambil data pertama dari `HomepageBudaya`
        $homepageData = HomepageBudaya::first();

        // Periksa apakah data ditemukan
        if ($homepageData) {
            // Jika ditemukan, ambil deskripsi_welcome dari database
            $deskripsi_welcome = $homepageData->deskripsi_welcome;
        } else {
            // Jika tidak ada, beri nilai default
            $deskripsi_welcome = 'Deskripsi default untuk Desa Budaya.'; // Nilai default
        }

        return view('beranda.desabudaya', compact('budaya', 'deskripsi_welcome')); // Kirim kedua variabel ke view
    }


            public function detail_budaya($id)
            {
                // Mengambil data budaya berdasarkan ID
                $budaya = Budaya::findOrFail($id);
                
                // Pastikan foto_slider didecode menjadi array
                $budaya->foto_slider = json_decode($budaya->foto_slider, true);

                // Mengambil semua agenda untuk ditampilkan pada kalender
                $agenda = Agenda::all();

                // Mengambil data dari tabel HomepageBudaya
                $homepageData = HomepageBudaya::first();

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

                // Mengirim data budaya, agenda, homepageData, embed link Google Maps dan YouTube ke tampilan
                return view('beranda.detail_budaya', compact('budaya', 'agenda', 'embed_map_link', 'embed_youtube_link', 'homepageData'));
            }
                
            public function detail_prima($id) 
            {
                $produk = Prima::where('id_produk', $id)->firstOrFail();
                return view('beranda.detail_prima', compact('produk'));
            }
            
            public function desaprima()
            {
                $makanan = Prima::where('kategori_produk', 'makanan')->get();
                $kerajinan = Prima::where('kategori_produk', 'kerajinan')->get();
        
                return view('beranda.desaprima', compact('makanan', 'kerajinan'));
            }
            

            public function detail_preneur($id)
            {
                $produk = Preneur::with('varians')->findOrFail($id);
                return view('beranda.detail_preneur', compact('produk'));
            }
            public function desapreneur()
            {
                $makanan = Preneur::where('kategori_produk', 'makanan')->get();
                $kerajinan = Preneur::where('kategori_produk', 'kerajinan')->get();
        
                return view('beranda.desapreneur', compact('makanan', 'kerajinan'));
            }
            

            public function desawisata()
            {
                // Mengambil semua data wisata dari database
                $wisata = Wisata::all();
                
                // Mengirim data wisata ke view
                return view('beranda.desawisata', compact('wisata')); 
            }
            public function detail_wisata($id)
            {
                $wisata = Wisata::findOrFail($id); // Mengambil data wisata berdasarkan ID
                return view('beranda.detail_wisata', compact('wisata')); // Meneruskan data ke view
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
