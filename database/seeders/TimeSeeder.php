<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('times')->insert([
            'name' => '月曜1限'
        ]);
        
        DB::table('times')->insert([
            'name' => '水曜3限'
        ]);
        
        DB::table('times')->insert([
            'name' => '木曜4限'
        ]);
    }
}
