<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login.index')->with('error', 'Debes iniciar sesión para ver tu carrito.');
        }

        
        $games = $user->games; 
        return view('cart', compact('games'));
    }
}
