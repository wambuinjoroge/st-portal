@extends('layouts.app')
@section('content')


	<!-- work on how to include fees on this view  -->

{{--<nav class="navbar navbar-btn ">--}}

{{--search button--}}

{{--<div class="row">--}}
{{--<form method="post" class="navbar-form navbar-left  has-feedback" >--}}
	{{--<div class="col-md-4">--}}

	{{--</div>--}}
	  {{--<div class="form-group">--}}
		  {{--<input type="text"  class="form-control ">--}}
		  {{--<span class="glyphicon glyphicon-search form-control-feedback" ></span>--}}
	  {{--</div>--}}

		{{--<button type="submit">Search</button>--}}

{{--</form>--}}
	{{--<form class="form-inline" role="form" action="{{ url('/search') }}" method="get">--}}
		{{--<div class="form-group  has-feedback">--}}
			{{--<label class="control-label" for="inputSuccess4"></label>--}}
			{{--<input type="text" class="form-control" id="inputSuccess4" name="query">--}}
			{{--<span class="glyphicon glyphicon-search form-control-feedback"></span>--}}
		{{--</div>--}}
		{{--<button type="submit">Search</button>--}}
	{{--</form>--}}
{{--</div>--}}

{{--<div class="col-md-1"></div>--}}

{{--</nav>--}}
<ol class="breadcrumb">

@if(\Illuminate\Support\Facades\Auth::user()->role_id == 1)
	<li><a href="
	@if(!empty($fee->id))
		{{--make this work	--}}
		{{ url('fees/create/'.$student->id) }}
			@else
			{{ url('fees/'.$student->id) }}
					">Student's Fees</a></li>
	@endif
@elseif(\Illuminate\Support\Facades\Auth::user()->role_id == 2)
	<li><a href="{{ url('fees/'.$student->id) }}">Sch Fees</a></li>
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
