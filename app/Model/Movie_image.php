<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Movie_image extends Model
{
    protected $table = 'movie_images';

    protected $fillable = [
    	'MovieID',
    	'ImageURL'
    ];

     public $timestamps = true;
}
