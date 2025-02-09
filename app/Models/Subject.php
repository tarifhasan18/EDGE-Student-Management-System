<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
     //a subject belongs to one department
     public function department()
     {
         return $this->belongsTo(Department::class, 'dept_id');
     }
     public function sessions()
     {
        return $this->belongsTo(AcademicSession::class,'session_id');
     }
}
