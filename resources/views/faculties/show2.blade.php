@extends('layouts.app')
@section('content')


	<!-- work on how to include units on this view  -->
	<ol class="breadcrumb">
		<li><a href="{{ url('faculties') }}">FACULTIES</a></li>
		<li class="active">{{$faculty->name}}</li>

	</ol>

	{{--@if(Auth::user()->role_id==1)--}}
		{{--<div class="pull-right"><a href="{{url('students/create')}}"><h4><span class=" label label-primary">Add Student</span></h4></a></div>--}}
	{{--@endif--}}



		<a href="{{url('students/create')}}" class="btn btn-primary pull-right">Create a student</a>



	{{--<ol class="breadcrumb">--}}
		{{--<li><a href="{{ url('/register') }}">Register a Student</a></li>--}}
		{{--<li class="active">Students</li>--}}
	{{--</ol>--}}
	<a href="#" class="btn">HEAD:{{$faculty->head}}</a>

	<table class="table table-striped table-bordered bg-faded" >
		<thead>
		<tr>
			<td>Name</td>
			<td>Admission Number</td>
			<td>Email</td>
			<td>Date of Birth</td>
			<td>National ID</td>
			<td>Gender</td>
			<td>Actions</td>
		</tr>
		</thead>
		<tbody>
		@foreach($students as $student => $value)
			<tr>
				<td>{{$value->name}}</td>
				<td>{{$value->admission_number}}</td>
				<td>{{$value->email}}</td>
				<td>{{$value->date_of_birth}}</td>
				<td>{{$value->national_id}}</td>
				<td>{{$value->gender == 1 ? 'Female' : 'Male'}}</td>
				<td>
					<a href="{{url('student/'.$value->id)}}" class="btn btn-primary"><span class="glyphicon glyphicon-user">Show</span></a>
					{{--<a href="{{url('fees/create/'.$value->id)}}" class="btn btn-primary"><span class="glyphicon glyphicon-credit-card">Fees</span></a>--}}
					<a href="{{url('student/'.$value->id.'/units')}}" class="btn btn-primary"><span class="glyphicon glyphicon-book">Units</span></a>
					<a href="{{url('/students/'.$value->id.'/edit')}}" class="btn btn-success"><span class="glyphicon glyphicon-pencil">Edit</span></a>
					<a href="{{url('students/'.$value->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-trash">Delete</span></a>
				</td>
			</tr>
		@endforeach
		</tbody>

	</table>

@stop