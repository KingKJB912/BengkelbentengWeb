<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'phone_number',
        'car_type',
        'service',
        'date',
        'time',
        'notes',
        'status',
    ];
}
