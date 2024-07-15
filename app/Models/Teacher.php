<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'phone_number',
        'professional_license',
        'email',
    ];

    public function direction()
    {
        return $this->morphOne(Direction::class, 'directionable');
    }

    public function enrollments()
    {
        return $this->morphMany(Enrollment::class, 'enrollable');
    }

    public function courses()
    {
        return $this->morphToMany(Course::class, 'enrollable', 'enrollments');
    }
}
