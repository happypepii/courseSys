<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    
    protected $fillable = ['courseID', 'courseTitle', 'credit', 
    'mandatory', 'major', 'grade', 'day', 'period',
    'instructor', 'maxCapacity', 'currentCapacity', 'created_at', 'updated_at'];
}