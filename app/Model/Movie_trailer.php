<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Movie_trailer extends Model
{
    protected $table = 'movie_trailers';

    protected $fillable = [
    	'MovieID',
    	'TrailerURL'
    ];

     public $timestamps = true;
}
