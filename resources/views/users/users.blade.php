@extends('layouts.app')

@section('headerscripts')
<title>TRACKKONIZE - We manage website awesomely</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/animate.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/chartist.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/owlcarousel.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/prism.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/style.css">
    <link id="color" rel="stylesheet" href="{{asset('assets')}}/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/responsive.css">
@endsection

@section('content')
  <!--<div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div> -->
    <div class="page-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      @include('layouts.header')
      <!-- Page Header Ends-->
      <!-- Page Body Start-->
      <div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Start-->
       @include('layouts.sidebar')
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Users <i class="icofont icofont-users"></h3></i>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item">Users</li>
                  </ol>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <!-- User Modal Starts(add/create user form) -->
                  <div class="modal fade" id="exampleModalLong" tabindex="-1" aria-labelledby="exampleModalLongTitle" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Create User</h5>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
                    </div>
                    <form action="{{route('createUser')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="modal-body">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="col-form-label pt-0" for="exampleInputEmail1">Username(*)</label>
                                <input class="form-control" type="text" name="username" placeholder="Username" required="" data-bs-original-title="" title="">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="col-form-label pt-0" for="exampleInputEmail1">Password(*)</label>
                                <input class="form-control" type="password" name="password" placeholder="Password" required="" data-bs-original-title="" title="">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="col-form-label pt-0" for="exampleInputEmail1">Confirm Password(*)</label>
                                <input class="form-control" type="password" name="cpassword" placeholder="Password" required="" data-bs-original-title="" title="">
                              </div>
                            </div>
                            
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="col-form-label pt-0" for="exampleInputEmail1">First Name(*)</label>
                                <input class="form-control" type="text" name="firstname" placeholder="First Name" required="" data-bs-original-title="" title="">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="col-form-label pt-0" for="exampleInputEmail1">Last Name(*)</label>
                                <input class="form-control" type="text" name="lastname" placeholder="Last Name" required="" data-bs-original-title="" title="">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="col-form-label pt-0" for="exampleInputEmail1">Gender</label>
                                <select class="form-control" name="gender" required="">
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="col-form-label pt-0" for="exampleInputEmail1">Email Address(*)</label>
                                <input class="form-control" type="email" name="email" placeholder="Email Address" required="" data-bs-original-title="" title="">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="col-form-label pt-0" for="exampleInputEmail1">Contact Number(*)</label>
                                <input class="form-control" type="text" name="phonenumber" placeholder="Contact Number" data-bs-original-title="" title="">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="col-form-label pt-0" for="exampleInputEmail1">Birthdate(*)</label>
                                <input class="form-control" type="date" name="birthdate" placeholder="DD/MM/YYYY" data-bs-original-title="" title="">
                              </div>
                            </div>
                            
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="col-form-label pt-0" for="exampleInputEmail1">Alternate Contact Person</label>
                                <input class="form-control" type="text" name="alternatecontactperson" placeholder="Alternate Contact Person" data-bs-original-title="" title="">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="col-form-label pt-0" for="exampleInputEmail1">Alternate Contact Person Number</label>
                                <input class="form-control" type="text" name="alternatecontact" placeholder="Alternate Person Number" data-bs-original-title="" title="">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="col-form-label pt-0" for="exampleInputEmail1">User Type(*)</label>
                                <select class="form-control" name="usertype" required="">
                                  <option value="">Select</option>
                                                                    <option value="admin">Admin</option>
                                                                    <option value="employee">Employee</option>
                                                                    <option value="client">Client</option>
                                                                  </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="col-form-label pt-0" for="exampleInputEmail1">Role Name(*)</label>
                                <input class="form-control" type="text" name="rolename" placeholder="Role Name" required="" data-bs-original-title="" title="">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="col-form-label pt-0" for="exampleInputEmail1">Country(*)</label>
                                <input class="form-control" type="text" name="country" placeholder="Country Name" required="" data-bs-original-title="" title="">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="col-form-label pt-0" for="exampleInputEmail1">City(*)</label>
                                <input class="form-control" type="text" name="city" placeholder="City Name" required="" data-bs-original-title="" title="">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="col-form-label pt-0" for="exampleInputEmail1">Postal Code(*)</label>
                                <input class="form-control" type="text" name="postal_code" placeholder="Postal Code" required="" data-bs-original-title="" title="">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="col-form-label pt-0" >Profile Picture</label>
                                <input class="form-control" type="file" name="profilepicture" aria-label="file example" data-bs-original-title="" title="">
                              </div>
                            </div>
                            
                            <div class="col-md-12">
                              <div class="form-group">
                                  <label class="col-form-label pt-0">Address</label>
                                  <input type="text" name="address" class="form-control" placeholder="Type Here" required="" data-bs-original-title="" title="">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <label class="col-form-label pt-0">Employment(*)</label>
                              <select name="employeetype" class="form-control" required="">
                                  <option value="">SELECT</option>
                                  <option value="Casual">Casual</option>
                                  <option value="Part Time">Part Time</option>
                                  <option value="Full Time">Full Time</option>
                                  <option value="Full Time">Client</option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <label class="col-form-label pt-0">Employee Status(*)</label>
                              <select name="employee_status" class="form-control" required="">
                                  <option value="">SELECT</option>
                                  <option value="Active">Active</option>
                                  <option value="Inactive">Inactive</option>
                              </select>
                            </div>
                            <div class="col-md-12"><hr></div>
                            <div class="col-md-12">
                              <label class="col-form-label pt-0">Pay Method(*)</label>
                              <select name="paymethod" class="form-control" required="" onchange="CheckColors(this.value);">
                                  <option value="">SELECT</option>
                                  <option value="TFN">TFN</option>
                                  <option value="ABN">ABN</option>
                              </select>
                            </div>
                            <div class="col-md-3">
                              <label class="col-form-label pt-0">Normal Rate(*)</label>
                              <div class="input-group"><span class="input-group-text">$  </span>
                                <input class="form-control" type="number" name="normalrate" required="" aria-label="Amount (to the nearest dollar)" data-bs-original-title="" title=""><!-- <span class="input-group-text">.00  </span> -->
                              </div>
                            </div>
                            <div class="col-md-3">
                              <label class="col-form-label pt-0">Saturday Rate(*)</label>
                              <div class="input-group"><span class="input-group-text">$  </span>
                                <input class="form-control" type="number" name="saturdayrate" required="" aria-label="Amount (to the nearest dollar)" data-bs-original-title="" title=""><!-- <span class="input-group-text">.00  </span> -->
                              </div>
                            </div>
                            <div class="col-md-3">
                              <label class="col-form-label pt-0">Saunday Rate(*)</label>
                              <div class="input-group"><span class="input-group-text">$  </span>
                                <input class="form-control" type="number" name="sundayrate" required="" aria-label="Amount (to the nearest dollar)" data-bs-original-title="" title=""><!-- <span class="input-group-text">.00  </span> -->
                              </div>
                            </div>
                            <div class="col-md-3">
                              <label class="col-form-label pt-0">Fuel Rate(*)</label>
                              <div class="input-group"><span class="input-group-text">$  </span>
                                <input class="form-control" type="number" name="fuelrate" required="" aria-label="Amount (to the nearest dollar)" data-bs-original-title="" title=""><!-- <span class="input-group-text">.00  </span> -->
                              </div>
                            </div>
                            <div class="col-md-12"><hr></div>
                            <label class="col-form-label pt-0">Bank Details</label>
                            <div class="col-md-6">
                              <label class="col-form-label pt-0">Bank Name(*)</label>
                              <input class="form-control" type="text" name="bankname" data-bs-original-title="" title="">
                            </div>
                            <div class="col-md-6">
                              <label class="col-form-label pt-0">Account Number(*)</label>
                              <input class="form-control" type="text" name="account_number" data-bs-original-title="" title="">
                            </div>
                            <div class="col-md-6">
                              <label class="col-form-label pt-0">Account Type(*)</label>
                              <input class="form-control" type="text" name="account_type" data-bs-original-title="" title="">
                            </div>
                            <div class="col-md-6">
                              <label class="col-form-label pt-0">Name in Bank(*)</label>
                              <input class="form-control" type="text" name="name_in_bank" data-bs-original-title="" title="">
                            </div>
                            <div class="col-md-6">
                              <label class="col-form-label pt-0">ifsc Code(*)</label>
                              <input class="form-control" type="text" name="ifsc_code" data-bs-original-title="" title="">
                            </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                      <button class="btn btn-primary" type="submit" data-bs-original-title="" title="" href="">Create User</button>
                        <button class="btn btn-danger" type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Cancel</button>
                      
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- User Modal Ends(add/create user form) -->
                  <div class="bookmark">
                    <ul>
                      <li>
                        <button class="btn btn-square btn-primary btn-s" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalLong" data-bs-original-title="" title="" fdprocessedid="6sjf0l"><i class="fa fa-plus-circle"></i> Create User</button>
                      </li>
                      
                    </ul>
                  </div>
                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
            <div class="card">
              @if ($errors->any())
                  @foreach ($errors->all() as $error)
                      <div class="alert alert-danger" role="alert">
                        <p>{{$error}}</p>
                      </div>
                  @endforeach
              @endif
              @if (session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
              @else
                <div class="alert alert-success">
                      {{ session('failure') }}
                  </div>
              @endif
              <div class="card-body">
                <div class="table-panel">
                <div class="" align="center" ><h4 class="font-primary" ><b>User's List <!--<i class="icofont icofont-users" class="font-primary" ></i>--></b></h4></div>
                  <div class="table-panel-body">
                    <div class="table-responsive">
                      <table class="display" id="usersTable" style="border-width: 2px !important;">
                        <thead>
                          <tr role="row" align="center">
                            <th class="sorting" tabindex="0" aria-controls="usersTable" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 80.9625px; border-width: 5px !important;">User Id</th>
                            <th class="sorting" tabindex="0" aria-controls="usersTable" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending" style="width: 142.012px; border-width: 5px !important;">User Profile Picture</th>
                            <th class="sorting" tabindex="0" aria-controls="usersTable" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending" style="width: 142.012px; border-width: 5px !important;">Username</th>
                            <th class="sorting_asc" tabindex="0" aria-controls="usersTable" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" style="width: 175.45px; border-width: 5px !important;" aria-sort="ascending">User FullName</th>
                            <th class="sorting" tabindex="0" aria-controls="usersTable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 286.45px; border-width: 5px !important;">User Email</th>
                            <th class="sorting" tabindex="0" aria-controls="usersTable" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 115.525px; border-width: 5px !important;">User Role</th>
                            <th class="sorting" tabindex="0" aria-controls="usersTable" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 162.4px; border-width: 5px !important;">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($usersdata as $allusers)
                          
                          <tr align="center">
                            <td style="border-width: 5px !important;">{{$allusers->id}}</td>
                            <td style="border-width: 5px !important;"><img src="{{ asset('assets/' . $allusers->picture) }}" alt="Profile Picture" height="50px"></td>
                            <td style="border-width: 5px !important;">{{$allusers->username}}</td>
                            <td style="border-width: 5px !important;">{{$allusers->firstname}} {{$allusers->lastname}}</td>
                            <td style="border-width: 5px !important;">{{$allusers->email}}</td>
                            <td style="border-width: 5px !important;">{{$allusers->rolename}}</td>
                            <td style="border-width: 5px !important;">
                              
                              <a href="updateUser/{{$allusers->id}}" class="btn btn-primary btn-xs"data-bs-original-title="" title=""><i class="fa fa-edit"></i></a>                                                           

                                <!----User Status Modal----->
                                @if($allusers->employee_status == 'active')
                                  <div class="modal fade" id="statusmodal{{$allusers->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title">User Status</h5>
                                          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
                                        </div>
                                        <form action="{{route('userStatus')}}" method="post">
                                          @csrf
                                          <div class="modal-body">
                                            <p>{{$allusers->username}} is in <span class="badge badge-primary">Active</span> status</p>
                                            <p>Do you really want to <span class="badge badge-danger">De-activate</span> {{$allusers->username}}</p>
                                          </div>
                                          <div class="modal-footer">
                                            <input type="hidden" name="userid" value="{{$allusers->id}}">
                                            <input type="hidden" name="userstatus" value="inactive">
                                            
                                            <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Yes</button>
                                            <button class="btn btn-danger" type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Close</button>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                  <!----User Status Modal----->
                                  <a href="{{route('userStatus')}}" class="btn btn-primary btn-xs" data-bs-toggle="modal" data-bs-target="#statusmodal{{$allusers->id}}" data-bs-original-title="" title="">
                                    <i class="fa fa-power-off"></i></a>
                                  @else
                                  <div class="modal fade" id="statusmodal{{$allusers->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title">User Status</h5>
                                          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
                                        </div>
                                        <form action="{{route('userStatus')}}" method="post">
                                          @csrf
                                          <div class="modal-body">
                                            <p>{{$allusers->username}} is in <span class="badge badge-danger">De-Active</span> status</p>
                                            <p>Do you really want to <span class="badge badge-primary">Activate</span> {{$allusers->username}}</p>
                                          </div>
                                          <div class="modal-footer">
                                            <input type="hidden" name="userid" value="{{$allusers->id}}">
                                            <input type="hidden" name="userstatus" value="active">
                                           
                                            <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Yes</button>
                                            <button class="btn btn-danger" type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Close</button>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                  <!----User Status Modal----->
                                  <a href="{{route('userStatus')}}" class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#statusmodal{{$allusers->id}}" data-bs-original-title="" title="">
                                    <i class="fa fa-power-off"></i></a>
                                  @endif
                               </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                </div>
                </div>
              </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
       </div> 
        <!-- footer start-->
        @include('layouts.footer')
      </div>
    </div>
@endsection

@section('bottomscripts')
<!-- latest jquery-->
<script src="{{asset('assets')}}/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="{{asset('assets')}}/js/icons/feather-icon/feather.min.js"></script>
    <script src="{{asset('assets')}}/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="{{asset('assets')}}/js/sidebar-menu.js"></script>
    <script src="{{asset('assets')}}/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="{{asset('assets')}}/js/bootstrap/popper.min.js"></script>
    <script src="{{asset('assets')}}/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <script src="{{asset('assets')}}/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{asset('assets')}}/js/script.js"></script>
    <script src="{{asset('assets')}}/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
    @endsection