<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaporanPrima extends Model
{
    // Nama tabel di database
    protected $table = 'laporan_prima';

    // Primary key dari tabel
    protected $primaryKey = 'id';

    // Tipe data primary key (integer, auto-increment)
    public $incrementing = true;
    protected $keyType = 'int';

    // Kolom-kolom yang bisa diisi secara mass-assignment
    protected $fillable = [
        'judul',
        'deskripsi',
        'tanggal',
        'total',
        'status', // Pastikan kolom ini ada di database
    ];

    // Aktifkan timestamps
    public $timestamps = true;

    // Format tanggal dan tipe data lainnya
    protected $casts = [
        'tanggal' => 'datetime',
        'total' => 'float',
    ];

    // Tambahkan event untuk default status
    protected static function booted()
    {
        static::creating(function ($laporanPrima) {
            if (empty($laporanPrima->status)) {
                $laporanPrima->status = 'selesai'; // Default jika tidak di-set
            }
        });
    }
}
