<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;
use App\Http\Requests;

class AdminController extends Controller
{
    //
    public function index(){
    	return view('admin.index');
    }

     public function profile(){
     	$details=Detail::all();
    	return view('admin.profile',compact('details'));
    }

    public function units(){
    	return view('admin.unit');
    } 

    public function hostels(){
    	return view('admin.hostels');
    }

}
