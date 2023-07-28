<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Team;

class GamesController extends Controller
{
    public function __invoke()
    {
        return view('games');
    }

    public function create()
    {
        $teams = Team::all();
        $status = 'pending';
        return view('games', compact('teams', 'status'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'teamA' => 'required',
            'teamB' => 'required',
            'pointsA' => ($request->status === 'pending') ? 'required|integer|min:0' : 'nullable|integer|min:0',
            'pointsB' => ($request->status === 'pending') ? 'required|integer|min:0' : 'nullable|integer|min:0',
            'status' => 'required|in:pending,played',
        ]);

        $teamAId = $request->teamA;
        $teamBId = $request->teamB;

        if ($teamAId === $teamBId) {
            return redirect()->route('games.create')->with('error', 'Team A and Team B cannot be the same.');
        }

        $game = new Game();

        $game->teamA_id = $request->teamA;
        $game->teamB_id = $request->teamB;
        $game->pointsA = ($request->status === 'pending') ? 0 : $request->pointsA;
        $game->pointsB = ($request->status === 'pending') ? 0 : $request->pointsB;
        $game->status = $request->status;

        $game->save();

        return redirect()->route('home')->with('success', 'Game created successfully.');
    }
}
