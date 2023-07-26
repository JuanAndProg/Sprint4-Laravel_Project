<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamSelectionController extends Controller
{
    public function index(){
        return view('teams.index');
    }
    public function team($team){
        //compact('team)=>['curso'=>$curso]
        return view('teams.team' , compact('team'));
    }
}
