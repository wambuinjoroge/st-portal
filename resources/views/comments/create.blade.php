@extends('layouts.app')

@section('content')

    <ol class="breadcrumb">
        <ul>
            <a class="active">COMMENTS</a>
        </ul>
    </ol>

    <textarea class="form-control" rows="4">
       1. Please, give us your feedback/comments concerning the online system.
       2.You can also comment on the general look & feel of the system.
       3.Your comments will be highly appreciated and will be kept confidential (Anonymous)
       4.Please, enter your comments on the space provided below, and then click the button labeled "Submit Information"
    </textarea>

    <form method="post" action="{{ url('comment') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <input type="text"  name="category" placeholder="Category">

        <br>
        <div class="form-group">

            <textarea class="form-control" name="comment"  rows="7"></textarea>

            {{--<span  class="input-group-addon btn-primary" id="submitMyForm">Send</span>--}}

            <br>

            <button type="submit" class="btn btn-primary">Submit Information</button>

        </div>

    </form>

{{--<script>--}}

        {{--$('#submitMyForm').on('click',function () {--}}
            {{--alert('Your comment has been submitted');--}}
        {{--})--}}

{{--</script>--}}
@stop