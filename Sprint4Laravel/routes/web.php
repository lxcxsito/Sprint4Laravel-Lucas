<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

    
//User Routes GET
Route::get('/register', action: [RegisterController::class, 'index']) -> name('register.index');
Route::get('/login', action: [LoginController::class, 'index']) -> name('login.index');


//User routes POST
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/login', [LoginController::class, 'login'])->name('login');

?>
