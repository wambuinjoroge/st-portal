@extends('layouts.app')
@section('content')

<div class="row">
<ol class="breadcrumb">
	<li class="active">Faculties</li>
</ol>

<a class="btn btn-primary pull-right" href="{{url('faculties/create')}}">Create a faculty</a>
</div>

<div class="row">
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
				<a href="{{url('faculty/'.$value->id.'/students')}}" class="btn btn-primary"><span class="glyphicon glyphicon-user">Students</a>
           	 	<a href="{{url('faculty/'.$value->id)}}" class="btn btn-primary"><span class="glyphicon glyphicon-book">Units</span></a>
           	 	<a href="{{url('faculties/'.$value->id.'/edit')}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil">Edit</span></a>
           	 	<a class="btn btn-danger" href="{{url('faculties/'.$value->id)}}" class="btn btn-primary"><span class="glyphicon glyphicon-trash">Delete</span></a>
           	 </td>
           	</tr> 
         @endforeach
	  	
	  </tbody>	
		
</table>
</div>
@stop