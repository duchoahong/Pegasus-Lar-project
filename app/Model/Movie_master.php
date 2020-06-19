<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Movie_master extends Model
{
	protected $table = 'movie_masters';

    protected $fillable = [
        'MovieName',
        'Title',
        'ProducerID',
        'Description',
        'Note',
        'Duration_Min',
        'Date_Premiere',
        'Status'
    ];
    public $timestamps = true;


    public function producers() {
        // return $this->belongsToMany(Cast::class);
        return $this->belongsToMany('App\Model\Producer', 'movie_master_producer', 'MovieID', 'ProducerID')
                    ->withTimestamps();
    }

    public function directors() {
        // return $this->belongsToMany(Cast::class);
        return $this->belongsToMany('App\Model\Director', 'director_movie_master', 'MovieID', 'DirectorID')
                    ->withTimestamps();
    }

    public function casts() {
        // return $this->belongsToMany(Cast::class);
        return $this->belongsToMany('App\Model\Cast', 'cast_movie_master', 'MovieID', 'CastID')
                    ->withTimestamps();
    }
    // -----------!!!!!! attach theo cot chinh dung de dinh nghia, cot duoc chon !!!!!!!!---------
}
