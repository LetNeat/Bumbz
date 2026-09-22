<?php

namespace App\Enums;

enum CoBorrowerMode: string
{
    case ONE_TO_ONE = 'one_to_one';
    case ONE_TO_MANY = 'one_to_many';
    case ONE_TO_MANY_WITH_LIMIT = 'one_to_many_with_limit';
}