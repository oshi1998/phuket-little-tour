<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class ViewController extends Controller
{
    public function homeView()
    {
        $tripGallery = File::files(public_path('img/trip-gallery'));
        $tripGallery = collect($tripGallery)->map(function ($file) {
            return asset('img/trip-gallery/' . $file->getFilename());
        });
        return view('home', compact('tripGallery'));
    }

    public function aboutView()
    {
        return view('about');
    }

    public function reviewView()
    {
        return view('review');
    }

    public function contactView()
    {
        return view('contact');
    }
}
