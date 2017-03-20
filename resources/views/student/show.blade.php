@extends('layouts.app')
@section('content')


	<!-- work on how to include fees on this view  -->

<ol class="breadcrumb">
	@if(!empty($student->id))
		<li><a href="{{ url('fees/'.$student->id) }}">Student's Fees</a></li>
	@else
	<li><a href="{{ url('fees/create/'.$student->id) }}">Student's Fees</a></li>
	@endif
	<li class="active">Student's Profile</li>
</ol>

<textarea class="form-control" rows="2" disabled>NAME:{{$student->name}} </textarea>
<textarea class="form-control" rows="2" disabled>ADMISSION NUMBER:{{$student->admission_number}}</textarea>
<textarea class="form-control" rows="2" disabled>EMAIL:{{$student->email}}</textarea>
<textarea class="form-control" rows="2" disabled>DATE OF BIRTH:{{$student->date_of_birth}}</textarea>
<textarea class="form-control" rows="2" disabled>NATIONAL ID:{{$student->national_id}}</textarea>
<textarea class="form-control" rows="2" disabled>GENDER:{{ ($student->gender == 1) ? 'Female' : 'Male' }}</textarea>

@stop
