<?php

namespace App\Http\Controllers;

use App\Hostel;
use App\Student;
use App\Room;
use App\StudentUnit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Http\Requests;

class HostelsController extends Controller
{
    //
    public function index()
    {
        $hostels = Hostel::all();
        return view('hostels.index', compact('hostels'));
    }

    public function hostels()
    {
        $hostels = Hostel::all();
//      print_r($hostels);exit();
        return view('hostels.st-hostels', compact('hostels'));
    }

    public function stHostels(){

        $user = Auth::user();

        $hostel = DB::table('hostels')->join('students','hostels.id','=','students.hostel_id')
            ->join('rooms','hostels.id','=','rooms.hostel_id')
            ->select(['rooms.random_no'])
            ->where('user_id','=',$user->id)
            ->get();

//        print_r($hostel);exit();

       return view('hostels.show',compact('hostel'));

    }

    public function myHostels(Request $request)
    {
        $user = Auth::user();

        $student = Student::where('user_id', $user->id)->first();

        $student->hostel_id = $request->get('hostel_id');

        $student->save();

        $hostel = $request->get('hostel_id');


        return redirect('myHostels');
    }

    public function myRoom (Request $request){

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

        $user=Auth::user();
        $student=Student::where('user_id',$user->id);

        $hostel = Hostel::find($id);
        $rooms = Room::where('hostel_id', $hostel->id)->get();

        return view('hostels.show',compact('hostel','rooms','student'));
    }

    public function show2($id){

        $hostel = Hostel::find($id);
        $students = Student::where('hostel_id', $hostel->id)->get();

        return view('hostels.show2',compact('hostel','students'));
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
