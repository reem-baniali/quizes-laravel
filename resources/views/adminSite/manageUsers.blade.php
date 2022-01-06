
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
                                    <div class="card-header">Manage Users</div>
                                    <div class="card-body card-block">
                                   
                                        <form action="@if($update==false){{ route('role.store') }} @else 
                                        {{ route('role.update',$user->id) }} @endif" method="post" >
                                        @csrf
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <input type="text" id="username" name="name" placeholder="User name" 
                                                    class="form-control"  value="@if ($update == true) {{ $user->name }} @endif">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
                                                    <input type="email" id="email" name="email" placeholder="User Email" 
                                                    class="form-control"  value="@if ($update == true) {{ $user->email }} @endif">
                                                </div>
                                            </div>
          
                                              <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-asterisk"></i>
                                                    </div>
                                                    <input type="password" id="password" name="password" 
                                                    placeholder="Password" class="form-control text-break"
                                                    value="@if ($update == true) {{ $user->password }} @endif">
                                                </div>
                                            </div>
                      <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fas fa-caret-down"></i>
                                                        </div>
                                                        <select name="role_id" class="form-control" >
                                                        <option value="2" selected>Select Role</option>
                                                        <option value="1"> Admin </option>
                                                          <option value="2"> User </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            
                                           
                                           <div class="form-actions form-group d-flex justify-content-end">
                                                    @if ($update == false)
                                                    <button type="submit" name="add_user" 
                                                    class="btn btn-primary btn-md" 
                                                    style="background: #4272d7;">Add User </button>
                                                    @else 
                                                     <button type="submit" name="update_user" 
                                                    class="btn btn-primary btn-md" 
                                                    style="background: #4272d7;">Update User </button> 
                                                     @endif
                                                </div>
                                        </form>

                                          </div>
                                </div>
                                <!-- DATA TABLE-->
                                  <div class="top-campaign col-12 m-auto">
                                <h3 class="title-3 m-b-30">Users</h3>
                                <div class="table-responsive m-b-40">
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>User ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                {{-- <th>Password</th> --}}
                                                <th>Role</th>
                                                <th></th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                   @foreach ($users as $user )
                                       
                                 
                                                <tr>
                                                    <td>{{ $user->id }}</td>
                                                    <td class="col-3">{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    {{-- <td>{{ $user->password }}</td> --}}
                                                    @if ($user->role_id == 1)
                                                       <td style="color: red;font-weight:700"> Admin </td> 
                                                       @else 
                                                       <td > User </td> 
                                                    @endif
                                                   
                                                  
                                                            <td>
                                <div class="table-data-feature d-flex justify-content-end">
                                    <a href="{{ route('role.edit',$user->id) }}"> <button class="item btn btn-success"
                                         data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="zmdi zmdi-edit"></i></a>
                                    </button>
                                    <a href="{{ route('role.delete',$user->id) }}"> <button class="item btn btn-danger" 
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
                    </div>
 </div>

@endsection
