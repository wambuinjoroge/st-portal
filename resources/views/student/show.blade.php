@extends('layouts.app')
@section('content')


	<!-- work on how to include fees on this view  -->
	<ol class="breadcrumb">
		<ul>
			<h4><a class="active"><span class="glyphicon glyphicon-user">Student's Profile</span></a></h4>
		</ul>
	</ol>

		<textarea class="form-control " rows="2"  disabled>NAME:{{$student->name}} </textarea>
		<textarea class="form-control " rows="2" disabled>ADMISSION NUMBER:{{$student->admission_number}}</textarea>
		<textarea class="form-control" rows="2" disabled>EMAIL:{{$student->email}}</textarea>
		<textarea class="form-control" rows="2" disabled>DATE OF BIRTH:{{$student->date_of_birth}}</textarea>
		<textarea class="form-control" rows="2" disabled>NATIONAL ID:{{$student->national_id}}</textarea>
		<textarea class="form-control" rows="2" disabled>GENDER:{{ ($student->gender == 1) ? 'Female' : 'Male' }}</textarea>


@stop
