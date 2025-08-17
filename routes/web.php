<?php

use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::get('/lang/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'th'])) {
        abort(400);
    }
    session(['locale' => $locale]);
    return redirect()->back();
})->name('lang.switch');

Route::get('/', [ViewController::class, 'homeView'])->name('home.view');
Route::get('/about', [ViewController::class, 'aboutView'])->name('about.view');
Route::get('/moments', [ViewController::class, 'momentsView'])->name('moments.view');
Route::get('/contact', [ViewController::class, 'contactView'])->name('contact.view');
