<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;

    protected $fillable=[
        'name', 'group_code', 'course_code', 'classroom_id', 'teacher_id',
        'teacher_name', 'term_number', 'units', 'first_date', 'last_date',
        'start_time', 'finish_time'
    ];

    public function classroom() : BelongsTo
    {
        return $this->belongsTo(Classroom::class);
    }

    public function classDates() : HasMany
    {
        return $this->hasMany(ClassDate::class);
    }

    public function teacher() : BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }

}
