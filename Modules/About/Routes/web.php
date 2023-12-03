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
use Modules\About\Http\Controllers\Dashboard\AboutController;

Route::middleware('auth:web')->controller(AboutController::class)->name('admin.')->prefix('admin/about-us/')->group(function () {
    Route::get('/' , 'index')->name('about.index');
    Route::get('/{about}/edit' , 'edit')->name('about.edit');
    Route::put('/{about}' , 'update')->name('about.update');
});
