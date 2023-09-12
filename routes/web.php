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

Route::get('create', CreateTeamController::class)->name('create');

Route::get('results', ResultsListController::class)->name('results');

Route::controller(TeamSelectionController::class)->group(function(){
    Route::get('teams', 'index')->name('teams.index');
    Route::get('teams/{team}', 'team')->name('teams.team');
});

<<<<<<< HEAD
Route::get('teams/{team}', [TeamSelectionController::class, 'team'])->name('teams.team');

Route::get('teams/{team}/edit', [TeamSelectionController::class, 'edit'])->name('teams.edit');

Route::put('teams/{team}',[TeamSelectionController::class, 'update'])->name('teams.update');

Route::delete('teams/{team}', [TeamSelectionController::class, 'destroy'])->name('teams.destroy');

Route::get('/games', [GamesController::class, 'create'])->name('games.create');

Route::post('/games', [GamesController::class, 'store'])->name('games.store');
=======
Route::get('games', GamesController::class)->name('games');
>>>>>>> 2aff91cecd200f0b516347176debbef68ed3cc43
