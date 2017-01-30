@extends('layouts.app')
@section('content')

<div class="container">
	
		<p>{{$student->Name}}</p>
		<p>{{$student->admission_number}}</p>
		<p>{{$student->email}}</p>
		<p>{{$student->date_of_birth}}</p>
		<p>{{$student->national_id}}</p>
	
</div>

@stop