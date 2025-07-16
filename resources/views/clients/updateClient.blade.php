@extends('layouts.app')

@section('headerscripts')
<title>viho - Premium Admin Template</title>
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
                  <h3>Clients</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item">Update Clients</li>
                  </ol>
                </div>
              
            <div class="row">
              <div class="col-sm-12 col-xl-12">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card">
                      <form method="POST" action="{{route('updateClientDetails')}}" enctype="multipart/form-data">
                        @csrf
                          <input type="hidden" name="client_id" value="{{$updateClient->clientID}}">  
                          <div class="card-body">
                            <div class="row">
                                <div class="col-md-4" style="text-align: center;">
                                    <div style="width: 200px; height: 100px;"></div>
                                    <div style="width: 100%;">
                                        <input class="form-control" type="file" name="profilepicture" aria-label="file example">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label class="col-form-label">Company Name</label>
                                        <input class="form-control" type="text" name="company_name" placeholder="Company Name" value="{{$updateClient->company_name}}" readonly="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="col-form-label">Company Contact (*)</label>
                                        <input class="form-control" type="text" name="company_contact" placeholder="First Name" value="{{$updateClient->company_contact}}" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="col-form-label">Company Email (*)</label>
                                        <input class="form-control" type="text" name="company_email" value="{{$updateClient->company_email}}" placeholder="Last  Name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="col-form-label">Contact Person Name (*)</label>
                                        <input class="form-control" type="text" name="contact_person_name" placeholder="First Name" value="{{$updateClient->contact_person_name}}" required="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="col-form-label">Contact Person Number (*)</label>
                                        <input class="form-control" type="text" name="contact_person_number" value="{{$updateClient->contact_person_number}}" placeholder="Last  Name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="col-form-label">Contact Person Email (*)</label>
                                        <input class="form-control" type="text" name="contact_person_email" value="{{$updateClient->contact_person_email}}" placeholder="Contact Number">
                                    </div>
                                </div>
                            </div>
                          </div>
                          <div class="card-footer" style="text-align: right;">
                                <button class="btn btn-primary" type="submit">Update Profile</button>
                                <a href="{{route('clients')}}" class="btn btn-danger">Cancel</a>
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