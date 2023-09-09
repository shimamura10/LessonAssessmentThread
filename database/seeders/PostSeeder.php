<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'user_id' => 1,
            'lesson_id' => 1,
            'comment' => '結構きつそう',
            'atmosphere' => 3,
            'task_amount' => 4,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('posts')->insert([
            'user_id' => 2,
            'lesson_id' => 2,
            'comment' => '美しい計算や',
            'atmosphere' => 2,
            'task_amount' => 3,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('posts')->insert([
            'user_id' => 3,
            'lesson_id' => 3,
            'comment' => '先生が面白そう',
            'atmosphere' => 5,
            'task_amount' => 3,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
