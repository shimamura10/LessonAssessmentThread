<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    
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
