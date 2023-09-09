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
            'comments' => '結構きつそう',
            'atmosphere_average' => 2.9,
            'task_amount_average' => 4.3,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
