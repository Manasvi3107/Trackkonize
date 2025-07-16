@extends('layouts.app')

@section('headerscripts')
<title>TRACKKONIZE</title>
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
              <h3>Profile</h3>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('login')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">User Profile</li>
              </ol>
            </div>
            <div class="col-sm-6">
              <!-- Bookmark Start-->
              <!-- <div class="bookmark">
                <ul>
                  <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                  <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                  <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                  <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                    <form class="form-inline search-form">
                      <div class="form-group form-control-search">
                        <input type="text" placeholder="Search..">
                      </div>
                    </form>
                  </li>
                </ul>
              </div> -->
              <!-- Bookmark Ends-->
            </div>
          </div>
        </div>
      </div>
      <!-- Container-fluid starts-->
      <div class="container-fluid">
        <div class="user-profile">
            <div class="row">
                <!-- user profile header start-->
                <div class="col-sm-18">
                    <div class="card profile-header bg-size" style="background-image: url(&quot;https://staging.poppos.net.au/assets/images/user-profile/bg-profile.jpg&quot;); background-size: cover; background-position: center center; display: block;">
                        <img class="img-fluid bg-img-cover" src="https://staging.poppos.net.au/assets/images/user-profile/bg-profile.jpg" alt="" style="display: none;">
                        <div class="profile-img-wrrap bg-size" style="background-image: url(&quot;https://staging.poppos.net.au/assets/images/user-profile/bg-profile.jpg&quot;); background-size: cover; background-position: center center; display: block;">
                            <img class="img-fluid bg-img-cover" src="https://staging.poppos.net.au/assets/images/user-profile/bg-profile.jpg" alt="" style="display: none;">
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <!----Password Reset Modal------->
                                <div class="modal fade" id="passwordreset" tabindex="-1" role="dialog" aria-labelledby="passwordreset" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title">Reset Password</h5>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <form action="{{route('updateUserDetails')}}" method="POST">
                                        @csrf                                            
                                        <input type="hidden" name="user_profile" value="">
                                          <div class="modal-body">
                                            <div class="form-group">
                                                <label>Old Password (*)</label>
                                                <input type="password" class="form-control" name="oldpassword" placeholder="Old Password" required="">
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>New Password (*)</label>
                                                        <input type="password" class="form-control" name="newpassword" placeholder="New Password" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Confirm New Password (*)</label>
                                                        <input type="password" class="form-control" name="confirmnewpassword" placeholder="Confirm New Password" required="">
                                                    </div>  
                                                </div>
                                            </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                                            <button class="btn btn-primary" type="submit">Save Password</button>
                                          </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                                <!----Password Reset Modal------->
                                <div class="userpro-box">
                                  <div class="img-wrraper">                              
                                    <div  class="sidebar-user text-center">
                                        <img class="img-100 square-circle" alt=""style="width:400px;height:120px;" src="{{asset('assets')}}/{{auth()->user()->picture}}">
                                    </div>
                                  </div>
                                  <br>
                                  <div class="user-designation">
                                    <div class="title">
                                        <a target="_blank" href=""> 
                                          
                                            <h4> {{auth()->user()->firstname}} {{auth()->user()->lastname}}</h4>
                                            <h6>{{auth()->user()->rolename}}</h6>
                                        </a>
                                    </div>
                                    <div class="social-media">
                                      <ul class="user-list-social">
                                      
                                      </ul>
                                    </div>
                                    <!-- <div class="follow">
                                      <ul class="follow-list">
                                        <li>
                                          <div class="follow-num counter">325</div><span>Follower</span>
                                        </li>
                                        <li>
                                          <div class="follow-num counter">450</div><span>Following</span>
                                        </li>
                                        <li>
                                          <div class="follow-num counter">500</div><span>Likes</span>
                                        </li>
                                      </ul>
                                    </div> -->
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-panel">
                                           
                                                <div class="table-panel-body">
                                                <form method="POST" action="{{route('updateUserDetails')}}" enctype="multipart/form-data">
                                                @csrf
                                                        <input type="hidden" name="userid" value="1">
                                                        <div class="row">
                                                        <div class="col-md-4" style="text-align: center;">
                                                 
                                                          <div class="form-group">
                                                              <label>Username</label>
                                                                  <input class="form-control" type="text" name="username"  value="{{auth()->user()->username}}" readonly="">
                                                           </div>
                                                          </div>
                                                        
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label>DOB</label>
                                                                    <input type="date" class="form-control" name="birthdate" value="{{auth()->user()->birthdate}}"readonly="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                               <div class="form-group">
                                                                  <label >Contact (*)</label>
                                                                <input class="form-control" type="text" name="phonenumber" value="{{auth()->user()->phonenumber}}" placeholder="Contact Number"readonly="">
                                                                     </div>
                                                                 </div>
                                                            <!--<div class="col-md-5">
                                                                <div class="form-group">
                                                                    <label>Alternate Person Contact (Emergency)</label>
                                                                    <input type="text" class="form-control" name="altcontact" value="{{auth()->user()->additional_contact_person_number}}" fdprocessedid="lc679">
                                                                </div>
                                                            </div>-->
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label>Gender</label>
                                                                    <input type="text" class="form-control" name="altcontact" value="{{auth()->user()->gender}}" fdprocessedid="lc679"readonly="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Email (*)</label>
                                                                    <input type="text" class="form-control" name="email" value="{{auth()->user()->email}}" required="" fdprocessedid="biiqp"readonly="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label>Employee type</label>
                                                                    <input type="text" class="form-control" name="altcontact" value="{{auth()->user()->employeetype}}" fdprocessedid="lc679"readonly="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Address</label>
                                                                    <input type="text" class="form-control" name="email" value="{{auth()->user()->address}}" required="" fdprocessedid="biiqp"readonly="">
                                                                    <!--<textarea class="form-control" name="address" >ahmedabad ,Gujrat</textarea>-->
                                                                </div>
                                                            </div>
                                                            
                                                            <!--<div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Profile Picture</label>
                                                                    <input type="file" class="form-control" name="picture" @error('image') is-invalid @enderror>
                                                                </div>
                                                                @error('image')
                                                                    <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>-->
                                                            
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
                <!-- user profile header end-->
            </div>
        </div>
      </div>
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