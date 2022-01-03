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
                                            <form action="{{ route('option.store') }} " 
                                                method="post" >
                                                @csrf
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fas fa-caret-down"></i>
                                                        </div>
                                                        <select name="question_id" class="form-control" >
                                                           {{-- @if ($update == true) --}}
                                                                {{-- <option value="{{ $question->id }}"  selected>
                                                                  {{ $question->text }}</option> --}}
                                                                  {{-- @else --}}
                                                                  {{-- <option value="">Select Question</option> --}}
                                                                @foreach ($questions as $question  )                                   
                                                                <option value="{{ $question->id }}" >
                                                                 {{ $question->text }} </option>
                                                            @endforeach
                                                              {{-- @endif --}}
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-plus"></i>
                                                        </div>
                                                        <input type="text" id="option_title" 
                                                        name="option"  
                                                        class="form-control" placeholder="option one"
                                                        value="">
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
                                                        value="">
                                                    </div>
                                                </div> 
                                              
                                                <div class="form-actions form-group d-flex justify-content-end">
                                                    {{-- @if ($update == false) --}}
                                                    <button type="submit" name="add_option" 
                                                    class="btn btn-primary btn-md" 
                                                    style="background: #4272d7;">Add Option </button>
                                                    {{-- @else  --}}
                                                     {{-- <button type="submit" name="update_option" 
                                                    class="btn btn-primary btn-md" 
                                                    style="background: #4272d7;">Update Option </button>  --}}
                                                     {{-- @endif --}}
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
                                        <th>text</th>
                                        <th>Points</th>
                                        <th>Exam Title</th>
                                        <th></th>
                                        
                                     
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($options as $option )
                                        <tr>
                                            <td></td>
                                            <td class="text-break"></td>
                                            <td ></td>
                                            @foreach ($questions as $question )
                                                @if($question->id == $question->exam_id)
                                          <td> </td>
                                          @endif
                                           @endforeach
                                      <td>
                                <div class="table-data-feature d-flex justify-content-end">
                                    <a href="{{ route('option.edit',$option->id) }}"> <button class="item btn btn-success"
                                         data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="zmdi zmdi-edit"></i></a>
                                    </button>
                                    <a href="{{ route('option.delete',$option->id) }}"> <button class="item btn btn-danger" 
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