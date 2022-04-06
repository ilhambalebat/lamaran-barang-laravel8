<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::orderBy('nama','ASC')->get();
        return view("contents.barang.barang", compact('barang'));
    }

    public function detail()
    {
        if(request()->has('id')): 
            $data = Barang::where("id",request('id'))->first();
            if($data):
                $data->lokasi = $data->lokasi;
                return response()->json($data);
            else:
                return response()->json(["message" => "Data tidak valid"]);
            endif;
        endif;
        return response()->json(["message" => "Data tidak valid"]);
    }

    public function perbarui()
    {
        if(request()->has('id')): 
            $data = Barang::where("id",request('id'))->first();
            if($data):
                $data->tersedia = request('tersedia') ?? 0;
                $data->save();
                return redirect('/barang')->with('success','Berhasil update stok barang');
            else:
                return redirect('/barang')->with('danger','ID Barang tidak valid');
            endif;
        endif;
        return redirect('/barang');
    }
}
