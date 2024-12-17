<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan data pengguna
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),  // Ganti dengan password yang lebih kuat
                'role' => 'adminkalurahan',  // Sesuaikan dengan nilai ENUM di kolom role
                'status' => 1,  // Pastikan status sesuai dengan nilai yang diizinkan (1 untuk aktif, 0 untuk non-aktif)
            ],
            [
                'name' => 'Regular User',
                'email' => 'user@example.com',
                'password' => Hash::make('password'),  // Ganti dengan password yang lebih kuat
                'role' => 'user',  // Sesuaikan dengan nilai ENUM di kolom role
                'status' => 1,  // Pastikan status sesuai dengan nilai yang diizinkan (1 untuk aktif, 0 untuk non-aktif)
            ],
        ]);
    }
}

