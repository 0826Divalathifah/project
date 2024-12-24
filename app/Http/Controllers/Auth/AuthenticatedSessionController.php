<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{

    /**
     * Handle an incoming authentication request.
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Proses autentikasi dan redirect berdasarkan role.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // Proses autentikasi menggunakan LoginRequest
        $request->authenticate();

        // Regenerasi sesi
        $request->session()->regenerate();

        // Ambil pengguna yang sedang login
        $user = Auth::user();

        // Tentukan redirect berdasarkan role
        $redirect = match ($user->role) {
            'superadmin' => '/adminkalurahan',
            'admin_budaya' => '/adminbudaya',
            'admin_preneur' => '/adminpreneur',
            'admin_prima' => '/adminprima',
            'admin_wisata' => '/adminwisata',
            default => '/index', // Default redirect jika role tidak cocok
        };

        // Redirect ke halaman yang sesuai
        return redirect()->intended($redirect);
    }

    /**
     * Logout pengguna.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Anda berhasil logout.');
    }
    
    
}