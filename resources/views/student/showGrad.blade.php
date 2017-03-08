@extends('layouts.app')
@section('content')

    <textarea class="form-control " rows="2">SURNAME:{{$graduation->surname}}</textarea>
    <textarea class="form-control " rows="2">FIRST NAME:{{$graduation->first_name}}</textarea>
    <textarea class="form-control " rows="2">OTHER NAMES:{{$graduation->other_names}}</textarea>
    <textarea class="form-control " rows="2">GRADUATION YEAR:{{$graduation->graduation_year}}</textarea>
    <textarea class="form-control " rows="2">EDUCATION LEVEL:{{$graduation->education_level}}</textarea>
    <textarea class="form-control " rows="2">NATIONAL ID:{{$graduation->national_id}}</textarea>
    <textarea class="form-control " rows="2">FACULTY:{{$graduation->faculty_name}}</textarea>
    <textarea class="form-control " rows="2">ADMISSION NUMBER:{{$graduation->admission_no}}</textarea>


@stop