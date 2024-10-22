<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budaya extends Model
{
    use HasFactory;

    // Tentukan tabel yang digunakan oleh model ini
    protected $table = 'budaya';

    // Tentukan kolom yang dapat diisi
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

    // Jika ingin mengatur harga agar muncul dalam format rupiah, tambahkan accessor
    public function getHargaMinAttribute($value)
    {
        return 'Rp ' . number_format($value, 2, ',', '.');
    }

    public function getHargaMaxAttribute($value)
    {
        return 'Rp ' . number_format($value, 2, ',', '.');
    }

    // Foto slider dapat menyimpan lebih dari satu path, jadi kita bisa menggunakan JSON untuk menyimpan dan mengembalikan array
    public function setFotoSliderAttribute($value)
    {
        $this->attributes['foto_slider'] = json_encode($value);
    }

    public function getFotoSliderAttribute($value)
    {
        return json_decode($value, true);
    }
}
