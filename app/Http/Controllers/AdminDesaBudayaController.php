<?php

namespace App\Http\Controllers;

use App\Models\Budaya;
use App\Models\Agenda; // Pastikan untuk menggunakan model Agenda
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminDesaBudayaController extends Controller
{
    // Menampilkan dashboard
    public function showDashboard()
    {
        return view('admin.adminbudaya.adminbudaya');
    }

    // Mengelola budaya
    public function kelolaBudaya()
    {
        return view('admin.adminbudaya.kelolabudaya');
    }

    // Menambahkan budaya
    public function tambahBudaya()
    {
        return view('admin.adminbudaya.tambahbudaya');
    }

    // Menyimpan budaya
    public function simpanBudaya(Request $request)
    {
        // Validasi input form
        $validator = Validator::make($request->all(), [
            'nama_budaya' => 'required|string|max:255',
            'nama_desa_budaya' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'harga_min' => 'required|numeric',
            'harga_max' => 'required|numeric',
            'link_youtube' => 'nullable|string|max:255',
            'nomor_whatsapp' => 'required|string|max:15',
            'link_google_maps' => 'nullable|string|max:255',
            'deskripsi' => 'required|string',
            'foto_card' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'foto_slider.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Upload foto card
        $fotoCardName = time() . '_card.' . $request->foto_card->extension();
        $request->foto_card->move(public_path('uploads/budaya'), $fotoCardName);

        // Upload foto slider
        $fotoSliderNames = [];
        if ($request->hasFile('foto_slider')) {
            foreach ($request->file('foto_slider') as $foto) {
                $fotoName = time() . '_' . $foto->getClientOriginalName();
                $foto->move(public_path('uploads/budaya'), $fotoName);
                $fotoSliderNames[] = $fotoName;
            }
        }

        // Konversi array foto slider menjadi JSON
        $fotoSliderJson = json_encode($fotoSliderNames);

        // Simpan data ke database
        Budaya::create([
            'nama_budaya' => $request->nama_budaya,
            'nama_desa_budaya' => $request->nama_desa_budaya,
            'alamat' => $request->alamat,
            'harga_min' => $request->harga_min,
            'harga_max' => $request->harga_max,
            'link_youtube' => $request->link_youtube,
            'nomor_whatsapp' => $request->nomor_whatsapp,
            'link_google_maps' => $request->link_google_maps,
            'deskripsi' => $request->deskripsi,
            'foto_card' => $fotoCardName,
            'foto_slider' => $fotoSliderJson,
        ]);

        return redirect()->back()->with('success', 'Data budaya berhasil ditambahkan');
    }

    // Mengelola homepage budaya
    public function kelolaHomepage()
    {
        return view('admin.adminbudaya.kelolahomepagebudaya');
    }

    // Mengelola agenda
    public function kelolaAgenda()
    {
        $agendaList = Agenda::all(); // Mengambil semua agenda dari database
        return view('admin.adminbudaya.kelolaagenda', compact('agendaList'));
    }

    // Menyimpan agenda
    public function simpanAgenda(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_acara' => 'required|string|max:255',
            'tanggal_acara' => 'required|date',
            'deskripsi_acara' => 'required|string',
            'alamat' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Simpan data agenda ke database
        Agenda::create([
            'nama_acara' => $request->nama_acara,
            'tanggal_acara' => $request->tanggal_acara,
            'deskripsi_acara' => $request->deskripsi_acara,
            'alamat' => $request->alamat,
        ]);

        return redirect()->back()->with('success', 'Agenda berhasil ditambahkan');
    }

    // Menampilkan form edit agenda
    public function editAgenda($id)
    {
        $agenda = Agenda::findOrFail($id); // Mencari agenda berdasarkan ID
        return view('admin.adminbudaya.editagenda', compact('agenda')); // Menampilkan view edit dengan data agenda
    }

    // Memperbarui agenda
    public function updateAgenda(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_acara' => 'required|string|max:255',
            'tanggal_acara' => 'required|date',
            'deskripsi_acara' => 'required|string',
            'alamat' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $agenda = Agenda::findOrFail($id);
        $agenda->update([
            'nama_acara' => $request->nama_acara,
            'tanggal_acara' => $request->tanggal_acara,
            'deskripsi_acara' => $request->deskripsi_acara,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('kelola.agenda')->with('success', 'Agenda berhasil diperbarui');
    }

    // Menghapus agenda
    public function deleteAgenda($id)
    {
        $agenda = Agenda::findOrFail($id);
        $agenda->delete();

        return redirect()->route('kelola.agenda')->with('success', 'Agenda berhasil dihapus');
    }

    public function laporanBudaya()
    {
        return view('admin.adminbudaya.laporanbudaya');
    }
}
