<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Super Admin',
                'email' => 'superadmin@gmail.com',
                'password' => Hash::make('password123'),
                'role' => 'superadmin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Admin Budaya',
                'email' => 'adminbudaya@gmail.com',
                'password' => Hash::make('password123'),
                'role' => 'admin_budaya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Admin Preneur',
                'email' => 'adminpreneur@gmail.com',
                'password' => Hash::make('password123'),
                'role' => 'admin_preneur',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Admin Prima',
                'email' => 'adminprima@gmail.com',
                'password' => Hash::make('password123'),
                'role' => 'admin_prima',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Admin Wisata',
                'email' => 'adminwisata@gmail.com',
                'password' => Hash::make('password123'),
                'role' => 'admin_wisata',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
