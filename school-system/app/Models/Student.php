<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function profile(){
        return $this->belongsTo(Profile::class, 'image_id');
    }

    public function gradeinfo()
    {
        return $this->belongsTo(Grade::class, 'grade');
    }

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }

}
