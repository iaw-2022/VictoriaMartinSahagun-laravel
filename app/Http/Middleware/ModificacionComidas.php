<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ModificacionComidas
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $rol = auth()->user()->rol;

        if($rol == "admin" || $rol == "adminComidas"){
            return $next($request);
        }else{
            return response()->view('accesoDenegado');
        }
    }
}