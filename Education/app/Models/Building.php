<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Building extends Model
{
    use HasFactory;

    protected $fillable=[
        'name', 'user_id', 'warden_name'
        ];

    public function user() : HasOne
    {
        return $this->hasOne(User::class);
    }

    public function classrooms() : HasMany
    {
        return $this->hasMany(Classroom::class);
    }

}
