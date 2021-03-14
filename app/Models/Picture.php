<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use HasFactory;
    public function players()
	{
		return $this->hasMany(Player::class, 'picture_id');
	}
}
