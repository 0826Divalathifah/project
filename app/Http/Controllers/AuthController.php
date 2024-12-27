<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin; // Pastikan model Admin sudah dibuat dan sesuai dengan tabel kelola_admin

class AuthController extends Controller
{
    // Menampilkan form login
    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');
    $admin = Admin::where('email', $credentials['email'])->first();

    if ($admin && Hash::check($credentials['password'], $admin->password)) {
        // Login berhasil
        return response()->json(['message' => 'Login berhasil']);
    } else {
        // Login gagal
        return response()->json(['message' => 'Email atau password salah'], 401);
    }
}


    // Proses login
    public function authenticate(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cari admin berdasarkan email
        $admin = Admin::where('email', $request->email)->first();

        // Jika admin ditemukan dan password cocok
        if ($admin && Hash::check($request->password, $admin->password)) {
            // Tentukan redirect berdasarkan role
            $redirect = match ($admin->role) {
                'admin_budaya' => '/adminbudaya',
                'admin_preneur' => '/adminpreneur',
                'admin_prima' => '/adminprima',
                'admin_wisata' => '/adminwisata',
                default => null,
            };

            if ($redirect) {
                // Login menggunakan guard admin jika ada
                Auth::guard('admin')->login($admin);

                // Respon berhasil
                return response()->json([
                    'success' => true,
                    'redirect' => $redirect
                ]);
            }

            // Jika role tidak valid
            return response()->json([
                'success' => false,
                'message' => 'Role tidak valid.'
            ], 403);
        }

        // Jika email atau password salah
        return response()->json([
            'success' => false,
            'message' => 'Email atau Password salah!'
        ], 401);
    }

    



    // Menampilkan form register
    public function register()
    {
        return view('admin.adminkelurahan.samples.register');
    }

    // Proses register
    public function registerAdmin(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:8|confirmed',
        ]);

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role, // Pastikan input role ada di form
        ]);

        return redirect()->route('login')->with('success', 'Register berhasil. Silakan login.');
    }
}