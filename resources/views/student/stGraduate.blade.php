@extends('layouts.app')
@section('content')

<table class="table table-bordered bg-faded">
    <thead>
      <tr>
          <td><b>Surname</b></td>
          <td><b>First Name</b></td>
          <td><b>Other Names</b></td>
          <td><b>Graduation Year</b></td>
          <td><b>Education Level</b></td>
          <td><b>National ID</b></td>
          <td><b>Faculty</b></td>
          <td><b>Admission Number</b></td>
      </tr>
    </thead>
    <tbody>
    @if($graduations)
      @foreach($graduations as $graduation)

          <tr>
              <td>{{ $graduation->surname }}</td>
              <td>{{ $graduation->first_name }}</td>
              <td>{{ $graduation->other_names }}</td>
              <td>{{ $graduation->graduation_year }}</td>
              <td>{{ $graduation->education_level }}</td>
              <td>{{ $graduation->national_id }}</td>
              <td>{{ $graduation->faculty_name }}</td>
              <td>{{ $graduation->admission_no }}</td>
          </tr>
      @endforeach
    @endif
    </tbody>
</table>

@stop