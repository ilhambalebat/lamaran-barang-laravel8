<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class Departemen_Peminta_Seeder extends Seeder
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

        $faker = Faker::create('id_ID'); 
    	for($i = 0; $i < 10; $i++){
            $uuid = $faker->uuid;
            if ($i == 0) $pertama = $uuid;
            if ($i == 1) $kedua = $uuid;
    		DB::table('departemens')->insert([
    			'id' => $uuid,
    			'nama' => $faker->city,
                'created_at' => now(),
                'updated_at' => now()
    		]);
    	}

        $departemen = [$pertama,$kedua];
    	for($i = 1; $i <= 10; $i++){
    		DB::table('pemintas')->insert([
    			'id' => $faker->uuid,
                'nik' => $faker->numerify('###.###.#####'),
    			'nama' => $faker->name,
                'departemen_id' => ($i < 6) ? $departemen[0] : $departemen[1],
                'created_at' => now(),
                'updated_at' => now()
    		]);
    	}
    }
}
