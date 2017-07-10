<?php

namespace App\Http\Controllers;

use App\Course;
use App\Evaluation;
use App\Fees;
use App\Graduation;
use App\Hostel;
use App\Lecturer;
use App\StudentUnit;
use App\User;
use Illuminate\Http\Request;
use App\Student;
use App\Faculty;
use App\Http\Requests;
use Illuminate\Routing\Controller;

// use App\Http\Controllers\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class StudentsController extends Controller
{
    //index
    public function index(){
     
      $students=Student::all();
      return view('student.index',compact('students'));

    }
    //Graduation applicants
    //Getting all the graduands
    public function graduands(){

        $graduations = Graduation::all();
        return view('student.stGraduate',compact('graduations'));

    }

    public function stGraduation(){
        //getting the logged in user
        $user = Auth::user();
        //querying the students table to get the required details
        $student = DB::table('students')->select(['students.id','students.admission_number','students.faculty_id','students.national_id'])
            ->where('user_id',$user->id)
            ->first();

//      print_r($student);exit();
        //querying the faculties table to get the name and id
        $faculty = DB::table('faculties')->select(['faculties.id','faculties.name'])
            ->where('faculties.id',$student->faculty_id)
            ->first();

//        print_r($faculty);exit();
        return view('student.graduate',compact('student','faculty'));

    }

    public function graduation(Request $request){

        $validator = Validator::make($request->all(),[

            "surname" => "required",
            "first_name" => "required",
            "other_names" => "required",
            "graduation_year" => "required",
            "education_level" => "required",
            "admission_no" => "required",
            "faculty_name" => "required",
            "national_id" => "required"

            ]);
        if ($validator->fails()){
            return redirect()->back()
                ->withErrors($validator->errors())
                ->withInput();
        }
        $graduation = new Graduation();

        $graduation->surname=$request->get('surname');
        $graduation->first_name=$request->get('first_name');
        $graduation->other_names=$request->get('other_names');
        $graduation->graduation_year=$request->get('graduation_year');
        $graduation->education_level=$request->get('education_level');
        $graduation->admission_no=$request->get('admission_no');
//        print_r($request->get('faculty_name'));exit();
        $graduation->faculty_name=$request->get('faculty_name');
        $graduation->national_id=$request->get('national_id');

        $graduation->save();

        $user = Auth::user();

        //updating a table's column
        DB::table('students')
            ->where('user_id',$user->id)
            ->update(['graduation_id' =>  $graduation->id ]);

        return redirect('graduand/'.$graduation->id);

    }

    public function showGrad($id){

        //getting to show one graduand and their already filled in form
        $graduation = Graduation::find($id);

        return view('student.showGrad',compact('graduation'));

    }
    public function save(Request $request){

        $file = $request->file('photo');//giving the file its name.
        $destinationPath = public_path('/public/picture/photos');//path where the photo is to be stored temporarily.
        $filename = $file->getClientOriginalName();//get the filename.


        if ($request->hasFile('photo')){

            $request->file('photo')->move($destinationPath);
            $request->file('photo')->move(public_path().$destinationPath, $filename);//move file to permanent destination.

//            dd(public_path().$destinationPath);
//            $user = Auth::user()->id;

            $input = $request->all();
            $input['photo']->pathname = $destinationPath.$file->getClientOriginalName();

//            $data['photo'] = $file->getClientOriginalName();
////            print_r($data);exit();
//            $user->update($data);

            //I was having the same issue because I was not giving the complete path to the destination folder
        }


        return redirect('students/create');
    }
    public function upload(){

        return view('student.photo');

    }

    public function create()
    {

       $faculties=Faculty::all();
       return view('student.create',compact('faculties'));

    }


    public function store(Request $request)
    {
//        print_r($request->all());exit();
        $validator = Validator::make($request->all(), [

            "national_id" => "required",
            "name" => "required",
            "admission_number" => "required",
            "email" => "required",
            "date_of_birth" => "required",
            "gender" => "required"

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
            $user->password=bcrypt($request->get('admission_number'));
            $user->role_id=2;

            $user->save();
//            print_r($user);exit();

        //create an object for eloquent Detail

        $student = new Student();

        $student->name = $request->get('name');
        $student->admission_number = $request->get('admission_number');
        $student->email = $user->email;
        $student->date_of_birth = $request->get('date_of_birth');
        $student->national_id = $request->get('national_id');
        $student->faculty_id = $request->get('faculty_id');
        $student->hostel_id = $request->get('hostel_id');
        $student->user_id = $user->id;

        //trying to get the gender of the specified student
        $student->gender=$request->get('gender');

        $student->save();

        return redirect('faculty/'.$student->faculty_id.'/students');

        }
    }
    public function show($id){

    	$student=Student::find($id);
//      print_r($student);exit();
    	$fee=Fees::where('student_id',$student->id)->get();
//    	print_r($fee);exit();
        $user_id = Auth::user()->id;

    	return view('student.show',compact('student','fee'))->with('user_id',$user_id);

    }
    public function show2($id){

        $student=Student::find($id);
        //join from child to parent,use of many to many relationships ie a student with many units while a unit is being done by many students
        $student_unit = DB::table('student_units')->join('units','student_units.unit_id','=','units.id')
            ->join('students','student_units.student_id','=','students.id')
            ->select(['units.id','units.name'])
            ->where('student_id',$student->id)
            ->get();

//        print_r($student_unit);exit();
        return view('student.show2',compact('student','student_unit'));

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
        $student->hostel_id=$request->get('hostel_id');
        $student->gender=$request->get('gender');
        $student->user_id=Auth::user()->id;
//        $id = Auth::user()->id;
        $student->save();

        return redirect('student/'.$student->id);

    } 
    public function destroy($id){

        $student=Student::find($id);
        $student->delete();
        return redirect('faculty/'.$student->faculty_id.'/students')->with(['message'=>('Successfully deleted student')]);
    }
}
