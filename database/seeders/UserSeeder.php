<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => Str::uuid(),
            'name' => "admin",
            'email' => "admin@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
            'role' => 'isAdmin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'id' => Str::uuid(),
            'name' => "user",
            'email' => "user@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('user'),
            'role' => 'isUser',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
