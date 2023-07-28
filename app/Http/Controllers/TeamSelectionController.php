<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Game;
use Illuminate\Http\Request;

class TeamSelectionController extends Controller
{
    public function index(){


        $teams = Team::paginate();
       
        return view('teams.index', compact('teams'));
    }
    public function team(Team $team){
    
        return view('teams.team' , compact('team'));
    }
    public function edit(Team $team){
          
        return view('teams.edit', compact('team'));
    }
    public function update(Request $request, Team $team){
        $team->name = $request-> name;
        $team->save();

        return redirect()->route('teams.team', $team);
    }
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->route('teams.index')->with('success', 'Team deleted successfully.');
    }

    public function results(Team $team)
    {
        $results = Game::where('teamA_id', $team->id)
                       ->orWhere('teamB_id', $team->id)
                       ->orderBy('created_at', 'desc')
                       ->paginate(10);

        return view('teams.results', compact('team', 'results'));
    }
}
