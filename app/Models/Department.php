<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //a department has many students
    public function students()
    {
        return $this->hasMany(Student::class);
    }

    //a department has many subjects
    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }
}
