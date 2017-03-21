<?php

namespace App\Http\Controllers;

use App\Student;
use App\Student_Unit;
use App\StudentUnit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Faculty;
use App\Unit;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class FacultyController extends Controller
{
    //
    public function index(){

        $faculties=Faculty::all();
       	return view('faculties.index',compact('faculties'));
    }
//    public function search(){
//        $users = User::search($query)
//            ->with('posts')
//            ->get();
//        return view('',compact('users'));
//    }

    public function create(){

        return view('faculties.create');
    }

    public function stUnits(){
        $user=Auth::user();

        $faculty = DB::table('faculties')->join('students','faculties.id','=','students.faculty_id')
            ->select(['students.id','faculties.id','faculties.name'])
            ->where('user_id',$user->id)
            ->first();

        $student_unit=StudentUnit::join('students','student_units.student_id','=','students.id')
            ->join('units','student_units.unit_id','=','units.id')
            ->select([
                'units.name','student_units.created_at','units.id'
            ])
            ->where('user_id',$user->id)->get();

        return view('faculties.student_unit',compact('student_unit','faculty'));

    }

    public function myUnits(Request $request)
    {
        $user=Auth::user();
        $student=Student::where('user_id',$user->id)->first();

        //get the unit_ids from the register units view since they come as an array
        $units=$request->get('unit_id');
//        print_r($units);exit();
        if (is_array($units)){
           foreach ($units as $unit){
               $data = [
                   'unit_id' => $unit,
                   'student_id' => $student->id,
                   'created_at' => Carbon::now(),
                   'updated_at' => Carbon::now()
               ];
//               print_r($data);exit();
               DB::table('student_units')->insert($data);
           }
        }

        return redirect('student-units');
    }

    public function store(Request $request){
    	$validator=Validator::make($request->all(),[
             'name'=>'required',
             'head'=>'required',
    		]);
    	if ($validator->fails()) {
    		# code...
    		return redirect()->back()
    		        ->withErrors($validator)
    		        ->withInput();
    	}

    	$faculty=new Faculty();

        $faculty->name=$request->get('name');
    	$faculty->head=$request->get('head');

    	$faculty->save();

    	return redirect('faculties');

    }

    public function show($id)
    {
        $user=Auth::user();
        $student=Student::where('user_id',$user->id)->first();
        $student_unit=StudentUnit::where('student_id',$student->id)->first();
//        print_r($student_unit);exit();
        if ($student_unit == []){
            $faculty=Faculty::find($id);
            $units=Unit::where('faculty_id',$faculty->id)->get();
            //print_r($faculty);exit();
            return view('faculties.show',compact('faculty','units','student'));
        }else{
            return redirect('student-units');
        }
   }


    public function show2($id){
        $faculty=Faculty::find($id);
        $students=Student::where('faculty_id',$faculty->id)->get();
        return view('faculties.show2',compact('faculty','students'));
    }

    public function edit($id){
       $faculty=Faculty::find($id);
       return view('faculties.edit',compact('faculty'));
    }

    public function update(Request $request ,$id){
       $validator=Validator::make($request->all(),[
           "name"=>"required",
           "head"=>"required"
         ]);

       if ($validator->fails()) {
           # code...
        return redirect()->back()
               ->withErrors($validator)
               ->withInput();
     
     }
         $faculty=Faculty::find($request->id);

         $faculty->name=$request->get('name');
         $faculty->head=$request->get('head');

         $faculty->save();

         return redirect('/faculties');        
    }

    public function destroy($id){
         $faculty=Faculty::find($id);
         $faculty->delete();

         return redirect('faculties');
    }


}
