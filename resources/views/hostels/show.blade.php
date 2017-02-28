@extends('layouts.app')
@section('content')


<div class="container">
    <ol class="breadcrumb">
        {{--<li><a href="{{url('/admin')}}">Admin Home</a></li>--}}
        <li><a href="{{url('hostels')}}">Hostels</a></li>
        <li class="active">{{$hostel->hostel_name}}</li>
    </ol>

    <textarea class="form-control">Name:{{$hostel->hostel_name}}</textarea>
    <textarea class="form-control">Head{{$hostel->hostel_head}}</textarea>
    <textarea class="form-control">RoomsNumber:{{$hostel->rooms_number}}</textarea>
</div>

@stop