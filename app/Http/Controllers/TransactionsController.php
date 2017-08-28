<?php

namespace App\Http\Controllers;


use Symfony\Component\HttpKernel\EventListener\ValidateRequestListener;

use App\Transactions;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
class TransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions=Transactions::all();
        return view('transactions.index',compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('transactions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $validator=Validator::make($request->all(),[
            "amount"=>"required",
            "debitAmount"=>"required",
            "creditAmount"=>"required",
            "balance"=>"required"
         ]);
        if ($validator->fails){
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $transactions= new Transactions();

        $transactions->amount=$request->get('amount');
        $transactions->debitAmount=$request->get('debitAmount');
        $transactions->creditAmount=$request->get('creditAmount');
        $transactions->balance=$request->get('balance');

        $transactions->save();
        return redirect('transactions');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $transaction=Transactions::find($id);
        return view('transactions.show',compact('transaction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $transaction=Transactions::find($id);
        return view('transactions.edit',compact('transaction'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
        $transaction=Transactions::find($id);

        $transaction->amount=$request->get('amount');
        $transaction->debitAmount=$request->get('debitAmount');
        $transaction->creditAmount=$request->get('creditAmount');
        $transaction->balance=$request->get('balance');

        $transaction->save();

        return redirect('transactions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $transaction=Transactions::find($id);
        $transaction->delete();
        return redirect ('transactions',compact('transaction'));
    }

    public function calculate(){
        $debitAmount=Transactions::where('amount' , $transaction->id);
            return view('',compact('debitAmount'));


    }
}
