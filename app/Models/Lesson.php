<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    
    public function getPaginateByLimit(int $limit_count = 5)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this::with(['time', 'teacher'])->orderBy('updated_at', 'DESC')->paginate($limit_count);
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
