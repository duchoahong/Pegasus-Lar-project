<?php

namespace App\Http\Controllers\backend;

use App\Model\room;
use App\Model\seat_row;
use App\Model\seat_no;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Seat_noController extends Controller
{
    public function __construct(room $room, seat_row $seat_row, seat_no $seat_no) {
        $this->room = $room;
        $this->seat_row = $seat_row;
        $this->seat_no = $seat_no;
    }
    
    public function index($id)
    {
        $seat_no = $this->seat_no->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\seat_no  $seat_no
     * @return \Illuminate\Http\Response
     */
    public function show(seat_no $seat_no)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\seat_no  $seat_no
     * @return \Illuminate\Http\Response
     */
    public function edit(seat_no $seat_no)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\seat_no  $seat_no
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, seat_no $seat_no)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\seat_no  $seat_no
     * @return \Illuminate\Http\Response
     */
    public function destroy(seat_no $seat_no)
    {
        //
    }
}
