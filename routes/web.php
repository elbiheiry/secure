<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SolutionController;
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
        Route::post('/subscribe' , [HomeController::class , 'subscribe'])->name('subscribe');

        /**
         * about page route
         */
        Route::get('/about-us' , [AboutController::class , 'index'])->name('about');

        /**
         * services page route
         */
        Route::get('/our-services' , [ServiceController::class , 'index'])->name('services');
        Route::get('/services/{service}' , [ServiceController::class , 'service'])->name('service');

        /**
         * solutions page route
         */
        Route::get('/our-solutions' , [SolutionController::class , 'index'])->name('solutions');
        Route::get('/solutions/{solution}' , [SolutionController::class , 'solution'])->name('solution');

        /**
         * business partners route
         */
        Route::get('/business-partners' , [HomeController::class , 'partners'])->name('partners');

        /**
         * careers page route
         */
        Route::get('/careers' , [CareerController::class , 'index'])->name('careers.index');
        Route::get('/careers/{career}' , [CareerController::class , 'career'])->name('careers.career');
        Route::post('/career/store' , [CareerController::class , 'store'])->name('careers.store');

        /**
         * contact us page
         */
        Route::get('/contact-us' , [ContactController::class , 'index'])->name('contact.index');

        /**
         * blog page route
         */
        Route::get('/blog' , [BlogController::class , 'index'])->name('blog');
        Route::get('/blog/{article}' , [BlogController::class , 'article'])->name('article');


        // Authentication Routes...
        Route::get('login', [AuthController::class , 'showLoginForm'])->name('login');
        Route::post('login', [AuthController::class , 'login']);
        Route::post('logout', [AuthController::class , 'logout'])->name('logout');
        
        /**
         * forums page route
         */
        Route::middleware('auth:members')->group(function (){
            Route::get('/forums' , [ForumController::class , 'index'])->name('forums');
            Route::get('/forums/{forum}' , [ForumController::class , 'forum'])->name('forum');
            Route::post('/forums/store' , [ForumController::class , 'createForum'])->name('createForum');
            Route::post('/forums/add-comment' , [ForumController::class , 'addComment'])->name('addComment');
        });
    });