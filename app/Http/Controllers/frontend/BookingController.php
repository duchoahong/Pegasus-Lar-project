<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    public function booking() {
    	return view('frontend.pay.booking');
    }
    public function payment() {
    	return view('frontend.pay.payment');
    }
}
