<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;

class CreateGameController extends Controller{
    public function index(){
        return view('createGame');
    }

      public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'required|string',
            'price'       => 'required|numeric|min:0',
            'coverImage'  => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $image = $request->file('coverImage');

        $imageName = time() . '_' . $image->getClientOriginalName();

        $image->move(public_path('images/games'), $imageName);

        Game::create([
            'title'       => $request->name,
            'description' => $request->description,
            'price'       => $request->price,
            'urlImage'    => 'images/games/' . $imageName,
        ]);

        return redirect()
            ->route('listGames.index')
            ->with('success', 'Game created successfully');
    }
}

?>