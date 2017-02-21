@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
              @if(Auth::user()->role_id==2)
                    <div>
                        <a href="{{url('students/create')}}"><p>Edit your personal information here</p></a>
                    </div>
                @endif

                <script type="text/javascript">

                </script>                  
            </div>
        </div>
    </div>
@endsection
