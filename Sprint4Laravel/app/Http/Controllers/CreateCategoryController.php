<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;


class CreateCategoryController extends Controller{
    public function index(){
        return view('createCategory');
    }

    public function createCategory(Request $request){
        $request->validate([
            'name'        => 'required|string|max:255',
        ]);

       
        Category::create([
            'name' => $request->name,
        ]);

        return redirect()
            ->route('listGames.index')
            ->with('success', 'Game created successfully');
    }
}


?>