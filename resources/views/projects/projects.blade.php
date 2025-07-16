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
                  <h3>Projects <i class="icofont icofont-law-document"></h3></i>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item">Project List</li>
                  </ol>
                  </div>
                  <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <!-- User Modal Starts(add/create user form) -->

                  <div class="modal fade" id="exampleModalLong" tabindex="-1" aria-labelledby="exampleModalLongTitle" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Create Project</h5>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
                    </div>
                    <form action="{{route('addProject')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="modal-body">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                              <label>Client</label>
                              <select class="form-control" name="client">
                                <option value="">Select Client</option>
                                @foreach($getclients as $allclients)
                                <option value="{{$allclients->clientID}}">{{$allclients->company_name}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="mb-3">
                              <label>Project Title</label>
                              <input class="form-control" name="project_name" type="text" placeholder="Project name *">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="mb-3">
                              <label>Project Type</label>
                              <select class="form-select" name="project_type">
                                <option>Hourly</option>
                                <option>Fix price</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="mb-3">
                              <label>Project Status</label>
                              <select class="form-select" name="project_status">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="mb-3">
                              <label>Project Duration</label>
                              <input class="datepicker-here form-control" name="project_duration" type="text" data-language="en">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="mb-3">
                              <label>Project Description</label>
                              <textarea class="form-control" name="project_description" type="textarea" placeholder="Project description"></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="text-end">
                              <button type="submit" class="btn btn-success">Create Project</button>
                              <a href="{{route('projects')}}" class="btn btn-danger">Cancel</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="bookmark">
                    <ul>
                      <li>
                        <button class="btn btn-square btn-primary btn-s" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalLong" data-bs-original-title="" title="" fdprocessedid="6sjf0l"><i class="fa fa-plus-circle"></i> Create Project</button>
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
                  <div class="" align="center"><h4 class="font-primary" ><b>Project's List <!--<i class="icofont icofont-law-document" class="font-primary" ></i>--></b></h4></div>
                 
                  <div class="table-panel-body">
                    <div class="table-responsive">
                    <table class="display" id="projectTable" align="center" style="border-width: 2px !important;">
                    <thead>
                          <tr role="row" align="center">
                            <th class="sorting" tabindex="0" aria-controls="usersTable" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending" style="width: 282.012px; border-width: 5px !important;">Client Name</th>
                            <th class="sorting_asc" tabindex="0" aria-controls="usersTable" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" style="width: 200.45px; border-width: 5px !important;" aria-sort="ascending">Project Name</th>
                            <th class="sorting" tabindex="0" aria-controls="usersTable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 300.45px; border-width: 5px !important;">Description</th>
                            <th class="sorting" tabindex="0" aria-controls="usersTable" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 142.012px; border-width: 5px !important;">Project Type</th>
                            <th class="sorting" tabindex="0" aria-controls="usersTable" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 115.525px; border-width: 5px !important;">Duration</th>
                            <th class="sorting" tabindex="0" aria-controls="usersTable" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 115.525px; border-width: 5px !important;">Action</th>
                          </tr>
                        </thead>  
                    <tbody>
                      
                         @foreach($FetchData as $allproject)
                          <tr align="center">
                            <td style="border-width: 5px !important;" value="{{$allproject->clientID}}">{{$allproject->project_related_client->company_name}}</td>
                            <td style="border-width: 5px !important;">{{$allproject->project_name}}</td>
                            <td style="border-width: 5px !important;">{{$allproject->project_description}}</td>
                            <td style="border-width: 5px !important;">{{$allproject->project_type}}</td>
                            <td style="border-width: 5px !important;">{{$allproject->project_duration}}</td>
                            
                            <td style="border-width: 5px !important;">
                            @if($allproject->project_status == 'active')
  <div class="modal fade" id="statusmodal{{$allproject->projectID}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">project Status</h5>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
        </div>
        <form action="{{route('projectStatus')}}" method="post">
          @csrf
          <div class="modal-body">
            <p>{{$allproject->project_name}} is in <span class="badge badge-primary">Active</span> status</p>
            <p>Do you really want to <span class="badge badge-danger">De-activate</span> {{$allproject->project_name}} </p>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="projectid" value="{{$allproject->projectID}}">
            <input type="hidden" name="projectstatus" value="inactive">
            
            <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Yes</button>
            <button class="btn btn-danger" type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Close</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!----User Status Modal----->
  <a href="{{route('projectStatus')}}" class="btn btn-primary btn-xs" data-bs-toggle="modal" data-bs-target="#statusmodal{{$allproject->projectID}}" data-bs-original-title="" title="">
    <i class="fa fa-power-off"></i></a>
  @else
  <div class="modal fade" id="statusmodal{{$allproject->projectID}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">project Status</h5>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
        </div>
        <form action="{{route('projectStatus')}}" method="post">
          @csrf
          <div class="modal-body">
            <p>{{$allproject->project_name}} is in <span class="badge badge-danger">De-Active</span> status</p>
            <p>Do you really want to <span class="badge badge-primary">Activate</span> {{$allproject->project_name}} </p>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="projectid" value="{{$allproject->projectID}}">
            <input type="hidden" name="projectstatus" value="active">
           
            <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Yes</button>
            <button class="btn btn-secondary" type="danger" data-bs-dismiss="modal" data-bs-original-title="" title="">Close</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!----User Status Modal----->
  <a href="{{route('projectStatus')}}" class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#statusmodal{{$allproject->projectID}}" data-bs-original-title="" title="">
    <i class="fa fa-power-off"></i></a>
  @endif
</td>

                              
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                  </div>
                    <!-- Project Details Ends-->
                  </div>
                </div>
              </div>
             </div>
             
          </div>  
        </div>
      </div>
      <!-- Container-fluid Ends-->
      </div>
    </div> 
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2021-22 © TRACKKONIZE All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">Hand crafted & made with <i class="fa fa-heart font-secondary"></i></p>
              </div>
            </div>
          </div>
        </footer>
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
@endsection-