@extends('layouts.app')
@section('content')

<div class="container">
	<form method="put" action="{{url('faculties/' .$faculty->id)}}">
		<div class="form-group">
			<label for='ExampleInputEmail1'>NAME</label>
			<input type="text" class="form-control" name="name" value="{{$faculty->name}}" placeholder="Name">
		</div>
		<div class="form-group">
			<label for='ExampleInputEmail1'>HEAD</label>
			<input type="text" class="form-control" name="head" value="{{$faculty->head}}" placeholder="Head">
		</div>

		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="id" value="{{ $faculty->id }}">
		<button class="btn btn-default">Submit</button>
	</form>
</div>

@stop