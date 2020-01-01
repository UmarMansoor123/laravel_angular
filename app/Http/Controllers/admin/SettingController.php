<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    //
    public function index(Request $Request){
    	try{
    		$content['title']="Settings";

    	return view("admin.setting.setting")->with($content);
    }
    catch(\Exception $ex){
    	echo $ex;
    }
    }
}
