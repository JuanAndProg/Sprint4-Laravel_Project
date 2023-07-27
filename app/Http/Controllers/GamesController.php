<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StoreGame;
use App\Models\Game;

class GamesController extends Controller
{
    public function __invoke(){
        return view('games');
    }
    public function create(){
        return view('games');
    }
    public function store(StoreGame $request){
        
        $game = Game::create($request->all());
    }

}
