<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Service;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function create()
    {
        $services = Service::all();
        return view('appointments.create', compact('services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'vehicle_make' => 'required',
            'vehicle_model' => 'required',
            'year' => 'required|integer',
            'service_id' => 'required|exists:services,id',
            'preferred_date' => 'required|date',
            'preferred_time' => 'required',
        ]);
        Appointment::create($request->all());
        return redirect()->route('appointments.success');
    }

    public function success()
    {
        return view('appointments.success');
    }
}