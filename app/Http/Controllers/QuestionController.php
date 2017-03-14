<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Lecturer;
use App\Question;
use App\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class QuestionController extends Controller
{
    public function create_evaluation()
    {

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

    public function evaluate()
    {
        $user=Auth::user();

        $student = Student::where('user_id',$user->id)->first();

//        print_r($student);exit();
        $lecturers = Lecturer::all();

        $questions =Question::with('answers')->get();

        return view('question.evaluate',compact('student','questions','lecturers'));
    }

    public function store(Request $request)
    {
//        print_r($request->all());

        print_r(array_chunk($request->all(),2,true));exit();

       $evaluations->save();



       return redirect('evaluate');

    }

    public function one($id){

        $question = Question::find($id);

        $answers = Answer::where('question_id',$question->id)->get();

        return view('question.evaluate',compact('answers','question'));
    }
}
