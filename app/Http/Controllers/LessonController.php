<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\Time;
use App\Models\Teacher;

class LessonController extends Controller
{
    public function index(Lesson $lesson, Time $time, Teacher $teacher)
    {
        return view('posts/index')->with(['lessons' => $lesson->getPaginateByLimit(), 'times' => $time->get(), 'teachers' => $teacher->get()]);
    }
}
