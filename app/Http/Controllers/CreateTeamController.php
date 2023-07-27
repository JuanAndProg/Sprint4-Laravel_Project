<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateTeamController extends Controller
{
    public function __invoke(){
        return view('createTeam');
    }
}
