<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //a student belongs to one department
    public function department()
    {
        return $this->belongsTo(Department::class, 'dept_id');
    }
}
