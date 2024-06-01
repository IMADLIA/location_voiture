<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RegisterController;



Route::get('/home', function () {
    return view('home');
});

Route::get('/register' , [RegisterController::class , 'register']) -> name('register');
Route::post('/register' , [RegisterController::class , 'registerPost']) -> name('register');
Route::get('/login' , [LoginController::class , 'login']) -> name('login');
Route::post('/login' , [LoginController::class , 'loginPost']) -> name('login');
Route::get('/voitures', function () {
    return view('voitures.voiture');
});
Route::get('/client', [ClientController::class, 'index'])->name('client');






