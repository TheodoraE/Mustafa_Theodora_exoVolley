<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use App\Models\Picture;
use App\Models\Player;
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
        $continent= Continent::all();
        return view('pages/create/createTeams',compact('continent'));
    }

  
    public function store(Request $request)
    {
        $validation = $request->validate([
            "name" => 'required',
            "country" => 'required',
            "city" => 'required',
        ]);
        $store = new Team();
        $store->name= $request->name;
        $store->city= $request->city;
        $store->country= $request->country;
        $store->players_max= $request->players_max;
        $store->continent_id = $request->continent_id;
        $store->save();
        return redirect()->back();
    }

 
    public function show($id)
    {
        $show = Team::find($id);
        $players= Player::all();
        return view('pages/show/teamShow',compact('show','players'));
        // dd($show);
    }

 
    public function edit($id)
    {
        $edit = Team::find($id);
        return view('pages/edit/teamEdit',compact('edit'));
    }

    
    public function update(Request $request,$id)
    {
        $validation = $request->validate([
            "name" => 'required',
            "country" => 'required',
            "city" => 'required',
        ]);
        $update = Team::find($id);
        $update->name= $request->name;
        $update->city= $request->city;
        $update->country= $request->country;
        $update->players_max= $request->players_max;
        $update->save();
        return redirect('/teams');
    }

    public function destroy($id)
    {
        $destroy = Team::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
