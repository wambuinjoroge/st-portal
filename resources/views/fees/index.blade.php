@extends('layouts.app')
@section('content')
<div class="container">
    <table class="table table-bordered t">
        <thead>
        <tr>
            <td>Student ID</td>
            <td>Amount</td>
            <td>Semester</td>
            <td>Type</td>
            {{--<div class="  ></div>--}}
            <ol class="breadcrumb  pull-right">
                <a href="{{url('transactions')}}" class="text-center">Transactions</a>
            </ol>
        </tr>
        </thead>
        <tbody>

            @foreach($fees as $fee)
                <tr>
                    <td>{{$fee-> student_id}}</td>
                    <td>{{$fee -> amount}}</td>
                    <td>{{$fee -> semester}}</td>
                    <td>{{$fee -> type}}</td>
                </tr>
            @endforeach


        </tbody>
    </table>
</div>
@stop