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
use Modules\Career\Http\Controllers\Dashboard\CandidateController;
use Modules\Career\Http\Controllers\Dashboard\CareerController;

Route::middleware('auth:web')->name('admin.')->prefix('admin/')->group(function () {
    Route::resource('careers' , CareerController::class)->except(['show']);

    Route::name('careers.candidates.')->controller(CandidateController::class)->group(function() {
        Route::get('/{career}/candidates' , 'index')->name('index');
    });
});
