<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Budaya;
use App\Models\AdminKalurahan;
use App\Models\Homepage;
use App\Models\KelolaHomepage;
use App\Models\AdminKalurahan;
use App\Models\Homepage;
use App\Models\KelolaHomepage;
use App\Models\Agenda;
use App\Models\Wisata;
use App\Models\Visit;
use App\Models\Preneur;
use App\Models\Prima;
use App\Models\Feedback;
use App\Models\Wisata;
use App\Models\Visit;
use App\Models\Preneur;
use App\Models\Prima;
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
            $deskripsi_index = $homepageData->deskripsi ?? 'Deskripsi default untuk Index.';
            
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
            return view('beranda.desabudaya', compact('budaya', 'gambar_banner', 'gambar_welcome', 'deskripsi_welcome', 'homepageData','totalVisitsDesaBudaya'));
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
            $homepageData = Homepage::where('desa_name', 'budaya')->first();

            // Pastikan data tersedia untuk view
            $gambar_banner = $homepageData->gambar_banner ?? 'uploads/default_banner.jpg'; // Path default jika gambar tidak ditemukan

            // Langsung mengambil embed link Google Maps dan YouTube dari database
            $embed_youtube_link = $budaya->link_youtube;

            // Mengirim data ke tampilan
            return view('beranda.detail_budaya', compact('budaya', 'agenda', 'embed_youtube_link', 'homepageData', 'gambar_banner'));
        } 

        public function desapreneur()
        {
            // Mengambil semua data budaya
            $preneur = Preneur::all();
            
            // Ambil data dari tabel `Homepage` dengan `desa_name` bernilai 'budaya'
            $homepageData = Homepage::where('desa_name', 'preneur')->first();
            $gambar_banner = $homepageData->gambar_banner ?? 'uploads/default_banner.jpg'; // Path default jika gambar tidak ditemukan

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
            return view('beranda.desapreneur', compact('preneur', 'gambar_banner', 'totalVisitsDesaPreneur', 'makanan', 'kerajinan'));
        }

        public function detail_preneur($id)
        {
            // Mengambil data produk berdasarkan ID yang ada di tabel preneur
            $preneur = Preneur::findOrFail($id);

            // Ambil data dari tabel `Homepage` dengan `desa_name` bernilai 'wisata'
            $homepageData = Homepage::where('desa_name', 'preneu')->first();
            $gambar_banner = $homepageData->gambar_banner ?? 'uploads/default_banner.jpg'; // Path default jika gambar tidak ditemukan

            // Decode foto_slider menjadi array
            $preneur->foto_slider = json_decode($preneur->foto_slider, true);

            // Mengembalikan tampilan detail produk dengan data yang diambil
            return view('beranda.detail_preneur', compact('preneur', 'gambar_banner'));
        }

        public function desaprima()
        {
            // Mengambil semua data budaya
            $prima = Prima::all();
            
            // Ambil data dari tabel `Homepage` dengan `desa_name` bernilai 'budaya'
            $homepageData = Homepage::where('desa_name', 'prima')->first();
            $gambar_banner = $homepageData->gambar_banner ?? 'uploads/default_banner.jpg'; // Path default jika gambar tidak ditemukan

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
            return view('beranda.desaprima', compact('prima', 'gambar_banner', 'totalVisitsDesaPrima', 'makanan', 'kerajinan'));
        }
                
        public function detail_prima($id)
        {
            // Mengambil data produk berdasarkan ID yang ada di tabel prima
            $prima = Prima::findOrFail($id);
            
            // Ambil data dari tabel `Homepage` dengan `desa_name` bernilai 'wisata'
            $homepageData = Homepage::where('desa_name', 'prima')->first();
            $gambar_banner = $homepageData->gambar_banner ?? 'uploads/default_banner.jpg'; // Path default jika gambar tidak ditemukan

            // Decode foto_slider menjadi array
            $prima->foto_slider = json_decode($prima->foto_slider, true);

            // Mengembalikan tampilan detail produk dengan data yang diambil
            return view('beranda.detail_prima', compact('prima' , 'gambar_banner'));
        }

        
             
        public function desawisata()
        {
                // Menyimpan kunjungan ke tabel visits
            Visit::create([
                'url' => url()->current(), // Mengambil URL yang diakses
                'desa_name' => 'Desa Wisata', // Nama desa
            ]);

            // Mengambil semua data wisata dari database
            $wisata = Wisata::all();
            
            // Mengambil jumlah kunjungan untuk Desa Wisata bulan ini
            $totalVisitsDesaWisata = Visit::where('desa_name', 'Desa Wisata')->count();

            // Mengirim data wisata dan jumlah kunjungan ke view
            return view('beranda.desawisata', compact('wisata', 'totalVisitsDesaWisata'));
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
        $tentangKamiData = KelolaHomepage::where('nama_menu', 'tentang_kami')->first();
        
        return view('beranda.about', [
            'tentangKamiData' => $tentangKamiData,
            'deskripsi' => $tentangKamiData->deskripsi ?? '',
            'banner_image' => $tentangKamiData->banner_image ?? '',
            'slider_images' => json_decode($tentangKamiData->slider_images, true) ?? [], // Decode JSON ke array
        ]);
    }


    

    public function contact()
    {
        // Ambil data deskripsi dan gambar banner dari model KelolaHomepage untuk halaman Kontak
        $kontakData = KelolaHomepage::where('nama_menu', 'kontak')->firstOrNew(['nama_menu' => 'kontak']);
    
        // Mengirimkan data ke view
        return view('beranda.contact', [
            'banner_image' => $banner_image,
        ]);
    }

    public function simpanFeedback(Request $request)
    {
        // Validasi input hanya jika `message` kosong
        $request->validate([
            'message' => 'required|string',
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
        ]);

        // Simpan ke database
        Feedback::create([
            'message' => $request->message,
            'name' => $request->name,
            'email' => $request->email,
        ]);
    
        return response()->json(['success' => true, 'message' => 'Feedback berhasil disimpan']);
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
