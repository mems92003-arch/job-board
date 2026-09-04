<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use Psy\TabCompletion\Matcher\AbstractDefaultParametersMatcher;

// public routes
Route::get('/',indexController::class);
Route::get('/contact',ContactController::class);


Route::get('/job',[JobController::class,'index']);

Route::resource('comments',CommentController::class);
Route::resource('tags',TagController::class);

Route::get('/signup',[AuthController::class, 'showSignupForm'])->name('signup');
Route::get('/login',[AuthController::class, 'showloginForm'])->name('login');

Route::post('/signup',[AuthController::class,'signup']);
Route::post('/login',[AuthController::class,'login']);
Route::post('logout',[AuthController::class,'logout'])->name('logout');


// protected routes
Route::middleware('auth')->group(function (){
    Route::resource('blog',PostController::class);
});

Route::middleware('onlyMe')->group(function(){
    Route::get('/about',AboutController::class);

});