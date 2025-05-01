<?php

use App\Http\Controllers\Dashboard\ContactController;
use App\Http\Controllers\Site\ContactController as SiteContactController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\ExpertiseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth:web');

Auth::routes();

Route::group(
    [
        'prefix' => 'dashboard/',
        'as' => 'dashboard.',
        'middleware' => ['auth:web']
    ],
    function () {
        Route::get('settings' , [SettingController::class , 'index'])->name('settings.index');
        Route::post('settings' , [SettingController::class , 'update'])->name('settings.update');
        Route::resource('expertise' , ExpertiseController::class)->except('show' , 'edit' , 'create');
        Route::resource('contacts' , ContactController::class)->only('index' , 'destroy');
        Route::post('contacts/message' , SiteContactController::class)->name('contact.store');
    }
);
