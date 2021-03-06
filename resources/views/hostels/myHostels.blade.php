@extends('layouts.app')
@section('content')

<ol class="breadcrumb">
    <li> <a><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Head:{{$hostel->hostel_head}}</a></li>
    <li class="active"><h4><b> {{$hostel->hostel_name}} </b></h4></li>
</ol>

    {{--create a radio button for rooms in this particular hostel--}}
@if(Auth::user()->role_id==1)
    <h4>Rooms</h4>
   @else
    <h3><u>Select the room of choice</u></h3></br>
    @endif


      <form method="post" action="{{url('myRoom')}}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">

              @foreach($rooms as $room)
                  <label class="radio-inline">
                      <input type="radio"  name="room_id" id="room" value="{{ $room->id }}"> {{ $room->random_no }}
                  </label>
              @endforeach

          <br><br><button class="btn btn-primary">Submit</button>
      </form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

@stop