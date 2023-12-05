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
use Modules\Forum\Http\Controllers\Dashboard\ForumCommentController;
use Modules\Forum\Http\Controllers\Dashboard\ForumController;

Route::middleware('auth:web')->name('admin.')->prefix('admin/')->group(function () {
    Route::resource('forums' , ForumController::class)->except(['show']);

    Route::get('/forums/comments/{forum}' , [ForumCommentController::class , 'index'])->name('forums.comments');
    Route::get('/forums/comments/show/{id}' , [ForumCommentController::class , 'show'])->name('forums.comments.show');
    Route::delete('/forums/comments/delete/{id}' , [ForumCommentController::class , 'destroy'])->name('forums.comments.destroy');
});
