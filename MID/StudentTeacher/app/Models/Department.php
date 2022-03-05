<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Course;

class Department extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function students(){
        return $this->hasMany(Student::class,'dept_id');
    }

    public function courses(){
        return $this->hasMany(Course::class,'offered_by');
    }

}
