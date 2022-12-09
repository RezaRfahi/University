<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;

    protected $fillable=[
        'name', 'user_id', 'warden_name'
        ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }

}
