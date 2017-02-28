@extends('layouts.app')
@section('content')


    <ol class="breadcrumb">
        <li class="active">{{$hostel->hostel_name}}</li>
    </ol>

    <textarea class="form-control">Name:{{$hostel->hostel_name}}</textarea>
    <textarea class="form-control">Head{{$hostel->hostel_head}}</textarea>
    {{--create a radio button for rooms in this particular hostel--}}
    <h3><u>Select the room of choice</u></h3></br>
    @foreach($rooms as $room)
    <label class="radio-inline">
        <input type="radio" name="room_id" id="room" value="{{ $room->id }}"> {{ $room->random_no }}
    </label>
    @endforeach

    <br></br><button class="btn btn-primary">Submit</button>


@stop