@extends('layouts.app')

@section('content')
@foreach($lecturers as $lecturer)
    <tr>
        <td>{{ $lecturer->lecturer_name }}</td>

    </tr>
@endforeach
<textarea class="form-control" rows="3"></textarea>

@stop