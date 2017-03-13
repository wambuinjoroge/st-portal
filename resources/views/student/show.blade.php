@extends('layouts.app')
@section('content')


	<!-- work on how to include fees on this view  -->
	<ol class="pull-right">
		<ul>
			<h3><a href="{{url('fees/create/'.$student->id)}}"><span class="label label-primary">FEES</span></a></h3>
		</ul>
	</ol>

		<textarea class="form-control " rows="2">NAME:{{$student->name}}</textarea>
		<textarea class="form-control " rows="2">ADMISSION NUMBER:{{$student->admission_number}}</textarea>
		<textarea class="form-control" rows="2">EMAIL:{{$student->email}}</textarea>
		<textarea class="form-control" rows="2">DATE OF BIRTH:{{$student->date_of_birth}}</textarea>
		<textarea class="form-control" rows="2">NATIONAL ID:{{$student->national_id}}</textarea>
		<textarea class="form-control" rows="2">GENDER:{{ ($student->gender == 1) ? 'Female' : 'Male' }}</textarea>


@stop
