<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamSelectionController extends Controller
{
    public function index(){
        return 'Here you have the teams list';
    }
    public function team(){
        return 'Here you have the team selected';
    }
}
