<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isAdminOrUser
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
            if (Auth::check() && ((Auth::user()->role == "isAdmin") || (Auth::user()->role == "isUser"))):
                return $next($request);
            else: //User
                return redirect('/forbidden')->with('danger','Anda tidak diizinkan masuk');
            endif;
        endif;

        if(empty($userRole)):
            return redirect('/')->with('danger','Anda tidak diizinkan masuk');
        else: 
            return redirect('/')->with('danger','Anda tidak diizinkan mengakses halaman sebelumnya');
        endif;
    }
}
