<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassDate extends Model
{
    use HasFactory;

    protected $fillable=[
        'classroom_id', 'course_id', 'course_name', 'teacher_name',
        'date', 'time', 'status', 'circumstance'
    ];

}