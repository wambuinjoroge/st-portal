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

        $student = Student::where('user_id',$user->id)->first();

//          WRONG
//        $hostel = DB::table('hostels')->join('rooms','hostels.id','=','rooms.hostel_id')
//            ->select(['rooms.id','rooms.random_no','hostels.hostel_name','hostels.hostel_head','hostels.id'])
//            ->where('hostels.id',$student->hostel_id)
//            ->get();

        $hostel=DB::table('hostels')->select(['hostels.id','hostels.hostel_name','hostels.hostel_head'])
            ->where('hostels.id',$student->hostel_id)
            ->first();

        //$rooms = Room::where('hostel_id',$hostel->id);
        $rooms = DB::table('rooms')->select(['rooms.id','rooms.random_no'])
            ->where('rooms.hostel_id',$hostel->id)
            ->get();
//       print_r($hostel);exit();

       return view('hostels.show',compact('hostel','student','rooms'));

    }

    public function myHostels(Request $request)
    {
        $user = Auth::user();

        $student = Student::where('user_id', $user->id)->first();

        $student->hostel_id = $request->get('hostel_id');

        $student->save();

        $hostel_id = $request->get('hostel_id');

        $hostel=Hostel::find($hostel_id);


        return redirect('myHostels');
    }

    public function stRoom(){
       $user = Auth::user();

       $student = Student::where('user_id',$user->id)->first();

       $hostel = DB::table('hostels')->select('hostels.id','hostels.hostel_name','hostels.hostel_head')
           ->where('hostels.id',$student -> hostel_id)
           ->first();


       $room = DB::table('rooms')->select('rooms.id','rooms.random_no','rooms.status')
           ->where('rooms.id',$student -> room_id)
           ->first();

//       print_r($room);exit();
        if($room->status = 1){
            return view('hostels.myRoom',compact('room','hostel'));
        }else{
            return redirect('myHostels');
        }



//        if ($room){
//            $room->status = 1;
//        }
//
//        if ($room->status == true){
//            return view('hostels.myRoom',compact('room','hostel'));
//        }else{
//            return redirect('myHostel');
//        }
//        return view('hostels.myRoom',compact('room','hostel'));
    }

    public function myRoom (Request $request){

        $user=Auth::user();

        $student=Student::where('user_id',$user->id)->first();

        //getting the value from the form
        $student->room_id=$request->get('room_id');

        $student->save();

        $room_id=$request->get('room_id');

        $room=Room::find($room_id);

        return redirect('myRoom');

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
        $student=Student::where('user_id',$user->id)->get();

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
