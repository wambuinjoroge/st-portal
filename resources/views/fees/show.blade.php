@extends('layouts.app')
@section('content')

<table class="table table-bordered">
 <thead>
    <tr>
        <td>Amount</td>
        <td>Semester</td>
        <td>Type</td>
    </tr>
 </thead>
 <tbody>

        {{--@if($student->fees)--}}

                <tr>
                    <td>{{$fee -> amount}}</td>
                    <td>{{$fee -> semester}}</td>
                    <td>{{$fee -> type}}</td>
                </tr>

        {{--@endif--}}

 </tbody>
</table>

@stop