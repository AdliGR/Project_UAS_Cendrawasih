<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        // Check if the user is an admin
        if ($user && $user->is_admin) {
            return $next($request);
        }

        // For regular users, allow access to view the dashboard
        return redirect()->route('Admindashboard');
    }
}