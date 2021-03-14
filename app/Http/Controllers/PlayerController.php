<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\Picture;
use App\Models\Player;
use App\Models\Position;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
    
        return view('pages.listPlayers', compact('players'));
        // return redirect('/players')->with('status', 'Profile updated!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genders = Gender::all();
        $positions = Position::all();
        $teams = Team::all();
        return view('pages.create.createPlayers', compact('genders', 'positions', 'teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $validation = $request->validate([
            "lastname" => 'required',
            "firstname" => 'required',
            "age" => 'integer',
            "phone" => 'required',
            "email" => 'required',
            "country_origin" => 'required',
            "gender_id" => 'required',
            "position_id" => 'required',
            // "team_id" => 'required',
            // "url" => 'required'
        ]);

        // Picture
        if ($request->url != null){
            $storeImg = new Picture;
            $storeImg->url = $request->file('url')->hashName();
            Storage::put('public/img', $request->file('url'));
            $storeImg->save();                
        }

        // Player
        $store = new Player;
        $store->lastname = $request->lastname;
        $store->firstname = $request->firstname;
        $store->age = $request->age;
        $store->phone = $request->phone;
        $store->email = $request->email;
        $store->country_origin = $request->country_origin;

        $store->gender_id = $request->gender_id;
        $store->position_id = $request->position_id;
        $store->team_id = $request->team_id;

        if($request->url != null) {
            $store->picture_id = $storeImg->id;
        } else {
            $store->picture_id = 1;
        }

        $store->save();
        return redirect()->back();

        // $players = Player::all();
        // // $teams = Team::all();
        // $team = Team::find($id);

        // $teamplayers= $players->where("team_id",$team->id);

        // // $equipe = Team::find($team_id);
        
        // if (count($teamplayers) == $team->players_max) {
            
        //     return redirect()->back();
        // } else {
        //     $store->save();
        //     return redirect()->back();
        // }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Player::find($id);
        $teams = Team::all();
        $img= Picture::all(); 
        // dd($show);
        return view('pages.show.showPlayers', compact('show','teams','img'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Player::find($id);
        $genders = Gender::all();
        $positions = Position::all();
        $teams = Team::all();
        return view('pages.edit.editPlayers', compact('edit', 'genders', 'positions', 'teams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            "lastname" => 'required',
            "firstname" => 'required',
            "age" => 'integer',
            "phone" => 'required',
            "email" => 'required',
            "country_origin" => 'required',
            "gender_id" => 'required',
            "position_id" => 'required',
            // "team_id" => 'required',
            // "url" => 'required'
            ]);
            
            // Picture
        $update = Player::find($id);
        $img = Picture::find($update->picture_id);
        if ($img->url != 'silouhaite.jpeg') {
            Storage::delete('public/img/'.$img->url);
            Storage::put('public/img', $request->file('url'));
            $img->url = $request->file('url')->hashName();
        } else {
            Storage::put('public/img', $request->file('url'));
            $updateImg = new Picture;
            $updateImg->url = $request->file('url')->hashName();
            $updateImg->save();
        }
        
        // Player
        $update->lastname = $request->lastname;
        $update->firstname = $request->firstname;
        $update->age = $request->age;
        $update->phone = $request->phone;
        $update->email = $request->email;
        $update->country_origin = $request->country_origin;

        $update->gender_id = $request->gender_id;
        $update->position_id = $request->position_id;
        $update->team_id = $request->team_id;
        $update->picture_id = $updateImg->id;
        $update->save();

        return redirect('/players');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Player::find($id);
        $destroyImg = Picture::find($destroy->picture_id);
        if($destroyImg->url != 'silouhaite.jpeg')
        {
            Storage::delete('public/img/'.$destroyImg->url);
            $destroy->delete();
            $destroyImg->delete();
        }
        $destroy->delete();
        return redirect('/players');
    }
}
