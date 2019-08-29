<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    $fillable = [
        'name',
        'start_date',
        'end_date',
    ];
}
