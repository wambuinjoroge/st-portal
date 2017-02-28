@extends('layouts.app')
@section('content')

<div class="container">
    <ol class="breadcrumb">
        <li class="active">{{$hostel->hostel_name}}</li>
    </ol>

    <textarea class="form-control">Name:{{$hostel->hostel_name}}</textarea>
    <textarea class="form-control">Head{{$hostel->hostel_head}}</textarea>

</div>

@stop