<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentSubject extends Model
{
    protected $table = 'student_subjects';

    protected $fillable =['student_id','subject_id'];

        // Define the relationships
        public function student()
        {
            return $this->belongsTo(Student::class, 'student_id');
        }
    
        public function subject()
        {
            return $this->belongsTo(Subject::class, 'subject_id');
        }
}
