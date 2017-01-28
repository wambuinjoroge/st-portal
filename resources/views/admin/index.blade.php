@extends('layouts.app')
@section('content')
<!--this is the part where the admin should have details of each main attribute of the student portal,students,exams and fees.-->
<div class="container">
  <div class="col-sm-10"></div>
  

   
<nav class="nav navbar-inverse" id="sidebar-wrapper">
    <div class="container-fluid">
        <div class=" navbar-header">
            <h1 class="navbar-brand"><a href="#">Zurich University</a></h1>
        </div>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="students/create"><div>Create a student</div></a></li>
            </ul>

    </div>
</nav>
    {{--<nav id="main_nav" class="navbar navbar-inverse navbar-static-top">--}}
        {{--<div id="nav_bar" class="container">">--}}
            <!-- Sidebar -->
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
                <a href="#"><i class="fa fa-fw fa-file-o"></i> School Fees</a>
            </li>
            <li>
                <a href="{{url('Hostels')}}"><i class="fa fa-fw fa-cog"></i> Hostel Booking</a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-plus"></i> Units Registration <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <!--<li class="dropdown-header">Dropdown heading</li>-->
                    <li><a href="{{url('Units')}}">First Year</a></li>
                    <li><a href="{{url('Units')}}">Second Year</a></li>
                    <li><a href="{{url('Units')}}">Third Year</a></li>
                    <li><a href="{{url('Units')}}">Fourth Year</a></li>
                    <li><a href="{{url('Units')}}"></a></li>

                </ul>
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
        <button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
        </button>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h1 class="page-header">Awesome Bootstrap 3 Sidebar Navigation</h1>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->
</div>


@stop