<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    public function enrollable()
    {
        return $this->morphTo();
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
