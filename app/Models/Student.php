<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'age',
        'school_grade',
    ];

    public function direction()
    {
        return $this->morphOne(Direction::class, 'directionable');
    }
}
