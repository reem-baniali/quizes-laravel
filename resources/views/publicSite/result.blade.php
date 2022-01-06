@extends('publicSite.layouts.master')
@section('content')
<body class="animsition">
    <div class="page-wrapper">
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            
              <div class="top-campaign col-7 m-auto mt-4 ">
                <h5 style="color: #404d68" class="title-3 m-b-30 ">Your Result <strong>{{$user_score_per_question}} </strong> 
                                            Out of <strong> {{ $final_exam_score }} </strong>
                                            @if ($is_pass == 1)
                                              <strong style="color: rgb(19, 218, 19);">  Congrrats You passed the exam!  </strong>
                                               <strong style="color: rgb(207, 5, 5);">Hard Luck, Try again! </strong> 
                                            @endif
                </h5>
                        <div class="table-responsive m-b-40">
                            <table class="table table-borderless  mt-4">
                                <thead class="text-white" style="background-color: #404d68">
                                    
                                    <tr>
                                        <th>Question Number</th>
                                        <th>Question Text</th>
                                        <th>Your Answer</th>
                                        <th>Correct Answer</th>
                                    </tr>
                                </thead>
                                <tbody class="mb-3 mt-2" style="color: #404d68; border-bottom:solid 3px #404d68; margin-bottom:5%">

                                    @foreach ($questions as $question )
                                    @foreach ($user_answers as $answer )
                                    @if ($question->id === $answer->question_id)
                                        <tr>
                                            <td>{{  $question->number  }}</td>
                                            <td class="text-break">{{  $question->text  }}</td>
                                            @if ( $answer->user_answer === $question->correct_answer )
                                                <td style="color: rgb(19, 218, 19); font-weight:600" >{{ $answer->user_answer }}</td>
                                                @else
                                                <td style="color: rgb(207, 5, 5); font-weight:600" >{{ $answer->user_answer }}</td>
                                            @endif
                                            
                                            <td >{{  $question->correct_answer }}</td>
                                        </tr>
                                    @endif
                                    @endforeach
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE-->
                        </div>
                    </div>
                </div>
            </div>
               </div> 
@endsection