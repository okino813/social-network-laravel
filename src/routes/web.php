<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('index');
//});

// Redirige vers controller test

Route::get('/dashboard', [UserController::class, 'index'])->name('user.index');
Route::resource('users', UserController::class)->except('create','store');
Route::resource('posts', PostController::class)->except('destroy');
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
