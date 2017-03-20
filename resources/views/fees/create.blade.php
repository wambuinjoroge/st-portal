@extends('layouts.app')
@section('content')

   @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="container">
        <h1>Add Fees</h1>
        <form method="post" action="{{url('fees/store')}}">

            <div class="form-group">
                <label class="sr-only" for="ExampleInputAmount">Amount</label>
                <div class="input-group">
                    <div class="input-group-addon">KES</div>
                    <input type="text"  name="amount"  id="ExampleInputAmount" placeholder="Amount" >
                </div>
            </div>

            <label class="ExampleInputEmail1">Semester</label>
            <div class="form-group">
                <input type="text"  name="semester"   placeholder="Semester" >
            </div>


            <label class="ExampleInputEmail1">Type</label>
            <div class="form-group">
                <input type="text"  name="type"  placeholder="Type" >
            </div>

            <input type="hidden" name="student_id" value="{{ $student->id }}">
            <input type="hidden" name="_token" value="{{ csrf_token()  }}">
            <button class="btn btn-default">Submit</button>
        </form>
    </div>

@stop