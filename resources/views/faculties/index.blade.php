@extends('layouts.app')
@section('content')

<ol class="breadcrumb">
	<li><a href="{{url('faculties/create')}}">Create a faculty</a></li>
	<li class="active">Faculties</li>
</ol>


<table class="table table-bordered">
	 <thead>
		<tr>
			<td>Name</td>
			<td>Head</td>
			<td>Actions</td>	
		</tr>
	 </thead>	
	  <tbody>
        
        @foreach($faculties as $faculty => $value)
            <tr>
           	 <td>{{ $value -> name }}</td>
           	 <td>{{ $value -> head }}</td>
           	 <td>
				<a href="{{url('students/'.$value->id.'/faculty')}}" class="btn btn-primary"><span class="glyphicon glyphicon-user">Students</a>
           	 	<a href="{{url('faculty/'.$value->id)}}" class="btn btn-primary"><span class="glyphicon glyphicon-book">Units</span></a>
           	 	<a href="{{url('faculties/'.$value->id.'/edit')}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil">Edit</span></a>
           	 	<a class="btn btn-danger" href="{{url('faculties/'.$value->id)}}" class="btn btn-primary"><span class="glyphicon glyphicon-trash">Delete</span></a>
           	 </td>
           	</tr> 
         @endforeach
	  	
	  </tbody>	
		
</table>

@stop