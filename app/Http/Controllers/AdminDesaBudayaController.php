<?php

namespace App\Http\Controllers;

use App\Models\Budaya;
use App\Models\Agenda;
use App\Models\HomepageBudaya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


class AdminDesaBudayaController extends Controller
{
    // Menampilkan dashboard
    public function showDashboard()
    {
        return view('admin.adminbudaya.adminbudaya');
    }

    public function kelolaBudaya()
    {
        $budaya = Budaya::all(); // Ambil semua data budaya
        return view('admin.adminbudaya.kelolabudaya', compact('budaya'));
    }

    // Menambahkan budaya
    public function tambahBudaya()
    {
        return view('admin.adminbudaya.tambahbudaya');
    }

    public function simpanBudaya(Request $request)
{
    // Validasi input form
    $validatedData = $request->validate([
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
        'foto_slider.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
    ]);

    // Konversi link YouTube ke format embed jika ada
    $link_youtube = $request->input('link_youtube');
    if ($link_youtube) {
        if (preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/', $link_youtube, $matches)) {
            $validatedData['link_youtube'] = 'https://www.youtube.com/embed/' . $matches[1];
        }
    }

    // Konversi link Google Maps ke format embed jika ada
    $link_google_maps = $request->input('link_google_maps');
    if ($link_google_maps) {
        $embed_map_link = $link_google_maps;
        if (strpos($link_google_maps, 'embed') === false) {
            $urlParts = parse_url($link_google_maps);
            if (isset($urlParts['query'])) {
                parse_str($urlParts['query'], $queryParams);
                if (isset($queryParams['q'])) {
                    $query = urlencode($queryParams['q']);
                    $embed_map_link = "https://www.google.com/maps/embed?pb=" . $query;
                }
            }
        }
        $validatedData['link_google_maps'] = $embed_map_link;
    }

    // Proses upload foto_card
    $validatedData['foto_card'] = $request->file('foto_card')->store('uploads/budaya', 'public');

    // Proses upload foto_slider
    if ($request->hasFile('foto_slider')) {
        foreach ($request->file('foto_slider') as $foto) {
            $fotoSliderPaths[] = $foto->store('uploads/budaya', 'public');
        }
        $validatedData['foto_slider'] = json_encode($fotoSliderPaths);
    } else {
        $validatedData['foto_slider'] = json_encode([]);
    }

    // Simpan data ke database
    Budaya::create($validatedData);

    return redirect()->back()->with('success', 'Data budaya berhasil ditambahkan');
    }


    // Menampilkan form edit budaya
    public function editBudaya($id)
    {
        $budaya = Budaya::findOrFail($id); 
        return view('admin.adminbudaya.editbudaya', compact('budaya'));
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

        // Update foto card
        if ($request->hasFile('foto_card')) {
            if ($budaya->foto_card && Storage::disk('public')->exists($budaya->foto_card)) {
                Storage::disk('public')->delete($budaya->foto_card);
            }
            $fotoCardName = $request->file('foto_card')->store('uploads/budaya', 'public');
            $budaya->foto_card = $fotoCardName;
        }

        // Update foto slider
        $fotoSliderPaths = json_decode($budaya->foto_slider, true) ?? [];

        // Hapus foto slider yang diinginkan
        if ($request->has('hapus_foto_slider') && is_array($request->hapus_foto_slider)) {
            foreach ($request->hapus_foto_slider as $hapusFoto) {
                if (($key = array_search($hapusFoto, $fotoSliderPaths)) !== false) {
                    if (Storage::disk('public')->exists($hapusFoto)) {
                        Storage::disk('public')->delete($hapusFoto);
                    }
                    unset($fotoSliderPaths[$key]);
                }
            }
        }

        // Tambahkan foto slider baru
        if ($request->hasFile('foto_slider')) {
            foreach ($request->file('foto_slider') as $foto) {
                $fotoName = $foto->store('uploads/budaya', 'public');
                $fotoSliderPaths[] = $fotoName;
            }
        }

        // Konversi link YouTube ke format embed jika tersedia
        $link_youtube = $request->input('link_youtube');
        if ($link_youtube) {
            if (preg_match('/(?:https?:\/\/)?(?:www\.)?youtube\.com\/watch\?v=([a-zA-Z0-9_-]+)/', $link_youtube, $matches)) {
                $link_youtube = 'https://www.youtube.com/embed/' . $matches[1];
            } elseif (preg_match('/(?:https?:\/\/)?(?:www\.)?youtu\.be\/([a-zA-Z0-9_-]+)/', $link_youtube, $matches)) {
                $link_youtube = 'https://www.youtube.com/embed/' . $matches[1];
            }
        }

        // Konversi link Google Maps ke format embed jika tersedia
        $link_google_maps = $request->input('link_google_maps');
        if ($link_google_maps) {
            $embed_map_link = $link_google_maps;
            if (strpos($link_google_maps, 'embed') === false) {
                $urlParts = parse_url($link_google_maps);
                if (isset($urlParts['query'])) {
                    parse_str($urlParts['query'], $queryParams);
                    if (isset($queryParams['q'])) {
                        $query = urlencode($queryParams['q']);
                        $link_google_maps = "https://www.google.com/maps/embed?pb=" . $query;
                    }
                }
            }
        }

    // Update data di database
    $budaya->update([
        'nama_budaya' => $request->nama_budaya,
        'nama_desa_budaya' => $request->nama_desa_budaya,
        'alamat' => $request->alamat,
        'harga_min' => $request->harga_min,
        'harga_max' => $request->harga_max,
        'link_youtube' => $link_youtube,
        'nomor_whatsapp' => $request->nomor_whatsapp,
        'link_google_maps' => $link_google_maps,
        'deskripsi' => $request->deskripsi,
        'foto_slider' => json_encode(array_values($fotoSliderPaths)),
    ]);

    return redirect()->back()->with('success', 'Data budaya berhasil diperbarui');
}


    // Menghapus budaya
    public function hapusBudaya($id)
    {
        $budaya = Budaya::findOrFail($id);

        // Hapus foto card
        if ($budaya->foto_card && Storage::disk('public')->exists($budaya->foto_card)) {
            Storage::disk('public')->delete($budaya->foto_card);
        }

        // Hapus semua foto slider
        $fotoSliderPaths = json_decode($budaya->foto_slider, true) ?? [];
        foreach ($fotoSliderPaths as $foto) {
            if (Storage::disk('public')->exists($foto)) {
                Storage::disk('public')->delete($foto);
            }
        }

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
        $homepageData = HomepageBudaya::first();
        return view('admin.adminbudaya.kelolahomepagebudaya', compact('homepageData'));
    }

    public function editHomepageBudaya()
    {
        $homepageData = HomepageBudaya::first();
        return view('admin.edit_homepagebudaya', compact('homepageData'));
    }

    public function updateHomepageBudaya(Request $request)
    {
        // Mengambil data pertama atau membuat baru jika belum ada
        $homepageData = HomepageBudaya::firstOrNew();

        // Mengelola upload gambar banner jika ada
        if ($request->hasFile('banner_image')) {
            // Hapus gambar lama jika ada
            if ($homepageData->gambar_banner && Storage::disk('public')->exists($homepageData->gambar_banner)) {
                Storage::disk('public')->delete($homepageData->gambar_banner);
            }
            $homepageData->gambar_banner = $request->file('banner_image')->store('uploads', 'public');
        }

        // Mengelola upload gambar welcome jika ada
        if ($request->hasFile('welcome_image')) {
            // Hapus gambar lama jika ada
            if ($homepageData->gambar_welcome && Storage::disk('public')->exists($homepageData->gambar_welcome)) {
                Storage::disk('public')->delete($homepageData->gambar_welcome);
            }
            $homepageData->gambar_welcome = $request->file('welcome_image')->store('uploads', 'public');
        }

        // Menyimpan deskripsi welcome
        $homepageData->deskripsi_welcome = $request->welcome_description;
        $homepageData->save();

        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }   

     public function laporanBudaya()
     {
         return view('admin.adminbudaya.laporanbudaya');
     }
 
}
