<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Preneur;

class PreneurSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan data produk makanan
        Preneur::create([
            'kategori_produk' => 'makanan',
            'nama_produk' => 'Nasi Goreng',
            'deskripsi' => 'Nasi goreng spesial dengan bumbu rahasia.',
            'harga_produk' => 20000,
            'nomor_whatsapp' => '081234567890',
            'foto_card' => 'uploads/foto_card/nasi_goreng.jpg',
            'foto_produk' => json_encode(['uploads/foto_produk/nasi_goreng1.jpg', 'uploads/foto_produk/nasi_goreng2.jpg']),
        ]);

        // Menambahkan data produk kerajinan
        Preneur::create([
            'kategori_produk' => 'kerajinan',
            'nama_produk' => 'Keranjang Anyaman',
            'deskripsi' => 'Keranjang anyaman tangan dari bambu.',
            'harga_produk' => 50000,
            'nomor_whatsapp' => '081234567891',
            'foto_card' => 'uploads/foto_card/keranjang_anyaman.jpg',
            'foto_produk' => json_encode(['uploads/foto_produk/keranjang_anyaman1.jpg']),
        ]);
    }
}
