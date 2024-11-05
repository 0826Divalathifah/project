<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preneur;

class AdminDesaPreneurController extends Controller
{
    // Method untuk menampilkan halaman dashboard admin
    public function showDashboard()
    {
        return view('admin.adminpreneur.adminpreneur'); 
    }

    // Method untuk menampilkan detail produk
    public function detailPreneur($id_produk)
    {
        // Mendapatkan produk beserta variannya
        $produk = Preneur::with('varian')->findOrFail($id_produk);

        // Pastikan produk ditemukan
        if (!$produk) {
            return redirect()->back()->withErrors('Produk tidak ditemukan.');
        }

        // Menampilkan view dengan produk dan variannya
        return view('admin.adminpreneur.detail_preneur', compact('produk'));
    }

    public function tambahPreneur()
    {
        return view('admin.adminpreneur.tambahpreneur');
    }

    public function simpanPreneur(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'kategori_produk' => 'required|string',
            'nama_produk' => 'required|string',
            'harga_produk' => 'required|numeric',
            'nomor_whatsapp' => 'required|numeric',
            'deskripsi' => 'required|string',
            'foto_card' => 'required|image|mimes:jpeg,png,jpg,gif',
            'foto_produk.*' => 'image|mimes:jpeg,png,jpg,gif'
        ]);

        // Simpan foto_card jika ada
        $fotoCardPath = null;
        if ($request->hasFile('foto_card')) {
            $fotoCardPath = $request->file('foto_card')->store('uploads/foto_card', 'public');
        }

        // Proses foto_produk (multiple images)
        $fotoPaths = [];
        if ($request->hasFile('foto_produk')) {
            foreach ($request->file('foto_produk') as $foto) {
                $path = $foto->store('uploads/foto_produk', 'public');
                $fotoPaths[] = $path;
            }
        }

        // Buat data baru dalam tabel Prima
        Preneur::create([
            'kategori_produk' => $request->kategori_produk,
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'harga_produk' => $request->harga_produk,
            'nomor_whatsapp' => $request->nomor_whatsapp,
            'foto_card' => $fotoCardPath,
            'foto_produk' => json_encode($fotoPaths),
        ]);

        return redirect()->route('admin.adminpreneur.kelolapreneur')->with('success', 'prima berhasil ditambahkan');
    }

    public function transaksiPreneur()
    {
        return view('admin.adminpreneur.transaksipreneur');
    }

    public function laporanPreneur()
    {
        return view('admin.adminpreneur.laporanpreneur');
    }

    public function kelolaPreneur()
    {
        $produks = Preneur::all(); // Ambil semua produk dari database
        return view('admin.adminpreneur.kelolapreneur', compact('produks'));
    }
    public function editPreneur($id)
    {
        $produk = Preneur::findOrFail($id); // Ambil produk berdasarkan ID
        return view('admin.adminpreneur.editpreneur', compact('produk')); // Tampilkan halaman edit
    }

    public function updatePreneur(Request $request, $id)
    {
        $produk = Preneur::findOrFail($id);

        // Validasi dan update data produk
        $produk->update($request->all());

        return redirect()->route('kelolaPreneur')->with('success', 'Produk berhasil diperbarui.');
    }

    public function hapusPreneur($id)
    {
        $produk = Preneur::findOrFail($id);
        $produk->delete(); // Hapus produk

        return redirect()->route('kelolaPreneur')->with('success', 'Produk berhasil dihapus.');
    }

    public function kelolaHomepage(Request $request)
    {
        // Validasi input
        $request->validate([
            'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Maksimal ukuran 2MB
        ]);

        // Menyimpan gambar banner
        if ($request->hasFile('banner_image')) {
            $file = $request->file('banner_image');
            $filename = time() . '.' . $file->getClientOriginalExtension(); // Membuat nama file unik
            $file->move(public_path('images/banner'), $filename); // Menyimpan file ke folder public/images/banner

            // Simpan nama file di database jika perlu
            // Misalnya, jika Anda memiliki model Banner dan tabel banners
            // Banner::create(['image' => $filename]);

            return redirect()->back()->with('success', 'Banner berhasil diubah!');
        }

        return redirect()->back()->with('error', 'Gagal mengubah banner!');
    }
}
