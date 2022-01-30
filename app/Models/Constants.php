<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Constants extends Model
{
    use HasFactory;

    // *** general use ***

    const INACTIVE = 0;
    const ACTIVE   = 1;

}
