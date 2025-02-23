<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\MaterialsController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');

    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.store');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth:sanctum');


Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');
    });

    Route::prefix('courses')->name('courses.')->group(function () {
        Route::get('/', [CourseController::class, 'index'])->name('index');
        Route::post('/', [CourseController::class, 'store'])->name('store');
        Route::put('/{id}', [CourseController::class, 'update'])->name('update');
        Route::delete('/{id}', [CourseController::class, 'destroy'])->name('destroy');
        Route::post('/{id}/enroll', [CourseController::class, 'enroll'])->name('enroll');
    });

    Route::prefix('classes')->name('classes.')->group(function () {
        Route::get('/', [ClassController::class, 'index'])->name('index');
        Route::get('/show/{id}', [ClassController::class, 'show'])->name('show');
    });

    Route::post('/materials', [MaterialsController::class, 'store'])->name('materials.store');
    Route::get('/materials/{id}/download', [MaterialsController::class, 'download'])->name('materials.download');
});
