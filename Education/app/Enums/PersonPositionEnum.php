<?php

namespace App\Enums;

enum PersonPositionEnum:string
{
    case employee = 'employee';
    case teacher = 'teacher';
    case student = 'student';
}
