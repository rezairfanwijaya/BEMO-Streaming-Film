<?php

namespace App\Http\Middleware;

use Closure;

class UserAuth
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
        if(session()->has('nama')){
            return $next($request);
        }else{
            return redirect()->route('login')->with('pesan', 'Akses ditolak. Silahakan login terlebih dahulu!');
        }
    }
}
