<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class seat_no extends Model
{
	public $fillable = [
		'SeatNo',
		'RowID',
		'Status'
	];
}
