@extends('layouts.app')
@section('content')

    {{--<ol class="breadcrumb">--}}
        {{--<li class="active"><h3><b>{{$hostel->hostel_name}}</b></h3></li>--}}
    {{--</ol>--}}
    <p>Successfully booked the room below</p>
    <button type="button" class="btn btn-default btn-lg">
        <a><span class="glyphicon glyphicon-bed" aria-hidden="true"></span>Room Number:{{$room->random_no}}</a>
    </button>

@stop