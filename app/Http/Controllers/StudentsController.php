<?php

namespace App\Http\Controllers;


//namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Faculty;
use App\Http\Requests;
use Illuminate\Routing\Controller;

// use App\Http\Controllers\Session;
use Illuminate\Support\Facades\Validator;

class StudentsController extends Controller
{
    //index
    public function index(){
     
      $students=Student::all();
      return view('student.index',compact('students'));
    }
    public function create(){

       $faculties=Faculty::all(); 
       return view('student.create',compact('faculties'));

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
    	$student->national_id=$request->get('national_id');

        $student->faculty_id=$request->get('faculty_id');

    	$student->save();
      
      //Session::flash('message', 'Successfully created student!');

      return redirect('students');

    }
    public function show($id){

    	// $student=App\Faculty::find(1);
    	// echo $comment->faculty->id;
    	$student=Student::find($id);
    	return view('student.show',compact('student'));

    }
    public function edit($id){
    	$student=Student::find($id);
    	return view('student.edit',compact('student'));
    }
    public function update( Request $request ,$id){
        $validator=Validator::make($request->all(),[
        	'name' =>'required',
        	'admission_number'=>'required',
        	'email'=>'required',
        	'date_of_birth'=>'required',
        	'national_id'=>'required',
        	]);
        if ($validator->fails()) {
        	# code...
        	return redirect()->back()
        	     ->withErrors($validator)
        	     ->withInput();
        }
        $student=Student::find($request->id);

        $student->name=$request->get('name');
        $student->admission_number=$request->get('admission_number');
        $student->email=$request->get('email');
        $student->date_of_birth=$request->get('date_of_birth');
        $student->national_id=$request->get('national_id');

        $student->save();

        return redirect('/students');

    } 
    public function join(){

    } 
}
