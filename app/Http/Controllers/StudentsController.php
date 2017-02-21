<?php

namespace App\Http\Controllers;

use App\Fees;
use App\User;
use Illuminate\Http\Request;
use App\Student;
use App\Faculty;
use App\Http\Requests;
use Illuminate\Routing\Controller;

// use App\Http\Controllers\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class StudentsController extends Controller
{
    //index
    public function index(){
     
      $students=Student::all();
      return view('student.index',compact('students'));
    }
    public function create(){
        $user = Auth::user();
       $faculties=Faculty::all();
       $student = Student::where('user_id', $user->id)->first();
       if($student == null) {
           return view('student.create',compact('faculties'));
       } else {
           return view('student.edit', compact('student'));
       }

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

        if (Auth::user()->role_id == 1)
        {
            // create student in users table
            $user=new User();
            $user->name=$request->get('name');
            $user->email=$request->get('email');
            $user->password=bcrypt($request->get('national_id'));
            $user->role_id=2;
            $user->save();

            //create an object for eloquent Detail
            $student=new Student();
            $student->name=$request->get('name');
            $student->admission_number=$request->get('admission_number');
            $student->email=$request->get('email');
            $student->date_of_birth=$request->get('date_of_birth');
            $student->national_id=$request->get('national_id');

            $student->faculty_id=$request->get('faculty_id');
            $student->user_id=$user->id;
            $student->save();
            return redirect('/students');
        } else {

            //create an object for eloquent Detail
            $student=new Student();
            $student->name=$request->get('name');
            $student->admission_number=$request->get('admission_number');
            $student->email=$request->get('email');
            $student->date_of_birth=$request->get('date_of_birth');
            $student->national_id=$request->get('national_id');

            $student->faculty_id=$request->get('faculty_id');
            $student->user_id=Auth::user()->id;
            $student->save();
            return redirect('student/'.$student->id);
        }
    }
    public function show($id){

    	$student=Student::find($id);
    	$fees=Fees::where('student_id',$student->id)->get();
    	return view('student.show',compact('student','fees'));

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

        $student->faculty_id=$request->get('faculty_id');

        $student->save();

        return redirect('/students');

    } 
    public function destroy($id){

        $student=Student::find($id);
        $student->delete();
        return redirect('students')->with(['message'=>('Successfully deleted student')]);
    }
}
