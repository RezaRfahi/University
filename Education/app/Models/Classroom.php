<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Classroom extends Model
{
    use HasFactory;

    protected $fillable=[
        'name', 'type', 'building_id', 'building_name', 'classroom_number'
    ];

    public function building()
    {
        return $this->belongsTo(Building::class);
    }

    public function courses() : HasMany
    {
        return $this->hasMany(Course::class);
    }

    public function classDates() : HasMany
    {
        return $this->hasMany(ClassDate::class);
    }

}
