<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DiscussionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/discussions', [DiscussionsController::class, 'store'])->name('discussions.store')->middleware('auth:sanctum');


