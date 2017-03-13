@extends('layouts.app')

@section('content')

<h3><b>STUDENTS EVALUATION OF INSTRUCTOR</b></h3>

<form action="{{ url('evaluation') }}" method="post">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <input type="text" name="faculty_name" value="{{ $faculty->name }}">

    <input typ="text" name="course_name" value="{{ $courses->course_name }}">

    <input type="text" name="year" >

    <input type="text" name="st_gender" value="{{ $faculty->gender }}">

    <input type="text" name="lecturer_name" value="{{ $lecturers->lecturer_name }}">

    <input type="text" name="lec_gender" value="{{ $lecturers->gender }}">

    <button type="submit" class="btn-primary">Submit</button>


</form>

@stop