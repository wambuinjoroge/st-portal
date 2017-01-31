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

<div class="col-md-4"></div>

<div class="col-md-4">
  <h3>Create Unit</h3>
	<form method="post" action="{{url('/units')}}" >
    <div class="form-group">
       <label for="ExampleInputEmail1">NAME</label>
    	<input type="text" name="name" class="form-control" placeholder="name">
    </div>   
    
    <input type="hidden" name="_token" value="{{ csrf_token() }}">  	
    <button class="btn btn-default" type="submit">SUBMIT</button>
	  
</form>
</div>

<div class="col-md-4"></div>

@stop