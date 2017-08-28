@extends('layouts.app')

@section('content')

    <table class="table table-bordered">
        <thead>
           <tr>
               <td>Name of Lecturer</td>
               <td>Gender</td>
               <td>Qualification</td>
           </tr>
        </thead>
        <tbody>
           @foreach($lecturers as $lecturer)
               <tr>
                   <td>{{ $lecturer->lecturer_name }}</td>
                   <td>{{ $lecturer->gender == 0  ? 'male': 'female' }}</td>
                   <td>{{ $lecturer->qualification }}</td>
               </tr>
           @endforeach
        </tbody>
    </table>

@stop