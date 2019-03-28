<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PossitionController extends Controller
{
    //

	public function index(){
		return view('possition');
	}
	/*public function index(){
        $possitions = possition::all()->toArray();
        return view ('home',compact('possitions'));
    }*/
    //public function create(){
   // 	return view('possition');
   // }

    //save possitions entered by the admin
    public function store(Request $req){

    	$name = $req->input('pname');
    	$type = $req->input('ptype');
    	$desc = $req->input('desc');
    	$status = $req->input('status');



    	$data = array(
    		'name'=>$name,
    		'type'=>$type,
    		'desc'=>$desc,
    		'status'=>$status,
    		'added_time'=>date("Y/m/d h:i:sa")
    	);

    	DB::table('possitions')->insert($data);
    	 //Alert::message("added suucessfully!");
    	 //return Redirect::home();
    	//return 'added suucessfully!';
        return redirect()->route('showPossition');
    	

    }
   // public function getStatus(){
   // 	$possitions
   // }
}
