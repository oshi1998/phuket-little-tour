<?php

use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ViewController::class,'homeView'])->name('home.view');
