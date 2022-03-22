<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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
        return $this->belongsToMany('App\Models\User', 'favorites', 'course_id', 'user_id');
    }
    public function favorited()
    {
        return (bool)Favorite::where('user_id', Auth::id())
            ->where('course_id', $this->id)
            ->first();
    }

    public function replicateRow()
    {
       $clone = $this->replicate();
       $clone->push();

       foreach($this->lessons as $lesson)
       {
           $clone->lessons()->create($lesson->toArray());
       }
       foreach($this->attachments as $attachment)
       {
           $clone->attachments()->create($attachment->toArray());
       }


       $clone->save();
    }

}
