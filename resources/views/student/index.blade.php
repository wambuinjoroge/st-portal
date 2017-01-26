@extends ('layouts.app')
@section('content')

<div class="container">
	<table class="table table-striped">
	  <thead>
		<tr>
			<td>Name</td>
			<td>Admission Number</td>
			<td>Email</td>
			<td>Date of Birth</td>
			<td>Phone number</td>
		</tr>
	  </thead>
	  <tbody>
	   @foreach($students as $student => $value)
	  	<tr>
			<td>{{$value->name}}</td>
			<td>{{$value->admission_number}}</td>
			<td>{{$value->email}}</td>
			<td>{{$value->date_of_birth}}</td>
			<td>{{$value->phone_number}}</td>
		</tr>
		@endforeach
	  </tbody>
		
	</table>
</div>

@stop

