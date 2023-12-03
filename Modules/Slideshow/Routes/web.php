<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;
use Modules\Slideshow\Http\Controllers\Dashboard\SlideshowController;

Route::middleware('auth:web')->name('admin.')->prefix('admin/home/')->group(function () {
    Route::resource('slides' , SlideshowController::class)->except(['show']);
});
