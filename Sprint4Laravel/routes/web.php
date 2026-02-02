<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

    
//User Routes GET
Route::get('/register', action: [RegisterController::class, 'index']) -> name('register.index');

//User routes POST
Route::post('/register', [RegisterController::class, 'register'])->name('register');

?>
