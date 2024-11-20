<?php

namespace App\Http\Controllers;

use App\Models\Budaya;
use App\Models\Agenda;
use App\Models\Visit;
use App\Models\HomepageBudaya;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class AdminDesaBudayaController extends Controller
{
    public function showDashboard(Request $request)
    {
        // Default period adalah mingguan (7 hari terakhir)
        $period = $request->get('period', 'week');

        // Menentukan tanggal mulai berdasarkan periode yang dipilih
        $startDate = match ($period) {
            'week' => Carbon::now()->subDays(6), // 7 hari terakhir
            'month' => Carbon::now()->startOfMonth(), // Awal bulan
            'year' => Carbon::now()->startOfYear(), // Awal tahun
            default => Carbon::now()->subDays(6),
        };

        // Total budaya di database
        $totalBudaya = Budaya::count();

        // Total agenda di database
        $totalAgenda = Agenda::count();

        // Total kunjungan keseluruhan untuk Desa Budaya
        $totalVisitsDesaBudaya = Visit::where('desa_name', 'Desa Budaya')->count();

        // Total kunjungan berdasarkan periode yang dipilih
        $desaBudayaVisits = Visit::selectRaw('DATE(created_at) as date, COUNT(*) as total')
            ->where('desa_name', 'Desa Budaya')
            ->whereDate('created_at', '>=', $startDate)
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        $dataDesa = [
            'budaya' => [
                'date' => $desaBudayaVisits->pluck('date')->map(fn($date) => Carbon::parse($date)->format('d M')), // Format tanggal
                'total' => $desaBudayaVisits->pluck('total'),
            ],
        ];

        // Data agenda per bulan (untuk chart agenda bulanan)
        $agendaPerMonth = Agenda::selectRaw('MONTH(created_at) as month, COUNT(*) as total_agenda')
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $agendaMonths = $agendaPerMonth->pluck('month')->map(fn($month) => Carbon::create()->month($month)->format('F'));
        $agendaTotals = $agendaPerMonth->pluck('total_agenda');

        // Agenda yang akan datang
        $agendaComing = Agenda::where('tanggal_acara', '>=', Carbon::now())
            ->orderBy('tanggal_acara', 'asc')
            ->get();

        // Daftar budaya
        $budaya = Budaya::all();

        // Kirim data ke view
        return view('admin.adminbudaya.adminbudaya', compact(
            'totalBudaya',
            'totalAgenda',
            'totalVisitsDesaBudaya',
            'dataDesa',
            'agendaMonths',
            'agendaTotals',
            'agendaComing',
            'budaya',
            'period' // Mengirimkan periode yang dipilih untuk dropdown di view
        ));
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

    // Ambil link Google Maps dari input pengguna
    $link_google_maps = $request->input('link_google_maps');
    if ($link_google_maps) {
        // Jika link bukan embed, coba konversi ke format embed
        if (strpos($link_google_maps, 'embed') === false) {
            $urlParts = parse_url($link_google_maps);
            if (isset($urlParts['query'])) {
                parse_str($urlParts['query'], $queryParams);
                if (isset($queryParams['q'])) {
                    $query = urlencode($queryParams['q']);
                    // Konversi ke format embed tanpa API key
                    $embed_map_link = "https://www.google.com/maps/embed/v1/place?q=" . $query;
                }
            } else {
                // Jika link langsung berupa alamat, langsung gunakan format embed
                $embed_map_link = "https://www.google.com/maps/embed/v1/place?q=" . urlencode($link_google_maps);
            }
        } else {
            // Jika link sudah embed, gunakan langsung
            $embed_map_link = $link_google_maps;
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

    public function updateBanner(Request $request)
    {
        $homepageData = HomepageBudaya::first();
        if (!$homepageData) {
            $homepageData = new HomepageBudaya;
        }

        // Mengelola upload gambar banner jika ada
        if ($request->hasFile('banner_image')) {
            // Hapus gambar lama jika ada
            if ($homepageData->gambar_banner && Storage::disk('public')->exists($homepageData->gambar_banner)) {
                Storage::disk('public')->delete($homepageData->gambar_banner);
            }

            // Simpan gambar baru ke folder 'uploads/budaya'
            $bannerImageName = $request->file('banner_image')->store('uploads/budaya', 'public');
            $homepageData->gambar_banner = $bannerImageName;
        }

        $homepageData->save();

        return redirect()->back()->with('success', 'Banner berhasil diperbarui');
    }

    
    public function updateWelcomeCard(Request $request)
    {
        $homepageData = HomepageBudaya::firstOrNew();
    
        // Mengelola upload gambar welcome jika ada
        if ($request->hasFile('welcome_image')) {
            // Hapus gambar lama jika ada
            if ($homepageData->gambar_welcome && Storage::disk('public')->exists($homepageData->gambar_welcome)) {
                Storage::disk('public')->delete($homepageData->gambar_welcome);
            }
    
            // Simpan gambar baru ke folder 'uploads/budaya'
            $homepageData->gambar_welcome = $request->file('welcome_image')->store('uploads/budaya', 'public');
        }
    
        // Menyimpan deskripsi welcome
        $homepageData->deskripsi_welcome = $request->welcome_description;
        $homepageData->save();
    
        return redirect()->back()->with('success', 'Card Selamat Datang berhasil diperbarui');
    }    


     public function laporanBudaya()
     {
         return view('admin.adminbudaya.laporanbudaya');
     }
 
}
