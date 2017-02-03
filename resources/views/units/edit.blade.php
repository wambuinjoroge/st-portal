@extends('layouts.app')
@section('content')

<div class="container">
   
   <form method="put" action="{{url('/units/'.$unit->id)}}">

        <div class="form-group">
        	<label for="ExampleInput1">NAME</label>
        	<input type="text" name="name" class="form-control" value="{{$unit->name}}">
        </div>

        
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="id" value="{{ $unit->id }}">
        <button class="btn btn-default">Submit</button>
   	
   </form>

	
</div>

@stop