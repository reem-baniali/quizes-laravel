
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
                            <form method="post">
                                        <button type="submit" name="back" class="btn btn-success btn-sm ">
                                                   back</button>
                                        </form>
                                <div class="card">
                                    <div class="card-header">Manage Users</div>
                                    <div class="card-body card-block">
                                   
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <input type="text" id="username" name="username" placeholder="Username" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
                                                    <input type="email" id="email" name="email" placeholder="Email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-asterisk"></i>
                                                    </div>
                                                    <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
                                            </div>
                                            <div class="form-actions form-group">
                                                <button type="submit" name="submit" class="btn btn-success btn-sm ">Add New User</button>
                                            </div>
                                        </form>
                                    {{-- <div class="card-header">UPDATE</div>
                                    <div class="card-body card-block">
                                   
                                        <form method="post">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <input type="text" id="username" name="username"
                                                     placeholder="Username" class="form-control"
                                                     value="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
                                                    <input type="email" id="email" name="email" placeholder="Email"
                                                     class="form-control" value="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-asterisk"></i>
                                                    </div>
                                                    <input type="password" id="password"
                                                     name="password" placeholder="Password"
                                                      class="form-control" value="">
                                                </div>
                                            </div>
                                            <div class="form-actions form-group">
                                                <button type="submit" name="update" class="btn btn-success btn-sm ">
                                                   Update</button>
                                                  
                                            </div>
                                        </form>
                                    </div>
                                </div> --}}

                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Admin ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Login Date</th>
                                                <th>Admin Image</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                   
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><img src=" admin/uploads/" alt=""></td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <a href="manageAdmins.php?edit=">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <a href="manageAdmins.php?delete= ">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                    <i class="zmdi zmdi-delete"></i>
                                                                </button>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                        </tbody>

                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                    </div>



@endsection
