@extends('layouts.app')
@section('content')


<ol class="breadcrumb">
    <li><a href="{{ url('hostels') }}"><b>Hostels</b></a></li>
    <li class="active"><b>{{$hostel->hostel_name}}</b></li>
</ol>

{{--<button type="button" class="btn btn-default btn-lg">--}}
    {{--<a><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Head:{{$hostel->hostel_head}}</a>--}}
{{--</button>--}}
<button class="btn">Head:{{$hostel->hostel_head}}</button>

{{--create a radio button for rooms in this particular hostel--}}
@if(Auth::user()->role_id==1)
    <h3><u>Rooms</u></h3>
@else
    <h3><u>Select the room of choice</u></h3></br>
@endif

    <form method="post" action="{{url('room')}}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

            @foreach($rooms as $room)
                <label class="radio-inline">
                    <input type="radio" name="room_id" id="room" value="{{ $room->id }}"> {{ $room->random_no }}
                </label>
            @endforeach

        <br><br>
        <button class="btn btn-primary">Submit</button>

    </form>

@stop