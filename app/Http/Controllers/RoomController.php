<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

use App\Http\Requests;

class RoomController extends Controller
{
    //
    public function index(){
        return array(
            1 => "A001",
            2 => "B001",
            3 => "C001",
            4 => "D001"
        );
//       $rooms=Room::all();
//       return view('room.index',compact('rooms'));
    }


}
