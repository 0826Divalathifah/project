<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Varian extends Model
{
    use HasFactory;

    protected $table = 'varian_prima'; // Nama tabel sesuai dengan tabel di database

    protected $primaryKey = 'id'; // Ubah sesuai primary key tabel varian_prima

    protected $fillable = [
        'id_produk',  // Foreign key menghubungkan ke tabel prima
        'nama_varian', // Nama varian
        'harga_varian' // Harga varian
    ];

    public function prima()
    {
        return $this->belongsTo(Prima::class, 'id_produk'); // Menghubungkan ke Prima
    }
}
