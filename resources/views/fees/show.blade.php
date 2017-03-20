@extends('layouts.app')
@section('content')

<ol class="breadcrumb">
    <li>
        <a href="{{ url('fees/edit/'.$fee->id) }}"><span class="glyphicon glyphicon-pencil">Edit</span></a>
    </li>
    <li><a href="{{ url('student/'.$student->id) }}">Student</a></li>
    <li  class="active">School Fees</li>
</ol>

<textarea class="form-control"  rows="2">Amount:{{$fee -> amount}}</textarea>
<textarea class="form-control"  rows="2">Semester/Year:{{$fee -> semester}}</textarea>
<textarea class="form-control"  rows="2">Type: {{$fee -> type}}</textarea>

@stop