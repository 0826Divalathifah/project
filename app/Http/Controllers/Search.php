<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Search extends Controller
{
    public function search(Request $request)
    {
        // Ambil parameter 'keyword' dari form pencarian
        $keyword = $request->input('keyword');
        
        if ($keyword) {
            // Di sini Anda bisa menambahkan logika pencarian
            // Misalnya, mencari data dari database menggunakan model Eloquent
            // Contoh: $results = Model::where('nama_kolom', 'LIKE', "%{$keyword}%")->get();
            
            return view('search_results', [
                'keyword' => $keyword,
                // 'results' => $results // Kirim hasil pencarian ke view (opsional)
            ]);
        } else {
            return redirect()->back()->with('error', 'Masukkan kata kunci pencarian.');
        }
    }
}
