<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'vehicle_make', 'vehicle_model', 'year',
        'service_id', 'preferred_date', 'preferred_time', 'description', 'status'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}