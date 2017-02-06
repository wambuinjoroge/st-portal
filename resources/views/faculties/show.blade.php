@extends('layouts.app')
@section('content')

<div class="container">
<!-- work on how to include units on this view  -->
	<p><u>{{$faculty->name}}</u></p>
    <p><u>{{$faculty->head}}</u></p>
    
    <table class="table table-bordered">
     <thead>
       <tr>
         <td>Name</td>
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
</div>

@stop