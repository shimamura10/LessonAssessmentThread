<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\Time;
use App\Models\Teacher;

class LessonController extends Controller
{
    public function index(Request $request, Lesson $lesson, Time $time, Teacher $teacher)
    {
        $lesson_id = $request->input('lesson_id', 0);
        $time_id = $request->input('time_id', 0);
        $teacher_id = $request->input('teacher_id', 0);
        
        return view('posts/index')->with(['lessons' => $lesson->getPaginateByLimit($lesson_id, $time_id, $teacher_id), 'times' => $time->get(), 'teachers' => $teacher->get()]);
    }
}
