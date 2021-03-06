<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Zürich University</title>

    <!-- Fonts2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet">


    {{--materialize files--}}
    {{--css--}}
    {{--<!--Import materialize.css-->--}}
    {{--<link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/materialize.css') }}"  media="screen,projection"/>--}}

    {{--Fonts1--}}
    {{--<!--Import Google Icon Font-->--}}
    {{--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">--}}
    {{--<link rel="stylesheet" href="{{ URL::asset('assets/fonts/roboto/Roboto-Bold.woff') }}">--}}

    {{--<!-- Compiled and minified CSS -->--}}
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">--}}

    {{--<!-- Compiled and minified JavaScript -->--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>--}}

</head>
<body id="app-layout">

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

                <a class="navbar-brand " href="/home"><i></i>ZURICH UNIVERSITY </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav">
                    @if(\Illuminate\Support\Facades\Auth::user())
                        @if(Auth::user()->role_id ==1)
                            <li class="active"><a href="">Home Admin</a> <span class="sr-only">(current)</span></li>
                        @else
                            <li class="active"><a href="">Student Portal</a> <span class="sr-only">(current)</span></li>
                        @endif
                    @endif

                </ul>

                {{--Work on creating your own search button--}}
                {{--<form class="navbar-form navbar-left">--}}
                    {{--<div class="form-group">--}}
                        {{--<input type="text"  >--}}
                    {{--</div>--}}
                    {{--<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true">Search</span></button>--}}
                {{--</form>--}}

                <ul class="nav navbar-nav navbar-right">

                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        {{--<li><a href="{{ url('/register') }}">Register</a></li>--}}
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa fa-user fa-fw"></i>{{ Auth::user()->name }} <span class="caret "></span>
                            </a>

                            <ul class="dropdown-menu " role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out "></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    @if(Auth::guest())
        @yield('content')
    @elseif(Auth::user())
        {{--sidebar--}}


        <div class="container-fluid">
            <div class="row">
                <div class="pull-left col-md-2">
                    <nav class="navbar navbar-default nav nav-sidebar side-br" id="sidebar-wrapper" role="navigation">
                        <ul class="nav sidebar-nav">
                            @if(\Illuminate\Support\Facades\Auth::user()->role_id==1)
                                <li class="sidebar-brand">
                                    <a href="#">
                                        HOME ADMIN
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('home')}}"><i class="fa fa-fw fa-home"></i>Home</a>
                                </li>
                                {{--<li>--}}
                                    {{--<a href="{{url('students')}}"><i class="fa fa-fw fa-folder"></i> Students</a>--}}
                                {{--</li>--}}
                                <li>
                                    <a href="{{url('faculties')}}" ><i class="fa fa-fw fa-book"></i>Faculties </a>
                                </li>


                                <li>
                                    <a href="{{url('hostels')}}"><i class="fa fa-fw fa-cog"></i>Hostels</a>
                                </li>
                                <li>
                                    <a href="{{ url('lecturers') }}"><i class="fa fa-fw fa-user"></i>Lecturers</a>
                                </li>
                                <li>
                                    <a href="{{ url('graduands') }}"><i class="fa fa-fw fa-file"></i>Graduation Applicants</a>
                                </li>
                                <li>
                                    <a href="{{ url('comments') }}"><i class="fa fa-fw fa-twitter"></i>Suggestions</a>
                                </li>
                            @elseif(Auth::user()->role_id==2)
                                <li class="sidebar-brand">
                                    <a href="#">
                                        STUDENT PORTAL
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('home')}}"><i class="fa fa-fw fa-home"></i> Home</a>
                                </li>
                                <li>
                                    <a href="
                                        @if (!empty(\App\Student::where('user_id', Auth::user()->id)->first()->id))
                                    {{ url('student/'.\App\Student::where('user_id', Auth::user()->id)->first()->id) }}
                                    @else
                                    {{ url('#') }}
                                    @endif
                                            " ><i class="fa fa-fw fa-plus"></i> Personal Info </a>
                                </li>
                                <li>
                                    <a href="{{url('/students/'.\App\Student::where('user_id', Auth::user()->id)->first()->id).'/edit'}}"><i class="fa fa-fw fa-folder"></i> Personal Info Editor</a>
                                </li>

                                <li>
                                    <a href="
                                        @if (!empty(\App\Student::where('user_id', Auth::user()->id)->first()->faculty_id))
                                            {{--{{ url('faculty/'.\App\Student::where('user_id', Auth::user()->id)->first()->faculty_id) }}--}}
                                            {{url('student-units/'.\App\Student::where('user_id',Auth::user()->id)->first()->id)}}
                                        @else
                                           {{ url('#') }}
                                        @endif
                                    " ><i class="fa fa-fw fa-plus"></i> Units</a>
                                </li>


                                <li>
                                    <a href="
                                        @if(!empty(\App\Student::where('user_id', Auth::user()->id)->first()->hostel_id))
                                           {{url('myRoom')}}

                                        @else
                                            {{url('student-hostels')}}
                                        @endif
                                            "><i class="fa fa-fw fa-cog"></i>Student's Accommodation</a>
                                </li>
                                <li>

                                <li>
                                    <a href="{{ url('evaluate') }}"><i class="fa fa-fw fa-user"></i>Lecturers' Evaluation</a>
                                </li>
                                <li>
                                    <a href="
                                       @if(!empty(\App\Student::where('user_id', Auth::user()->id)->first()->graduation_id))
                                            {{ url('graduand/'.\App\Student::where('user_id', Auth::user()->id)->first()->graduation_id) }}
                                        @else
                                            {{ url('graduation') }}
                                        @endif
                                            "><i class="fa fa-fw fa-file"></i>Graduation Application</a>
                                </li>
                                <li>
                                    <a href="{{ url('create/comment') }}"><i class="fa fa-fw fa-twitter"></i>Suggestion Box</a>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>
                <!-- /#sidebar-wrapper -->

                <!-- Page Content -->
                <div id="page-content-wrapper " class="col-md-10">
                    @yield('content')
                </div>
                <!-- /#page-content-wrapper -->
                 {{--<div class="col-md-2"></div>--}}
                {{--<div class="col-md-2"></div>--}}
            </div>

        </div>
    @endif

    <!-- /#wrapper -->

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    {{--<!--Import jQuery before materialize.js-->--}}
    {{--<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>--}}
    {{--<script type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('assets/js/materialize.js') }}"></script>--}}

</body>
</html>
