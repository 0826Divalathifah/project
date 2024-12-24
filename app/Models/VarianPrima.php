<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VarianPrima extends Model
{
    use HasFactory;

    protected $table = 'varian_prima';

    protected $fillable = [
        'id_produk', 
        'nama_varian', 
        'harga_varian'
    ];

    public function prima()
    {
        return $this->belongsTo(Prima::class, 'id_produk'); // Menghubungkan ke model Prima dengan foreign key id_produk
    }
}
