@extends('layouts.app')

@section('content')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

 @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

<div class="container-fluid">
   
   <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <header><h1>Personal Info</h1></header>
    <main>
        <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRqyEjssB7kTB45JBx-8apvfdbCiIGxQ-NaGmZYtVcD8sbGQiwI4piJw2yf">   
    </main>
      <div class="form-group">
       <form method="post" action="{{url('/details/create')}}">
               
           <label>Name</label>
             <div>
               <input type="text" name="name" placeholder="name">
             </div>
           <label>Admission Number</label>   
             <div>
               <input type="text" name="admission_number" placeholder="admission_number">
             </div>
           <label>Email</label>
             <div>
               <input type="text" name="email" placeholder="email">
             </div>
           <label>Date of Birth</label>
             <div>
               <input type="text" name="date_of_birth" placeholder="date_of_birth">
             </div>
           <label>Phone Number</label>
             <div>
               <input type="text" name="phone_number" placeholder="phone_number">
             </div>
             
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
           
            <button class="btn btn-default" type="submit">Submit</button>

       </form>
      </div>
      <div class="col-md-4"></div>
   </div>
     </div>
  
</div>    
@stop