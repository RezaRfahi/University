<?php

namespace App\Enums;

enum LogActionEnum:string
{
    case login = 'login' ;
    case logout = 'logout' ;
    case insert = 'insert' ;
    case delete = 'delete' ;
    case update = 'update' ;
}
