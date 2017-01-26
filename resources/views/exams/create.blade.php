@extends('layouts.app')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


@if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

  <div class="container-fluid">
   
   <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">          
  <h1>Exam details</h1>
            

	<form method="post" action="{{url('/exams')}}">
	   <div class="form-group">
	   	 <label for="ExampleInputEmail1">Year</label>	
	   	 <input type="text" class="form-control" name="year" placeholder="" ="year">
	   </label>
	   </div>
	   <div class="form-group">
	   	<label for="ExampleInputEmail1">Semester</label>	
	   	 <input type="text" class="form-control" name="semester" placeholder="" ="semester">
	   </label>
	   </div>
	   <div class="form-group">	
	   	<label for="ExampleInputEmail1">Setter</label>
	   	 <input type="text" class="form-control" name="setter" placeholder="" ="setter">
	   </div>
            
	   <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	
	   <button type="submit" class="btn btn-default">Submit</button>
	</form>
  </div>
 </div>
<div>
@stop
