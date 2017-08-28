@extends('layouts.app')
@section('content')

    <ol class="breadcrumb">
        <li class="active"><h4><b>{{$hostel->hostel_name}} Hostel</b></h4></li>
    </ol>
    <label>Successfully booked the room below, See {{ $hostel->hostel_head }} (hostel head)for the room keys.</label></br>
    <button type="button" class="btn btn-default btn-lg">
        <a><span class="glyphicon glyphicon-bed" aria-hidden="true"></span>Room Number:{{$room->random_no}}</a>
    </button>

@stop