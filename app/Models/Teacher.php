<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //a teacher belongs to one department
    public function department()
    {
        return $this->belongsTo(Department::class,'dept_id');
    }
}
