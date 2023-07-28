<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class ResultsListController extends Controller
{
    public function __invoke()
    {
        $results = Game::orderBy('created_at', 'desc')->paginate(4);
        return view('results', compact('results'));
    }
}
