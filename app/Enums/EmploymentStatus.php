<?php

namespace App\Enums;

enum EmploymentStatus: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case RESIGNED = 'resigned';
    case TERMINATED = 'terminated';
    case SEPARATED = 'separated';
}