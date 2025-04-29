<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
        'employee_name',
        'clock_in',
        'clock_out',
        'overtime',
        'location',
        'notes',
    ];

    // Tambahkan casting untuk clock_in dan clock_out
    //ini yang ngbuat ga bisa di create error nya "Call to a member function format() on string"
    protected $casts = [
        'clock_in' => 'datetime',
        'clock_out' => 'datetime',
    ];
}