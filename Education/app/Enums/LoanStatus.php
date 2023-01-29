<?php

namespace App\Enums;

enum LoanStatus:string
{
    case onUsing = 'onUsing';
    case repay = 'repay';
}
