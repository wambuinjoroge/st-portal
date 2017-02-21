<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Student;
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
        if($user) {
            return redirect('home');
        }
        else{
            return redirect('/login');
        }
    }
        

}
