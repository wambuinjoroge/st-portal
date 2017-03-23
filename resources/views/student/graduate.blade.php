@extends('layouts.app')

@section('content')


@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h4><u>APPLICATION FOR GRADUATION</u></h4>

<form method="post" action="{{ url('st-graduation') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">
    <label>Surname</label>
    <input type="text" class="form-control" name="surname" placeholder="Surname">
    </div>
    <div class="form-group">
        <label>First Name</label>
        <input type="text" class="form-control" name="first_name" placeholder="First Name">
    </div>
    <div class="form-group">
        <label>Other Names</label>
        <input type="text" class="form-control" name="other_names" placeholder="Other Names">
    </div>
    <div class="form-group">
        <label>Graduation Year</label>
        <select name="graduation_year" id="graduation" class="form-control">
            <option value="2015 Graduation"> 2015 Graduation </option>
            <option value="2016 Graduation"> 2016 Graduation </option>
        </select>
    </div>
    <div class="form-group">
        <label>Certificate/Diploma/Degree Course</label>
        <input type="text" class="form-control" name="education_level" placeholder="Certificate/Diploma/Degree Course">
    </div>
    <div class="form-group">
        <label>National ID</label>
        <input type="text" class="form-control" name="national_id" placeholder="National ID" value="{{ $student->national_id }}" readonly>
    </div>
    <div class="form-group">
        <label>Faculty</label>
        <input type="text" class="form-control" name="faculty_name" placeholder="Faculty" value="{{ $faculty->name }}" readonly>
    </div>
    <div class="form-group">
        <label>Admission Number</label>
        <input type="text" class="form-control" name="admission_no" placeholder="Admission Number" value="{{ $student->admission_number }}" readonly>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>

@stop