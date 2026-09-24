<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    public function handle($request, Closure $next)
    {
        if (!session()->has('is_admin_logged_in')) {
            return redirect()->route('admin/form-login')->withErrors(['Silakan login terlebih dahulu.']);
        }
        return $next($request);
    }
    
}
