<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unit;
use App\Http\Requests;
use Illuminate\Routing\Controller;
use App\Http\Controllers\Unitscontroller;
use Illuminate\Support\Facades\Validator;


class UnitsController extends Controller
{
    //
    public function index(){
        $units=Unit::all();
        return view('units.index',compact('units'));    
    }
    public function create(){
        return view('units.create');
    }
    public function store(Request $request){
        $validator=Validator::make($request->all(),[
            "name"=>"required",
            ]); 
        if ($validator->fails()) {
            # code...
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $unit=new Unit();

        $unit->name=$request->get('name');
        $unit->faculty_id=$request->get('faculty_id');

        $unit->save();
        return redirect('units');
    }
    public function show($id){

    }
    public function edit($id){

    }
    public function update(Request $request,$id){

    }
    public function destroy($id){
    	
    }
}
