<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan
    protected $table = 'visits';

    // Kolom yang dapat diisi
    protected $fillable = [
        'url',
        'desa_name',  // Nama desa yang dikunjungi
    ];

    // Menambahkan properti timestamps secara otomatis
    public $timestamps = true;

    // Atur kolom yang diizinkan untuk diisi
    protected $guarded = [];

    // Function untuk mengambil jumlah kunjungan berdasarkan desa
    public static function getVisitCountByDesa($desaName)
    {
        return self::where('desa_name', $desaName)
                   ->whereMonth('created_at', now()->month)
                   ->count();
    }

    // Function untuk mengambil semua kunjungan dalam bulan ini
    public static function getTotalVisits()
    {
        return self::whereMonth('created_at', now()->month)->count();
    }
}
