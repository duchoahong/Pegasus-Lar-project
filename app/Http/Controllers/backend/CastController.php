<?php

namespace App\Http\Controllers\backend;

use App\Model\Cast;
use Illuminate\Http\Request;
use App\Http\Requests\CastRequest;
use App\Http\Controllers\Controller;
use Image;
use Storage;
class CastController extends Controller
{
    public function __construct(Cast $cast) {
    	$this->cast = $cast;
    }

    public function index() {
    	$castRecord = $this->cast->get();

    	return view('backend.cast.CastList', compact('castRecord'));
    }

    public function create() {
    	return view('backend.cast.CastAdd');
    }

    public function store(CastRequest $request) {
    	$cast = new Cast;
    	$cast->name = $request->name;
    	$cast->DOB = $request->DOB;
    	$cast->nationality = $request->nationality;
    	$cast->information = $request->information;

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
	    	$location = public_path("backend/images/cast/".$filenameToStore);
	    	// check exsist dublicate IMAGE 
	    	if (file_exists($location) == false){
	    		Image::make($image)->resize(160,160)->save($location);
	    	}
	    	$cast->image = $filenameToStore;
	    	$cast->save();
    	} 
    	// $cast->save();

    	else {    		
    		$defaultFilePath = 'backend/images/default/default-user.png';

    		$defaultFilename = basename($defaultFilePath);

    		$now = getdate();
    		$reName = $now['year'].'_'.$now['mon'].'_'.$now['mday'].'_'.time().'_';
    		$newName = $reName.$defaultFilename;

    		$location = public_path("backend/images/cast/".$newName);

    		Image::make($defaultFilePath)->resize(160,160)->save($location);

    		$cast->image = $newName;
    		$cast->save();
    	}
    	// dd($cast->id);
    	$castNewID = $cast->id;
    	$message = 'Create new Cast in _ID: '.$castNewID.'_ successfull';
		return redirect()->route('castIndex')
						->with('success', $message);
	}

	public function show($id) {
		$castRecord = $this->cast->where('id', 'LIKE', $id)->first();

		return view('backend.cast.CastEdit', compact('castRecord'));
	}

	public function update(CastRequest $request, $id) {
		$cast = cast::find($id);

    	$cast->name = $request->name;
    	$cast->DOB = $request->DOB;
    	$cast->nationality = $request->nationality;
    	$cast->information = $request->information;

    	if ($request->hasFile('image')) {
    		// add the new photo
    		$image = $request->file('image');
    		$filenameWithExt = $image->getClientOriginalName();
	    	$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
	    	$extention = $image->getClientOriginalExtension();

	    	$now = getdate();
	    	$filenameToStore = $now['year'].'_'.$now['mon'].'_'.$now['mday'].'_'.time().'_'.$filename.'.'.$extention;
	    	$location = public_path("backend/images/cast/".$filenameToStore);
	    	if (file_exists($location) == false){
	    		Image::make($image)->resize(160,160)->save($location);
	    	}
	    	//get OLD filename BEFORE update
	    	$oldFilename = $cast->image;
	    	$oldPath = 'images/cast/'.$oldFilename;
    		// update the database
	    	$cast->image = $filenameToStore;

    		// delete the old photo
	    	// unlink($oldPath);
	    	Storage::disk('local')->delete($oldPath);
    	} 
    	//save to storage & DB
    	$cast->save();
    	//save to storage & DB

    	$castNewID = $cast->id;
    	$message = 'Update Cast in _ID: '.$castNewID.'_ successfull';
		return redirect()->route('castIndex')
						->with('success', $message);
	}

	public function destroy($id) {
    	$cast = cast::find($id);
    	
    	// delete IMAGE from Storage
    	$castFilename = $cast->image;
    	$imagePath = 'images/cast/'.$castFilename;
    	Storage::disk('local')->delete($imagePath);

    	$deleteID = $cast->id;
    	$message = 'Delete Cast in _ID: '.$deleteID.'_ successfull';
    	// delete cast Record in DB
    	$cast->delete();

    	return redirect()->route('castIndex')
    					->with('success', $message);

	}
}
