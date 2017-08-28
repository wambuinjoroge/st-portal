@extends('layouts.app')

@section('content')

    <table class="table table-bordered">
        <thead>
            <tr>
                <td>Category</td>
                <td>Comment</td>
            </tr>
        </thead>
        <tbody>
             @foreach($comments as $comment)
                 <tr>
                     <td>{{ $comment->category }}</td>
                     <td>{{ $comment->comment }}</td>
                 </tr>
             @endforeach
        </tbody>
    </table>

@stop

{{--Things pending for my student portal--}}
{{--1. Work on how a student can upload their photo.--}}
{{--2. Work on enabling a student to change their password once they are logged in for the first time.--}}
{{--3. Work on AJAX for the rooms API.... watch the videos on ajax for me to understand the concept.--}}

{{---Design issues,implement materialize and make it more presentable.--}}

{{--Dear GOD help me do the above,ignite the spark in me.--}}