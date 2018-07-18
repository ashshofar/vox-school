<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Student;

class School extends Model
{

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
