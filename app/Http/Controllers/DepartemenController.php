<?php

namespace App\Http\Controllers;

use App\Models\Departemen;
use Illuminate\Http\Request;

class DepartemenController extends Controller
{
    public function index()
    {
        $data = Departemen::orderBy('nama','ASC')->get();
        return view('contents.departemen.departemen',compact('data'));
    }
}
