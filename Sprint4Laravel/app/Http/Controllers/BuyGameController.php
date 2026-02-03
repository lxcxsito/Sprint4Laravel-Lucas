<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Purchase;
use Illuminate\Support\Facades\Auth;

class BuyGameController extends Controller
{
    public function buyGame(Game $game)
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login.index');
        }

        if (!$user->games->contains($game->id)) {
            Purchase::create([
                'user_id' => $user->id,
                'game_id' => $game->id
            ]);
        }

        return redirect()->route('cart.index')
            ->with('message', 'Juego comprado correctamente');
    }
}