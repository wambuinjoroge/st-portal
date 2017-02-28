@extends('layouts.app')
@section('content')


<form class="form-group"  method="post" action="{{url('myHostel')}}" >
    <div class="checkbox">
      <h3><u>Select your hostel of choice</u></h3>

        @foreach($hostels as $hostel)
            <ul>
                <label class="radio-inline">
                    <input type="radio" name="hostel_id" id="inlineRadio1" value="{{$hostel->id}}"></br>{{$hostel->hostel_name}}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </label>
            </ul>
        @endforeach

        <ul><button class="btn btn-primary">Submit</button></ul>
    </div>
</form>

@stop