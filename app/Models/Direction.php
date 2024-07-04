<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    use HasFactory;

    protected $fillable = [
        'line_one',
        'line_two',
        'postal_code',
        'state',
    ];

    public function directionable()
    {
        return $this->morphTo();
    }
}
