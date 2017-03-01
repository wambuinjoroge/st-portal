<?php

namespace App\Http\Controllers;

use App\Hostel;
use App\Student;
use App\Room;
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

//      print_r($hostels);exit();

        return view('hostels.st-hostels', compact('hostels'));
    }

    public function myHostels(Request $request )
    {

        //logic to find the authenticated logged in user
        $user=Auth::user();
//        print_r($id);exit();
        //find the student using the user_id
        $student=Student::where('user_id',$user->id)->first();
        //get their hostel_id from the view to the db
        $student->hostel_id=$request->get('hostel_id');
        //save the student's hostel
        $student->save();

        //define the variable hostel_id
        $hostel_id=$request->get('hostel_id');
//        $hostel=Hostel::where('id',$hostel_id)->first();
        //get the particular hostel in question from the model hostel using hostel-id
        $hostel=Hostel::find($hostel_id);
        //get the rooms relating to the hostel using hostel_id
        if(!empty($hostel)) {
            $rooms=Room::where('hostel_id',$hostel->id)->get();
            return view('hostels.myHostels',compact('hostel','rooms'));
        } else {
            return redirect('student-hostels');

        }

//            print_r($rooms);exit();
        }

    public function myRoom (Request $request){
//        $room=Room::where('id',$id);
        $user=Auth::user();
        $student=Student::where('user_id',$user->id)->first();
        $student->room_id=$request->get('room_id');
        $student->save();

        $room_id=$request->get('room_id');
        $room=Room::find($room_id);
        if ($room){
            $room->status = 1;
            $room->save();
        }

        //$status=Room::where('status',$room->status == 1) ? true : false;

        if ($room->status == true){
            return view('hostels.myRoom',compact('room'));
        }else{
            return redirect('myHostel');
        }



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
