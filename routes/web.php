<?php

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $team= Team::all();
    $players= Player::all();
    
    

    $hommes = $players->where('gender_id', 1);
    $countHommes = 0;
    $femmes = $players->where('gender_id', 2);
    $countFemmes = 0;

    return view('dashboard', compact('team', 'players', 'hommes', 'femmes', 'countHommes', 'countFemmes'));
});

// Deux routes resources
Route::resource('teams', TeamController::class);
Route::resource('players', PlayerController::class);