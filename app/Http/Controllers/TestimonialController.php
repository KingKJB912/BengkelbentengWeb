<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::paginate(9);
        return view('testimonials.index', compact('testimonials'));
    }
}