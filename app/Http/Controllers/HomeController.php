<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Student;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function display()
    {
        return view('dev');
    }
    public function checkUser(){
        //
        $user=Auth::user();//identifying the logged in user
        $student = Student::where('user_id',$user->id)->first();//use the user info to get the value of a student's id
        if($user->id == 1) {
            return redirect('home');
        }elseif (($user->id) !== 1){
            return redirect('student/'.$student->id);
        }
        else{
            return redirect('/login');
        }
    }
        

}
