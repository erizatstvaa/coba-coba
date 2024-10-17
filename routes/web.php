<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
@@ -16,3 +17,11 @@
Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', [ProfileController::class, 'profile']);
Route::get('/profile/{nama}',[ProfileController::class, 'profile']);
Route::get('/profile/{nama}/{kelas}/{npm}',[ProfileController::class, 'profile']);
Route::get('/user/profile', [UserController::class,'profile']);
Route::get('/user/create', [UserController::class,'create']);
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

