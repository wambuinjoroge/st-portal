@extends('layouts.app')
@section('content')

<div class="container">
	<textarea class="form-control" rows="2">{{$faculty->name}}</textarea>
	<textarea class="form-control" rows="2">{{$faculty->head}}</textarea>
   
   <table class="table table-stripped">
   	   <thead>
   	   	  <tr>
   	   	  	<td>NAME</td>
   	   	  </tr>
   	   </thead>
   	   <tbody>
   	   	 <tr>
   	   	 	@foreach($units as $unit =>$value)
   	   	 	    <td>{{$value->name}}</td>
   	   	 	 @endforeach   
   	   	 </tr>
   	   </tbody>
   </table>
</div>


@stop