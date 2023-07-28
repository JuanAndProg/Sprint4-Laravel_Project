<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;


class CreateTeamController extends Controller
{
    public function __invoke(){
        return view('createTeam');
    }
    public function create(){
        return view('create.store');
    }
    public function store(Request $request){

        $request->validate([
            'name'=> 'required'
        ]);

        $team = new Team();

        $team->name = $request->name;

        $team->save();

        return redirect()->route('teams.team', $team);
    }
}
