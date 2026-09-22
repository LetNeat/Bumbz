<?php

namespace App\Enums;

enum PaymentSourceType: string
{
    case SALARY_DEDUCTION = 'salary_deduction';
    case THIRTEENTH_MONTH = 'thirteenth_month';
    case MANUAL = 'manual';
    case FINAL_PAY = 'final_pay';
    case CO_BORROWER_DEDUCTION = 'co_borrower_deduction';
    case ADJUSTMENT = 'adjustment';
}