<?php

namespace App\Enums;

enum LoanType: string
{
    case THIRTEENTH_MONTH = 'thirteenth_month';
    case SALARY_DEDUCTION = 'salary_deduction';
}