@extends('layouts.app')
@section('content')


<div class="container">
	<form  method="post" action="{{url('/students/' .$student->id)}}">

	  <div class="form-group">
	    <label for="ExampleInputEmail1">NAME</label>
	      <input type="text" class="form-control" name="name" value="{{$student->name}}" placeholder="Name">
	  </div>
	  <div class="form-group">
	    <label for="ExampleInputEmail1">ADMISSION NUMBER</label>
	      <input type="text" class="form-control" name="admission_number" value="{{$student->admission_number}}" placeholder="Admission Number">
	  </div>
	  <div class="form-group">
	    <label for="ExampleInputEmail1">EMAIL</label>
	      <input type="text" class="form-control" name="email" value="{{$student->email}}" placeholder="Email">
	  </div>
	  <div class="form-group">
	    <label for="ExampleInputEmail1">DATE OF BIRTH</label>
	      <input type="text" class="form-control" name="date_of_birth" value="{{$student->date_of_birth}}" placeholder="Date of Birth">
	  </div>
	  <div class="form-group">
	    <label for="ExampleInputEmail1">NATIONAL ID</label>
	      <input type="text" class="form-control" name="national_id" value="{{$student->national_id}}" placeholder="National_id">
	  </div>

	  <input type="hidden"  name="_token" value="{{ csrf_token() }}">
	  <input type="hidden" name="id" value="{{ $student->id }}">
	  <input type="hidden" name="_method" value="put">
	  <button class="btn btn-default">Submit</button>
	    
		
	</form>
</div>


@stop