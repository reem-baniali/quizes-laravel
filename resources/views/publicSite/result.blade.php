@extends('publicSite.layouts.master')
@section('content')

<h1>{{ $user_score_per_question }} / {{ $final_exam_score }}</h1>

@foreach ($questions as $question )
  @foreach ($user_answers as $answer )
      
 
@if ($question->id === $answer->question_id)
  <h1>question text :{{  $question->text  }}</h1>
    <h5> user_answer{{ $answer->user_answer }}</h5>
     <h5>correct_answer :{{  $question->correct_answer }}</h5>

@endif
 @endforeach: 
@endforeach
<h1>result</h1>


@endsection