<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\possition;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$possitions = possition::all();
        //filter possitions where status is active and display them in a dynamic drop down
        $possitions = possition::where('status','=','1')->get();
        return view('home',compact('possitions'));
    }
    public function getPossitions(){

        $data['data']=DB::table('possitions')->get();
        if(count($data[0])>0){
            return view('home',$data);
        }
        else{
            return view('home');
        }
    }
}
