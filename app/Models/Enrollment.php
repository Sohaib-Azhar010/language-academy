<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'email',
        'country',
        'age',
        'phone',
        'language_course',
        'enrollment_date',
        'picture_path',
    ];
}
