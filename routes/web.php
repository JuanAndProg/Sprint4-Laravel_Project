<?php

use App\Http\Controllers\GamePlayController;
use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class);

Route::get('/create', CreateTeam::class);

Route::get('/results', ResultsList::class);

Route::controller(TeamSelection::class)->group(function(){
    Route::get('/teams', 'index');
    Route::get('/teams', 'team');
});

Route::get('/games', GamePlayController::class);
