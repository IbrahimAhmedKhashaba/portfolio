<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::get('/', function () {
    return view('site.index');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
