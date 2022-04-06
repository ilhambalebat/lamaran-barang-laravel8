<?php

namespace App\Http\Controllers;

use App\Models\Peminta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class PemintaController extends Controller
{
    public function index()
    {
        $peminta = Peminta::orderBy('nama','ASC')->get();
        return view("contents.peminta.peminta", compact('peminta'));
    }

    public function cari()
    {
        if(request()->has('nik')): 
            $data = Peminta::where("nik",'like','%'.request('nik').'%')->limit(4)->get();
            return response()->json($data);
        endif;
        return response()->json(["message" => "Data tidak valid"]);
    }
    
    public function detail()
    {
        if(request()->has('id')): 
            $data = Peminta::where("id",request('id'))->first();
            $data->departemen = $data->departemen;
            return response()->json($data);
        endif;
        return response()->json(["message" => "Data tidak valid"]);
    }
}
