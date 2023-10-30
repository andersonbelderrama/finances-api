<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;


Route::prefix('auth')->group(function () {
    Route::post('login', [AuthController::class, 'login'])->middleware('guest');
    Route::post('register', [AuthController::class, 'register'])->middleware('guest');
    Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

});

Route::apiResource('categories', CategoryController::class)->middleware('auth:sanctum');


Route::get('/user', function() {
    return auth()->guest() ? 'Guest' : auth()->user()->name;
})->middleware('auth:sanctum');
