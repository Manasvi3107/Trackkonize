@extends('layouts.app')

@section('headerscripts')
<title>Trackonize</title>
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
                  <h3>Users</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item">Update Users</li>
                  </ol>
                </div>
              
            <div class="row">
              <div class="col-sm-12 col-xl-12">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card">
                        <form method="POST" action="{{route('updateUserDetails')}}" enctype="multipart/form-data">
                        @csrf
                          <input type="hidden" name="user_id" value="{{$updateUser->id}}">  
                          <div class="card-body">
                            <div class="row">
                                <div class="col-md-4" style="text-align: center;">
                                <img class="img-80 square-circlex" alt="" src="{{asset('assets')}}
                                /uploads/users">
                                  <div style="width: 200px; height: 50px;"></div>
                                    <div style="width:100px;">
                                        <input type="file" name="profilepicture" value="{{$updateUser->profilepicture}}">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label class="col-form-label">Username</label>
                                        <input class="form-control" type="text" name="username" placeholder="Username" value="{{$updateUser->username}}" readonly="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="col-form-label">First Name (*)</label>
                                        <input class="form-control" type="text" name="firstname" placeholder="First Name" value="{{$updateUser->firstname}}" required="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="col-form-label">Last Name (*)</label>
                                        <input class="form-control" type="text" name="lastname" value="{{$updateUser->lastname}}" placeholder="Last  Name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="col-form-label">Contact (*)</label>
                                        <input class="form-control" type="text" name="phonenumber" value="{{$updateUser->phonenumber}}" placeholder="Contact Number">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="col-form-label">Gender</label>
                                        <select class="form-control" name="gender">
                                          <option value="Select">Select</option>
                                          <option value="Male" @if($updateUser->gender == 'Male') SELECTED=='SELECTED' @endif>Male</option>
                                          <option value="Female" @if($updateUser->gender == 'Female') SELECTED=='SELECTED' @endif>Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="col-form-label">Email Address (*)</label>
                                        <input class="form-control" type="email" name="email" value="{{$updateUser->email}}" placeholder="Email Address" required="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="col-form-label">Birthday (*)</label>
                                        <input class="form-control" type="date" name="birthdate" value="{{$updateUser->birthdate}}" placeholder="Birthday" required="">
                                    </div>
                                </div>
                                
                               
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="col-form-label">Alternate Contact Person</label>
                                        <input class="form-control" type="text" name="additional_contact_person" value="{{$updateUser->additional_contact_person}}" placeholder="Alternate Contact Person">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="col-form-label">Alternate Contact Person Number</label>
                                        <input class="form-control" type="phonenumber" name="additional_contact_person_number" value="{{$updateUser->additional_contact_person_number}}" placeholder="Alternate Contact Person Number">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="col-form-label">User Type (*)</label>
                                        <select class="form-control" name="usertype" value="{{$updateUser->usertype}}" required="">
                                          <option value="">Select</option>
                                          <option value="1" @if($updateUser->usertype == '1') SELECTED=='SELECTED' @endif>Admin</option>
                                          <option value="2" @if($updateUser->usertype == '2') SELECTED=='SELECTED' @endif>Staff</option>
                                          <option value="3" @if($updateUser->usertype == '3') SELECTED=='SELECTED' @endif>Team</option>
                                          <option value="4" @if($updateUser->usertype == '4') SELECTED=='SELECTED' @endif>Manager</option>
                                          <option value="5" @if($updateUser->usertype == '5') SELECTED=='SELECTED' @endif>Franchise Admin</option>
                                          <option value="6" @if($updateUser->usertype == '6') SELECTED=='SELECTED' @endif>Sales</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="col-form-label">Role Name (*)</label>
                                        <input class="form-control" type="text" name="role_name" value="{{$updateUser->rolename}}" placeholder="Role Name" required="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="col-form-label">Country (*)</label>
                                        <input class="form-control" type="text" name="country" value="{{$updateUser->country}}" placeholder="Country" required="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="col-form-label">City (*)</label>
                                        <input class="form-control" type="text" name="city" value="{{$updateUser->city}}" placeholder="City" required="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="col-form-label">Postal Code (*)</label>
                                        <input class="form-control" type="text" name="postal_code" value="{{$updateUser->postal_code}}" placeholder="Postal Code" required="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="col-form-label">Address</label>
                                        <input class="form-control" type="textarea" name="address" value="{{$updateUser->address}}" placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="col-form-label">Employment</label>
                                        <select class="form-control" name="employeetype">
                                          <option value="">Select</option>
                                          <option value="Casual" @if($updateUser->employeetype == 'Casual') SELECTED=='SELECTED' @endif>Casual</option>
                                          <option value="Part Time" @if($updateUser->employeetype == 'Part Time') SELECTED=='SELECTED' @endif>Part Time</option>
                                          <option value="Full Time" @if($updateUser->employeetype == 'Full Time') SELECTED=='SELECTED' @endif>Full Time</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="col-form-label">Employee Status</label>
                                        <select class="form-control" name="employee_status">
                                          <option value="">Select</option>
                                          <option value="Active" @if($updateUser->employee_status == 'Active') SELECTED=='SELECTED' @endif>Active</option>
                                          <option value="Inactive" @if($updateUser->employee_status == 'Inactive') SELECTED=='SELECTED' @endif>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12"><hr></div>
                                  <div class="col-md-12">
                                    <label class="col-form-label pt-0">Pay Method</label>
                                    <select name="employeepayout" class="form-control" required="" onchange="CheckColors(this.value);">
                                        <option value="">SELECT</option>
                                        <option value="TFN" @if($updateUser->employeepayout == 'TFN') SELECTED=='SELECTED' @endif>TFN</option>
                                        <option value="ABN" @if($updateUser->employeepayout == 'ABN') SELECTED=='SELECTED' @endif>ABN</option>
                                    </select>
                                  </div>
                                  <div class="col-md-3">
                                    <label class="col-form-label pt-0">Normal Rate</label>
                                    <div class="input-group"><span class="input-group-text">$  </span>
                                      <input class="form-control" type="number" name="normalrate" value=""  aria-label="Amount (to the nearest dollar)"><!-- <span class="input-group-text">.00  </span> -->
                                    </div>
                                  </div>
                                  <div class="col-md-3">
                                    <label class="col-form-label pt-0">Saturday Rate</label>
                                    <div class="input-group"><span class="input-group-text">$  </span>
                                      <input class="form-control" type="number" name="saturdayrate" value="" aria-label="Amount (to the nearest dollar)"><!-- <span class="input-group-text">.00  </span> -->
                                    </div>
                                  </div>
                                  <div class="col-md-3">
                                    <label class="col-form-label pt-0">Saunday Rate</label>
                                    <div class="input-group"><span class="input-group-text">$  </span>
                                      <input class="form-control" type="number" name="sundayrate" value="" aria-label="Amount (to the nearest dollar)"><!-- <span class="input-group-text">.00  </span> -->
                                    </div>
                                  </div>
                                  <div class="col-md-3">
                                    <label class="col-form-label pt-0">Fuel Rate</label>
                                    <div class="input-group"><span class="input-group-text">$  </span>
                                      <input class="form-control" type="number" name="fuelrate" value="" aria-label="Amount (to the nearest dollar)"><!-- <span class="input-group-text">.00  </span> -->
                                    </div>
                                  </div>
                                  <div class="col-md-12"><hr></div>
                                  <label class="col-form-label pt-0">Bank Details</label>
                                  <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="col-form-label">Bank Name (*)</label>
                                        <input class="form-control" type="text" name="bankname" value="{{$updateUser->bankname}}" placeholder="Bank Name" required="">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="col-form-label">Account Number (*)</label>
                                        <input class="form-control" type="text" name="account_number" value="{{$updateUser->account_number}}" placeholder="Account Number" required="">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="col-form-label">Account Type (*)</label>
                                        <input class="form-control" type="text" name="account_type" value="{{$updateUser->account_type}}" placeholder="Account Type" required="">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="col-form-label">Name in Bank (*)</label>
                                        <input class="form-control" type="text" name="name_in_bank" value="{{$updateUser->name_in_bank}}" placeholder="Name in Bank" required="">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="col-form-label">ifsc Code (*)</label>
                                        <input class="form-control" type="text" name="ifsc_code" value="{{$updateUser->ifsc_code}}" placeholder="ifsc Code" required="">
                                    </div>
                                  </div>
                            </div>
                          </div>
                          <div class="card-footer" style="text-align: right;">
                                <input type="submit" name="updateuser" class="btn btn-primary" value="Update Profile">
                                <a href="{{route('users')}}" class="btn btn-danger">Cancel</a>
                          </div>
                        </form>
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
    
  

          @endsection

          @section('bottomscripts')
 <!-- latest jquery-->
     <script src="{{asset('assets')}}/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="{{asset('assets')}}/icons/feather-icon/feather.min.js"></script>
    <script src="{{asset('assets')}}/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="{{asset('assets')}}/js/sidebar-menu.js"></script>
    <script src="{{asset('assets')}}/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="{{asset('assets')}}/js/bootstrap/popper.min.js"></script>
    <script src="{{asset('assets')}}/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <script src="{{asset('assets')}}/js/chart/chartjs/chart.min.js"></script>
    <script src="{{asset('assets')}}/js/chart/chartist/chartist.js"></script>
    <script src="{{asset('assets')}}/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="{{asset('assets')}}/js/chart/knob/knob.min.js"></script>
    <script src="{{asset('assets')}}/js/chart/apex-chart/apex-chart.js"></script>
    <script src="{{asset('assets')}}/js/chart/apex-chart/stock-prices.js"></script>
    <script src="{{asset('assets')}}/js/prism/prism.min.js"></script>
    <script src="{{asset('assets')}}/js/clipboard/clipboard.min.js"></script>
    <script src="{{asset('assets')}}/js/counter/jquery.waypoints.min.js"></script>
    <script src="{{asset('assets')}}/js/counter/jquery.counterup.min.js"></script>
    <script src="{{asset('assets')}}/js/counter/counter-custom.js"></script>
    <script src="{{asset('assets')}}/js/custom-card/custom-card.js"></script>
    <script src="{{asset('assets')}}/js/owlcarousel/owl.carousel.js"></script>
    <script src="{{asset('assets')}}/js/owlcarousel/owl-custom.js"></script>
    <script src="{{asset('assets')}}/js/dashboard/dashboard_2.js"></script>
    <!-- Plugins JS Ends-->
@endsection