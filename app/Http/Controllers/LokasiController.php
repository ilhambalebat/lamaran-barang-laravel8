<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    public function index()
    {
        $data = Lokasi::orderBy('nama', 'ASC')->get();
        return view('contents.lokasi.lokasi', compact('data'));
    }
}
