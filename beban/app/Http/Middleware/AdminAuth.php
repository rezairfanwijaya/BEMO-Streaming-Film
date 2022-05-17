<?php

namespace App\Http\Middleware;

use Closure;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(session()->has('levelAdmin')){
            return $next($request);
        }else{
            return redirect()->route('login')->with('pesan', 'Akses ditolak. Silahkan login terlebih dahulu');
        }
    }
}
