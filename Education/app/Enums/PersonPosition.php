<?php

namespace App\Enums;

enum PersonPosition:string
{
    case employee = 'employee';
    case teacher = 'teacher';
    case student = 'student';
}
