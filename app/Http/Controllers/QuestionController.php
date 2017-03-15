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
        $faculty = DB::table('faculties')
            ->select('faculties.id','faculties.name')
            ->where('faculties.id',$student->faculty_id)
            ->first();

//        print_r($student);exit();
        $lecturers = Lecturer::all();

        $questions =Question::with('answers')->get();

        return view('question.evaluate',compact('student','questions','lecturers','faculty'));
    }

    public function store(Request $request)
    {
//      print_r($request->all());

      $array_chunk= array_chunk($request->all(),2,true);

//      print_r($array_chunk);exit();

      $lecturer_id = $request->get('lecturer_id');

      $second_array = $array_chunk[1];

//      print_r($second_array);exit;

      $third_array = $array_chunk[2];

//      print_r($third_array);exit();

      $question_answers = ($second_array + $third_array);

        if (is_array($question_answers)) {
            foreach ($question_answers as $question => $answer) {

                $data = [
                    'question_id' => $question ,
                    'answer_id' => $answer,
                    'lecturer_id' => $lecturer_id
                ];
//                print_r($data);exit();
                DB::table('lecturer_evaluations')->insert($data);
            }

        }


       return redirect('evaluate');

    }

    public function one($id){

        $question = Question::find($id);

        $answers = Answer::where('question_id',$question->id)->get();

        return view('question.evaluate',compact('answers','question'));
    }
}
