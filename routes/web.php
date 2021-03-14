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
    $team = Team::all();
    $players= Player::all();

    // FullTeamRandom
    foreach ($team as $item) {
        $countPlayer = $players->where('team_id', $item->id);
        $fullPlayer = $team->where(count($countPlayer), $item->players_max);
    }
    // 
    $playerNoTeam = $players->where('team_id', "==", null);
    if (count($playerNoTeam) <1){
        $randPlayerNoTeam = $playerNoTeam->random(count($playerNoTeam));
    }
    else if (count($playerNoTeam) >=4)
    {
        $randPlayerNoTeam = $playerNoTeam->random(4);
    }
    else {
        $randPlayerNoTeam = $playerNoTeam;
    }

    // 
    $playerWTeam = $players->where('team_id', "!=", null);
    $randPlayerWTeam = $playerWTeam->random(4);

    //
    // foreach ($team as $item) {
    //     $teamTest = $item->id;
    //     $countTeam = $players->where('team_id', $teamTest);
    // }
    // foreach ($players as $item) {
    //     $countTeam = $item->where('team_id', $teamTest);
    //     $countryPlayer = $players->where('country_origin', $item->country);
    // }


    foreach ($team as $item) {
        // $countTeam = $players->where('team_id', $item->id);
        $countryPlayer = $players->where('country_origin', $item->country);
    }

    // dd($countryPlayer);
    $hommes = $players->where('gender_id', 1);
    $countHommes = 0;
    $femmes = $players->where('gender_id', 2);
    $countFemmes = 0;
    $countPlayerWTeam = 0;
    $countPlayerNoTeam = 0;

    return view('dashboard', compact('team', 'players', 'hommes', 'femmes', 'countHommes', 'countFemmes', 'countPlayerWTeam', 'countPlayerNoTeam', 'fullPlayer', 'randPlayerNoTeam', 'randPlayerWTeam', 'playerNoTeam', 'countryPlayer'));
});

// Deux routes resources
Route::resource('teams', TeamController::class);
Route::resource('players', PlayerController::class);