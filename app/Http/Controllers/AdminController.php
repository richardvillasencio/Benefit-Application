<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;

use app\Http\Requests;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct(){
    	$this->middleware('admin');
    }

    public function index(){
    	// return Auth::guard('admin')->user();
    	return view('admin.dashboard');
    }
}
