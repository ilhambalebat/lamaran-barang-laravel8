<?php

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\Peminta;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PermintaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Get Peminta
        $peminta = Peminta::get();

        //Get Barang
        $barang = Barang::get();

        //Permintaan Seeder
        $faker = Faker::create('id_ID'); 
    	for($i = 0; $i < 10; $i++){
            $uuid = $faker->uuid;
    		DB::table('permintaans')->insert([
    			'id' => $uuid,
                'peminta_id' => $peminta[$i]['id'],
    			'tanggal_permintaan' => now(),
                'status' => "diterima",
                'created_at' => now(),
                'updated_at' => now()
    		]);
            
            //Permintaan List Seeder
            for($j = 0; $j < 10; $j++){
                DB::table('permintaan_lists')->insert([
                    'id' => $faker->uuid,
                    'permintaan_id' => $uuid,
                    'barang_id' => $barang[$j]['id'],
                    'kuantiti' => rand(1,15),
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
    	}
    }
}
