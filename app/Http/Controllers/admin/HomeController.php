<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
	public function __construct()
	{
	$this->middleware('auth');
	}
    public function index(){
       //echo "admin";
         return view("admin.dashboard.dashboard");
    }
}
