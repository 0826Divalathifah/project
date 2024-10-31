<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budaya extends Model
{
    use HasFactory;

    protected $table = 'budaya';

    protected $fillable = [
        'nama_budaya',
        'nama_desa_budaya',
        'alamat',
        'harga_min',
        'harga_max',
        'link_youtube',
        'nomor_whatsapp',
        'link_google_maps',
        'deskripsi',
        'foto_card',
        'foto_slider',
    ];

    protected static function booted()
    {
        static::deleting(function ($budaya) {
            // Hapus foto card jika ada
            if ($budaya->foto_card) {
                @unlink(public_path('uploads/budaya/' . $budaya->foto_card));
            }

            // Ambil foto slider dari database, periksa apakah dalam format string
            $fotoSliderPaths = is_string($budaya->foto_slider) ? json_decode($budaya->foto_slider, true) : [];

            // Hapus semua foto slider
            foreach ($fotoSliderPaths as $fotoNama) {
                $fotoPath = public_path('uploads/budaya/' . $fotoNama);
                if (file_exists($fotoPath)) {
                    unlink($fotoPath);
                }
            }
        });
    }
}
