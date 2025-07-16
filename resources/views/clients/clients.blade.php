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
                  <h3>Clients <i class="icofont icofont-id-card"></h3></i>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item">Clients</li>
                  </ol>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <!-- User Modal Starts(add/create user form) -->
              <div class="modal fade" id="exampleModalLong" tabindex="-1" aria-labelledby="exampleModalLongTitle" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Create Client </h5>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
                    </div>
                    <form action="{{route('createClient')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="modal-body">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="col-form-label pt-0" for="exampleInputEmail1">Company Name(*)</label>
                                <input class="form-control" type="text" name="company_name" placeholder="Company Name" required="" data-bs-original-title="" title="">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="col-form-label pt-0" for="exampleInputEmail1">Company Contact(*)</label>
                                <input class="form-control" type="text" name="company_contact" placeholder="Company Contact" required="" data-bs-original-title="" title="">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="col-form-label pt-0" for="exampleInputEmail1">Profile Picture</label>
                                <input class="form-control" type="file" name="profilepicture" aria-label="file example" data-bs-original-title="" title="">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="col-form-label pt-0" for="exampleInputEmail1">Company Email(*)</label>
                                <input class="form-control" type="email" name="company_email" placeholder="Company Email Address" required="" data-bs-original-title="" title="">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="col-form-label pt-0" for="exampleInputEmail1">Contact Person Name(*)</label>
                                <input class="form-control" type="text" name="contact_person_name" placeholder="Contact Person Name" required="" data-bs-original-title="" title="">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="col-form-label pt-0" for="exampleInputEmail1">Contact Person Number(*)</label>
                                <input class="form-control" type="text" name="contact_person_number" placeholder="Contact Person Number" required="" data-bs-original-title="" title="">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="col-form-label pt-0" for="exampleInputEmail1">Contact Person Email(*)</label>
                                <input class="form-control" type="email" name="contact_person_email" placeholder="Contact Number Email Address" data-bs-original-title="" title="">
                              </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                              <label class="col-form-label pt-0">Client Status(*)</label>
                              <select name="employment" class="form-control" required="">
                                  <option value="">SELECT</option>
                                  <option value="Active">Active</option>
                                  <option value="Inactive">Inactive</option>
                              </select>
                            </div>
                            </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                      <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Create Client</button>
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
                        <button class="btn btn-square btn-primary btn-s" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalLong" data-bs-original-title="" title="" fdprocessedid="6sjf0l"><i class="fa fa-plus-circle"></i> Create Client</button>
                      </li>
                        </form>
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
                  <div class="" align="center"><h4 class="font-primary" ><b>Clients's  List  <!--<i class="icofont icofont-id-card" class="font-primary" ></i>--></b></h4></div>
                  <div class="table-panel-body">
                    <div class="table-responsive">
                      <table class="display" id="usersTable" style="border-width: 2px !important;">
                        <thead>
                          <tr role="row" align="center">
                            <th class="sorting" tabindex="0" aria-controls="usersTable" rowspan="3" colspan="1" aria-label=": activate to sort column ascending" style="width: 142.012px; border-width: 5px !important;">Client Id</th>
                            <th class="sorting" tabindex="0" aria-controls="usersTable" rowspan="2" colspan="1" aria-label="Username: activate to sort column ascending" style="width: 286.45px; border-width: 5px !important;">Company Name</th>
                            <th class="sorting_asc" tabindex="0" aria-controls="usersTable" rowspan="2" colspan="1" aria-label="Name: activate to sort column descending" style="width:286.45px; border-width: 5px !important;" aria-sort="ascending">Company Email</th>
                            <th class="sorting" tabindex="0" aria-controls="usersTable" rowspan="2" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 286.45px; border-width: 5px !important;">Company contact person name</th>
                            <th class="sorting" tabindex="0" aria-controls="usersTable" rowspan="2" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 286.45px; border-width: 5px !important;">Contact person Email</th>
                            <th class="sorting" tabindex="0" aria-controls="usersTable" rowspan="2" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 162.4px; border-width: 5px !important;">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($clientsdata as $allclients)
                          
                          <tr align="center" >
                            <td style="border-width: 5px !important;" >{{$allclients->clientID}}</td>
                            <td style="border-width: 5px !important;">{{$allclients->company_name}}</td>
                            <td style="border-width: 5px !important;">{{$allclients->company_email}}</td>
                            <td style="border-width: 5px !important;">{{$allclients->contact_person_name}}</td>
                            <td style="border-width: 5px !important;">{{$allclients->contact_person_email}}</td>
                            <td style="border-width: 5px !important;">
                              
                             
                              <a href="updateClient/{{$allclients->clientID}}" class="btn btn-primary btn-xs"data-bs-original-title="" title=""><i class="fa fa-edit"></i></a>
                            
                               
                                                                                                 

                                <!----Client Status Modal----->
                                @if($allclients->client_status == 'active')
                                  <div class="modal fade" id="statusmodal{{$allclients->clientID}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title">client Status</h5>
                                          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
                                        </div>
                                        <form action="{{route('clientStatus')}}" method="post">
                                          @csrf
                                          <div class="modal-body">
                                            <p>{{$allclients->company_name}} is in <span class="badge badge-primary">Active</span> status</p>
                                            <p>Do you really want to <span class="badge badge-danger">De-activate</span> {{$allclients->company_name}}</p>
                                          </div>
                                          <div class="modal-footer">
                                            <input type="hidden" name="clientid" value="{{$allclients->clientID}}">
                                            <input type="hidden" name="clientstatus" value="inactive">
                                           
                                            <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Yes</button>
                                            <button class="btn btn-danger" type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Close</button>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                  <!----Client Status Modal----->
                                  <a href="{{route('clientStatus')}}" class="btn btn-primary btn-xs" data-bs-toggle="modal" data-bs-target="#statusmodal{{$allclients->clientID}}" data-bs-original-title="" title="">
                                    <i class="fa fa-power-off"></i></a>
                                  @else
                                  <div class="modal fade" id="statusmodal{{$allclients->clientID}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title">Client Status</h5>
                                          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
                                        </div>
                                        <form action="{{route('clientStatus')}}" method="post">
                                          @csrf
                                          <div class="modal-body">
                                            <p>{{$allclients->company_name}} is in <span class="badge badge-danger">De-Active</span> status</p>
                                            <p>Do you really want to <span class="badge badge-primary">Activate</span> {{$allclients->company_name}}</p>
                                          </div>
                                          <div class="modal-footer">
                                            <input type="hidden" name="clientid" value="{{$allclients->clientID}}">
                                            <input type="hidden" name="clientstatus" value="active">
                                          
                                            <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Yes</button>
                                            <button class="btn btn-danger" type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Close</button>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                  <!----Client Status Modal----->
                                  <a href="{{route('clientStatus')}}" class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#statusmodal{{$allclients->clientID}}" data-bs-original-title="" title="">
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
          <!-- Container-fluid Ends-->
      
        <!-- footer start-->
        @include('layouts.footer')
      </div>
    </div>
@endsection

@section('bottomscripts')
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