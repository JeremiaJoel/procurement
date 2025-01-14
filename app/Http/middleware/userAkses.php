<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserAkses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $requiredRole = null;
        switch ($request->route()->getName()) {
            case 'dashboard-super-admin':
                $requiredRole = 'super_admin';
                break;
            case 'dashboard-admin':
                $requiredRole = 'admin';
                break;
            case 'dashboard-staff':
                $requiredRole = 'staff';
                break;
        }

        if ($requiredRole && Auth::user()->{$requiredRole} == '1') {
            return $next($request);
        }

        abort(403, 'Anda tidak memiliki izin untuk mengakses');
    }
}
