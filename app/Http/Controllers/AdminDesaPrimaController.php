<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prima;

class AdminDesaPrimaController extends Controller
{
    // Method untuk menampilkan halaman dashboard admin
    public function showDashboard()
    {
        return view('admin.adminprima.adminprima'); 
    }

    // Method untuk menampilkan detail produk
    public function detailPrima($id_produk)
    {
        // Mendapatkan produk beserta variannya
        $produk = Prima::with('varian')->findOrFail($id_produk);

        // Pastikan produk ditemukan
        if (!$produk) {
            return redirect()->back()->withErrors('Produk tidak ditemukan.');
        }

        // Menampilkan view dengan produk dan variannya
        return view('admin.adminprima.detail_prima', compact('produk'));
    }

    public function tambahPrima()
    {
        return view('admin.adminprima.tambahprima');
    }

    public function simpanPrima(Request $request)
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
        Prima::create([
            'kategori_produk' => $request->kategori_produk,
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'harga_produk' => $request->harga_produk,
            'nomor_whatsapp' => $request->nomor_whatsapp,
            'foto_card' => $fotoCardPath,
            'foto_produk' => json_encode($fotoPaths),
        ]);

        return redirect()->route('admin.adminprima.kelolaprima')->with('success', 'prima berhasil ditambahkan');
    }

    public function transaksiPrima()
    {
        return view('admin.adminprima.transaksiprima');
    }

    public function laporanPrima()
    {
        return view('admin.adminprima.laporanprima');
    }

    public function kelolaPrima()
    {
        $produks = Prima::all(); // Ambil semua produk dari database
        return view('admin.adminprima.kelolaprima', compact('produks'));
    }
    public function editPrima($id)
    {
        $produk = Prima::findOrFail($id); // Ambil produk berdasarkan ID
        return view('admin.adminprima.editprima', compact('produk')); // Tampilkan halaman edit
    }

    public function updatePrima(Request $request, $id)
    {
        // Validasi data
        $validatedData = $request->validate([
            'kategori_produk' => 'required|string',
            'nama_produk' => 'required|string',
            'harga_produk' => 'required|numeric',
            'nomor_whatsapp' => 'required|numeric',
            'deskripsi' => 'required|string',
            'foto_card' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'foto_produk.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Temukan produk berdasarkan ID
        $produk = Prima::findOrFail($id);

        // Jika ada file foto_card yang diunggah, simpan file baru dan update path-nya
        if ($request->hasFile('foto_card')) {
            $fotoCardPath = $request->file('foto_card')->store('foto_card', 'public');
            $validatedData['foto_card'] = $fotoCardPath;
        }

        // Jika ada file foto_produk yang diunggah, simpan file baru dan update path-nya
        if ($request->hasFile('foto_produk')) {
            $fotoProdukPaths = [];
            foreach ($request->file('foto_produk') as $file) {
                $fotoProdukPaths[] = $file->store('foto_produk', 'public');
            }
            $validatedData['foto_produk'] = json_encode($fotoProdukPaths); // Menyimpan dalam format JSON
        }

        // Update data produk dengan data yang sudah divalidasi
        $produk->update($validatedData);

        // Redirect ke halaman kelola produk dengan pesan sukses
        return redirect()->route('kelolaprima')->with('success', 'Produk berhasil diperbarui.');
    }
    public function hapusPrima($id)
    {
        $produk = Prima::findOrFail($id);
        $produk->delete(); // Hapus produk

        return redirect()->route('kelolaPrima')->with('success', 'Produk berhasil dihapus.');
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
