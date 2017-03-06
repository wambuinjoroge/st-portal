@extends('layouts.app')
@section('content')

@if(!empty($hostels ) )
<form class="form-group"  method="post" action="{{url('myHostel')}}" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    {{--<div class="checkbox">--}}
      <h3><u>Select your hostel of choice</u></h3>
    <label for="hostel">HOSTELS</label>
            <select name="hostel_id" id="hostel" class="form-control">
                @foreach($hostels as $hostel)
                    <option value="{{$hostel->id}}">{{$hostel->hostel_name}}</option>
                @endforeach
            </select>
      </br>

        <button class="btn btn-primary">Submit</button>
    {{--</div>--}}
</form>
    @else
    {{ url('#') }}
@endif
@stop