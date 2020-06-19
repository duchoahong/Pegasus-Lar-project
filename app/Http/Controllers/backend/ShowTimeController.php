<?php

namespace App\Http\Controllers\backend;

use App\Model\room;
use App\Model\Seatshow;
use App\Model\Movie_master;
use App\Model\Room_show_time;
use App\Http\Requests\RoomShowTimeRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowTimeController extends Controller
{
    public function __construct( room $room, Seatshow $seatShow, Movie_master $movie_master, Room_show_time $Room_show_time) {
        $this->room = $room;
        $this->seatShow = $seatShow;
        $this->movie_master = $movie_master;
        $this->Room_show_time = $Room_show_time;
    }
    public function showRecord($roomId) {
        $showRecord = $this->Room_show_time
                        ->leftJoin('rooms', 'rooms.RoomId', 'LIKE', 'Room_show_times.Room_id')
                        ->leftJoin('movie_masters', 'movie_masters.id', 'LIKE', 'Room_show_times.MovieID')
                        ->select('Room_show_times.*', 'rooms.RoomName', 'movie_masters.MovieName')
                        ->orderBy('Room_show_times.DateBegin' , 'ASC')
                        ->orderBy('Room_show_times.TimeVal' , 'ASC')
                        ->where('Room_id', 'LIKE', $roomId)
                        ->get();
        return $showRecord;
    }
    public function index()
    {
        $roomRecord = $this->Room_show_time->select('Room_id')->distinct('Room_id')->orderBy('Room_id')->get();
        
        $record = [];
        for ($i = 0; $i < count($roomRecord); $i++) { 
            $record[] = $this->showRecord($roomRecord[$i]->Room_id);
        }
        // dd($record);
        return view('backend.showTime.showTimeList', compact('record'));
    }

    public function create()
    {
        $roomRecord = $this->room->get();
        $movieRecord = $this->movie_master->get();
        return view('backend.showTime.AddShowTime', compact('roomRecord', 'movieRecord'));
    }
    // danh sach ngay de kiem tra
    public function checkDateRange($roomID) {
        $dateRange = $this->Room_show_time
                            ->where('Room_id', 'LIKE', $roomID)
                            ->get();
        return $dateRange;
    }

    public function getTimeWithDate($roomID, $time, $checkDB, $checkDE) {
        $timeDate = $this->Room_show_time
                            ->where([
                                ['Room_id', 'LIKE', $roomID],
                                ['TimeVal', 'LIKE', $time],
                                ['DateBegin', '<=', $checkDB],
                                ['DateEnd', '>=', $checkDE]
                            ])
                            ->get();
        return $timeDate;
    }
    public function checkInvalid($request) {
        $reqR = $request->Room_id;
        $reqTime = $request->TimeVal;
        echo $reqTime;
        $reqDB = $request->DateBegin;
        $reqDE = $request->DateEnd;
        // echo $reqDB."<br>".$reqDE."<br>";
        $checkDateRange = $this->checkDateRange($reqR);
        // $reqDate = $this->GetDateFromRange($reqDB, $reqDE);

        $checkTimeWithDate = [];
        for ($i = 0; $i < count($checkDateRange); $i++) { 
            $checkDB = $checkDateRange[$i]->DateBegin;
            $checkDE = $checkDateRange[$i]->DateEnd;
           
            if (($checkDB <= $reqDB) && ($checkDE >= $reqDB) && ($checkDE <= $reqDE)) {
                    # code... nho hon
                    $_checkDB = $reqDB;
                    $_checkDE = $checkDE;
            }
            else if (($checkDB >= $reqDB) && ($checkDB <= $reqDE) && ($checkDE >= $reqDE)) {
                    # code... lon hon
                    $_checkDB = $checkDB;
                    $_checkDE = $reqDE;
            }
            else if (($checkDB >= $reqDB) && ($checkDE <= $reqDE)) {
                    # code... o giua
                    $_checkDB = $checkDB;
                    $_checkDE = $checkDE;
            }
            // (($checkDB <= $reqDB) && ($checkDE >= $reqDE))
            else if (($checkDB <= $reqDB) && ($checkDE >= $reqDE)) {
                    # code... o ngoai
                    $_checkDB = $reqDB;
                    $_checkDE = $reqDE;
            } else {
                    $_checkDB = null;
                    $_checkDE = null;
            }
            // echo $_checkDB."----------".$_checkDE."<br>";
            // kiem tra ngay - gio bi trung
            if (is_null($_checkDB) && is_null($_checkDB)) {
                echo "find date empty-----------<br>";;
            } else {
                echo "find similar dateIp-----------<br>";
                $checkTimeWithDate = $this->getTimeWithDate($reqR, $reqTime, $_checkDB, $_checkDE);
            }
        }
        // dem so ngay - gio bi trung
        if (count($checkTimeWithDate) > 0) {
            return $message =  "create fail ";
        }
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

    public function createSeatShow($request) {
        $roomId = $request->Room_id;
        $timeVal = $request->TimeVal;
        $dateBegin = $request->DateBegin;
        $dateEnd = $request->DateEnd;
        $allSeat = $this->room
                        ->leftJoin('seat_rows', 'seat_rows.RoomID', 'LIKE', 'rooms.RoomID')
                        ->leftJoin('seat_nos', 'seat_nos.RowID', 'LIKE', 'seat_rows.RowID')
                        ->select('seat_nos.*')
                        ->where('rooms.RoomID', 'LIKE', $roomId)
                        ->get();

        $dateRange = $this->GetDateFromRange($dateBegin, $dateEnd);

        $record = [];
        for ($i = 0; $i < count($dateRange); $i++) { 
            for ($j = 0; $j < count($allSeat); $j++) { 
                $record[] = 
                [
                    'SeatNoID' => $allSeat[$j]->SeatID,
                    'TimeVal' => $timeVal,
                    'DateVal' => $dateRange[$i]
                ];
            }
        }
        // dd($record);
        $newRecord = $this->seatShow->insert($record);
    }

    public function store(RoomShowTimeRequest $request)
    {
        $error = $this->checkInvalid($request);
        if (is_null($error)) {
            // save new showtime record
            $newShowTime = $request->except('_token');
            $this->Room_show_time->create($newShowTime);
            //save new seatshow record with parameter from new showtime record
            $this->createSeatShow($request);
            return redirect()->route('showTimeIndex');
            // echo "create successfull-----------<br>";
        } else {
            $message = "duplicate 'date & time' to create new Showtime";
            return redirect(route('showTimeAdd'))->with('message', $message);
        }
        // dd("stop");
        // $newShowTime = $request->except('_token');
        // dd($newShowTime);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
