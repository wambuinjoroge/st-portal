@extends('layouts.app')

@section('content')

<form method="post" action="{{ url('evaluation') }}">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label for="lecturer">Lecturer's Name</label>
    <select name="lecturer_id" id="lecturer_id" class="form-control">
        @foreach($lecturers as $lecturer )
            <option value="{{$lecturer->id}}">{{$lecturer->lecturer_name}}</option>
        @endforeach
    </select>
    </br>

<div class="questionBox">

    @foreach($questions as $question)

      <p>{{ $question->question }}</p>

            @foreach( $question->answers as $answer)

              <label class="radio-inline">

                <input type="radio" name="{{ $question -> id}}"  value="{{ $answer -> id}}" ></br>

                   {{ $answer->answer }}

              </label>

        @endforeach
        <br>
    @endforeach

</div>
    </br>
    <button class=" btn btn-primary">Submit</button>
</form>
@stop