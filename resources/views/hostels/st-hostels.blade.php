@extends('layouts.app')
@section('content')

{{--@if(!empty($hostels ) )--}}
<form class="form-group"  method="post" action="{{url('myHostel')}}" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    {{--<div class="checkbox">--}}
<h5>
    <label>Select your preferred hostel and click on "Submit"</label>
</h5>

            <select name="hostel_id" id="hostel" class="form-control">
                @foreach($hostels as $hostel)
                    <option value="{{$hostel->id}}">{{$hostel->hostel_name}}</option>
                @endforeach
            </select>
      </br>


        <button class="btn btn-primary open-modal" value="{{$hostel->id}}">Submit</button>
    {{--</div>--}}
</form>
    {{--@else--}}
    {{--{{ url('#') }}--}}
{{--@endif--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
@stop