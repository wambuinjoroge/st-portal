<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faculty;
use App\Student;
use App\Http\Requests;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Validator;


class FacultyController extends Controller
{
    //
    public function index(){
    	    // $students=App\Faculty::find(1)->students()->where('id',=,'1')->first();
        $faculties=Faculty::all();

       	return view('faculties.index',compact('faculties'));
    }

    public function create(){
        return view('faculties.create');
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

    public function show($id){
        //get faculty details
        $faculty=Faculty::find($id);
        // get all students that have similar id of that faculty.
        $students=Student::where('faculty_id',$faculty->id)->get();

        return view('faculties.show',compact('faculty','students'));        
       
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

    // public function students(){
    //   $faculties=DB::table('faculties')
    //        ->join('students','faculties.id','=','students.faculties_id')
    //        ->select('faculties.*','students.name')
    //        ->get();
    //   return view ('faculties.show',compact('faculties'));
    // }

}
