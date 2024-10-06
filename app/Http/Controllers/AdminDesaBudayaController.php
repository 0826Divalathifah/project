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

    // Menampilkan form tambah budaya
    public function createBudaya()
    {
        return view('admin.adminbudaya.tambahbudaya');
    }

    // Menyimpan budaya baru
    public function storeBudaya(Request $request)
    {
        $request->validate([
            'nama_budaya' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric',
        ]);

        // Logika penyimpanan data ke database

        return redirect()->route('admin.budaya.daftar')->with('success', 'Budaya berhasil ditambahkan.');
    }

    // Menampilkan form edit budaya
    public function editBudaya($id)
    {
        return view('admin.adminbudaya.editbudaya', compact('id'));
    }

    // Mengupdate budaya
    public function updateBudaya(Request $request, $id)
    {
        $request->validate([
            'nama_budaya' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric',
        ]);

        // Logika update budaya

        return redirect()->route('admin.budaya.daftar')->with('success', 'Budaya berhasil diperbarui.');
    }

 
    public function deleteBudaya($id)
    {

        return redirect()->route('admin.budaya.daftar')->with('success', 'Budaya berhasil dihapus.');
    }
}
