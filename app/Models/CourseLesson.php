<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseLesson extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'course_id' , 'video'];

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }
}
