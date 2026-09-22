<?php

namespace App\Enums;

enum InterestMethod: string
{
    case TOTAL_RATE = 'total_rate';
    case MONTHLY_RATE = 'monthly_rate';
}