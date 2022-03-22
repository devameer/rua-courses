<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseAttachment extends Model
{
    use HasFactory;
    protected $fillable = ['title','file','extension', 'size' , 'course_id'];

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }
}
