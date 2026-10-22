<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;



Route::get('/', [BlogController::class,'index']);
// if wildcard and variable name are same,Blog::findOrFail($slug) will work.
Route::get('/blogs/{blog:slug}', [BlogController::class,'show'])->where('blog','[A-z\d\-_]+');//=>wildcard contraint
Route::get('/register',[AuthController::class,'create'])->middleware('guest');
Route::post('/register',[AuthController::class,'store'])->middleware('guest');

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::post('/logout',[AuthController::class, 'logout'])->middleware('auth');

Route::get('login',[AuthController::class, 'login'])->middleware('guest');
Route::post('login',[AuthController::class, 'post_login'])->middleware('guest');