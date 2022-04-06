<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isLogin
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
        $userRole = (!empty(Auth::user()->role)) ? Auth::user()->role : null;
        if(!empty($userRole)):
            if (Auth::check() && Auth::user()->role == "isAdmin"): //Admin
                return redirect('/barang');
            elseif(Auth::check() && Auth::user()->role == "isUser"): //User
                return redirect('/permintaan');
            endif;
        endif;
        return $next($request);
    }
}
