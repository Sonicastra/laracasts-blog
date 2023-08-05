<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ HomeController::class, 'index' ]);

Route::get('/posts', [ PostController::class, 'index' ])->name('home');
Route::get('posts/{post:slug}', [ PostController::class, 'show' ]);
Route::post('posts/{post:slug}/comments', [ PostCommentController::class, 'store' ]);

Route::get('register', [ RegisterController::class, 'create' ])->middleware('guest');
Route::post('register', [ RegisterController::class, 'store' ])->middleware('guest');
Route::post('logout', [ LoginController::class, 'destroy' ])->middleware('auth');
Route::get('login', [ LoginController::class, 'create' ])->middleware('guest');
Route::post('login', [ LoginController::class, 'store' ])->middleware('guest');