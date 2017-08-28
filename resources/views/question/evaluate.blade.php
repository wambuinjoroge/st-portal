@extends('layouts.app')

@section('content')



<h3><b><u>STUDENT'S EVALUATION OF INSTRUCTOR</u></b></h3>
<br>

<h4>{{ $faculty->name }}&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Student's Gender : {{ $student->gender == 1 ? 'Female' : 'Male' }}</h4 >
{{--<h4>Year of Study : </h4>form--}}

<br>
<textarea class="form-control" rows="9" readonly>
  This Rating Scale is designed to evaluate the efficiency and effectiveness of your instructor in the semester you have just completed. Your response to the items in this scale is confidential. Please read carefully the instructions typed below before you complete this scale.
    1. Your student number will not be captured after submitting this form.
    2. Evaluate the effectiveness of your instructor, by rating each of the items in this scale i.e. Poor, Fair, Good, Very Good or Excellent.
    3. Respond by selecting an option for each item on this scale, that you believe best evaluates the effectiveness of your lecturer.
    4. In cases where no options are provided, enter your response by typing on the space provided after the question.
    5. After responding to all questions, click on the button labeled "Submit". This button is located at the bottom of the page.
    6. Only forms completed will be accepted i.e. If a question has not been responded to, then the whole form will be rejected.
    7. You cannot evaluate a lecturer more than once.
</textarea>
<br>

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