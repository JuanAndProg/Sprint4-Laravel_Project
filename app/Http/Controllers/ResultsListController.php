<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class ResultsListController extends Controller
{
<<<<<<< HEAD
    public function __invoke()
    {
        $results = Game::orderBy('created_at', 'desc')->paginate(4);
        return view('results', compact('results'));
=======
    public function __invoke(){
        return 'Show the Results';
>>>>>>> 2aff91cecd200f0b516347176debbef68ed3cc43
    }
}
