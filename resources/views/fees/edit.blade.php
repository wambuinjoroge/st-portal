@extends('layouts.app')
@section('content')

    <form  method="post"  action="{{ url('fees/update/'.$fee->id) }}">

        <input type="hidden" name="_token" value="{{ csrf_token()  }}">

        <div class="form-group">
            <label class="sr-only" for="ExampleInputAmount">Amount</label>
            <div class="input-group">
                <div class="input-group-addon">KES</div>
                <input type="text"  name="amount"  id="ExampleInputAmount" placeholder="Amount" value="{{$fee -> amount}}">
            </div>
        </div>

        <label class="ExampleInputEmail1">Semester</label>
        <div class="form-group">
            <input type="text"  name="semester"   placeholder="Semester" value="{{$fee -> semester}}" >
        </div>


        <label class="ExampleInputEmail1">Type</label>
        <div class="form-group">
            <input type="text"  name="type"  placeholder="Type" value="{{$fee -> type}}" >
        </div>

        <input type="hidden" name="student_id" value="{{ $student->id }}">

        <button class="btn btn-default" type="submit">Submit</button>

    </form>

@stop