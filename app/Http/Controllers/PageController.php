<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Budaya;
use App\Models\AdminKalurahan;
use App\Models\Homepage;
use App\Models\KelolaHomepage;
use App\Models\Agenda;
use App\Models\Wisata;
use App\Models\Preneur;
use App\Models\Prima;
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
                
             public function detail_prima($id)
            {
                // Mengambil data produk berdasarkan ID yang ada di tabel prima
                $produk = Prima::findOrFail($id);
                // Periksa apakah foto_produk adalah JSON string atau array
                if (is_string($produk->foto_produk)) {
                    $foto_produk = json_decode($produk->foto_produk, true); // Decode JSON ke array
                } else {
                    $foto_produk = $produk->foto_produk; // Jika sudah berupa array, gunakan langsung
                }

                // Mengembalikan tampilan detail produk dengan data yang diambil
                return view('beranda.detail_prima', compact('produk', 'foto_produk'));
            }

            
            public function desaprima()
            {
                // Mengambil semua data budaya
                $prima = Prima::all();
            
                // Menyimpan kunjungan ke tabel visits
                Visit::create([
                    'url' => url()->current(), // Mengambil URL yang diakses
                    'desa_name' => 'Desa Prima', // Nama desa
                ]);
            
                // Menghitung total kunjungan untuk Desa Budaya
                $totalVisitsDesaPrima = Visit::where('desa_name', 'Desa Prima')->count();
            
                // Mengambil data makanan dan kerajinan
                $makanan = Prima::where('kategori_produk', 'makanan')->get();
                $kerajinan = Prima::where('kategori_produk', 'kerajinan')->get();
            
                // Mengirimkan semua data ke view
                return view('beranda.desaprima', compact('prima', 'totalVisitsDesaPrima', 'makanan', 'kerajinan'));
            }
           public function detail_preneur($id)
            {
                // Mengambil data produk berdasarkan ID yang ada di tabel prima
                $produk = Preneur::findOrFail($id);
                // Periksa apakah foto_produk adalah JSON string atau array
                if (is_string($produk->foto_produk)) {
                    $foto_produk = json_decode($produk->foto_produk, true); // Decode JSON ke array
                } else {
                    $foto_produk = $produk->foto_produk; // Jika sudah berupa array, gunakan langsung
                }

                // Mengembalikan tampilan detail produk dengan data yang diambil
                return view('beranda.detail_preneur', compact('produk', 'foto_produk'));
            }

            public function desapreneur()
            {
                // Mengambil semua data budaya
                $preneur = Preneur::all();
            
                // Menyimpan kunjungan ke tabel visits
                Visit::create([
                    'url' => url()->current(), // Mengambil URL yang diakses
                    'desa_name' => 'Desa Preneur', // Nama desa
                ]);
            
                // Menghitung total kunjungan untuk Desa Budaya
                $totalVisitsDesaPreneur = Visit::where('desa_name', 'Desa Preneur')->count();
            
                // Mengambil data makanan dan kerajinan
                $makanan = Preneur::where('kategori_produk', 'makanan')->get();
                $kerajinan = Preneur::where('kategori_produk', 'kerajinan')->get();
            
                // Mengirimkan semua data ke view
                return view('beranda.desapreneur', compact('preneur', 'totalVisitsDesaPreneur', 'makanan', 'kerajinan'));
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
                // Ambil data dari model KelolaHomepage untuk halaman Tentang Kami
                $homepageData = KelolaHomepage::where('nama_menu', 'tentang_kami')->first();
            
                // Pastikan data ditemukan
                if (!$homepageData) {
                    return back()->with('error', 'Data halaman Tentang Kami tidak ditemukan.');
                }
            
                // Ambil gambar banner
                $gambar_banner = $homepageData->banner_image;
            
                // Ambil slider images (json_decode untuk memastikan menjadi array)
                $sliderFotos = json_decode($homepageData->slider_images, true); // memastikan menjadi array
            
                // Pastikan sliderFotos adalah array
                if (!is_array($sliderFotos)) {
                    $sliderFotos = []; // Kalau bukan array, kita set sebagai array kosong
                }
            
                return view('beranda.about', [
                    'deskripsi' => $homepageData->deskripsi, // Kirimkan deskripsi
                    'gambar_banner' => $gambar_banner, // Kirimkan gambar banner
                    'sliderFotos' => $sliderFotos, // Kirimkan data slider images
                ]);
            }
            
                
            
               public function contact()
            {
                // Ambil data deskripsi dan gambar banner dari model KelolaHomepage untuk halaman Kontak
                $homepageData = KelolaHomepage::where('nama_menu', 'kontak')->first();
                $gambar_banner = $homepageData ? $homepageData->banner_image : null;
            
                // Mengirimkan data ke view
                return view('beranda.contact', [
                    'gambar_banner' => $gambar_banner,
                ]);
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
