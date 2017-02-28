@extends('layouts.app')
@section('content')

<div>
    <label for="faculty">FACULTY</label>
    <select name="faculty_id" id="faculty" class="form-control">
        @foreach($faculties as $faculty => $value)
            <option value="{{$value->id}}">{{$value->name}}</option>
        @endforeach
    </select>
</div>

@stop