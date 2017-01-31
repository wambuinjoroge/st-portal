@extends('layouts.app')
@section('content')


<div class="container">

<div class="pull-right">
 <a href="{{url('faculties/create')}}">Create a faculty</a>
</div>
 
	<table class="table">
	 <thead>
		<tr>
			<td>Name</td>
			<td>Head</td>
			<td>Show Faculty</td>	
		</tr>
	 </thead>	
	  <tbody>
        
        @foreach($faculties as $faculty => $value)
            <tr>
           	 <td>{{ $value -> name }}</td>
           	 <td>{{ $value -> head }}</td>
           	 <td>
           	    <a class="btn btn-danger" href="{{url('faculty/',$value->id)}}">Delete</a>
           	 	<a href="{{url('faculty/'.$value->id)}}">Show</a>
           	 	</br>
           	 	<a href="{{url('faculties/'.$value->id.'/edit')}}">Edit</a>
           	 </td>
           	</tr> 
         @endforeach
		
      
	  	
	  </tbody>	
		
	</table>

</div>
	
@stop