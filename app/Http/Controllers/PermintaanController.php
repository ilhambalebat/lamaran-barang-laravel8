<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermintaanTambahRequest;
use App\Models\Barang;
use App\Models\Permintaan;
use App\Models\PermintaanList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PermintaanController extends Controller
{
    public function index()
    {
        $permintaan = Permintaan::orderBy('created_at','DESC')->get();
        $barang = Barang::orderBy('nama','ASC')->get();
        if(Auth::user()->role == "isAdmin"):
            return view("contents.permintaan.permintaan_list", compact('permintaan','barang'));
        else:
            return view("contents.permintaan.permintaan", compact('permintaan','barang'));
        endif;
    }

    public function detail()
    {
        if(request()->has('id')): 
            $data = Permintaan::where("id",request('id'))->first();
            if($data):
                $detail = PermintaanList::where("permintaan_id",$data->id)->get();
                return view("contents.permintaan.permintaan_detail", compact('detail','data'));
            else:
                return response()->json(["message" => "Data tidak valid"]);
            endif;
        endif;
        return response()->json(["message" => "Data tidak valid"]);
    }

    public function tambah(PermintaanTambahRequest $filter)
    {
        DB::beginTransaction();
        $permintaan = new Permintaan();
        $permintaan->peminta_id = $filter->peminta;
        $permintaan->tanggal_permintaan = $filter->tanggal_permintaan;
        $permintaan->save();

        if(!$permintaan->id):
            DB::rollBack();
            return redirect()->back();
        endif;

        $id = $permintaan->id;

        for($i=0; $i<count($filter->barang); $i++):
            $permintaanList = new PermintaanList();
            $permintaanList->permintaan_id = $id;
            $permintaanList->barang_id = $filter->barang[$i];
            $permintaanList->kuantiti = $filter->kuantiti[$i];
            $permintaanList->save();
            if(!$permintaanList->id):
                DB::rollBack();
                return redirect()->back();
            endif;
        endfor;

        DB::commit();
        return redirect()->back()->with('success','Berhasil menambahkan permintaan baru');
    }

    public function dibatalkan()
    {
        if(request()->has('id')): 
            $permintaan = Permintaan::where("id",request('id'))->first();
            if($permintaan):
                if($permintaan->status == 'belum diproses'):
                    $permintaan->status = 'dibatalkan';
                    $permintaan->save();
                    return redirect('/permintaan')->with('success','Berhasil membatalkan permintaan');
                else:
                    return redirect('/permintaan')->with('danger','Tidak dapat membatalkan permintaan yang sudah diproses');
                endif;
            else:
                return redirect('/permintaan')->with('danger','ID Permintaan tidak valid');
            endif;
        endif;
        return redirect('/permintaan');
    }

    public function diterima()
    {
        if(request()->has('id')): 
            $permintaan = Permintaan::where("id",request('id'))->first();
            if($permintaan):
                if($permintaan->status == 'belum diproses'):
                    DB::beginTransaction();
                    $permintaan->status = 'diterima';
                    $permintaan->save();

                    $permintaanList = PermintaanList::where('permintaan_id',$permintaan->id)->get();
                    foreach($permintaanList as $pl):
                        $barang = Barang::where('id',$pl->barang_id)->first();
                        if($barang->tersedia < $pl->kuantiti):
                            DB::rollBack();
                            return redirect('/permintaan')->with('danger','Gagal menerima permintaan, ada stok barang yang tidak mencukupi. silahkan update stok barang terlebih dahulu');
                        else:
                            $barang->tersedia = $barang->tersedia - $pl->kuantiti;
                            $barang->save();
                        endif;
                    endforeach;

                    DB::commit();
                    return redirect('/permintaan')->with('success','Berhasil menerima permintaan');
                else:
                    return redirect('/permintaan')->with('danger','Tidak dapat menerima permintaan yang sudah diproses');
                endif;
            else:
                return redirect('/permintaan')->with('danger','ID Permintaan tidak valid');
            endif;
        endif;
        return redirect('/permintaan');
    }

    public function ditolak()
    {
        if(request()->has('id')): 
            $permintaan = Permintaan::where("id",request('id'))->first();
            if($permintaan):
                if($permintaan->status == 'belum diproses'):
                    $permintaan->status = 'ditolak';
                    $permintaan->keterangan = request('keterangan') ?? "-";
                    $permintaan->save();
                    return redirect('/permintaan')->with('success','Berhasil menolak permintaan');
                else:
                    return redirect('/permintaan')->with('danger','Tidak dapat menolak permintaan yang sudah diproses');
                endif;
            else:
                return redirect('/permintaan')->with('danger','ID Permintaan tidak valid');
            endif;
        endif;
        return redirect('/permintaan');
    }
}
