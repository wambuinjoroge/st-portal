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

<ol class="breadcrumb">
  <li><a href="{{url('/admin')}}">Admin Home</a></li>
  <li><a href="{{url('faculties')}}">Faculties</a></li>
  <li class="active"> Create </li>
</ol>

	<form method="post" class="form-group" action="{{url('/faculties')}}" >
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