<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function create()
    {
        return view('booking');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:30',
            'car_type' => 'required|string|max:100',
            'service' => 'required|string|max:100',
            'date' => 'required|date',
            'time' => 'required|string',
            'notes' => 'nullable|string',
        ]);
        Booking::create($validated);
        // Redirect ke halaman sukses booking, kirim data booking
        return view('booking-success', [
            'booking' => $validated
        ]);
    }
}
