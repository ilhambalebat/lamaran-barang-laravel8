<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Requests\LoginRequest;
use App\Models\Opsdik;
use App\Models\Seleksi;
use App\Models\Strata;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function login()
    {
        $userRole = (!empty(Auth::user()->role)) ? Auth::user()->role : null;
        if(!empty($userRole)) return redirect('/dashboard');
        return view("login");
    }

    public function logout()
    {
        request()->session()->invalidate();
        return redirect('/')->with('success','Anda berhasil logout');
    }

    public function forbidden()
    {
        request()->session()->invalidate();
        return redirect('/')->with('danger','Anda tidak diizinkan mengakses halaman sebelumnya');
    }

    public function authenticate(LoginRequest $request)
    {
        if (Auth::attempt(["email" => $request->email, "password" => $request->password])) {
            $request->session()->regenerate();
            return redirect('/permintaan');
        }

        return back()->with('danger','Oops! Data Login tidak valid');
    }

    public function uuid()
    {
        $count = request('count');
        $count = $count ?: 10;
        for($i=1; $i<=$count; $i++):
            echo Str::uuid()."<br>";
        endfor;
        header("Refresh: 3; URL=/generate/uuid");
    }

}