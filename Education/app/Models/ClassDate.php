<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClassDate extends Model
{
    use HasFactory;

    protected $fillable=[
        'classroom_id', 'course_id', 'course_name', 'teacher_name',
        'date', 'time', 'status', 'circumstance'
    ];

    public function classroom() : BelongsTo
    {
        return $this->belongsTo(Classroom::class);
    }

    public function course() : BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

}
