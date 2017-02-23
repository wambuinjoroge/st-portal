@extends('layouts.app')
@section('content')


<!-- work on how to include units on this view  -->
	<p><u>{{$faculty->name}}</u></p>
    <p><u>HEAD:{{$faculty->head}}</u></p>
    @if(Auth::user()->role_id==1)
    <div class="pull-right"><a href="{{url('units/create')}}"><h4><span class=" label label-primary">Add Unit</span></h4></a></div>
    @endif
    <table class="table table-bordered">
     <thead>
       <tr>
         <td><span class=" label label-default">NAME of UNIT</span></td>
       </tr>
     </thead>
        <tbody>

              @if($faculty->units)
              @foreach($faculty->units as $unit)
                  <tr>
                      <td>{{$unit -> name}}</td>
                  </tr>
              @endforeach
              @endif

      </tbody>
    </table>


@stop