<?php

namespace App\Http\Controllers\backend;

use App\Model\Movie_image;
use App\Model\Producer;
use App\Model\Director;
use App\Model\Cast;
use App\Model\Movie_master;
use Illuminate\Http\Request;
use App\Http\Requests\MovieMasterRequest;
use App\Http\Controllers\Controller;
use Image;
use Storage;

class MovieController extends Controller
{
	public function __construct(Producer $producer ,Director $director ,Cast $cast ,Movie_master $movie_master, movie_image $movie_image) {
        $this->producer = $producer;
        $this->director = $director;
        $this->cast = $cast;
        $this->movie_master = $movie_master;
        $this->movie_image = $movie_image;
	}
    public function index() {
   //  	--- GET $movie_id
   //  	$movie = $this->movie_master->find(1);
   //  	--- GET cast_id THEN INSERT INTO cast_movie_master
   //  	$movie->casts()->sync([2]);
   //  	$movie->casts()->attach(2);
   //  	foreach ($movie->casts as $value) {
			// echo $value->name;	
   //  	}
   //  	dd('stop');
      $movieRecord = $this->movie_master
                          ->orderBy('movie_masters.id', 'ASC')
                          ->get();
      return view('backend.movie.movieList', compact('movieRecord'));
    }
    public function create() {

      return view('backend.movie.movieAdd');
    }

    public function fetchProducer(Request $request) {
      if ($request->get('query')) {
        $query = $request->get('query');

        $data = $this->producer
                    ->where('name', 'LIKE', '%'.$query.'%')
                    ->get();
      }
    return $data;
    }
    public function fetchDirector(Request $request) {
      if ($request->get('query')) {
        $query = $request->get('query');
        $data = $this->director
                    ->where('name', 'LIKE', '%'.$query.'%')
                    ->get();
      }
      return $data;
    }
    public function fetchCast(Request $request) {
      if ($request->get('query')) {
        $query = $request->get('query');
        $data = $this->cast
                    ->where('name', 'LIKE', '%'.$query.'%')
                    ->get();
      }
      return $data;
    }
    public function store(MovieMasterRequest $request) {
      // dd($request);
      // ----- insert data to Movie_master Storage ----
      $movieReq = $request->only(['MovieName','Title','Description','Note','Duration_Min','Date_Premiere', 'Status']);
      $newMovie = $this->movie_master->create($movieReq);
      // ----- end -------

      $movieObj = $this->movie_master->find($newMovie->id);

      // ------ insert data to movie_master_producer Storage -------
      $movieObj->producers()->attach($request->producerTag);
      // ------ insert data to director_movie_master Storage -------
      $movieObj->directors()->attach($request->directorTag);
      // ------ insert data to cast_movie_master Storage -------
      $movieObj->casts()->attach($request->castTag);


      // ----- chinh sua noi luu tru file Public || Storage 
      // ----- validate file && insert data to movie_images Storage ----
      if ($request->hasFile('movieImage')) {
          $now = getdate();
          foreach ($request->file('movieImage') as $image) {
            $filenameWithExt = $image->getClientOriginalName();
     
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
         
            $extention = $image->getClientOriginalExtension();

            $filenameToStore = $now['year'].'_'.$now['mon'].'_'.$now['mday'].'_'.time().'_'.$filename.'.'.$extention;

            // storage IMAGE at Path
            $location = public_path("backend/images/movie/".$filenameToStore);
            Image::make($image)->resize(160,160)->save($location);

            // $storeLocation = $image->storeAs( "public/movieIMG", $filenameToStore);
            // storage IMAGE in DB
            $save = $this->movie_image->create(['MovieID'=> $newMovie->id, 'ImageURL'=> $filenameToStore]);
          }
        // dd('success upload');
        
        // ---- end -----
      } else {
        $defaultFilePath = 'backend/images/default/default-movie.png';

        $defaultFilename = basename($defaultFilePath);

        $now = getdate();
        $reName = $now['year'].'_'.$now['mon'].'_'.$now['mday'].'_'.time().'_';
        $filenameToStore = $reName.$defaultFilename;

        $location = public_path("backend/images/movie/".$filenameToStore);

        Image::make($defaultFilePath)->resize(160,160)->save($location);

        $save = $this->movie_image->create(['MovieID'=> $newMovie->id, 'ImageURL'=> $filenameToStore]);
      }

      $message = 'Create new Movie in _ID: '.$newMovie->id.'_ successfull';
  
     return redirect()->route('movieIndex')
                        ->with('success', $message);
    }

    public function viewDetail($id) {
      // ----- lay thong tin from movie table -----
      $movie = $this->movie_master->find($id);
      // dd($movie);
      // ----- lay thong tin from movie_image table -----
      $imageRecord = $movie
                    ->leftJoin('movie_images', 'movie_images.MovieID', 'like', 'movie_masters.id')
                    ->select('movie_images.ImageURL')
                    ->where('movie_masters.id', 'like', $movie->id)
                    ->get();
      // dd($imageRecord);
      // ----- lay thong tin from producer_movie_master table -----
      $producerRecord = $movie->producers()->get();
      // ----- lay thong tin from director_movie_master table -----
      $directorRecord = $movie->directors()->get();
      // ----- lay thong tin from cast_movie_master table -----
      $castRecord = $movie->casts()->get();

      // dd($producerRecord, $directorRecord, $castRecord);
      return view('backend.movie.movieDetail', compact(['movie','imageRecord','producerRecord','directorRecord','castRecord']));
    }
    public function show($id) {
      // ----- lay thong tin from movie table -----
      $movie = $this->movie_master->find($id);
      // dd($movie);
      // ----- lay thong tin from movie_image table -----
      $imageRecord = $movie
                    ->leftJoin('movie_images', 'movie_images.MovieID', 'like', 'movie_masters.id')
                    ->select('movie_images.ImageURL')
                    ->where('movie_masters.id', 'like', $movie->id)
                    ->get();
      // dd($imageRecord);
      // ----- lay thong tin from producer_movie_master table -----
      $producerRecord = $movie->producers()->get();
      // ----- lay thong tin from director_movie_master table -----
      $directorRecord = $movie->directors()->get();
      // ----- lay thong tin from cast_movie_master table -----
      $castRecord = $movie->casts()->get();

      // dd($producerRecord, $directorRecord, $castRecord);
      return view('backend.movie.movieEdit', compact(['movie','imageRecord','producerRecord','directorRecord','castRecord']));

    }
}
