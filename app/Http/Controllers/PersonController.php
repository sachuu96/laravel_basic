<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Alert;
use App\Person;

class PersonController extends Controller
{

    public function create(){
    	
    	return view('home');
    }

    //based on the given status(selected from the drop down) filter the aplicants and display them
    public function show(Request $req){
        $status = $req->input('status');
        $data = Person::where('status','=',$status)->get();
        return view('person',compact('data'));
    }

    public function index(){
        return view('person');
    }

    //change the status of the applicants by admin
    public function edit(Request $req){

        $personUpdate =  Person::where('id',$req->input('uid'))->update(['status'=>$req->input('status')]);

        if($personUpdate){
            return redirect()->route('show');
        }
    }

    //share the details via email
    public function share(Request $req){
        $body = array(
            'first name'=>$req->input('fname'),
            'last name'=>$req->input('fname'),
            'cv'=>$req->input('cv'),
            'address'=>$req->input('address'),
            'email'=>$req->input('email'),
            'apply_possition'=>$req->input('apply_possition'),
            'exprt_yrs'=>$req->input('exprt_yrs'),
            'mobile_number'=>$req->input('mobile_number'),
            'nic'=>$req->input('nic'),
            'dob'=>$req->input('dob'),
            'acc_number'=>$req->input('acc_number'),
            'acc_name'=>$req->input('acc_name'),
            'branch'=>$req->input('branch'),
            'bank'=>$req->input('bank'),
            'last_possition_name'=>$req->input('last_possition_name'),
            'last_company_name'=>$req->input('last_company_name'),
            'last_salary'=>$req->input('last_salary'),
            'exprt_areas'=>$req->input('exprt_areas'),
        ); 
        $data = array('name'=>'Sachini Tharinda',"body"=>'$body');
        Mail::send('emails.mail',$data,function($message){
            $message->to('apply@teamcybertech.com','Cyber Tech')
                    ->subject('Apply for cyber tech team');
            $message->from('chandrasena.st.21@gmail.com','Sachini Tharinda');
        });
        echo "Email sent!";
    }

    //save details when applicants apply for possitions
    public function store(Request $req){
    	
    	if($req->hasFile('fileToUpload'))
    	{
    		//$cv = $req->fileToUpload->getClientOriginalName();
    		//set the cv name into required format
    		$cv = $req->input('fname')."-".$req->input('lname')."-".$req->input('positionApply')."-".date("Y/m/d h:i:sa").".".$req->fileToUpload->getClientOriginalExtension();
    		//$cv = $req->fileToUpload->store('public/upload');
    	}
    //	return $req->all();
    	$fname = $req->input('fname');
    	$lname= $req->input('lname');
        $cv_real_name = $req->fileToUpload->store('public/upload');
    	$address= $req->input('address');
    	$email= $req->input('email');
    	$apply_possition= $req->input('positionApply');
    	$exprt_yrs= $req->input('notes');
    	$mobile_number= $req->input('mobileNumber');
    	$nic= $req->input('nicNumber');
    	$dob= $req->input('birthday');
    	$acc_number = $req->input('accNumber');
    	$acc_name= $req->input('accName');
    	$branch= $req->input('branch');
    	$bank=$req->input('bankName');
    	$last_possition_name= $req->input('lasttittle');
    	$last_company_name= $req->input('lastcompany');
    	$last_salary= $req->input('lastsalary');
    	$exprt_areas = $req->input('notes');

    	$data = array(
    		'fname'=>$fname,
    		'cv'=>$cv,
            'cv_real_name'=>$cv_real_name,
    		'lname'=>$lname,
    		'address'=>$address,
    		'email'=>$email,
    		'apply_possition'=>$apply_possition,
    		'exprt_yrs'=>$exprt_yrs,
    		'mobile_number'=>$mobile_number,
    		'nic'=>$nic,
    		'dob'=>$dob,
    		'acc_number'=> $acc_number,
    		'acc_name' =>$acc_name,
    		'branch' =>$branch,
    		'bank' =>$bank,
    		'last_possition_name' =>$last_possition_name,
    		'last_company_name'=> $last_company_name,
    		'last_salary' =>$last_salary,
    		'exprt_areas'=> $exprt_areas,
            'status'=>'pending'
    	);

    	DB::table('people')->insert($data);
    	
        Alert::message("added suucessfully!");

        return redirect()->route('home');



    }

}
