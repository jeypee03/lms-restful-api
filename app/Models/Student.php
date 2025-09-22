<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'email',
        'strand_year',
        'address',
        'contact_number',
        'date_of_birth',
    ];
}
