@extends('layouts.app')
@section('content')


  @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

<div class="col-md-4"></div>
<div class="pull-right">Create a faculty</div>
<div class="col-md-4">
	<form method="post" action="{{url('/faculties')}}" >
    <div class="form-group">
       <label for="ExampleInputEmail1">NAME</label>
    	<input type="text" name="name" class="form-control" placeholder="name">
    </div>   
    <div class="form-group">
       <label for="ExampleInputEmail1">HEAD</label>
    	<input type="text" name="head" class="form-control" placeholder="head">
    </div>  

    <input type="hidden" name="_token" value="{{ csrf_token() }}">  	
    <button class="btn btn-default" type="submit">SUBMIT</button>
	  
</form>
</div>

<div class="col-md-4"></div>

@stop