<?php

namespace App\Models;

use App\Enums\ClassDateCircumstanceEnum;
use App\Enums\ClassDateStatusEnum;
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

    protected $casts = [
        'circumstance' => ClassDateCircumstanceEnum::class,
        'status' => ClassDateStatusEnum::class
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
