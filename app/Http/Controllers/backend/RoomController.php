<?php

namespace App\Http\Controllers\backend;

use App\Model\room;
use App\Model\seat_row;
use App\Model\Screen_detail;
use App\Model\Room_show_time;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class RoomController extends Controller 
{
    public function __construct(room $room, seat_row $seat_row, Room_show_time $room_show_time) {
        $this->room = $room;
        $this->seat_row = $seat_row;
        $this->room_show_time = $room_show_time;
    }
    public function GetDateFromRange($begin, $end, $form = 'Y-m-d') {
        $dayPeriod = 24*60*60;
        $store = array();
        $_begin = strtotime($begin);
        $_end = strtotime($end);
        for ($currentDate = $_begin; $currentDate <= $_end ; $currentDate += $dayPeriod) { 
            $store[] = date($form, $currentDate);
        }
        // dd($arr);
        return $store;
    }

    public function GetAllDateWithMovieName($id) {
        $dateCluster = array();
        $getDate = $this->room_show_time
                        ->select('DateBegin', 'DateEnd', 'MovieName', 'movie_masters.id')
                        ->leftJoin('movie_masters', 'movie_masters.id', 'LIKE', 'room_show_times.MovieID')
                        ->where('Room_id', $id)
                        ->get();
        // dd($getDate);
        if (count($getDate) > 0) {
            // $_BeginDate = $getDate[0]->DateBegin;
            // $_EndDate = $getDate[0]->DateEnd;
            for ($i = 0; $i < count($getDate) ; $i++) { 
                // if ($getDate[$i]->DateBegin < $_BeginDate) {
                //     $_BeginDate = $getDate[$i]->DateBegin;
                // }
                // if ($getDate[$i]->DateEnd > $_EndDate) {
                //     $_EndDate = $getDate[$i]->DateEnd;
                // }
                $_BeginDate = $getDate[$i]->DateBegin;
                $_EndDate = $getDate[$i]->DateEnd;

                $dateCluster[] = [ 'MovieCluster' => $getDate[$i]->MovieName, 'DateCluster' => $this->GetDateFromRange($_BeginDate, $_EndDate)];
            }
            // dd($dateCluster);

            return $dateCluster;
        }
        return false;
        // return view('backend.roomList', compact('dates', 'roomId'));
    }
    // show all date title
    public function ShowAllDate($roomId) {
        $dateCluster = $this->GetAllDateWithMovieName($roomId);
        if ($dateCluster) {
            return view('backend.roomList', compact('dateCluster', 'roomId'));
        }
        return view('backend.roomList');
    }

    // get all show time records 
    public function GetSeatRecord($roomId, $timeVal, $reqDate)
    {
        $sql = "SELECT 
                    GROUP_CONCAT(DISTINCT 
                        CONCAT(
                            'SUM(CASE WHEN SeatNo = ', SeatNo,' THEN Status END) AS G',SeatNo
                        )
                    ) AS seat_row
                FROM screen_detail AS records
                WHERE records.RoomID LIKE ".$roomId.";";

        $seat_list = DB::select(DB::raw($sql));

        $sql2 = "SELECT ScreenRow, ".$seat_list[0]->seat_row." 
                FROM screen_detail AS records 
                WHERE 
                records.RoomID LIKE ".$roomId." 
                AND records.ShowTime LIKE '".$timeVal."' 
                AND records.ShowDate LIKE '".$reqDate."' 
                GROUP BY ScreenName, ScreenRow";
        $seat_room = DB::select(DB::raw($sql2));
        // $col_name = DB::getSchemaBuilder()->getColumnListing("rooms"); to get Collumn name from a seclected table
        // dd($seat_room);
        return $seat_room;
    }

    public function countSeatStatus($roomId, $timeVal, $dateVal) {
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
        $sumAvail = $totalSeat - $sumBooked;
        $status = [
            'sumBooked' => $sumBooked.'/'.$totalSeat,
            'sumAvail' => $sumAvail.'/'.$totalSeat
        ];
        return $status;
    }   

    public function ShowDateDetail($roomId, Request $req) {
        $dateCluster = $this->GetAllDateWithMovieName($roomId);
        $reqDate = $req->date;
        $labRecord = $this->room_show_time
                    ->leftJoin('rooms', 'room_show_times.Room_id', 'LIKE', 'rooms.RoomID')
                    ->leftJoin('movie_masters', 'room_show_times.MovieID', 'LIKE', 'movie_masters.id')
                    ->select('room_show_times.*', 'rooms.RoomName', 'movie_masters.MovieName')
                    ->where([
                        ['RoomID', '=', $roomId],
                        ['DateBegin', '<=', $reqDate],
                        ['DateEnd', '>=', $reqDate],
                    ])->get();
        $record = [];

        // dd($labRecord[0]->TimeVal);
        for ($i = 0; $i < count($labRecord) ; $i++) { 
            $timeVal = $labRecord[$i]->TimeVal;
            $record[] = [
                'label' => $labRecord[$i],
                'seatRecord' => $this->GetSeatRecord($roomId, $timeVal, $reqDate),
                'seatStatus' => $this->countSeatStatus($roomId, $timeVal, $reqDate)
            ];//sua migrate seatshow === rome_show_time
            // $timeArr[] = $this->GetTimeRecord($roomId, $timeVal, $reqDate);
        }
        $record = json_decode(json_encode($record));
        // dd($record);
        return view('backend.roomList', compact('record','reqDate', 'dateCluster', 'roomId'));
    }

}


