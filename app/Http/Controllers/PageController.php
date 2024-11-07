<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Budaya;
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
            
            // Decode foto_slider menjadi array
            $budaya->foto_slider = json_decode($budaya->foto_slider, true);

            // Mengambil semua agenda untuk kalender
            $agenda = Agenda::all();

            // Mengambil data dari tabel HomepageBudaya
            $homepageData = HomepageBudaya::first();

            // Langsung mengambil embed link Google Maps dan YouTube dari database
            $embed_map_link = $budaya->link_google_maps;
            $embed_youtube_link = $budaya->link_youtube;

            // Mengirim data ke tampilan
            return view('beranda.detail_budaya', compact('budaya', 'agenda', 'embed_map_link', 'embed_youtube_link', 'homepageData'));
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
