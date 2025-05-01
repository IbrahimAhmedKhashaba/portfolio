<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth:web');

Auth::routes();
