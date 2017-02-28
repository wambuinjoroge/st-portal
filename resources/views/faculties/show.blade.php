@extends('layouts.app')
@section('content')


<!-- work on how to include units on this view  -->
	<p><u>{{$faculty->name}}</u></p>
    <p><u>HEAD:{{$faculty->head}}</u></p>
    @if(Auth::user()->role_id==1)
    <div class="pull-right"><a href="{{url('units/create')}}"><h4><span class=" label label-primary">Add Unit</span></h4></a></div>
    @endif
    {{--<table class="table table-bordered">--}}
     {{--<thead>--}}
       {{--<tr>--}}
         {{--<td><span class=" label label-default">NAME of UNIT</span></td>--}}
       {{--</tr>--}}
     {{--</thead>--}}
        {{--<tbody>--}}
    <h3><u>Units to register</u></h3>
     <form class="form-group"  method="post" action="{{url('units')}}" >
              @if($faculty->units)
              @foreach($faculty->units as $unit)
                  {{--<tr>--}}
                      {{--<td>{{$unit -> name}}</td>--}}
                  {{--</tr>--}}
                  {{--<ul>--}}
                      {{--<label class="radio-inline">--}}
                          {{--<input type="radio" name="unit_id" id="inlineRadio1" value="{{$unit->id}}"></br>{{$unit -> name}}--}}
                          {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                      {{--</label>--}}
                  {{--</ul>--}}
                  <div class="checkbox">
                      <label>
                          <input type="checkbox" name="unit_id" value="{{ $unit->id }}">
                          </br>{{ $unit->name }}
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      </label>
                  </div>

              @endforeach
              @endif
         <ul><button class="btn btn-primary">Submit</button></ul>
     </form>
      {{--</tbody>--}}
    {{--</table>--}}


@stop