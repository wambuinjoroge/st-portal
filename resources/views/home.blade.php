@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
              @if(Auth::user()->role_id==2)
                    <div>
                        <a href="{{url('/students/'.\App\Student::where("user_id",Auth::user()->id)->first()->id.'/edit')}}"><p>Edit your personal information here</p></a>
                    </div>
                @endif


                <a class="btn btn-floating pulse"><i class="material-icons">menu</i></a>
                <a class="btn btn-floating btn-large pulse"><i class="material-icons">cloud</i></a>
                <a class="btn btn-floating btn-large cyan pulse"><i class="material-icons">edit</i></a>

            </div>
        </div>
    </div>
@endsection
