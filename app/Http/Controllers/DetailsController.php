<?php

namespace App\Http\Controllers;


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;
use App\Http\Requests;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class DetailsController extends Controller
{
    //create method for a form with the details
    public function index(){
    	$details=Detail::all();
      return view('details.index',compact('details'));
    }
    public function create(){
       return view('details.create');
    }

    public function store(Request $request){
    	$validator=Validator::make($request->all(),[
    	//validator = Validator::make(Input::all(), $rules);
           "name"=>"required",
           "admission_number"=>"required",
           "email"=>"required",
           "date_of_birth"=>"required",
           "phone_number"=>"required",
    	]);
    	if ($validator->fails()) {
    		# code...
    		return redirect()->back()
    		->withErrors($validator->errors())
    		->withInput();
    	}
        //create an object for eloquent Detail 
    	$detail=new Detail();
    	$detail->name=$request->get('name');
    	$detail->admission_number=$request->get('admission_number');
    	$detail->email=$request->get('email');
    	$detail->date_of_birth=$request->get('date_of_birth');
    	$detail->phone_number=$request->get('phone_number');

    	$detail->save();
      
      
      return redirect('prof');

    }

    public function show($id){

    	
    }
   

}
