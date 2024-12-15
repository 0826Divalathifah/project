<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Pastikan user sudah login dan peran admin
        if (Auth::guard('admin')->check() && in_array(Auth::guard('admin')->user()->role, ['admin_budaya', 'admin_entrepreneur', 'admin_wisata'])) {
            return $next($request);
        }
        
        
        // Redirect jika bukan admin
        return redirect('/login');
    }
}
