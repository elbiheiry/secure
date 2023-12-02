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
use Modules\Message\Http\Controllers\Dashboard\MessageController;

Route::middleware('auth:web')
    ->name('admin.')
    ->prefix('admin/')
    ->group(function () {
    Route::get('/messages', [MessageController::class, 'message'])->name('messages.index');
    Route::get('/messages/show/{id}', [MessageController::class, 'show'])->name('messages.show');
});