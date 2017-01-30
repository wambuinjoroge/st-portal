<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use App\Faculty;

class FacultyController extends Controller
{
    //
    public function index(){
    	$faculties=Faculty::all();
         // $students=App\Faculty::find(1)->students()->where('id',=,'1')->first();
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
        $faculty=Faculty::find($id);
        return view('faculties.show',compact('faculty'));        
       
    }
}
