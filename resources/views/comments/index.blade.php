@extends('layouts.app')

@section('content')

    <table class="table table-stiped">
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