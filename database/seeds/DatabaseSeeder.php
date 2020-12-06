<?php

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
        // $this->call(UserSeeder::class);
        // $this->call(UserSeeder::class);
        DB::table('users')->insert([
            'name' => "ulfah",
            'email' => "ulfah@gmail.com",
            'password' => Hash::make("12345"),
            'remember_token' => Str::random(60),
        ]);
    }
}
