<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DownloadController extends Controller
{
	//my try out
    public function downfunc(){

    	$downloads = DB::table('people')->get();
    	return view('person',compact('downloads'));
    }
}
