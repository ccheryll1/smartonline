<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendeance extends Model
{
    protected $fillable = [
        'employee_name',
        'clock_in',
        'clock_out',
        'overtime',
        'location',
        'notes',
    ];
}
