<?php

namespace App\Http\Controllers;

use App\Lecturer;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    public function create_evaluation(){

        $user = Auth::user();

        $student= Student::where('user_id',$user->id)->first();

//        print_r($student);exit();
        $faculty = DB::table('faculties')
            ->select('faculties.id','faculties.name')
            ->where('faculties.id',$student->faculty_id)
            ->first();

//       print_r($faculty);exit();
        $lecturers = Lecturer::all();
//        print_r($lecturers);exit();
//        $courses = Course::where('faculty_id',$faculty->id);

        return view('student.evaluation',compact('faculty','student','lecturers'));
    }

    public function store_eval(Request $request){




    }
}
