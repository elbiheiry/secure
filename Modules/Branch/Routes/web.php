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
use Modules\Branch\Http\Controllers\Dashboard\BranchController;

Route::middleware('auth:web')->name('admin.')->prefix('admin/')->group(function () {
    Route::resource('branches' , BranchController::class)->except(['show' , 'create']);
});
