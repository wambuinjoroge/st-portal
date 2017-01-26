<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Http\Requests;

class StudentsController extends Controller
{
    //index
    public function index(){
       // $student=App\Faculty::find(1);
      $students=Student::all();
      return view('students.index',compact('students'));
    }
    public function create(){
       return view('students.create');
    }

    public function store(Request $request){
    	$validator=Validator::make($request->all(),[
    	//validator = Validator::make(Input::all(), $rules);
    	   "national_id"=>"required",
           "name"=>"required",
           "admission_number"=>"required",
           "email"=>"required",
           "date_of_birth"=>"required",
       	]);
    	if ($validator->fails()) {
    		# code...
    		return redirect()->back()
    		->withErrors($validator->errors())
    		->withInput();
    	}
        //create an object for eloquent Detail 
    	$student=new Student();
    	$student->name=$request->get('name');
    	$student->admission_number=$request->get('admission_number');
    	$student->email=$request->get('email');
    	$student->date_of_birth=$request->get('date_of_birth');
    	$student->phone_number=$request->get('phone_number');

    	$student->save();
      
      
      return redirect('prof');

    }
    public function show($id){
    	$student=App\Faculty::find(1);
    	echo $comment->faculty->id;
    }
}
