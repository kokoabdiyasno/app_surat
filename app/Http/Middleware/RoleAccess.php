<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        // Get authenticated user
        $user = Auth::user();

        // Check if user role matches the required role
        if (($role == 'admin' && $user->role == 1) || ($role == 'user' && $user->role == 2)) {
            return $next($request); // Allow access if user role matches
        }

        abort(403); // Deny access if user role doesn't match
    }
}
