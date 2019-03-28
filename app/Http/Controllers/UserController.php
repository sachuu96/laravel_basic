<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
    //my try out
    	$users = [
    		'0'=>[
    			'First_name'=>'Sachini',
    			'Last_name'=>'Tharinda',
    			'Location'=> 'Galle'
    		],
    		'2'=>[
    			'First_name'=>'Worandi',
    			'Last_name'=>'Kasunda',
    			'Location'=>'Colombo'
    		]
    	];
    	return view('admin.users.index',compact('users'));
    }
    public function create()
    {
    	return view('admin.users.create');
    }
    public function store(Request $request)
    {
    	User::create ($request->all());
    	return 'succsess';
    	return $request->all();
    }
}
