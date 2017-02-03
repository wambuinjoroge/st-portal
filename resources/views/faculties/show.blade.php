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
         <td>Admission Number</td>
         <td>Email</td>
         <td>Date of Birth</td>
         <td>National ID</td>
       </tr>
     </thead>
      <tbody>
        
           @foreach($students as $student =>$value )
           <tr>
             <td>{{$value->name}}</td>
             <td>{{$value->admission_number}}</td>
             <td>{{$value->email}}</td>
             <td>{{$value->date_of_birth}}</td>
             <td>{{$value->national_id}}</td>
           </tr>
            
     @endforeach
        
      </tbody>
      
    </table>
     
   
       
</div>

@stop