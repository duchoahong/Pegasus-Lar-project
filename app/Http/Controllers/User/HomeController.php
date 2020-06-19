<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home() {
    	return view('layouts.app', [
    							'authHomeRoute' => 'user.home',
    							'authLoginRoute' => 'user.login']);
    }
    public function index() {
        $this->authorize('edit-profile');
    	return view('dashboard', [
    							'authHomeRoute' => 'user.home',
    							'authLoginRoute' => 'user.login']);
    }
}
