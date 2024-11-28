<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Budaya;
use App\Models\AdminKalurahan;
use App\Models\Homepage;
use App\Models\Agenda;
use App\Models\Wisata;
use App\Models\Visit;
use App\Models\Feedback;

class PageController extends Controller
{

        public function index()
        {
           

            // Ambil data dari tabel `Homepage` dengan `desa_name` bernilai 'budaya'
            $homepageData = Homepage::where('desa_name', 'kalurahan')->first();


            // Ambil data untuk desa budaya
            $homepageData = Homepage::where('desa_name', 'budaya')->first();

            // Tentukan nilai default jika data tidak ada
            $gambar_banner = $homepageData->gambar_banner ?? 'uploads/default_banner.jpg';
            $deskripsi_index = $homepageData->deskripsi ?? 'Deskripsi default untuk Desa Budaya.';
            
            return view('beranda.index', compact('gambar_banner','deskripsi_index'));
        }
       
        public function desabudaya()
        {
            // Mengambil semua data budaya
            $budaya = Budaya::all();

            // Ambil data dari tabel `Homepage` dengan `desa_name` bernilai 'budaya'
            $homepageData = Homepage::where('desa_name', 'budaya')->first();

            // Pastikan data tersedia untuk view
            $gambar_banner = $homepageData->gambar_banner ?? 'uploads/default_banner.jpg'; // Path default jika gambar tidak ditemukan
            $gambar_welcome = $homepageData->gambar_welcome ?? 'uploads/default_welcome.jpg';
            $deskripsi_welcome = $homepageData->deskripsi ?? 'Deskripsi default untuk Desa Budaya.'; // Deskripsi default jika tidak ada data

            // Menyimpan kunjungan ke tabel visits
            Visit::create([
                'url' => url()->current(), // Mengambil URL yang diakses
                'desa_name' => 'Desa Budaya', // Nama desa
            ]);

            // Menghitung total kunjungan untuk Desa Budaya
            $totalVisitsDesaBudaya = Visit::where('desa_name', 'Desa Budaya')->count();

            // Mengirimkan data ke view
            return view('beranda.desabudaya', compact('budaya', 'gambar_banner', 'gambar_welcome', 'deskripsi_welcome', 'totalVisitsDesaBudaya'));
        }

        public function detail_budaya($id)
        {
            // Mengambil data budaya berdasarkan ID
            $budaya = Budaya::findOrFail($id);
            
            // Decode foto_slider menjadi array
            $budaya->foto_slider = json_decode($budaya->foto_slider, true);

            // Mengambil semua agenda untuk kalender
            $agenda = Agenda::all();

            // Ambil data dari tabel `Homepage` dengan `desa_name` bernilai 'wisata'
            $homepageData = Homepage::where('desa_name', 'wisata')->first();

            // Pastikan data tersedia untuk view
            $gambar_banner = $homepageData->gambar_banner ?? 'uploads/default_banner.jpg'; // Path default jika gambar tidak ditemukan

            // Langsung mengambil embed link Google Maps dan YouTube dari database
            $embed_youtube_link = $budaya->link_youtube;

            // Mengirim data ke tampilan
            return view('beranda.detail_budaya', compact('budaya', 'agenda', 'embed_youtube_link', 'homepageData', 'gambar_banner'));
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
             

            public function detail_wisata($id)
            {
                $wisata = Wisata::findOrFail($id); // Mengambil data wisata berdasarkan ID

                // Ambil data dari tabel `Homepage` dengan `desa_name` bernilai 'budaya'
                $homepageData = Homepage::where('desa_name', 'wisata')->first();

                 // Pastikan data tersedia untuk view
                $gambar_banner = $homepageData->gambar_banner ?? 'uploads/default_banner.jpg'; // Path default jika gambar tidak ditemukan

                return view('beranda.detail_wisata', compact('wisata','homepageData', 'gambar_banner'));
            }
            

            
    public function about()
    {
        return view('beranda.about'); // Mengarah ke resources/views/beranda/about.blade.php
    }
    

    public function contact()
    {
        return view('beranda.contact'); // Mengarah ke resources/views/beranda/contact.blade.php
    }

    public function simpanFeedback(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);
    
        Feedback::create([
            'message' => $request->message,
            'name' => $request->name,
            'email' => $request->email,
        ]);
    
        return redirect()->back()->with('success', 'Pesan Anda berhasil dikirim!');
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
