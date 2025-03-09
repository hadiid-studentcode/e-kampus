<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DiscussionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/discussions', [DiscussionsController::class, 'store'])->name('discussions.store')->middleware('auth:sanctum');
Route::post('/discussions/{id}/replies', [DiscussionsController::class, 'replies'])->name('discussions.replies')->middleware('auth:sanctum');
Route::post('/discussions/getDataDiscussions', [DiscussionsController::class, 'getDataDiscussions'])->name('discussions.getDataDiscussions')->middleware('auth:sanctum');
