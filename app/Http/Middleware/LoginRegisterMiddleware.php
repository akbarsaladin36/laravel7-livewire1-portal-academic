<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class LoginRegisterMiddleware
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

        if(Session::exists('user_logged_in')) {
            return redirect()->route('home.index');
        }

        if(Session::exists('dosen_logged_in')) {
            return redirect()->route('user-dosen.home.index');
        }

        if(Session::exists('mahasiswa_logged_in')) {
            return redirect()->route('user-mahasiswa.home.index');
        }

        return $next($request);
    }
}
