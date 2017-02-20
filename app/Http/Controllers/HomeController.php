<?php

namespace App\Http\Controllers;

use App\Http\Requests;
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
        $user=Auth::user();
        if($user->role_id==1){
            return redirect('admin');
        } elseif ($user->role_id==2) {
            return redirect('students/'.$user->id);
        }
        else{
            return redirect('home');
        }
    }
        

}
