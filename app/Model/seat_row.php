<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class seat_row extends Model
{
	public $fillable = [
		'RoomID',
		'RowNo',
		'ClassID'
	];
}
