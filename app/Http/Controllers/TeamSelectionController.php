<?php

namespace App\Http\Controllers;

use App\Models\Team;
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
}
