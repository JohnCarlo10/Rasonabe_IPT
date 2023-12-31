<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
    public function getTeacherUserNameAttribute(){
        return $this->teacher->user->full_name;
    }
    public function students(){
        return $this->hasMany(Student::class);
    }
}
