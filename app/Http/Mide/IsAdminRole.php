<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdminRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (Auth::guard('admin')->check()) {
            $user = Auth::guard('admin')->user();
            if ($user->role == $role) {
                return $next($request);
            }
        }

        // Redirect jika role tidak sesuai
        return redirect()->route('login');
    }
}
