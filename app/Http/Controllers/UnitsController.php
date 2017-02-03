<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unit;
use App\Faculty;
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
        $faculties=Faculty::all();
        return view('units.create',compact('faculties'));
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
        $unit=Unit::find($id);
        return view('units.show',compact('unit'));         
    }
    public function edit($id){
        $unit=Unit::find($id);
        return view('units.edit',compact('unit'));

    }
    public function update(Request $request,$id){
        $validator=Validator::make($request->all(),[
           "name"=>"required",
            ]);
        if ($validator->fails()) {
            # code...
            return redirect()->back()
                 ->withErrors($validator)
                 ->withInput();
        }

        $unit=Unit::find($request->id);

        $unit->name=$request->get('name');
        $unit->faculty_id=$request->get('faculty_id');

        $unit->save();

        return redirect('units');

    }
    public function destroy($id){
    	$unit=Unit::find($id);
    	$unit->delete();

    	return redirect('units');
    }
}
