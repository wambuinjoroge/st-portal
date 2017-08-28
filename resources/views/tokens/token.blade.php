@extends('layouts.app')
@section('content')

<form action="/save" enctype="multipart/form-data" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="file" name="image">
    <input type="submit" value="upload">
</form>
@stop