<?php

namespace App\Enums;

enum UserPositionEnum:string
{
    case manager='manager';
    case assistant='assistant';
    case warden='warden';
    case impresario='impresario';
    case employee='employee';
}
