<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (!auth()->check() || !auth()->user()->roles->contains('nombre', $role)) {
            // Si el usuario no tiene el rol necesario, redirige o muestra un error.
            abort(403, 'No tienes permiso para acceder a esta página.');
        }
        
        return $next($request);
    }
}
