
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
                {{-- <h5 style="color: #404d68" class="title-3 m-b-30 ">Your Result <strong>{{$user_score_per_question}} </strong> 
                                            Out of <strong> {{ $final_exam_score }} </strong>
                                            @if ($is_pass == 1)
                                                Congrrats You pass! 
                                            @else
                                                Hard Luck, Try again!
                                            @endif
                </h5> --}}
                        <div class="table-responsive m-b-40">
                            <table class="table table-borderless  mt-4">
                                <thead class="text-white" style="background-color: #404d68">
                                    
                                    <tr>
                                        {{-- <th> Exam Number</th> --}}
                                        <th> Exam Title</th>
                                        <th> Your Result </th>
                                        
                                    </tr>
                                </thead>
                                <tbody class="mb-3 mt-2" style="color: #404d68; border-bottom:solid 3px #404d68; margin-bottom:5%">

                                    @foreach ($results as $result )
                                    
                                        <tr>
                                            @if ($result->user_id === auth()->user()->id)
                                                
                                           
                                            <td>{{  $result->exam->title }}</td>
                                            <td>{{  $result->result  }}</td>
                                            
                                             @endif
                                             @endforeach            
                                        </tr>
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