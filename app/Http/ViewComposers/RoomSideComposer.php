<?php 

namespace App\Http\ViewComposers;

use App\Model\room;
use Illuminate\View\View;

Class RoomSideComposer {
	public function __construct(room $room) {
		$this->room = $room;
	}
	public function compose(View $view) {
		$view->with('roomRecords', $this->room->select('RoomID', 'RoomName')->get());
	}
}