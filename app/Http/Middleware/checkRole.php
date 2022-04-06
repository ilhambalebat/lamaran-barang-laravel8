<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class checkRole
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
        $roles = array_slice(func_get_args(), 2);
        $userRole = (!empty(Auth::user()->role)) ? Auth::user()->role : null;
        if(!empty($userRole)):
            foreach ($roles as $role):
                if( $userRole == $role){
                    return $next($request);
                }
            endforeach;
        endif;

        if(empty($userRole)):
            return redirect('/login')->with('danger','Anda tidak diizinkan masuk');
        else: 
            return redirect('/')->with('danger','Anda tidak diizinkan mengakses halaman sebelumnya');
        endif;
    }
}
