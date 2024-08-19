<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Query extends Model
{
    use HasFactory;
    protected $table = 'queries';
    protected $fillable = ['first_name', 'last_name', 'phone', 'age', 'email', 'country', 'language_course', 'message'];
}
