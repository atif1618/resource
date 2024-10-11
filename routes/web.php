<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::middleware(['auth'])->group(function () {

 Route::resource('data',UserController::class);
});

Route::get('/showregister',[AdminController::class,'showregister']);

Route::post('/register',[AdminController::class,'register'])->name('register');

Route::get('/login',[AdminController::class,'showlogin']);

Route::post('/login',[AdminController::class,'login'])->name('login');

Route::get('/logout',[AdminController::class,'logout']);

