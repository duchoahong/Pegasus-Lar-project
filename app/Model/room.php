<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class room extends Model
{
	// public $table = 'room'; !! khi nao ten table fai them 's' o cuoi

	public $fillable = [
		'RoomName'
	];
}
