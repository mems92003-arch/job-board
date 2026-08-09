<?php

use App\Http\Controllers\api\v1\PostApiController;

// use App\Http\Controllers\CommentController;
// use App\Http\Controllers\PostController;
// use App\Http\Controllers\TagController;
// use Illuminate\Support\Facades\Route;


 //REST API , RESTfull API => HTTP Standered
// Route::post('/blog',[PostController::class,'create']);
// Route::delete('/blog/{id}',[PostController::class,'delete']);

// Route::post('/comments',[CommentController::class,'create']);
// Route::post('/tags',[TagController::class,'create']); 


Route::prefix('v1')->group(function () {
    Route::apiResource('post',PostApiController::class);
});