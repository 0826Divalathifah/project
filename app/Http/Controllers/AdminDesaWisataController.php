<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use App\Models\Wisata;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminDesaWisataController extends Controller
{
    public function showDashboard()
    {
        // Mengambil semua data wisata
        $wisata = Wisata::all();

        // Mengambil jumlah kunjungan untuk Desa Wisata bulan ini
        $totalVisitsDesaWisata = Visit::getVisitCountByDesa('Desa Wisata');
        
        // Menghitung total wisata
        $totalWisata = Wisata::count();

        $desaWisataVisits = Visit::selectRaw('DATE(created_at) as date, COUNT(*) as total')
        ->where('desa_name', 'Desa Wisata')
        ->whereDate('created_at', '>=', Carbon::now()->subDays(7))
        ->groupBy('date')
        ->orderBy('date')
        ->get();

        // Mengubah data menjadi array untuk digunakan di chart
        $dataDesa = [
            'wisata' => [
            'date' => $desaWisataVisits->pluck('date'),
            'total' => $desaWisataVisits->pluck('total')
            ],
        ];

        // Kirim data ke view
        return view('admin.adminwisata.adminwisata', compact(
            'totalVisitsDesaWisata',
            'totalWisata',
            'dataDesa',
            'wisata'
        ));
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
            'hari' => 'required|array',
            'jam_buka' => 'required|array',
            'jam_tutup' => 'required|array',
            'alamat' => 'nullable|string|max:255',
            'link_google_maps' => 'nullable|url|max:255',
            'harga_masuk' => 'nullable|numeric',
            'deskripsi' => 'nullable|string',
            'foto_card' => 'required|image|mimes:jpeg,png,jpg|max:5120',
            'brosur' => 'required|image|mimes:jpeg,png,jpg|max:5120',
            'foto_wisata.*' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
        ]);

    
        // Konversi link Google Maps ke format embed jika ada
        $link_google_maps = $request->input('link_google_maps');
        if ($link_google_maps) {
            if (strpos($link_google_maps, 'embed') === false) {
                $urlParts = parse_url($link_google_maps);
                if (isset($urlParts['query'])) {
                    parse_str($urlParts['query'], $queryParams);
                    if (isset($queryParams['q'])) {
                        $query = urlencode($queryParams['q']);
                        $embed_map_link = "https://www.google.com/maps/embed/v1/place?q=" . $query;
                    }
                } else {
                    $embed_map_link = "https://www.google.com/maps/embed/v1/place?q=" . urlencode($link_google_maps);
                }
            } else {
                $embed_map_link = $link_google_maps;
            }
            $validatedData['link_google_maps'] = $embed_map_link;
        }
    
        // Gabungkan hari, jam buka, dan jam tutup dalam satu array
        $jadwalKunjungan = [];
        foreach ($request->hari as $index => $hari) {
            $jadwalKunjungan[] = [
                'hari' => $hari,
                'jam_buka' => $request->jam_buka[$index],
                'jam_tutup' => $request->jam_tutup[$index],
            ];
        }
        $validatedData['waktu_kunjung'] = json_encode($jadwalKunjungan);
    
        // Proses upload foto_card
        if ($request->hasFile('foto_card')) {
        $validatedData['foto_card'] = $request->file('foto_card')->store('uploads/wisata', 'public');
        }

        // Proses upload brosur
        if ($request->hasFile('brosur')) {
        $validatedData['brosur'] = $request->file('brosur')->store('uploads/wisata', 'public');
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

    public function updateWisata(Request $request, $id)
    {
        // Validasi input form
        $validator = Validator::make($request->all(), [
            'nama_wisata' => 'required|string|max:100',
            'hari' => 'nullable|array',
            'jam_buka' => 'nullable|array',
            'jam_tutup' => 'nullable|array',
            'alamat' => 'nullable|string|max:255',
            'harga_masuk' => 'nullable|numeric',
            'link_google_maps' => 'nullable|url|max:255',
            'waktu_kunjung' => 'nullable|string', // Sesuaikan di sini
            'deskripsi' => 'nullable|string',
            'foto_card' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
            'brosur' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
            'foto_wisata' => 'nullable|array',
            'foto_wisata.*' => 'image|mimes:jpeg,png,jpg|max:5120',
        ]);
        
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $wisata = Wisata::findOrFail($id);
        
        // Konversi link Google Maps ke format embed jika ada
        $link_google_maps = $request->input('link_google_maps');
        if ($link_google_maps) {
            // Cek apakah link sudah dalam format embed
            if (strpos($link_google_maps, 'embed') === false) {
                // Jika link adalah shortened URL (maps.app.goo.gl)
                if (strpos($link_google_maps, 'goo.gl') !== false) {
                    // Ambil URL asli dari shortened URL
                    $headers = get_headers($link_google_maps, 1);
                    if (isset($headers['Location'])) {
                        $full_url = is_array($headers['Location']) ? end($headers['Location']) : $headers['Location'];
                    } else {
                        return redirect()->back()->with('error', 'Link Google Maps tidak valid atau tidak dapat diakses.');
                    }
                } else {
                    $full_url = $link_google_maps;
                }

                // Parsir URL untuk mengonversi ke format embed
                $urlParts = parse_url($full_url);
                if (isset($urlParts['path'])) {
                    if (strpos($urlParts['path'], '/place/') !== false) {
                        // Untuk URL dengan "/place/"
                        $embed_map_link = str_replace('/maps/place/', '/maps/embed?pb=', $full_url);
                    } elseif (isset($urlParts['query'])) {
                        parse_str($urlParts['query'], $queryParams);
                        if (isset($queryParams['q'])) {
                            // Konversi URL query (misalnya, dengan parameter `q`)
                            $embed_map_link = "https://www.google.com/maps/embed/v1/place?q=" . urlencode($queryParams['q']);
                        } else {
                            $embed_map_link = "https://www.google.com/maps/embed/v1/place?q=" . urlencode($full_url);
                        }
                    } else {
                        $embed_map_link = "https://www.google.com/maps/embed/v1/place?q=" . urlencode($full_url);
                    }
                } else {
                    return redirect()->back()->with('error', 'Format link tidak valid.');
                }
            } else {
                $embed_map_link = $link_google_maps; // Jika sudah dalam format embed
            }

            // Simpan link embed ke database
            $validatedData['link_google_maps'] = $embed_map_link;
        }

        // Update foto card
        if ($request->hasFile('foto_card')) {
            if ($wisata->foto_card && Storage::disk('public')->exists($wisata->foto_card)) {
                Storage::disk('public')->delete($wisata->foto_card);
            }
            $fotoCardPath = $request->file('foto_card')->store('uploads/wisata', 'public');
            $wisata->foto_card = $fotoCardPath;
        }

        // Update brosur
        if ($request->hasFile('brosur')) {
            if ($wisata->brosur && Storage::disk('public')->exists($wisata->brosur)) {
                Storage::disk('public')->delete($wisata->brosur);
            }
            $fotoCardPath = $request->file('brosur')->store('uploads/wisata', 'public');
            $wisata->brosur = $fotoCardPath;
        }
    
        // Update foto wisata
        $fotoWisataPaths = json_decode($wisata->foto_wisata, true) ?? [];
    
        // Hapus foto wisata lama yang ingin dihapus
        if ($request->has('hapus_foto_wisata') && is_array($request->hapus_foto_wisata)) {
            foreach ($request->hapus_foto_wisata as $hapusFoto) {
                if (($key = array_search($hapusFoto, $fotoWisataPaths)) !== false) {
                    if (Storage::disk('public')->exists($hapusFoto)) {
                        Storage::disk('public')->delete($hapusFoto);
                    }
                    unset($fotoWisataPaths[$key]);
                }
            }
        }
    
        // Tambahkan foto wisata baru
        if ($request->hasFile('foto_wisata')) {
            foreach ($request->file('foto_wisata') as $foto) {
                $fotoWisataPaths[] = $foto->store('uploads/wisata', 'public');
            }
        }
    
        // Logika untuk menyimpan waktu kunjungan
        $waktuKunjung = [];
        if ($request->has('hari') && $request->has('jam_buka') && $request->has('jam_tutup')) {
            $setiapHariDipilih = in_array('Setiap Hari', $request->hari);
    
            if ($setiapHariDipilih) {
                // Jika "Setiap Hari" dipilih, simpan hanya satu set jadwal
                $index = array_search('Setiap Hari', $request->hari);
                $waktuKunjung[] = [
                    'hari' => 'Setiap Hari',
                    'jam_buka' => $request->jam_buka[$index],
                    'jam_tutup' => $request->jam_tutup[$index],
                ];
            } else {
                // Jika "Setiap Hari" tidak dipilih, simpan setiap hari yang dipilih dengan jamnya
                foreach ($request->hari as $index => $hari) {
                    if (isset($request->jam_buka[$index]) && isset($request->jam_tutup[$index])) {
                        $waktuKunjung[] = [
                            'hari' => $hari,
                            'jam_buka' => $request->jam_buka[$index],
                            'jam_tutup' => $request->jam_tutup[$index],
                        ];
                    }
                }
            }
        }
    
        // Update data di database
        $wisata->update([
            'nama_wisata' => $request->nama_wisata,
            'alamat' => $request->alamat,
            'harga_masuk' => $request->harga_masuk,
            'deskripsi' => $request->deskripsi,
            'foto_card' => $wisata->foto_card,
            'brosur' => $wisata->brosur,
            'foto_wisata' => json_encode(array_values($fotoWisataPaths)),
            'link_google_maps' => $request->link_google_maps,
            'waktu_kunjung' => json_encode($waktuKunjung),
        ]);
    
        return redirect()->back()->with('success', 'Wisata berhasil diperbarui!');
    }


    public function deleteWisata($id)
    {
        $wisata = Wisata::findOrFail($id); // Pastikan data ditemukan
    
        // Hapus foto card jika ada
        if ($wisata->foto_card && Storage::disk('public')->exists($wisata->foto_card)) {
            Storage::disk('public')->delete($wisata->foto_card);
        }

        // Hapus brosur jika ada
        if ($wisata->brosur && Storage::disk('public')->exists($wisata->brosur)) {
            Storage::disk('public')->delete($wisata->brosur);
        }
    
        // Hapus semua foto yang ada di kolom foto_wisata (json array)
        $fotoWisataPaths = json_decode($wisata->foto_wisata, true) ?? [];
        foreach ($fotoWisataPaths as $foto) {
            if (Storage::disk('public')->exists($foto)) {
                Storage::disk('public')->delete($foto);
            }
        }
    
        // Hapus data wisata dari database
        $wisata->delete();
    
        return redirect()->to('/kelolawisata')->with('success', 'Wisata beserta semua foto terkait berhasil dihapus');
    }

    public function kelolaHomepage()
    {
        return view('admin.adminwisata.kelolahomepagewisata');
    }
    
}
