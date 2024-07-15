<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function students()
    {
        return $this->morphedByMany(Student::class, 'enrollable', 'enrollments');
    }

    public function teachers()
    {
        return $this->morphedByMany(Teacher::class, 'enrollable', 'enrollments');
    }
}
