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
<!-- <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div> -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      @include('layouts.header')
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
        @include('layouts.sidebar')
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Edit Profile</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">Edit Profile</li>
                  </ol>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark">
                    
                  </div>
                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
                <div class="col-xl-12">
                    <div class="card-header pb-0">
                      <h4 class="card-title mb-0">Edit Profile</h4>
                      <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                    </div>
                    <form method="POST" action="{{route('usereditDetails')}}" enctype="multipart/form-data">
                        @csrf
                          <input type="hidden" name="user_id" value="{{auth()->user()->id}}">  
                    <div class="card-body">
                      <div class="row">
                    
                      <div class="col-md-4" style="text-align: center;">
                      <img class="img-80 square-circlex" alt="" src="{{asset('assets')}}/{{auth()->user()->picture}}">
                                    <div style="width: 100px; height: 50px;"></div>
                                    <div style="width: 100%;">
                                    
                                        <input class="form-control" type="file" name="profilepicture">
                                    </div>
                                </div>
                        
                        
                        <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="col-form-label">Username</label>
                                        <input class="form-control" type="text" name="username" placeholder="Username" value="{{auth()->user()->username}}" readonly="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="col-form-label">First Name (*)</label>
                                        <input class="form-control" type="text" name="firstname" placeholder="First Name" value="{{auth()->user()->firstname}}" required="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="col-form-label">Last Name (*)</label>
                                        <input class="form-control" type="text" name="lastname" value="{{auth()->user()->lastname}}" placeholder="Last  Name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="col-form-label">Contact (*)</label>
                                        <input class="form-control" type="text" name="phonenumber" value="{{auth()->user()->phonenumber}}" placeholder="Contact Number">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="col-form-label">Gender</label>
                                        <select class="form-control" name="gender">
                                          <option value="Select">Select</option>
                                          <option value="Male" @if(auth()->user()->gender == 'Male') SELECTED=='SELECTED' @endif>Male</option>
                                          <option value="Female" @if(auth()->user()->gender == 'Female') SELECTED=='SELECTED' @endif>Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="col-form-label">Email Address (*)</label>
                                        <input class="form-control" type="email" name="email" value="{{auth()->user()->email}}" placeholder="Email Address" required="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="col-form-label">Birthday (*)</label>
                                        <input class="form-control" type="date" name="birthdate" value="{{auth()->user()->birthdate}}" placeholder="Birthday" required="">
                                    </div>
                                </div>
                                
                                
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="col-form-label">Alternate Contact Person</label>
                                        <input class="form-control" type="text" name="additional_contact_person" value="{{auth()->user()->additional_contact_person}}" placeholder="Alternate Contact Person">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="col-form-label">Alternate Contact Person Number</label>
                                        <input class="form-control" type="phonenumber" name="additional_contact_person_number" value="{{auth()->user()->additional_contact_person_number}}" placeholder="Alternate Contact Person Number">
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                  
                                    <div class="mb-3">
                                        <label class="col-form-label">User Type (*)</label>
                                        <select class="form-control" name="usertype" value="{{auth()->user()->usertype}}" required="" readonly="">
                                          <option value="">Select</option>
                                          <option value="1" @if(auth()->user()->usertype == '1') SELECTED=='SELECTED' @endif>Admin</option>
                                          <option value="2" @if(auth()->user()->usertype == '2') SELECTED=='SELECTED' @endif>Staff</option>
                                          <option value="3" @if(auth()->user()->usertype == '3') SELECTED=='SELECTED' @endif>Team</option>
                                          <option value="4" @if(auth()->user()->usertype == '4') SELECTED=='SELECTED' @endif>Manager</option>
                                          <option value="5" @if(auth()->user()->usertype == '5') SELECTED=='SELECTED' @endif>Franchise Admin</option>
                                          <option value="6" @if(auth()->user()->usertype == '6') SELECTED=='SELECTED' @endif>Sales</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="col-form-label">Role Name (*)</label>
                                        <input class="form-control" type="text" name="role_name" value="{{auth()->user()->rolename}}" placeholder="Role Name" required="" readonly="">
                                    </div>
                                </div>
                              
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="col-form-label">Country (*)</label>
                                        <input class="form-control" type="text" name="country" value="{{auth()->user()->country}}" placeholder="Country" required="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="col-form-label">City (*)</label>
                                        <input class="form-control" type="text" name="city" value="{{auth()->user()->city}}" placeholder="City" required="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="col-form-label">Postal Code (*)</label>
                                        <input class="form-control" type="text" name="postal_code" value="{{auth()->user()->postal_code}}" placeholder="Postal Code" required="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="col-form-label">Address</label>
                                        <input class="form-control" type="textarea" name="address" value="{{auth()->user()->address}}" placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="col-form-label">Employment</label>
                                        <select class="form-control" name="employeetype">
                                          <option value="">Select</option>
                                          <option value="Casual" @if(auth()->user()->employeetype == 'Casual') SELECTED=='SELECTED' @endif>Casual</option>
                                          <option value="Part Time" @if(auth()->user()->employeetype == 'Part Time') SELECTED=='SELECTED' @endif>Part Time</option>
                                          <option value="Full Time" @if(auth()->user()->employeetype == 'Full Time') SELECTED=='SELECTED' @endif>Full Time</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="col-form-label">Employee Status</label>
                                        <select class="form-control" name="employee_status">
                                          <option value="">Select</option>
                                          <option value="Active" @if(auth()->user()->employee_status == 'Active') SELECTED=='SELECTED' @endif>Active</option>
                                          <option value="Inactive" @if(auth()->user()->employee_status == 'Inactive') SELECTED=='SELECTED' @endif>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12"><hr></div>
                                  <div class="col-md-12">
                                    <label class="col-form-label pt-0">Pay Method</label>
                                    <select name="employeepayout" class="form-control" required="" onchange="CheckColors(this.value);">
                                        <option value="">SELECT</option>
                                        <option value="TFN" @if(auth()->user()->employeepayout == 'TFN') SELECTED=='SELECTED' @endif>TFN</option>
                                        <option value="ABN" @if(auth()->user()->employeepayout == 'ABN') SELECTED=='SELECTED' @endif>ABN</option>
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
                                        <input class="form-control" type="text" name="bankname" value="{{auth()->user()->bankname}}" placeholder="Bank Name" required="">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="col-form-label">Account Number (*)</label>
                                        <input class="form-control" type="text" name="account_number" value="{{auth()->user()->account_number}}" placeholder="Account Number" required="">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="col-form-label">Account Type (*)</label>
                                        <input class="form-control" type="text" name="account_type" value="{{auth()->user()->account_type}}" placeholder="Account Type" required="">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="col-form-label">Name in Bank (*)</label>
                                        <input class="form-control" type="text" name="name_in_bank" value="{{auth()->user()->name_in_bank}}" placeholder="Name in Bank" required="">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="col-form-label">ifsc Code (*)</label>
                                        <input class="form-control" type="text" name="ifsc_code" value="{{auth()->user()->ifsc_code}}" placeholder="ifsc Code" required="">
                                    </div>
                                  </div>
                            </div>
                          </div>
                          <div class="card-footer" style="text-align: right;">
                                <button class="btn btn-primary" type="submit">Update Profile</button>
                                <a href="{{route('users')}}" class="btn btn-danger">Cancel</a>
                          </div>
                  </form>
                </div>
</div>
          
          <!-- Container-fluid Ends-->
        </div>
       
        @include('layouts.footer')
      </div>
    </div>
@endsection