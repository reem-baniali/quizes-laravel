@extends('adminSite.layouts.master')
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
                            <div class="col-lg-12">

                                <div class="card">

                                    <!-- add new exam form -->
                                    
                                        <div class="card-header">Manage Questions</div>
                                        <div class="card-body card-block">
                                            <form action="@if($update==false){{ route('question.store') }} @else {{ route('question.update',$question->id) }}@endif " 
                                                method="post" >
                                                @csrf
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fas fa-caret-down"></i>
                                                        </div>
                                                        <select name="exam_id" class="form-control" >
                                                           @if ($update == true)
                                                                <option value="{{ $question->exam->id }}"  selected>
                                                                  {{ $question->exam->title }} </option>
                                                                  @else
                                                                  <option value="">Select Exam</option>
                                                             @endif
                                                                @foreach ($exams as $exam  )                                   
                                                                <option value="{{ $exam->id }}" >
                                                                  {{ $exam->title }} </option>
                                                            @endforeach 
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-plus"></i>
                                                        </div>
                                                        <input type="number" id="question_number" 
                                                        name="number"  class="form-control"
                                                        placeholder="question number "
                                                        value="@if($update == true){{ $question->number}}@endif">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-plus"></i>
                                                        </div>
                                                        <input type="text" id="question_title" 
                                                        name="text"  
                                                        class="form-control" placeholder="question text"
                                                        value="@if($update == true){{ $question->text }}@endif">
                                                    </div>
                                                </div>
                                                  <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-plus"></i>
                                                        </div>
                                                        <input type="number" id="question_points" 
                                                        name="points"  class="form-control"
                                                        placeholder="Points "
                                                        value="@if($update == true){{ $question->points }}@endif">
                                                    </div>
                                                </div>
                                                  <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-plus"></i>
                                                        </div>
                                                        <input type="text" id="question_option1" 
                                                        name="option1"  
                                                        class="form-control" placeholder="option one"
                                                        value="@if($update == true){{ $question->option1 }}@endif">
                                                    </div>
                                                </div>
                                                   <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-plus"></i>
                                                        </div>
                                                        <input type="text" id="question_option2" 
                                                        name="option2"  
                                                        class="form-control" placeholder="option two"
                                                        value="@if($update == true){{ $question->option2 }}@endif">
                                                    </div>
                                                </div>
                                                   <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-plus"></i>
                                                        </div>
                                                        <input type="text" id="question_option3" 
                                                        name="option3"  
                                                        class="form-control" placeholder="option three"
                                                        value="@if($update == true){{ $question->option3 }}@endif">
                                                    </div>
                                                </div>
                                                   <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-plus"></i>
                                                        </div>
                                                        <input type="text" id="question_option4" 
                                                        name="option4"  
                                                        class="form-control" placeholder="option four"
                                                        value="@if($update == true){{ $question->option4 }}@endif">
                                                    </div>
                                                </div>
                                                   <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-plus"></i>
                                                        </div>
                                                        <input type="text" id="correct_answer" 
                                                        name="correct_answer"  
                                                        class="form-control" placeholder="Correct Answer"
                                                        value="@if($update == true){{ $question->correct_answer }}@endif">
                                                    </div>
                                                </div>
                                               
                                                <div class="form-actions form-group d-flex justify-content-end">
                                                    @if ($update == false)
                                                    <button type="submit" name="add_question" 
                                                    class="btn btn-primary btn-md" 
                                                    style="background: #4272d7;">Add Question </button>
                                                    @else 
                                                     <button type="submit" name="update_question" 
                                                    class="btn btn-primary btn-md" 
                                                    style="background: #4272d7;">Update Question </button> 
                                                     @endif
                                                </div>
                                            </form>
                                        </div>
                                </div>
                      

                        <!-- DATA TABLE-->
                        <div class="table-responsive m-b-40">
                            <table class="table table-borderless table-data3">
                                <thead>
                                    <tr>
                                        <th>Question ID</th>
                                        <th>Question Number</th>
                                        <th>text</th>
                                        <th>Options</th>
                                        <th>Correct Answer</th>
                                        <th>Points</th>
                                        <th>Exam Title</th>
                                        <th></th>
                                        
                                     
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($questions as $question )
                                        <tr>
                                            <td>{{ $question->id }}</td>
                                            <td>{{ $question->number }}</td>
                                            <td class="text-break">{{ $question->text }}</td>
                                            <td ><ul>
                                                <li>{{ $question->option1 }}</li>
                                                <li>{{ $question->option2 }}</li>
                                                <li>{{ $question->option3 }}</li>
                                                <li>{{ $question->option4 }}</li>
                                                </ul>
                                            </td>
                                            <td >{{ $question->correct_answer}}</td>
                                            <td >{{ $question->points }}</td>
                                            @foreach ($exams as $exam )
                                                @if($exam->id == $question->exam_id)
                                          <td> {{ $exam->title }}</td>
                                          @endif
                                           @endforeach
                                      <td>
                                <div class="table-data-feature d-flex justify-content-end">
                                    <a href="{{ route('question.edit',$question->id) }}"> <button class="item btn btn-success"
                                         data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="zmdi zmdi-edit"></i></a>
                                    </button>
                                    <a href="{{ route('question.delete',$question->id) }}"> <button class="item btn btn-danger" 
                                        data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="zmdi zmdi-delete"></i></a>
                                    </button>

                                </div>
                            </td>

                                        </tr>
                                           @endforeach
                                </tbody>

                            </table>
                        </div>
                        <!-- END DATA TABLE-->
                        </div>
                    </div>
                </div>
            </div>
@endsection