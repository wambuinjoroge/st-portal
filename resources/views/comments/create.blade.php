@extends('layouts.app')

@section('content')

    <form method="post" action="{{ url('comment') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <input type="text" class=" form-control input-lg" name="category" placeholder="Category">

        <br>
        <div class="form-group">

            <textarea class="form-control" name="comment"  rows="10"></textarea>

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