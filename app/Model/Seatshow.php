<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Seatshow extends Model
{
    public $fillable = [
    	'SeatNoID',
    	'TimeVal',
    	'DateVal',
    	'Status'
    ];
}
