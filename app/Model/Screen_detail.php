<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Screen_detail extends Model
{
    public $fillable = [
    	'RoomID',
    	'ScreenName',
    	'ScreenRow',
    	'ShowTime',
    	'ShowDate',
    	'Status'
    ];
}
