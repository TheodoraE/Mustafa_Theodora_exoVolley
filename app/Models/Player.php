<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    public function teams()
	{
		return $this->belongsTo(Team::class, 'team_id');
	}
	public function positions()
	{
		return $this->belongsTo(Position::class, 'position_id');
	}
	public function pictures()
    {
        return $this->belongsTo(Picture::class, 'picture_id');
    }
	public function genders()
    {
        return $this->belongsTo(Gender::class, 'gender_id');
    }
}
