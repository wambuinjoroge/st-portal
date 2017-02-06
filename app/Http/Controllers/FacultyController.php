<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faculty;
use App\Unit;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Validator;


class FacultyController extends Controller
{
    //
    public function index(){

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

//        $faculty=Faculty::find($id)->with(['units'])->first();

        $faculty=Faculty::find($id);
        $units=Unit::where('faculty_id',$faculty->id)->get();
        //print_r($faculty);exit();
        return view('faculties.show',compact('faculty','units'));
       
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
