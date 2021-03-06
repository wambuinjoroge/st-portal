<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/boot.css" rel="stylesheet">



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
                <li class="active"><a href="{{url('admin')}}">STUDENT PORTAL<span class="sr-only">(current)</span></a></li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
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
        </div>
    </div>
</nav>
{{--SIDEBAR--}}
<div class="container-fluid">
    <div class="pull-left">
        <nav class="navbar navbar-default nav nav-sidebar side-br" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Student Portal
                    </a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-home"></i> Home</a>
                </li>
                <li>
                    <a href="students"><i class="fa fa-fw fa-folder"></i> Personal Info</a>
                </li>
                <li>
                    <a href="{{url('hostels/create')}}"><i class="fa fa-fw fa-cog"></i> Hostel Booking</a>
                </li>
                <li>
                    <a href="{{url('units/create')}}" ><i class="fa fa-fw fa-plus"></i> Units Registration </a>
                </li>
                <li>
                    <a href="{{url('faculties')}}"><i class="fa fa-fw fa-bank"></i> Exam Results</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-dropbox"></i>Somu Voting</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-twitter"></i>Lecturers' Evaluation</a>
                </li>
                <li>
                    <a href="#">Graduation Application</a>
                </li>
                <li>
                    <a href="#">Comments</a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->
</div>

@yield('content')
</body>
</html>