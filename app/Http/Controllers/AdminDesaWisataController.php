<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;

class AdminDesaWisataController extends Controller
{
    // Method untuk menampilkan halaman dashboard admin
    public function showDashboard()
    {
        return view('admin.adminwisata.adminwisata'); 
    }
    // Tampilkan daftar wisata untuk dikelola
    public function kelolaWisata()
    {
        $wisata = Wisata::all();
        return view('admin.adminwisata.kelolawisata', compact('wisata'));
    }
    
    // Tampilkan form tambah wisata
    public function tambahWisata()
    {
        return view('admin.adminwisata.tambahwisata');
    }

    public function simpanWisata(Request $request)
    {
        // Validasi input form
        $validatedData = $request->validate([
            'nama_wisata' => 'required|string|max:100',
            'waktu_kunjung' => 'required|array',
            'alamat' => 'nullable|string|max:255',
            'harga_masuk' => 'nullable|numeric',
            'deskripsi' => 'nullable|string',
            'foto_card' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
            'foto_wisata.*' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
        ]);
    
        // Proses upload foto_card
        if ($request->hasFile('foto_card')) {
            $validatedData['foto_card'] = $request->file('foto_card')->store('uploads/wisata', 'public');
        }
    
        // Proses upload foto_wisata
        $fotoWisataPaths = [];
        if ($request->hasFile('foto_wisata')) {
            foreach ($request->file('foto_wisata') as $file) {
                $fotoWisataPaths[] = $file->store('uploads/wisata', 'public');
            }
        }


        $validatedData['foto_wisata'] = json_encode($fotoWisataPaths);
    
        // Simpan data ke database
        Wisata::create($validatedData);

        return redirect()->to('/kelolawisata')->with('success', 'Wisata berhasil ditambahkan!');
    }       
    
    // Tampilkan form edit wisata
    public function editWisata($id)
    {
        $wisata = Wisata::findOrFail($id);
        return view('admin.adminwisata.editwisata', compact('wisata'));
    }

    // Proses memperbarui atau update wisata
    public function updateWisata(Request $request, $id)
    {
        $wisata = Wisata::findOrFail($id);
        
        // Validasi input form
        $validatedData = $request->validate([
            'nama_wisata' => 'required|string|max:100',
            'waktu_kunjung' => 'nullable|string|max:50',
            'alamat' => 'nullable|string|max:255',
            'harga_masuk' => 'nullable|numeric',
            'deskripsi' => 'nullable|string',
            'foto_card' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
            'foto_wisata' => 'nullable|array',
            'foto_wisata.*' => 'image|mimes:jpeg,png,jpg|max:5120',
        ]);

        // Proses upload ulang foto_card jika ada
        if ($request->hasFile('foto_card')) {
            // Hapus foto card lama jika ada
            if ($wisata->foto_card && Storage::disk('public')->exists($wisata->foto_card)) {
                Storage::disk('public')->delete($wisata->foto_card);
            }
            $fotoCardPath = $request->file('foto_card')->store('wisata/foto_card', 'public');
            $wisata->foto_card = $fotoCardPath;
        }

        // Proses upload ulang foto_wisata jika ada
        if ($request->hasFile('foto_wisata')) {
            $fotoWisataPaths = [];

            // Hapus foto wisata lama jika ada
            $existingFotoWisata = json_decode($wisata->foto_wisata, true) ?? [];
            foreach ($existingFotoWisata as $foto) {
                if (Storage::disk('public')->exists($foto)) {
                    Storage::disk('public')->delete($foto);
                }
            }

            foreach ($request->file('foto_wisata') as $file) {
                $fotoWisataPaths[] = $file->store('wisata/foto_wisata', 'public');
            }
            $wisata->foto_wisata = json_encode($fotoWisataPaths);
        }

        // Update data wisata
        $wisata->update($validatedData);
    
         return redirect()->to('/kelolawisata')->with('success', 'Wisata berhasil diperbarui!');

    }

        // Hapus wisata
        public function deleteWisata($id)
        {
            $wisata = Wisata::findOrFail($id);
            
            // Hapus foto card jika ada
            if ($wisata->foto_card && Storage::disk('public')->exists($wisata->foto_card)) {
                Storage::disk('public')->delete($wisata->foto_card);
            }

            // Hapus semua foto wisata
            $fotoWisataPaths = json_decode($wisata->foto_wisata, true) ?? [];
            foreach ($fotoWisataPaths as $foto) {
                if (Storage::disk('public')->exists($foto)) {
                    Storage::disk('public')->delete($foto);
                }
            }

            // Hapus data wisata
            $wisata->delete();
            
            return redirect()->to('/kelolawisata')->with('success', 'Wisata berhasil dihapus!');
            
        }
}
