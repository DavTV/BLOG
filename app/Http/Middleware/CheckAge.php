<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
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
        return $next($request);
        if($request->age>=18){
            // continuar con la solicitud
            return $next($request);
        }else{
            return redirect('/');
        }

        //esto funciona cuando está usando el login por defecto
        // if(auth()->user()->email == "atellovalqui@gmail.com"){
        //     // continuar con la solicitud
        //     return $next($request);
        // }else{
        //     return redirect('/');
        // }
    }
}
