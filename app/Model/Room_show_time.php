<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Room_show_time extends Model
{
    public $fillable = [
    	'Room_id',
    	'MovieID',
    	'TimeVal',
    	'DateBegin',
    	'DateEnd'
    ];
}
