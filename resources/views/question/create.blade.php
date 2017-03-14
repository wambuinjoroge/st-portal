@extends('layouts.app')

@section('content')

    <form method="post" action="{{ url('') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <input type="date" name="created_at" >

        <input type="text" >

        <input type="radio" name="opinion"  value="1" >
    </form>

@stop