@extends ('layouts.app')
@section('content')

<div class="container">
 	<a href="students/create"><div class="pull-right">Create a unit</div></a>
	<table class="table table-striped">
	  <thead>
		<tr>
			<td>Name</td>
			<td>Actions</td>
		</tr>
	  </thead>
	  <tbody>
	   @foreach($units as $unit => $value)
	  	<tr>
			<td>{{$value->name}}</td>
			
			<td>
				<a href="{{url('unit/'.$value->id)}}">Show student</a>
				</br>
				<a href="{{url('unit/'.$value->id.'/edit')}}">Edit</a>
				<a href="{{url('unit/'.$value->id)}}">Delete</a>
			</td>
		</tr>
		@endforeach
	  </tbody>
		
	</table>
</div>

@stop

