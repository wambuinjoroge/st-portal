<?php

namespace App\Http\Controllers;

use App\Hostel;
use App\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Http\Requests;

class HostelsController extends Controller
{
    //
    public function index(){
        $hostels=Hostel::all();
        return view('hostels.index',compact('hostels'));
    }
    public function hostels()
    {
        $hostels = Hostel::all();
        return view('hostels.st-hostels', compact('hostels'));
    }
    public function myHostels(Request $request)
    {
        $user=Auth::user();
//        print_r($id);exit();
        $student=Student::where('user_id',$user->id)->first();
        $student->hostel_id=$request->get('hostel_id');
        $student->save();
        $hostel_id=$request->get('hostel_id');
//        $hostel=Hostel::where('id',$hostel_id)->first();
        $hostel=Hostel::find($hostel_id);
        return view('hostels.myHostels',compact('hostel'));
    }

    public function create(){
       return view('hostels.create');
    }

    public function store(Request $request){
        $validator=Validator::make($request->all(),[
            'hostel_name'=>'required',
            'hostel_head'=>'required',
            'rooms_number'=>'required',
        ]);
        if ($validator->fails()){
            return redirect()-back()
                ->withErrors($validator)
                ->withInput();
        }

        $hostel=new Hostel();

        $hostel->hostel_name=$request->get('hostel_name');
        $hostel->hostel_head=$request->get('hostel_head');
        $hostel->rooms_number=$request->get('rooms_number');

        $hostel->save();

        return redirect('hostels');

    }

    public function show($id){
        $hostel=Hostel::find($id);
        return view('hostels.show',compact('hostel'));
    }

    public function edit($id){
        $hostel=Hostel::find($id);
        return view('hostels.edit',compact('hostel'));
    }

    public function update(Request $request , $id){
        $validator=Validator::make($request->all(),[
            'hostel_name'=>'required',
            'hostel_head'=>'required',
            'rooms_number'=>'required',
        ]);
        if ($validator->fails()){
            return redirect()-back()
                    ->withErrors($validator)
                    ->withInput();
        }

        $hostel=Hostel::find($id);

        $hostel->hostel_name=$request->get('hostel_name');
        $hostel->hostel_head=$request->get('hostel_head');
        $hostel->rooms_number=$request->get('rooms_number');

        $hostel->save();

        return redirect('hostels');
    }

    public function destroy($id){
        $hostel=Hostel::find($id);
        $hostel->delete();

        return redirect('hostels');
    }
}
