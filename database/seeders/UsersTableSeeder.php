<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => env('USER_SEEDER_NAME', 'AdminDefault'),
            'email' => env('USER_SEEDER_EMAIL', 'admin@example.com'),
            'password' => Hash::make(env('USER_SEEDER_PASSWORD', 'passwordDefault')),
        ]);
    }
}
