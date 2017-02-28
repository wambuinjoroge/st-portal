<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

use App\Http\Requests;

class RoomController extends Controller
{
    //
    public function index(){
       $rooms=Room::all();
       return view('room.index',compact('rooms'));
    }


}
