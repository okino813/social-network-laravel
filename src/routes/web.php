<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Redirige vers controller test
Route::get('/test', [TestController::class, 'index']);
