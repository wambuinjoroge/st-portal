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
				<a href="{{url('unit/'.$value->id)}}" class="btn btn-primary "><span class="glyphicon glyphicon-book">Show</span></a>
				<a href="{{url('/unit/'.$value->id.'/edit')}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil">Edit</span></a>
				<a href="{{url('unit/'.$value->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-trash">Delete</span></a>
			</td>
		</tr>
		@endforeach
	  </tbody>
		
	</table>
</div>

@stop
 
