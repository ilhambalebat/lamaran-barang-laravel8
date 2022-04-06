<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Requests\LoginRequest;
use App\Models\Opsdik;
use App\Models\Seleksi;
use App\Models\Strata;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ManajemenController extends Controller
{
    public function index()
    {
        $master_opsdik = Opsdik::orderBy('prioritas','ASC')->get();
        return view("contents.home",compact('master_opsdik'));
        // return response()->json(session()->all());
    }

    public function login()
    {
        $userRole = (!empty(Auth::user()->role)) ? Auth::user()->role : null;
        if(!empty($userRole)) return redirect('/dashboard');
        return view("login");
    }

    public function logout()
    {
        request()->session()->invalidate();
        return redirect('login')->with('success','Anda berhasil logout');
    }

    public function authenticate(LoginRequest $request)
    {
        if (Auth::attempt(["email" => $request->email, "password" => $request->password])) {
            $request->session()->regenerate();
            return redirect('/');
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

    public function negara()
    {
        // File upload location
        $location = 'uploads';

        $filename = "/6. Update Master Negara.csv";

        // Import CSV to Database
        $filepath = public_path($location."/".$filename);

        // Reading file
        $file = fopen($location."/".$filename,"r");

        $delimiter = Helper::detectDelimiter($location."/".$filename);

        $importData_arr = array();
        $i = 0;

        while (($filedata = fgetcsv($file, 10000000, $delimiter)) !== FALSE):
            $num = count($filedata );
            
            //Skip first row (Remove below comment if you want to skip the first row)
            if($i == 0){
                $i++;
                continue; 
            }
            
            for ($c=0; $c < $num; $c++) {
                $importData_arr[$i][] = (string) $filedata [$c];
            }
            $i++;
        endwhile;
        fclose($file);

        //Insert to MySQL database
        $no = 1;
        foreach($importData_arr as $importData){
            Strata::create([
                'nama' => $importData[1],
                'kode_strata' => "-",
                'opsdik_id' => "e3473502-983d-49e8-b72e-e944059fe344",
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        return "berhasil";
    }
}