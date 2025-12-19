<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function grades()
    {
        return $this->belongsToMany(Grade::class, 'grade_subject', 'subject_id', 'grade_id');
    }

    public function students()
    {
        return $this->belongsToMany(Student::class)->withTimestamps();
    }
}
