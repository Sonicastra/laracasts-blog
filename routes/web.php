<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('app');
});

Route::get('/posts', [ PostController::class, 'index' ])->name('home');
Route::get('posts/{post:slug}', [ PostController::class, 'show' ]);

Route::get('register', [ RegisterController::class, 'create' ]);
Route::post('register', [ RegisterController::class, 'store' ]);