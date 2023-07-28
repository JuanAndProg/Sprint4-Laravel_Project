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

Route::post('newTeam', [CreateTeamController::class, 'store'])->name('create.store');

Route::get('results', ResultsListController::class)->name('results');

Route::get('teams', [TeamSelectionController::class, 'index'])->name('teams.index');

Route::get('teams/{team}', [TeamSelectionController::class, 'team'])->name('teams.team');

Route::get('teams/{team}/edit', [TeamSelectionController::class, 'edit'])->name('teams.edit');

Route::put('teams/{team}',[TeamSelectionController::class, 'update'])->name('teams.update');

Route::get('/games', [GamesController::class, 'create'])->name('games.create');

Route::post('/games', [GamesController::class, 'store'])->name('games.store');
