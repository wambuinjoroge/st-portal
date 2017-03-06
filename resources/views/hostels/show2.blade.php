@extends('layouts.app')
@section('content')


    <ol class="breadcrumb">
        <li class="active"><h3><b>{{$hostel->hostel_name}}</b></h3></li>
    </ol>

    {{--<button type="button" class="btn btn-default btn-lg">--}}
        {{--<a><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Head:{{$hostel->hostel_head}}</a>--}}
    {{--</button>--}}

    {{--create a radio button for rooms in this particular hostel--}}

    {{--@if(Auth::user()->role_id==1)--}}
        {{--<div class="pull-right"><a href="{{url('students/create')}}"><h4><span class=" label label-primary">Add Student</span></h4></a></div>--}}
    {{--@endif--}}


    <ol class="breadcrumb">
        <li class="active">Students</li>
    </ol>

    <table class="table table-striped table-bordered bg-faded" >
        <thead>
        <tr>
            <td>Name</td>
            <td>Admission Number</td>
            <td>Email</td>
            <td>Date of Birth</td>
            <td>National ID</td>
            <td>Gender</td>
            <td>Actions</td>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $student => $value)
            <tr>
                <td>{{$value->name}}</td>
                <td>{{$value->admission_number}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->date_of_birth}}</td>
                <td>{{$value->national_id}}</td>
                <td>{{$value->gender == 0 ? 'Female' : 'Male'}}</td>
                <td>
                    <a href="{{url('student/'.$value->id)}}" class="btn btn-primary"><span class="glyphicon glyphicon-person">Show student</span></a>
                    <a href="{{url('/students/'.$value->id.'/edit')}}" class="btn btn-success"><span class="glyphicon glyphicon-pencil">Edit</span></a>
                    <a href="{{url('students/'.$value->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-trash">Delete</span></a>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>

@stop