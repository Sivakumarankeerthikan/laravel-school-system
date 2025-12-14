<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grade extends Model
{
    use SoftDeletes;

    public function student()
    {
        return $this->hasMany(Student::class, 'grade');
    }

    public function subjects()
    {
        return $this->hasMany(Subject::class, 'id');
    }
}
