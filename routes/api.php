<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::middleware('auth:sanctum')->group(function () {
    Route::get('all-user', [App\Http\Controllers\ApiController::class, 'allUsers']);
    Route::post('update-user/{id}', [App\Http\Controllers\ApiController::class, 'update']);
    Route::get('logout-user', [App\Http\Controllers\ApiController::class, 'logout']);
});

Route::post('add-user', [App\Http\Controllers\ApiController::class, 'register']);
Route::post('login-user', [App\Http\Controllers\ApiController::class, 'login']);
