<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{
    protected $table = 'producers';

    protected $fillable = [
    	'name'
    ];

    public $timestamps = true;
}
