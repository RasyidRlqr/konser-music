<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Pastikan user sudah login
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        // Cek role user (contoh: 'admin', 'user', dll)
        if (!auth()->user()->hasRole($role)) { // Sesuaikan dengan method role di Model User
            abort(403, 'Unauthorized access.');
        }

        return $next($request);
    }
}