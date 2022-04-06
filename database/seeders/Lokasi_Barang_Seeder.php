<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class Lokasi_Barang_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pertama = "";
        $kedua = "";

        //Lokasi Seeder
        $faker = Faker::create('id_ID'); 
    	for($i = 1; $i <= 10; $i++){
            $uuid = $faker->uuid;
            if ($i == 1) $pertama = $uuid;
            if ($i == 2) $kedua = $uuid;
    		DB::table('lokasis')->insert([
    			'id' => $uuid,
    			'nama' => "L".$i."-R".$i."A",
                'created_at' => now(),
                'updated_at' => now()
    		]);
    	}

        //Barang Seeder
        $lokasi = [$pertama,$kedua];
    	$abjad = ["A","B","C","D","E","F","G","H","I","J"];
        for($i = 1; $i <= 10; $i++){
            DB::table('barangs')->insert([
                "id" => $faker->uuid,
                "kode" => "ATK000".$i,
                "nama" => "AMPLOP ".$abjad[$i-1]." COKLAT JAYA",
                "lokasi_id" => ($i < 6) ? $lokasi[0] : $lokasi[1],
                "tersedia" => rand(10,100),
                "satuan" => "Pak",
                'created_at' => now(),
                'updated_at' => now()
            ]);
    	}
    }
}
