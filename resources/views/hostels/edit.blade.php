@extends('layouts.app')
@section('content')


<div class="container">

    <form method="post" action="{{url('hostels/'.$hostel->id)}}">
        <div class="form-group">
            <label class="ExampleInputEmail1">Hostel Name</label>
            <input class="form-control" type="text" name="hostel_name" placeholder="hostel_name" value="{{$hostel->hostel_name}}">
        </div>
        <div class="form-group">
            <label class="ExampleInputEmail1">Hostel Head</label>
            <input class="form-control" type="text" name="hostel_head" placeholder="hostel_head" value="{{$hostel->hostel_head}}">
        </div>
        <div class="form-group">
            <label class="ExampleInputEmail1">Rooms Number</label>
            <input class="form-control" type="text" name="rooms_number" placeholder="rooms_number" value="{{$hostel->rooms_number}}">
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token()  }}">
        <input type="hidden" name="id" value="{{$hostel->id}}">
        <button class="btn btn-default">Submit</button>
    </form>

</div>


@stop
