<?php

namespace App\Http\Controllers;

use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::paginate(9);
        return view('gallery.index', compact('galleries'));
    }
}