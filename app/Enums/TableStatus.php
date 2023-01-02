<?php

namespace App\Enums;

use App\Models\Table;

enum TableStatus: string
{
    case Pending = 'pending';
    case Available = 'available';
    case Unavailable = 'unavailable';

}
