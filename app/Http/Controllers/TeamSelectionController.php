<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Game;
use Illuminate\Http\Request;

class TeamSelectionController extends Controller
{
    public function index(){


        $teams = Team::paginate(12);
       
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
        // Eliminamos todos los registros de games asociados a este equipo
        $team->games()->delete();

        // Finalmente, eliminamos el equipo
        $team->delete();

        return redirect()->route('teams.index');
    }
}