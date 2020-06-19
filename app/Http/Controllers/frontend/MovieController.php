<?php

namespace App\Http\Controllers\frontend;

use App\Model\room;
use App\Model\Movie_master;
use App\Model\Room_show_time;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MovieController extends Controller
{
	public function __construct(room $room, Movie_master $movieMaster, Room_show_time $room_show_time) {
        $this->room = $room;
		$this->movieMaster = $movieMaster;
		$this->room_show_time = $room_show_time;
	}

    public function present() {
    	return view('frontend.show.moviePresent');
    }

    public function GetDateFromRange($begin, $end, $form = 'Y-m-d') {
        $dayPeriod = 24*60*60;
        $store = array();
        $begin = strtotime($begin);
        $end = strtotime($end);
        for ($currentDate = $begin; $currentDate <= $end ; $currentDate += $dayPeriod) { 
            $store[] = date($form, $currentDate);
        }
        return $store;
    }

    public function getMovieItem() {
    	// $movieRecord = $this->room_show_time
    	// 					->leftJoin('rooms', 'rooms.RoomID', 'LIKE', 'room_show_times.Room_id')
    	// 					->leftJoin('movie_masters', 'movie_masters.id', 'LIKE', 'room_show_times.MovieId')
    	// 					->leftJoin('movie_images', 'movie_images.MovieID', 'LIKE', 'movie_masters.id')
    	// 					->select('room_show_times.id as mainID', 'room_show_times.MovieID', 'room_show_times.DateBegin', 'room_show_times.DateEnd', 'movie_masters.*', 'movie_images.ImageURL')
    	// 					->get();
     //    for ($i=0; $i < count($movieRecord); $i++) { 
     //        $movieRecord[$i]->dateCluster = $this->GetDateFromRange($movieRecord[$i]->DateBegin, $movieRecord[$i]->DateEnd);
     //    }
        $movieRecord = $this->movieMaster
                                ->leftJoin('movie_images', 'movie_images.MovieID', 'LIKE', 'movie_masters.id')
                                ->where('Status', 'LIKE', 1)
                                ->get();
        for ($i=0; $i < count($movieRecord); $i++) { 
            $movieRecord[$i]->data = $this->movieMaster
                                        ->leftJoin('room_show_times', 'room_show_times.MovieID', 'LIKE', 'movie_masters.id')
                                        ->leftJoin('rooms', 'rooms.RoomID', 'LIKE', 'room_show_times.Room_id')
                                        ->select('room_show_times.MovieID', 'room_show_times.DateBegin', 'room_show_times.DateEnd')
                                        ->where('movie_masters.id', $movieRecord[$i]->id)
                                        ->get();
            $_BeginDate = $movieRecord[$i]->data[0]->DateBegin;
            $_EndDate = $movieRecord[$i]->data[0]->DateEnd;
            for ($j=0; $j < count($movieRecord[$i]->data); $j++) { 
                if ($movieRecord[$i]->data[$j]->DateBegin < $_BeginDate) {
                    $_BeginDate = $movieRecord[$i]->data[$j]->DateBegin;
                }
                if ($movieRecord[$i]->data[$j]->DateEnd > $_EndDate) {
                    $_EndDate = $movieRecord[$i]->data[$j]->DateEnd;
                }
            }
            $movieRecord[$i]->dateCluster = $this->GetDateFromRange($_BeginDate, $_EndDate);
        }
        // dd($movieRecord);
        // ---- chuyen chuoi thanh time
        // $date = strtotime($movieRecord[1]->dateCluster[1]);
        // ---- convert '2019-03-04' -> 'Mar'
        // dd(date('M', $date));
    	return view('frontend.show.moviePresent', compact('movieRecord'));
    }

    public function countAvailSeat($roomId, $timeVal, $dateVal) {
        $totalSeat = $this->room
                    ->leftJoin('seat_rows', 'seat_rows.RoomID', 'LIKE', 'rooms.RoomID')
                    ->leftJoin('seat_nos', 'seat_nos.RowID', 'LIKE', 'seat_rows.RowID')
                    ->select('seat_nos.*')
                    ->where('rooms.RoomID', '=', $roomId)
                    ->count();

        $sumBooked = $this->room
                    ->leftJoin('seat_rows', 'seat_rows.RoomID', 'LIKE', 'rooms.RoomID')
                    ->leftJoin('seat_nos', 'seat_nos.RowID', 'LIKE', 'seat_rows.RowID')
                    ->leftJoin('seatshows', 'seatshows.SeatNoID', 'LIKE', 'seat_nos.SeatID')
                    ->select('seatshows.*')
                    ->where([
                        ['rooms.RoomID', '=', $roomId],
                        ['seatshows.TimeVal', 'LIKE', $timeVal],
                        ['seatshows.DateVal', 'LIKE', $dateVal],
                        ['seatshows.Status', 'LIKE', 1]
                    ])->count();
        return $sumAvail = $totalSeat - $sumBooked;
    }   


    public function getSelectDay(Request $request) {
        if ($request->get('query')) {
            $query = $request->get('query');
            $movieIp = $query['MovieID'];
            $dateIp = date('Y-m-d', $query['Date']);
            // echo $dateIp.$movieIp;
            $dateExp = explode('-', $dateIp);

            $data = $this->room_show_time
                            ->where([
                                ['MovieID', 'LIKE', $movieIp],
                                ['DateBegin', '<=', $dateIp],
                                ['DateEnd', '>=', $dateIp]
                            ])->get();
            for ($i=0; $i < count($data); $i++) { 
                $data[$i]->seatAvail = $this->countAvailSeat($data[$i]->Room_id, $data[$i]->TimeVal, $dateIp);
                $data[$i]->dateSelected = $dateExp[0].$dateExp[1].$dateExp[2];
            }
            // print_r($data);
        }
        return $data;
    }
}
