@extends ('layouts.app')
@section('content')

<div class="container">
 	<a href="students/create"><div class="pull-right">Create a student</div></a>
  	<!-- <a href="students/{id}"><div class="pull-right"></div></a> -->
	<table class="table table-striped">
	  <thead>
		<tr>
			<td>Name</td>
			<td>Admission Number</td>
			<td>Email</td>
			<td>Date of Birth</td>
			<td>National ID</td>
			<td>Show student</td>
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
			<td>
				<a href="{{url('student/'.$value->id)}}">Show student</a>
				</br>
				<a href="{{url('/students/'.$value->id.'/edit')}}">Edit</a>
				<a href="{{url('student/'.$value->id)}}">Delete</a>
			</td>
		</tr>
		@endforeach
	  </tbody>
		
	</table>
</div>

@stop

