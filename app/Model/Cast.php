<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    protected $table = 'casts';

    protected $fillable = [
    	'name',
    	'DOB',
    	'nationality',
    	'information',
    	'image'
    ];
    public $timestamps = true;
}
