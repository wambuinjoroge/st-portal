@extends('layouts.app')
@section('content')


    <ol class="breadcrumb">
        <li class="active">Hostels</li>
    </ol>

    @if(\Illuminate\Support\Facades\Auth::user()->role_id==1)
        <a href="{{url('hostels/create')}}" class="btn btn-primary pull-right">Create a hostel</a>
    @endif
    <table class="table table-bordered table-stripped">
            <thead>
               <tr>
                   <td>Hostel Name</td>
                   <td>Hostel Head</td>
                   <td>Number of Rooms</td>
                   <td>Actions</td>
               </tr>
            </thead>
            <tbody>
               @foreach($hostels as $hostel)
                   <tr>
                       <td>{{$hostel->hostel_name}}</td>
                       <td>{{$hostel->hostel_head}}</td>
                       <td>{{$hostel->rooms_number}}</td>
                       <td>
                           <a href="{{url('hostel/'.$hostel->id.'/students')}}" class="btn btn-primary"><span class="glyphicon glyphicon-user"></span>Show Students</a>
                           <a href="{{url('hostel/'.$hostel->id)}}" class="btn btn-primary"><span class="glyphicon glyphicon-home"></span>Show Rooms</a>
                           <a href="{{url('hostels/edit/'.$hostel->id)}}" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span>Edit</a>
                           <a href="{{url('hostels/'.$hostel->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Delete</a>
                       </td>
                   </tr>
                @endforeach
            </tbody>
        </table>






@stop