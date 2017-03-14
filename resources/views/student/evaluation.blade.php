@extends('layouts.app')

@section('content')

<h3><b><u>STUDENT'S EVALUATION OF INSTRUCTOR</u></b></h3>
    <br>

    <h4>{{ $faculty->name }}&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Student's Gender : {{ $student->gender == 1 ? 'Female' : 'Male' }}</h4 >
    {{--<h4>Year of Study : </h4>form--}}


<form action="{{ url('evaluation') }}" method="post">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">


    <label for="lecturer">Lecturer's Name</label>
    <select name="lecturer_name" id="lecturer" class="form-control">
        @foreach($lecturers as $lecturer => $value)
            <option value="{{$value->id}}">{{$value->lecturer_name}}</option>
        @endforeach
    </select>
    </br>
    <label>Date</label>
    <input type="date" name="created_at">

    <br></br>
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

<div class="questionBox">

    <p>1.The instructor's preparation for class was:</p>

        <input type="radio" name="opinion"  value="1" >
        Poor
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="radio" name="opinion"  value="2" >
       Fair
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="radio" name="opinion"  value="3" >
       Good
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="radio" name="opinion" value="4" >
       Very Good
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="radio" name="opinion"  value="5" >
       Excellent
</div>
<br>
<div class="questionBox">

    <p>2.How do you evaluate the instructor's punctuality to class?</p>

    <input type="radio" name="opinion"  value="1" >
    Poor
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" name="opinion"  value="2" >
    Fair
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" name="opinion"  value="3" >
    Good
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" name="opinion" value="4" >
    Very Good
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" name="opinion"  value="5" >
    Excellent
</div>


<button type="submit" class="btn btn-primary" >Submit</button>

</form>

@stop