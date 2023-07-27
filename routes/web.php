<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\CreateTeamController;
use App\Http\Controllers\ResultsListController;
use App\Http\Controllers\TeamSelectionController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class)->name('home');

Route::get('createTeam', CreateTeamController::class)->name('createTeam');

Route::get('results', ResultsListController::class)->name('results');

Route::controller(TeamSelectionController::class)->group(function(){
    Route::get('teams', 'index')->name('teams.index');
    Route::get('teams/{team}', 'team')->name('teams.team');
});

Route::get('games', GamesController::class)->name('games');
