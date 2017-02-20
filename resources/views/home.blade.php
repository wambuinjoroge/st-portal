@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
              
               <div>
                   <a href="{{url('students/create')}}"><p>Enter your personal information here</p></a>
               </div> 

                <script type="text/javascript">
                    if(status=0){
                 <div class="panel-body">Fill in your details</div>
                }else{
                <div class="panel-body">Edit your details</div>
                }
                </script>                  
            </div>
        </div>
    </div>
@endsection
