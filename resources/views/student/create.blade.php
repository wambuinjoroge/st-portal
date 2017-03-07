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


    {{--<main >--}}
        {{--<img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRqyEjssB7kTB45JBx-8apvfdbCiIGxQ-NaGmZYtVcD8sbGQiwI4piJw2yf" >--}}
    {{--</main>--}}

      <div class="form-group">
          <header><h1>Personal Info</h1></header>
       <form method="post" action="{{url('/students/create')}}" class="form-horizontal">
               
           <label>Name</label>
             <div>
               <input type="text" name="name" placeholder="name" class="form-control">
             </div>
           <label>Admission Number</label>   
             <div>
               <input type="text" name="admission_number" placeholder="admission_number" class="form-control">
             </div>
           <label>Email</label>
             <div>
               <input type="text" name="email" placeholder="email" class="form-control">
             </div>
           <label>Date of Birth</label>
             <div>
               <input type="date" name="date_of_birth" placeholder="date_of_birth" class="form-control">
             </div>
           <label>National ID</label>
             <div>
               <input type="text" name="national_id" placeholder="national_id" class="form-control">
             </div>


            <div >
            <label for="faculty">FACULTY</label>
             <select name="faculty_id" id="faculty" class="form-control">
              @foreach($faculties as $faculty => $value)
                   <option value="{{$value->id}}">{{$value->name}}</option>
              @endforeach
            </select> 
            </div>


           </br>
           <label for="gender">GENDER</label>
           </br>
           <label class="radio-inline">
               <input class="field" type="radio"  name="gender" id="female" value="0"> Female
           </label>
           <label class="radio-inline">
               <input class="field" type="radio"  checked="checked" name="gender" id="male" value="1"> Male
           </label>
           </br>
           {{--<select class="form-control">--}}
               {{--<option>Female</option>--}}
               {{--<option>Male</option>--}}
           {{--</select>--}}

           {{--<input type="hidden" name="hostel_id" value="{{$value->id}}">--}}
             
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
       </br>
           
            <button class="btn btn-default" type="submit">Submit</button>

       </form>
      </div>
      <div class="col-md-4"></div>
   </div>
     </div>
  
</div>    
@stop