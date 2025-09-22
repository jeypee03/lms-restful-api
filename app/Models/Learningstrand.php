<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Learningstrand extends Model
{
    protected $fillable = [
        'title',
        'description',
        'teacher_id',
        'category',
    ];
}
