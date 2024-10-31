<?php

namespace App\Http\Controllers;

use App\Models\Budaya;
use App\Models\Agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminDesaBudayaController extends Controller
{
    // Menampilkan dashboard
    public function showDashboard()
    {
        return view('admin.adminbudaya.adminbudaya');
    }

    public function kelolaBudaya()
    {
        // Ambil semua data dari model Budaya
        $budaya = Budaya::all(); // Anda dapat menyesuaikan query ini sesuai kebutuhan

        // Kirim data ke view
        return view('admin.adminbudaya.kelolabudaya', compact('budaya'));
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
            'harga_min' => 'nullable|numeric',
            'harga_max' => 'nullable|numeric',
            'link_youtube' => 'nullable|url|max:255',
            'nomor_whatsapp' => 'required|string|max:15',
            'link_google_maps' => 'nullable|url|max:255',
            'deskripsi' => 'required|string',
            'foto_card' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
            'foto_slider.*' => 'image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Upload foto card
        $fotoCardName = time() . '_card.' . $request->foto_card->extension();
        $request->foto_card->move(public_path('uploads/budaya'), $fotoCardName);

        // Upload foto slider
        $fotoSliderPaths = [];
        if ($request->hasFile('foto_slider')) {
            foreach ($request->file('foto_slider') as $foto) {
                if ($foto instanceof \Illuminate\Http\UploadedFile) {
                    $fotoName = time() . '_' . $foto->getClientOriginalName();
                    $foto->move(public_path('uploads/budaya'), $fotoName);
                    $fotoSliderPaths[] = $fotoName;
                }
            }
        }

        // Konversi array foto slider menjadi JSON
        $fotoSliderJson = json_encode($fotoSliderNames);

        // Simpan data ke database
        $budaya = new Budaya();
        $budaya->nama_budaya = $request->nama_budaya;
        $budaya->nama_desa_budaya = $request->nama_desa_budaya;
        $budaya->alamat = $request->alamat;
        $budaya->harga_min = $request->harga_min;
        $budaya->harga_max = $request->harga_max;
        $budaya->link_youtube = $request->link_youtube;
        $budaya->nomor_whatsapp = $request->nomor_whatsapp;
        $budaya->link_google_maps = $request->link_google_maps;
        $budaya->deskripsi = $request->deskripsi;
        $budaya->foto_card = $fotoCardName;
        $budaya->foto_slider = json_encode($fotoSliderPaths);

        $budaya->save();

        return redirect()->back()->with('success', 'Data budaya berhasil ditambahkan');
    }

    // Menampilkan form edit budaya
    public function editBudaya($id)
    {
        $budaya = Budaya::findOrFail($id); // Ambil data budaya berdasarkan ID
        return view('admin.adminbudaya.editbudaya', compact('budaya')); // Kirim data ke view
    }
    
    // Memperbarui budaya
    public function updateBudaya(Request $request, $id)
    {
        // Validasi input form
        $validator = Validator::make($request->all(), [
            'nama_budaya' => 'required|string|max:255',
            'nama_desa_budaya' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'harga_min' => 'nullable|numeric',
            'harga_max' => 'nullable|numeric',
            'link_youtube' => 'nullable|url|max:255',
            'nomor_whatsapp' => 'required|string|max:15',
            'link_google_maps' => 'nullable|url|max:255',
            'deskripsi' => 'required|string',
            'foto_card' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'foto_slider.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $budaya = Budaya::findOrFail($id);

        // Hapus foto card jika opsi hapus dipilih
        if ($request->has('hapus_foto_card') && $budaya->foto_card) {
            if (file_exists(public_path('uploads/budaya/' . $budaya->foto_card))) {
                unlink(public_path('uploads/budaya/' . $budaya->foto_card));
            }
            $budaya->foto_card = null; 
        }


         // Update foto card jika ada file baru
            if ($request->hasFile('foto_card')) {
                // Hapus file lama
                if ($budaya->foto_card && file_exists(public_path('uploads/budaya/' . $budaya->foto_card))) {
                    unlink(public_path('uploads/budaya/' . $budaya->foto_card));
                }

        // Upload file baru
            $fotoCardName = time() . '_card.' . $request->foto_card->extension();
            $request->foto_card->move(public_path('uploads/budaya'), $fotoCardName);
            $budaya->foto_card = $fotoCardName;
            }

            // Proses foto slider
            $fotoSliderPaths = json_decode($budaya->foto_slider, true) ?? [];

            // Hapus foto slider yang dipilih
            if ($request->has('hapus_foto_slider')) {
                foreach ($request->hapus_foto_slider as $hapusFoto) {
                    if (($key = array_search($hapusFoto, $fotoSliderPaths)) !== false) {
                        if (file_exists(public_path('uploads/budaya/' . $hapusFoto))) {
                            unlink(public_path('uploads/budaya/' . $hapusFoto));
                        }
                        unset($fotoSliderPaths[$key]);
                    }
                }
            }

    // Tambahkan foto baru ke slider
    if ($request->hasFile('foto_slider')) {
        foreach ($request->file('foto_slider') as $foto) {
            if ($foto instanceof \Illuminate\Http\UploadedFile) {
                $fotoName = time() . '_' . $foto->getClientOriginalName();
                $foto->move(public_path('uploads/budaya'), $fotoName);
                $fotoSliderPaths[] = $fotoName;
            }
        }
    }

    // Update data di database
    $budaya->nama_budaya = $request->nama_budaya;
    $budaya->nama_desa_budaya = $request->nama_desa_budaya;
    $budaya->alamat = $request->alamat;
    $budaya->harga_min = $request->harga_min;
    $budaya->harga_max = $request->harga_max;
    $budaya->link_youtube = $request->link_youtube;
    $budaya->nomor_whatsapp = $request->nomor_whatsapp;
    $budaya->link_google_maps = $request->link_google_maps;
    $budaya->deskripsi = $request->deskripsi;
    $budaya->foto_slider = json_encode(array_values($fotoSliderPaths));

    $budaya->save();

    return redirect()->back()->with('success', 'Data budaya berhasil diperbarui');
}

public function hapusBudaya($id)
{
    // Temukan data budaya berdasarkan ID dan hapus
    $budaya = Budaya::findOrFail($id);
    $budaya->delete();

    return redirect()->back()->with('success', 'Data budaya beserta semua foto terkait berhasil dihapus');
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

    return redirect()->to('/kelolaagenda')->with('success', 'Agenda berhasil diperbarui');
}
 
     // Menghapus agenda
    public function deleteAgenda($id)
    {
        $agenda = Agenda::findOrFail($id);
        $agenda->delete();

        return redirect()->to('/kelolaagenda')->with('success', 'Agenda berhasil dihapus');
    }
     public function kelolaHomepage()
    {
        return view('admin.adminbudaya.kelolahomepagebudaya'); 
    }
     public function laporanBudaya()
     {
         return view('admin.adminbudaya.laporanbudaya');
     }
 
}
