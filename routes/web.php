<?php

use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ViewController::class,'homeView'])->name('home.view');
Route::get('/about',[ViewController::class,'aboutView'])->name('about.view');
Route::get('/review',[ViewController::class,'reviewView'])->name('review.view');
Route::get('/contact',[ViewController::class,'contactView'])->name('contact.view');
