
@extends('adminSite.layouts.master')
@section('content')

<body class="animsition">
    <!-- PAGE CONTAINER-->
    <div class="page-container">

        <!-- HEADER DESKTOP-->
        <div class="main-content">
            <div class="section__content section__content--p30">
          
  
           

      <div class="top-campaign col-11 m-auto">
                                <h3 class="title-3 m-b-30">Users Results</h3>
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                               
                                                 <th>user Id</th>
                                                 <th>user name</th>
                                                <th>Exam Title</th>
                                                <th>Result </th>
                                                <th> Submited Time </th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                 @foreach ($results as $result )
                                          
                                      
                                <tr>
                                
                                 <td>{{ $result->user_id  }}</td>
                                 <td>{{ $result->user->name  }} </td>
                                 <td>{{ $result->exam->title  }}</td>
                                 <td>{{ $result->result  }} </td>
                                 <td>{{ $result->created_at  }} </td>
                                                   
                              {{-- <td>
                                <div class="table-data-feature">
                                    <a href=""> <button class="item btn btn-success"
                                         data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="zmdi zmdi-edit"></i></a>
                                    </button>
                                    <a href=""> <button class="item btn btn-danger" 
                                        data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="zmdi zmdi-delete"></i></a>
                                    </button>

                                </div>
                            </td> --}}
                                                </tr>
                                         @endforeach    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

@endsection