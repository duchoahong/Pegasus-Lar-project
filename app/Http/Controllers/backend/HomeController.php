<?php

namespace App\Http\Controllers\backend;

use App\Model\room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
    	return view('backend.layouts.home.home');
    }
// $room_id = $this->room->select('RoomID', 'RoomName')->get();
// dd($room_id);
 //    public function __construct(room $room) {
	// 	$this->room = $room;
	// }
}
