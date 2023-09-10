<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    
    protected $with = ['time', 'teacher'];
    
    public function getPaginateByLimit(int $lesson_id = 0, int $time_id = 0, int $teacher_id = 0, int $limit_count = 5)
    {
        $query = $this->query();
        
        if ($lesson_id !== 0) {
            $query->where('id', $lesson_id);
        }
        
        if ($time_id !== 0) {
            $query->where('time_id', $time_id);
        }
        
        if ($teacher_id !== 0) {
            $query->where('teacher_id', $teacher_id);
        }
        
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $query->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    
    public function time()
    {
        return $this->belongsTo(Time::class);
    }
    
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
