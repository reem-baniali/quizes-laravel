
@extends('adminSite.layouts.master')
@section('content')

<body class="animsition">
    <!-- PAGE CONTAINER-->
    <div class="page-container">

        <!-- HEADER DESKTOP-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="row form-group">
                   
                        <div class="col-lg-2 col-md-3">
                            <label for="selectLg" class=" form-control-label">Qustions</label>
                        </div>
                        <div class="col-lg-6 col-md-9">
                            <form method="post">
                                <select name="select_exam" id="selectLg" class="form-control-lg form-control">
                                    <option value="0"> select Question</option>
                                   
                                        <option value=""> 
                                            </option>
                                  
                                </select>
                        </div>
                </div>
                <div class="col-lg-12">
                    <div class="card c">
                        <div class="card-header">
                            <strong>Add </strong>
                            <small> question</small>
                        </div>
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="company" class=" form-control-label">question Num</label>
                                <input type="text" name="question_num" id="company" placeholder="Enter your question " class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="company" class=" form-control-label">question</label>
                                <input type="text" name="question_text" id="company" placeholder="Enter your question " class="form-control">
                            </div>
                            <div>
                                <h3>Options</h3>
                                <div class="form-group">
                                    <label for="vat" class=" form-control-label">Option #1</label>
                                    <input type="text" name="option#1" id="vat" placeholder="Enter your Option" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="vat" class=" form-control-label">Option #2</label>
                                    <input type="text" name="option#2" id="vat" placeholder="Enter your Option" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="vat" class=" form-control-label">Option #3</label>
                                    <input type="text" name="option#3" id="vat" placeholder="Enter your Option" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="vat" class=" form-control-label">Option #4</label>
                                    <input type="text" name="option#4" id="vat" placeholder="Enter your Option" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="street" class=" form-control-label">The correct answer</label>
                                <input type="text" name="correct_answer" id="street" placeholder="Enter The correct answer" class="form-control">
                            </div>

                        </div>
                        <div class="card-footer">
                            <button type="submit" name="add" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Add
                            </button>

                        </div>
                    </div>
                </div>
                </form>
           

        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">Exam Name</h3>

        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>
                            Question_Number
                        </th>
                        <th>Question</th>
                        <th>Options</th>
                        <th>The correct answer</th>
                    </tr>
                </thead>
                <tbody>
                   
                        <option value=""> </option>


                        <tr class="tr-shadow">
                            <td>
                                
                            </td>
                            <td> </td>
                            <td>
                                <ul>
                                    <li> </li>
                                    <li>  </li>
                                    <li> </li>
                                    <li> </li>
                                </ul>
                            </td>
                            <td class="desc">Options</td>

                            <td>
                                <div class="table-data-feature">

                                    <a href="manageQues.php?id="> <button class="item btn btn-primary"
                                         data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="zmdi zmdi-edit"></i></a>
                                    </button>
                                    <a href="manageQues.php?delete="> <button class="item btn btn-danger" 
                                        data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="zmdi zmdi-delete"></i></a>
                                    </button>

                                </div>
                            </td>
                        </tr>

                   



                    </tr>
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
        </div>
  
{{-- 
                <div class="col-lg-2 col-md-3 mt-5 m-auto">
                    <label for="selectLg" class=" form-control-label">Exams</label>
                </div>
                <div class="col-lg-6 col-md-8 ">
                    <form method="post">
                        <select name="select_exam" id="selectLg" 
                        class="form-control-lg form-control">
                            <option value="0"> select The Exam</option>                          
                                <option value=""> </option>
                            
                        </select>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card c">
                    <div class="card-header">
                        <strong>Update </strong>
                        <small> question</small>
                    </div>
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label for="company" class=" form-control-label">question Num</label>
                            <input type="text" name="question_num" id="company"
                             value="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="company" class=" form-control-label">question</label>
                            <input type="text" name="question_text" id="company" 
                            value="" class="form-control">
                        </div>
                        <div>
                            <h3>Options</h3>
                            <div class="form-group">
                                <label for="vat" class=" form-control-label">Option #1</label>
                                <input type="text" name="option#1" id="vat"
                                 value="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="vat" class=" form-control-label">Option #2</label>
                                <input type="text" name="option#2" id="vat" 
                                value="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="vat" class=" form-control-label">Option #3</label>
                                <input type="text" name="option#3" id="vat" 
                                value="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="vat" class=" form-control-label">Option #4</label>
                                <input type="text" name="option#4" id="vat" 
                                value="" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="street" class=" form-control-label">The correct answer</label>
                            <input type="text" name="correct_answer" id="street" 
                            value="" class="form-control">
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" name="update" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Update
                        </button>

                    </div>
                </div>
            </div>
            </form>
    
    </div>
    </div> --}}
@endsection