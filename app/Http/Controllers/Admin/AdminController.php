<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('admin')->except('logout');
    }

    public function index() {
    	return view('dashboard', ['authHomeRoute' => 'admin.home',
            					'authLoginRoute' => 'admin.login']);
    }

}
