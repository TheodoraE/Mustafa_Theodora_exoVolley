<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
 
    public function index()
    {   
        $team= Team::all();
        return view('pages/listTeams', compact('team'));
    }

 
    public function create()
    {
        return view('pages/createTeams');
    }

  
    public function store(Request $request)
    {
        // $validation = $request->validateWithBag("homet1",[
        //     "titre" => 'required',
        // ]);
        $store = new Team();
        $store->name= $request->name;
        $store->city= $request->city;
        $store->country= $request->country;
        $store->players_max= $request->players_max;
        $store->save();
        return redirect()->back();
    }

 
    public function show()
    {
       
    }

 
    public function edit(Team $team)
    {
        //
    }

    
    public function update(Request $request, Team $team)
    {
        //
    }

    public function destroy(Team $team)
    {
        //
    }
}
