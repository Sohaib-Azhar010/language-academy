<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'designation',
        'image_path',
        'teaching_experience',
        'seniority',
        'leadership_role',
        'qualifications',
        'scholarly_recognition',
        'honoring_words',
    ];
}
