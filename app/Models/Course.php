<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','teacher_id', 'category_id' , 'image'];

    public function category()
    {
        return $this->belongsTo('App\Models\CourseCategory');
    }
    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher');
    }

    public function lessons()
    {
        return $this->hasMany('App\Models\CourseLesson');
    }
    public function attachments()
    {
        return $this->hasMany('App\Models\CourseAttachment');
    }
    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'users_courses', 'course_id', 'user_id');
    }

}
