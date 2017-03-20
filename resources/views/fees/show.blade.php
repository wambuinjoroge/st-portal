@extends('layouts.app')
@section('content')

    <ol class="breadcrumb pull-right">
        <ul>
            <a href="{{ url('fees/edit/'.$fee->id) }}"><span class="glyphicon glyphicon-pencil">Edit</span></a>
        </ul>
    </ol>

<textarea class="form-control"  rows="2">Amount:{{$fee -> amount}}</textarea>
<textarea class="form-control"  rows="2">Semester/Year:{{$fee -> semester}}</textarea>
<textarea class="form-control"  rows="2">Type: {{$fee -> type}}</textarea>

@stop