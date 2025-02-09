<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AcademicSession extends Model
{
    protected $table='academic_sessions';
    protected $fillable=['session'];

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
}
