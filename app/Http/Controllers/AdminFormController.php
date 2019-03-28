<?php

namespace App\Http\Controllers;
//keep in remember to use the model here once u cretae the table

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class AdminFormController extends Controller
{
    public function adminform()
    {
    	return view('admin.users.adminForm');
    }
    public function store(Request $request)
    {
    	return  $request->all();//ti view the request details	
    	//$name = $request->input('name');
    	//$email = $request->input('email');
    	//$password = $request->input('psw');
    	//$rpt_password = $request->input('psw-repeat');
    	//DB::insert('insert into user(id,name,email,password) values (?,?,?,?)')
    }
}
