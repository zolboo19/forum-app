<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ReplyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('/questions', QuestionController::class);
Route::apiResource('/categories', CategoryController::class);
Route::apiResource('/questions/{question}/replies', ReplyController::class);
