<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VarianPreneur extends Model
{
    use HasFactory;

    protected $table = 'varian_preneur';

    protected $primaryKey = 'id_varian';

    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'id_produk',
        'nama_varian',
        'harga_varian',
    ];

    // Relasi dengan tabel Preneur
    public function preneur()
    {
        return $this->belongsTo(Preneur::class, 'id_produk');
    }
}
