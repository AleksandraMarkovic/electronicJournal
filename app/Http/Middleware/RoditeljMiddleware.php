<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoditeljMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->session()->has('korisnik')){
            if(session('korisnik')->id_uloga == 4){
                return $next($request);
            }
            else{
                return redirect('/home');
            }
        }
        else{
            return redirect('/');
        }
    }
}
