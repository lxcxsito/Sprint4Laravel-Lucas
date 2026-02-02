<?php
namespace App\Http\Controllers;
use App\Models\Game;
use App\Http\Controllers\Controller;

class ListGamesController extends Controller{
     public function index(){
        $games = Game::all();
        return view('listGames', compact('games'));
    }
}


?>