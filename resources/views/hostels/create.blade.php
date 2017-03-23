@extends('layouts.app')
@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <ol class="breadcrumb">
        <li><a href="{{url('/admin')}}">Admin Home</a></li>
        <li><a href="{{url('hostels')}}">Hostels</a></li>
        <li class="active"> Create </li>
    </ol>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



    <form method="post" action="{{url('hostels')}}">
        <div class="form-group">
            <label class="ExampleInputEmail1">Hostel Name</label>
            <input class="form-control" type="text" name="hostel_name" placeholder="hostel_name" >
        </div>
        <div class="form-group">
            <label class="ExampleInputEmail1">Hostel Head</label>
            <input class="form-control" type="text" name="hostel_head" placeholder="hostel_head" >
        </div>
        <div class="form-group">
            <label class="ExampleInputEmail1">Rooms Number</label>
            <input class="form-control" type="text" name="rooms_number" placeholder="rooms_number" >
        </div>


        <label for="gender">Gender</label>
        </br>

            <label>
                <input class="field" type="radio" name="gender" value=1>Female
            </label>

            <label>
                <input class="field" type="radio" name="gender" value=0>Male
            </label>




        <input type="hidden" name="_token" value="{{ csrf_token()  }}">
        <br>
        <button class="btn btn-default">Submit</button>
    </form>


@stop