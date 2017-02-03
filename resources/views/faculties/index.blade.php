@extends('layouts.app')
@section('content')


<div class="container">

	<ol class="breadcrumb">
		<li><a href="{{url('/admin')}}">Admin Home</a></li>
		<li><a href="{{url('faculties/create')}}">Create a faculty</a></li>
		<li class="active">Faculties</li>
	</ol>

 
	<table class="table">
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
           	 	<a href="{{url('faculty/'.$value->id)}}" class="btn btn-primary"><span class="glyphicon glyphicon-home">Show </span></a>
           	 	<a href="{{url('faculties/'.$value->id.'/edit')}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil">Edit</span></a>
           	 	<a class="btn btn-danger" href="{{url('faculties/'.$value->id)}}" class="btn btn-primary"><span class="glyphicon glyphicon-trash">Delete</span></a>
           	 </td>
           	</tr> 
         @endforeach
		
      
	  	
	  </tbody>	
		
	</table>

</div>
	
@stop