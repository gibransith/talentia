<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AlumnoMW
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = \Auth::user();

        if($user->esAlumno() || $user->esEgresado()){
            return $next($request);
        }else{
            abort(403,"Sin Permisos para acceder a la ruta");
            return 'error';
        }
    }
}
