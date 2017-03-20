<?php

namespace App\Http\Controllers;

use App\Fees;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FeesController extends Controller
{
    //
    public function index()
    {
       $fees=Fees::all();
       return view('fees.index',compact('fees'));
    }

    public function create($id)
    {

        $student=Student::find($id);
       return view('fees.create',compact('student'));

    }

    public function store(Request $request)
    {
       $validator=Validator::make($request->all(),[
           "amount"=>"required",
           "type"=>"required",
           "semester"=>"required",
       ]);
       if ($validator->fails()){
           return redirect()->back()
               ->withErrors($validator)
               ->withInput();
       }
       $fee=new Fees();

       $fee->amount=$request->get('amount');
       $fee->type=$request->get('type');
       $fee->semester=$request->get('semester');
       $fee->student_id=$request->get('student_id');

       $fee->save();

       return redirect('fees/'.$fee->id);
    }

    public function show($id)
    {

        $student=Student::find($id);
        $fee=Fees::find($id);

//        print_r($fee);exit();
        return view('fees.show',compact('fee','student'));

    }
    public function edit($id)
    {
        $student=Student::find($id);
        $fee=Fees::find($id);
        return view('fees.edit',compact('fee','student'));

    }
    public function update(Request $request ,$id)
    {
        $validator=Validator::make($request->all(),[
            "amount"=>"required",
            "type"=>"required",
            "semester"=>"required"
        ]);

        if ($validator->fails()){
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $fee=Fees::find($id);

        $fee->amount=$request->get('amount');
        $fee->type=$request->get('type');
        $fee->semester=$request->get('semester');
        $fee->student_id=$request->get('student_id');

        $fee->save();

        return redirect('fees/'.$fee->id);
    }
//    public function destroy($id){
//        $fee=Fees::find($id);
//        $fee->delete();
//        return redirect('fees');
//    }

}







