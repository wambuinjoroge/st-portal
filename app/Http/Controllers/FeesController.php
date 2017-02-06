<?php

namespace App\Http\Controllers;

use App\Fees;
use App\Student;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpKernel\EventListener\ValidateRequestListener;

class FeesController extends Controller
{
    //
    public function index(){
       $fees=Fees::all();
       return view('fees.index',compact('fees'));
    }
    public function create(){
       $students=Student::all();
       return redirect('fees.create',compact('students'));
    }
    public function store(Request $request){
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

       return redirect('fees');
    }
    public function show($id){
       $fee=Fees::find($id);
       return view('fees.show',compact('fee'));
    }
    public function edit($id){
       $fee=Fees::find($id);
       return view('fees.edit',compact('fee'));
    }
    public function update(Request $request ,$id){
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
        $fee=Fees::find($id);

        $fee->amount=$request->get('amount');
        $fee->type=$request->get('type');
        $fee->semester=$request->get('semester');
        $fee->student_id=$request->get('student_id');

        $fee->save();

        return redirect('fees');
    }
    public function destroy($id){
        $fee=Fees::find($id);
        $fee->delete();
        return redirect('fees');
    }

}







