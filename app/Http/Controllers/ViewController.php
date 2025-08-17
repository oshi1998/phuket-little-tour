<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class ViewController extends Controller
{
    public function homeView()
    {
        $tripImages = File::files(public_path('img/trips'));
        $tripImages = collect($tripImages)->map(function ($file) {
            return asset('img/trips/' . $file->getFilename());
        });
        return view('home', compact('tripImages'));
    }

    public function aboutView()
    {
        return view('about');
    }

    public function momentsView()
    {
        $momentImages = File::files(public_path('img/moments'));
        $momentImages = collect($momentImages)->map(function ($file) {
            return asset('img/moments/' . $file->getFilename());
        });
        return view('moments', compact('momentImages'));
    }

    public function contactView()
    {
        return view('contact');
    }
}
