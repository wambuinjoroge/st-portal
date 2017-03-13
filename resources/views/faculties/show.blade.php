@extends('layouts.app')
@section('content')


<!-- work on how to include units on this view  -->
    <ol class="breadcrumb">
        <li><a href="#">HEAD:{{$faculty->head}}</a></li>
        <li class="active">{{$faculty->name}}</li>
    </ol>

    @if(Auth::user()->role_id==1)
        <div class="pull-right"><a href="{{url('units/create')}}"><h4><span class=" label label-primary">Add Unit</span></h4></a></div>
    @else
        <h3><u>Units to register</u></h3>
    @endif


     <form class="form-group"  method="post" action="{{url('myUnits')}}" >
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
              @if($units)
              @foreach($units as $unit)

                  <div class="checkbox">
                      <label>
                          <input type="checkbox" name="unit_id[]" value="{{ $unit->id }}">
                          </br>{{ $unit->name }}
                      </label>
                  </div>

              @endforeach
              @endif
            <br><ul>
             <button class="btn btn-primary">Submit</button>
         </ul>
     </form>

@stop