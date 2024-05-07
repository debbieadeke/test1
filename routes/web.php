<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\blogController;


//Route::get('/home', function () {
//    return view('home');
//});
Route::get('/',[homeController::class, 'index'])->name('welcome');
Route::get('home',[homeController::class, 'home'])->name('home');
Route::get('login',[homeController::class,'login'])->name('login');
Route::get('register',[homeController::class,'register'])->name('register');
Route::get('blog',[blogController::class,'blog'])->name('blog');
Route::get('post',[blogController::class,'post'])->name('post');
Route::post('post_blog',[blogController::class,'store'])->name('post_blog');
