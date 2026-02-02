<?php

namespace App\Http\Controllers;
use App\Models\Game;    
use App\Http\Controllers\Controller;

class ReviewController extends Controller{

public function reviews(Game $game)
{
    $game->load(relations: 'reviews.user');

    $reviews = $game->reviews;

    return view('games.reviews', compact('game', 'reviews'));
}
}


?>