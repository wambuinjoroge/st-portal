@extends('layouts.app')
@section('content')

<div class="container">
    <ol class="breadcrumb">
        <li><a href="{{url('hostels/create')}}">Create a hostel</a></li>
        <li class="active">Hostels</li>
    </ol>

    <table class="table table-bordered table-stripped">
            <thead>
               <tr>
                   <td>Hostel Name</td>
                   <td>Hostel Head</td>
                   <td>Rooms Number</td>
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
                           <a href="{{url('hostel/'.$hostel->id)}}" class="btn btn-primary"><span class="glyphicon glyphicon-home"></span>Show</a>
                           <a href="{{url('hostels/edit/'.$hostel->id)}}" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span>Edit</a>
                           <a href="{{url('hostels/'.$hostel->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Delete</a>
                       </td>
                   </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    </div>



@stop