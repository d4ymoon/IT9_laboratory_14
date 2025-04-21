<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);
 
 
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
 
 
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
 
 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');


Route::resource('posts', PostController::class)->middleware('auth');
Route::get('/dashboard', [PostController::class, 'dashboard'])->middleware('auth');