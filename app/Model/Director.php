<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $table = 'directors';

    protected $fillable = [
    	'name',
    	'DOB',
    	'nationality',
    	'information',
    	'image'
    ];
    public $timestamps = true;
}
