<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return view('layouts.app', [
    							'authHomeRoute' => 'admin.home',
    							'authLoginRoute' => 'admin.login']);
    }
}
