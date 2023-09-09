<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            'name' => '殺せんせー'
        ]);
        
        DB::table('teachers')->insert([
            'name' => '安西先生'
        ]);
        
        DB::table('teachers')->insert([
            'name' => 'ぬーべー'
        ]);
    }
}
