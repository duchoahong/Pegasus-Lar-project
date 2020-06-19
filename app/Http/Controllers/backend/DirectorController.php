<?php

namespace App\Http\Controllers\backend;

use App\Model\Director;
use App\Http\Requests\DirectorRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use Storage;
class DirectorController extends Controller
{
    public function __construct (Director $director) {
    	$this->director = $director;
    }

    public function index() {
        $directorRecord = $this->director->orderBy('id', 'DESC')->get();

        // dd($directorRecord);
        return view('backend.director.DirectorList', compact('directorRecord'));
    }

    public function create() {
    	return view('backend.director.DirectorAdd');
    }

    public function store(DirectorRequest $request) {
    	$director = new Director;
    	$director->name = $request->name;
    	$director->DOB = $request->DOB;
    	$director->nationality = $request->nationality;
    	$director->information = $request->information;

    	if ($request->hasFile('image')) {
    	//UPLOAD & SAVE IMAGE_FILE to Storage
    		$image = $request->file('image');
    	// GET IMAGE_FILE NAME
    		$filenameWithExt = $image->getClientOriginalName();
    	// GET IMAGE_FILE LINK
	    	$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
    	// get IMAGE_FILE FORMAT
	    	$extention = $image->getClientOriginalExtension();

	    	$now = getdate();
	    	$filenameToStore = $now['year'].'_'.$now['mon'].'_'.$now['mday'].'_'.time().'_'.$filename.'.'.$extention;

	    	// storage IMAGE at Path
	    	$location = public_path("backend/images/director/".$filenameToStore);
	    	// check exsist dublicate IMAGE 
	    	if (file_exists($location) == false){
	    		Image::make($image)->resize(160,160)->save($location);
	    	}
	    	$director->image = $filenameToStore;
	    	$director->save();
    	} 
    	// $director->save();

    	else {    		
    		$defaultFilePath = 'backend/images/default/default-user.png';

    		$defaultFilename = basename($defaultFilePath);

    		$now = getdate();
    		$reName = $now['year'].'_'.$now['mon'].'_'.$now['mday'].'_'.time().'_';
    		$newName = $reName.$defaultFilename;

    		$location = public_path("backend/images/director/".$newName);

    		Image::make($defaultFilePath)->resize(160,160)->save($location);

    		$director->image = $newName;
    		$director->save();
    		// $defaultFilename = 'default-user.png';
    		// $now = getdate();
    		// $reName = $now['year'].'_'.$now['mon'].'_'.$now['mday'].'_'.time().'_';
    		// $newName = $reName.$defaultFilename;

    		// $oldPath = 'images/default/';
    		// $newPath = 'images/director/';
    		// $newFile = Storage::disk('local')->copy($oldPath.$defaultFilename, $newPath.$newName);


    		// Image::make('backend/'.$newPath.$newName)->resize(160,160)->save();
    		// dd($defaultImage);
    	}
    	// dd($director->id);
    	$directorNewID = $director->id;
    	$message = 'Create new Director in _ID: '.$directorNewID.'_ successfull';
		return redirect()->route('directorIndex')
						->with('success', $message);
    }
    public function show($id) {
    	$directorRecord = $this->director->where('id', 'LIKE', $id)->first();

    	return view('backend.director.DirectorEdit', compact('directorRecord'));
    }

    public function update(DirectorRequest $request, $id) {
    	$director = director::find($id);

    	$director->name = $request->name;
    	$director->DOB = $request->DOB;
    	$director->nationality = $request->nationality;
    	$director->information = $request->information;

    	if ($request->hasFile('image')) {
    		// add the new photo
    		$image = $request->file('image');
    		$filenameWithExt = $image->getClientOriginalName();
	    	$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
	    	$extention = $image->getClientOriginalExtension();

	    	$now = getdate();
	    	$filenameToStore = $now['year'].'_'.$now['mon'].'_'.$now['mday'].'_'.time().'_'.$filename.'.'.$extention;
	    	$location = public_path("backend/images/director/".$filenameToStore);
	    	if (file_exists($location) == false){
	    		Image::make($image)->resize(160,160)->save($location);
	    	}
	    	//get OLD filename BEFORE update
	    	$oldFilename = $director->image;
	    	$oldPath = 'images/director/'.$oldFilename;
    		// update the database
	    	$director->image = $filenameToStore;

    		// delete the old photo
	    	// unlink($oldPath);
	    	Storage::disk('local')->delete($oldPath);
    	} 
    	//save to storage & DB
    	$director->save();
    	//save to storage & DB

    	$directorNewID = $director->id;
    	$message = 'Update Director in _ID: '.$directorNewID.'_ successfull';
		return redirect()->route('directorIndex')
						->with('success', $message);
    }
    public function destroy($id) {
    	$director = director::find($id);

    	// delete IMAGE from Storage
    	$directorFilename = $director->image;
    	$imagePath = 'images/director/'.$directorFilename;
    	Storage::disk('local')->delete($imagePath);

    	$deleteID = $director->id;
    	$message = 'Delete Director in _ID: '.$deleteID.'_ successfull';
    	// delete Director Record in DB
    	$director->delete();

    	return redirect()->route('directorIndex')
    					->with('success', $message);
    }
}
