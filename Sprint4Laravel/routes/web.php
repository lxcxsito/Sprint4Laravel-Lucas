<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;


use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CreateReviewController;
    
//User Routes GET
Route::get('/register', action: [RegisterController::class, 'index']) -> name('register.index');
Route::get('/login', action: [LoginController::class, 'index']) -> name('login.index');
Route::get('/logout', action:[LogoutController::class,'index']) -> name('logout.index');


//User routes POST
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/login', [LoginController::class, 'login'])->name('login');


//Reviews routes
Route::get('/reviews', action: [ReviewController::class, 'index']) -> name('review.index');
Route::get('/games/{game}/reviews', [ReviewController::class, 'reviews'])->name('games.reviews');
Route::get('/games/{game}/reviews/create', [CreateReviewController::class, 'index'])->name('reviews.create');
Route::post('/games/{game}/reviews', [CreateReviewController::class, 'createReview'])->name('reviews.store');
?>
