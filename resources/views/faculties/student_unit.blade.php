@extends('layouts.app')
@section('content')

    <ol class="breadcrumb">
        <li> <span class="glyphicon glyphicon-home" aria-hidden="true"></span>{{$faculty->name}}</li></br>
    </ol>

<h3><u>Units</u></h3>
<table class="table table-striped task-table">
    <thead>
    <tr>
        <td>ID</td>
        <td>Name of Unit</td>
        <td>Date of registration</td>
    </tr>
    </thead>
    <tbody>
    @if($student_unit)
        @foreach($student_unit as $unit)

            <tr>
                <td>{{ $unit->id }}</td>
                <td>{{ $unit->name}}</td>
                <td>{{ $unit->created_at }}</td>
            </tr>

@endforeach
@endif
    </tbody>
</table>
@stop
{{--<div class="checkbox">--}}
{{--<label>--}}
{{--<input type="checkbox" name="unit_id" value="{{ $unit->id }}">--}}
{{--</br>{{ $unit->name }}--}}
{{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
{{--</label>--}}
{{--</div>--}}
