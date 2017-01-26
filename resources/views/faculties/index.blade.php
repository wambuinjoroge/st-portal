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
		</tr>
	 </thead>	
	  <tbody>
        
        @foreach($faculties as $faculty => $value)
            <tr>
           	 <td>{{ $value -> name }}</td>
           	 <td>{{ $value -> head }}</td>
           	</tr> 
         @endforeach
		
      
	  	
	  </tbody>	
		
	</table>

</div>
	
@stop