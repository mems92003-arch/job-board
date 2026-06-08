<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::get('/',[indexController::class,'index']);
Route::get('/about',[indexController::class,'about']);
Route::get('/contact',[indexController::class,'contact']);
Route::get('/job',[JobController::class,'index']);
Route::get('/blog',[PostController::class,'index']);
Route::get('/blog/create',[PostController::class,'create']);
Route::get('/blog/{id}',[PostController::class,'show']);
