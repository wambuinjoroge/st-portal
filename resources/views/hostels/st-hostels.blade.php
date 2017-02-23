@extends('layouts.app')
@section('content')

<div class="checkbox">

    @foreach($hostels as $hostel)
        <ul>
            <label class="radio-inline">
                <input type="radio" name="hostel_id" id="inlineRadio1" value="{{$hostel->id}}"></br>{{$hostel->hostel_name}}
            </label>
        </ul>

    @endforeach

    <ul><button class="btn btn-primary">Submit</button></ul>

</div>
@stop