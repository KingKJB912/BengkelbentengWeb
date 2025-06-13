<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Gallery;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::paginate(6);
        $galleries = \App\Models\Gallery::latest()->paginate(6);
        $testimonials = \App\Models\Testimonial::latest()->paginate(6);
        return view('welcome', compact('services', 'galleries', 'testimonials'));
    }
}