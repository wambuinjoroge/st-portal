@extends('layouts.app')
@section('content')

<div class="container bg-danger text-white">
	<textarea class="form-control " rows="2">NAME:{{$student->name}}</textarea>
	<textarea class="form-control " rows="2">ADMISSION NUMBER:{{$student->admission_number}}</textarea>
	<textarea class="form-control" rows="2">EMAIL:{{$student->email}}</textarea>
	<textarea class="form-control" rows="2">DATE OF BIRTH:{{$student->date_of_birth}}</textarea>
	<textarea class="form-control" rows="2">NATIONAL ID:{{$student->national_id}}</textarea>	
</div>

@stop