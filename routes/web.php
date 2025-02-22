<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/dashboard', function () {
    return 'dashboard Page';
})->name('dashboard')->middleware('auth');


// Route::middleware('auth')->name('dosen.')->prefix('/dosen')->group(function () {

// });