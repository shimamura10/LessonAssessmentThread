<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

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
            'name' => '潮田渚',
            'email' => 'a;fhia;f@gmail.com',
            'password' => '12345678',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
         DB::table('users')->insert([
            'name' => '桜木花道',
            'email' => 'a;sbsa;f@gmail.com',
            'password' => '12345678',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
         DB::table('users')->insert([
            'name' => '立野 広',
            'email' => 'afdshjj;f@gmail.com',
            'password' => '12345678',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
