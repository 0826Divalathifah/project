<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDesaBudayaController extends Controller
{
    // Menampilkan daftar budaya
    public function daftarBudaya()
    {
        return view('admin.adminbudaya.daftarbudaya');
    }
    public function kelolaBudaya()
    {
        return view('admin.adminbudaya.kelolabudaya');
    }
    public function tambahBudaya()
    {
        return view('admin.adminbudaya.tambahbudaya');
    }
    public function simpanBudaya(Request $request)
    {
        // Validasi input form
        $validator = Validator::make($request->all(), [
            'kategori' => 'required|string|max:255',
            'nama_budaya' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'youtube_link' => 'nullable|string|max:255',
            'whatsapp_number' => 'required|string|max:15',
            'maps_link' => 'nullable|string|max:255',
            'deskripsi' => 'required|string',
            'foto_card' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi untuk foto card
            'foto_kebudayaan.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi untuk foto kebudayaan (bisa lebih dari satu)
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Upload foto card
        $fotoCardName = time().'_card.'.$request->foto_card->extension();
        $request->foto_card->move(public_path('uploads/budaya'), $fotoCardName);

        // Upload foto kebudayaan
        $fotoKebudayaanNames = [];
        if ($request->hasFile('foto_kebudayaan')) {
            foreach ($request->file('foto_kebudayaan') as $foto) {
                $fotoName = time().'_'.$foto->getClientOriginalName();
                $foto->move(public_path('uploads/budaya'), $fotoName);
                $fotoKebudayaanNames[] = $fotoName;
            }
        }

        // Simpan data ke database
        Budaya::create([
            'kategori' => $request->kategori,
            'nama_budaya' => $request->nama_budaya,
            'alamat' => $request->alamat,
            'harga' => $request->harga,
            'youtube_link' => $request->youtube_link,
            'whatsapp_number' => $request->whatsapp_number,
            'maps_link' => $request->maps_link,
            'deskripsi' => $request->deskripsi,
            'foto_card' => $fotoCardName,
            'foto_kebudayaan' => json_encode($fotoKebudayaanNames),
        ]);

        return redirect()->back()->with('success', 'Data budaya berhasil ditambahkan');
    }

    public function kelolaHomepage()
    {
        return view('admin.adminbudaya.kelolahomepage');
    }

    public function laporanBudaya()
    {
        return view('admin.adminbudaya.laporanbudaya');
    }
}
