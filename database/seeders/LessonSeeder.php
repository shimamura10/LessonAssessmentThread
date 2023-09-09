<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lessons')->insert([
            'teacher_id' => 1,
            'time_id' => 1,
            'name' => '財政学',
            'comments' => 80,
            'atmosphere_average' => 2.9,
            'task_amount_average' => 4.3,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('lessons')->insert([
            'teacher_id' => 2,
            'time_id' => 2,
            'name' => '線形代数',
            'comments' => 98,
            'atmosphere_average' => 3.3,
            'task_amount_average' => 4.8,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('lessons')->insert([
            'teacher_id' => 3,
            'time_id' => 3,
            'name' => '量子力学',
            'comments' => 43,
            'atmosphere_average' => 3.4,
            'task_amount_average' => 3.7,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
