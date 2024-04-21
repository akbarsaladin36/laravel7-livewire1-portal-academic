<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class UserAuthMiddleware
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

        if(!Session::exists('mahasiswa_logged_in')) {
            if(Session::exists('user_logged_in')) {
                Session::forget('user_logged_in');
                return redirect()->route('index');
            } 
            if(Session::exists('dosen_logged_in')) {
                Session::forget('dosen_logged_in');
                return redirect()->route('index');
            }
            return redirect()->route('index');
        }

        return $next($request);
    }
}
