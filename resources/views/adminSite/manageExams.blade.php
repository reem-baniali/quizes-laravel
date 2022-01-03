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
                                    
                                        <div class="card-header">Manage Exam</div>
                                        <div class="card-body card-block">
                                            <form action="@if($update==false){{ route('exam.store') }} @else {{ route('exam.update',$exam->id) }}@endif" 
                                                method="post" enctype="multipart/form-data" >
                                                @csrf
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fas fa-caret-down"></i>
                                                        </div>
                                                        <select name="category_id" class="form-control" >
                                                            @if ($update == true)
                                                                <option value="{{ $exam->category->id }}"  selected>
                                                                  {{ $exam->category->name }} </option>
                                                                  @else
                                                                  <option value="">Select Category</option>
                                                            @endif
                                                                @foreach ($categories as $category  )                                   
                                                                <option value="{{ $category->id }}" >
                                                                  {{ $category->name }} </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                 
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-plus"></i>
                                                        </div>
                                                        <input type="text" id="exam_title" 
                                                        name="title"  
                                                        class="form-control" placeholder="exam title"
                                                        value="@if($update == true){{ $exam->title }}@endif">
                                                    </div>
                                                </div>

                                                    <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-plus"></i>
                                                        </div>
                                                        <input type="file" id="exam_image" 
                                                        name="image"  class="form-control"
                                                        placeholder="number of questions"
                                                        value="@if($update == true){{ $exam->image }}@endif">
                                                    </div>
                                                </div>

                                                  <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-plus"></i>
                                                        </div>
                                                        <input type="number" id="exam_questions" 
                                                        name="number_of_questions"  class="form-control"
                                                        placeholder="number of questions"
                                                        value="@if($update == true){{ $exam->number_of_questions }}@endif">
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-plus"></i>
                                                        </div>
                                                        <input type="number" id="exam_time" 
                                                        name="time_estimation"  class="form-control"
                                                        placeholder="estimation time"
                                                        value="@if($update == true){{ $exam->time_estimation }}@endif">
                                                    </div>
                                                </div>
                                                <div class="form-actions form-group d-flex justify-content-end">
                                                    @if ($update == false)
                                                    <button type="submit" name="add_exam" 
                                                    class="btn btn-primary btn-md" 
                                                    style="background: #4272d7;">Add Exam </button>
                                                    @else 
                                                    <button type="submit" name="update_exam" 
                                                    class="btn btn-primary btn-md" 
                                                    style="background: #4272d7;">Update Exam </button>
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
                                        <th>Exam ID</th>
                                        <th>Exam Category</th>
                                        <th>Exam Image</th>
                                        <th>Exam Title</th>
                                        <th>Number of Qustions</th>
                                        <th>Time Estimation</th>
                                        <th></th>
                                     
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($exams as $exam )
                                        <tr>
                                            <td>{{ $exam->id }}</td>
                                            @foreach ($categories as $category )
                                                @if($category->id == $exam->category_id)
                                          <td> {{ $category->name }}</td>
                                          @endif
                                           @endforeach
                                           <td><img src="{{  $exam->image }}" alt="exam-img"></td>
                                            <td>{{ $exam->title }}</td>
                                            <td>{{ $exam->number_of_questions }} questions</td>
                                            <td>{{ $exam->time_estimation }} minutes</td>

                                                     <td>
                                <div class="table-data-feature d-flex justify-content-end">
                                    <a href="{{ route('exam.edit',$exam->id) }}"> <button class="item btn btn-success"
                                         data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="zmdi zmdi-edit"></i></a>
                                    </button>
                                    <a href="{{ route('exam.delete',$exam->id) }}"> <button class="item btn btn-danger" 
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