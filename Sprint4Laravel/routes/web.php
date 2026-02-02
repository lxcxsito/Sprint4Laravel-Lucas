<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CreateReviewController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CreateCategoryController;
use App\Http\Controllers\ListGamesController;
use App\Http\Controllers\CreateGameController;
use App\Http\Controllers\BuyGameController;
use App\Http\Controllers\HomeController;

//User Routes GET
Route::get('/register', action: [RegisterController::class, 'index']) -> name('register.index');
Route::get('/login', action: [LoginController::class, 'index']) -> name('login.index');
Route::get('/logout', action:[LogoutController::class,'index']) -> name('logout.index');


//User routes POST
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/login', [LoginController::class, 'login'])->name('login');


// HOME
Route::get('/', action: [HomeController::class, 'index']) -> name('home.index');


//Reviews routes
Route::get('/reviews', action: [ReviewController::class, 'index']) -> name('review.index');
Route::get('/games/{game}/reviews', [ReviewController::class, 'reviews'])->name('games.reviews');
Route::get('/games/{game}/reviews/create', [CreateReviewController::class, 'index'])->name('reviews.create');
Route::post('/games/{game}/reviews', [CreateReviewController::class, 'createReview'])->name('reviews.store');


//Games Routes
Route::get('/listGames', action: [ListGamesController::class, 'index']) -> name('listGames.index');
Route::get('/cart' , action : [CartController::class , 'index']) -> name('cart.index');
Route::get('/{game}/buyGame', [BuyGameController::class, 'show']) ->name('buyGame.show');
Route::post('/{game}/buyGame', [BuyGameController::class, 'buyGame']) ->name('buyGame.buy');

//ONLY ADMIN
Route::get('/games/create', [CreateGameController::class, 'index'])->name('createGame.index');
Route::post('/games/create', [CreateGameController::class, 'store'])->name('createGame.store');
Route::get('/category/create', [CreateCategoryController::class, 'index'])->name('createCategory.index');
Route::post('/category/create', [CreateCategoryController::class, 'createCategory'])->name('createCategory.createCategory');

?>
