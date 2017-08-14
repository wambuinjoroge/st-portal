<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

use App\Http\Requests;

class SearchController extends Controller
{
    //logic for the search button,query per say
    function student(){
        $query  = Student::orderBy('id',DESC)
            ->select(['national_id','name','admission_number','email','date_of_birth','gender'])
            ->get();
        print_r($query);exit();
    return back();
    }
    function query(Request $request){
        if($request->get('query')){

        }
    }

}
