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
    public function team($id){
    
        $team = Team::find($id);
        //compact('team)=>['curso'=>$curso]
        return view('teams.team' , compact('team'));
    }
}
