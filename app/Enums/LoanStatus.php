<?php

namespace App\Enums;

enum LoanStatus: string
{
    case APPROVED = 'approved';
    case ACTIVE = 'active';
    case PARTIALLY_PAID = 'partially_paid';
    case FULLY_PAID = 'fully_paid';
    case DEFAULTED = 'defaulted';
    case CANCELLED = 'cancelled';
}