@extends('layouts.app')
@section('content')


    <ol class="breadcrumb">
        {{--<li><a href="{{ url('') }}">Faculty</a></li>--}}
        <li class="active">Units</li>
    </ol>

    <table class="table table-bordered bg-faded">
        <thead>
        <tr>
            <td>Name</td>
            <td>Actions</td>
        </tr>
        </thead>
        <tbody>
        @if($student_unit)
        @foreach($student_unit as $unit => $value)
            <tr>
                <td>{{$value->name}}</td>

                <td>
                    <a href="{{url('unit/'.$value->id)}}" class="btn btn-primary "><span class="glyphicon glyphicon-book">Show</span></a>
                    <a href="{{url('/unit/'.$value->id.'/edit')}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil">Edit</span></a>
                    <a href="{{url('units/'.$value->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-trash">Delete</span></a>
                </td>
            </tr>
        @endforeach
        @endif
        </tbody>

    </table>



@stop