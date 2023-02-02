<?php

namespace App\Enums;

enum ClassDateStatusEnum:string
{
    case no_run_time='no_run_time';
    case running='running';
    case finished='finished';
}
