<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::prefix(LaravelLocalization::setLocale())
    ->middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])
    ->name('site.')
    ->group(function(){

        /**
         * home page route
         */
        Route::get('/' , [HomeController::class , 'index'])->name('index');
        Route::post('/contact' , [HomeController::class , 'store'])->name('store');
    });