<?php

namespace App\Enums;

enum UserLevelEnum:string
{
    case administrator='administrator';
    case controller='controller';
    case user='user';
    case reader='reader';
}
