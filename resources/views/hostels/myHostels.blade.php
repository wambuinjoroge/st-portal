@extends('layouts.app')
@section('content')


    <ol class="breadcrumb">
        <li class="active"><h3><b>{{$hostel->hostel_name}}</b></h3></li>
    </ol>

   <button type="button" class="btn btn-default btn-lg">
       <a><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Head:{{$hostel->hostel_head}}</a>
   </button>

    {{--create a radio button for rooms in this particular hostel--}}

    <h3><u>Select the room of choice</u></h3></br>
      <form method="post" action="{{url('myRoom')}}">
          @foreach($rooms as $room)
              <label class="radio-inline">
                  <input type="radio" name="room_id" id="room" value="{{ $room->id }}"> {{ $room->random_no }}
              </label>
          @endforeach
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <br></br><button class="btn btn-primary">Submit</button>
      </form>



@stop