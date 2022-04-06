<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {       
        $this->call(UserSeeder::class);
        $this->call(Lokasi_Barang_Seeder::class);
        $this->call(Departemen_Peminta_Seeder::class);
        $this->call(PermintaanSeeder::class);
    }
}
