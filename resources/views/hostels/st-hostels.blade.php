@extends('layouts.app')
@section('content')
<div class="checkbox">
    @foreach($hostels as $hostel)
    <label class="radio-inline">
        <input type="radio" name="hostel_id" id="inlineRadio1" value="{{$hostel->id}}">{{$hostel->hostel_name}}
    </label>
        </br>
    @endforeach


    <button class="btn btn-default">Submit</button>

</div>
@stop