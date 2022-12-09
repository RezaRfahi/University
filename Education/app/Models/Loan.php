<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = [
    'object_name', 'person_name', 'person_position', 'person_identify', 'status', 'description'
    ];

}
