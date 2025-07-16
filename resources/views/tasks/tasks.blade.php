@extends('layouts.app')

@section('headerscripts')
<title>TRACKONIZE</title>
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
                  <h3>Tasks <i class="fa fa-tasks"></h3></i>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item">Tasks</li>
                  </ol>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <!-- User Modal Starts(add/create user form) -->

                  <div class="modal fade" id="exampleModalLong" tabindex="-1" aria-labelledby="exampleModalLongTitle" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Add Task</h5>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
                    </div>
                    <form action="{{route('addTask')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                            <div class="modal-body">
                                          <div class="row">
                                            <div class="col-md-6">
                                              <label for="sub-task">Project</label>
                                              <select class="form-control" name="project">
                                                <option value="">Select Project</option>
                                                @foreach($getproject as $projects)
                                                <option value="{{$projects->projectID}}">{{$projects->project_name}}</option>
                                                @endforeach
                                              </select>
                                            </div>
                                            <div class="col-md-6">
                                              <label for="task-title">Task Name</label>
                                              <input class="form-control" name="task_name" type="text" required="" autocomplete="off">
                                            </div>
                                            <div class="col-md-12">
                                              <label>Task Description</label>
                                              <textarea class="form-control" name="task_details" type="text" placeholder="Task description"></textarea>
                                            </div>
                                            <div class="col-md-6">
                                              <label for="task-title">Start Date</label>
                                              <input class="form-control" name="task_start_date" type="date" autocomplete="off">
                                            </div>
                                            <div class="col-md-6">
                                              <label for="task-title">End Date</label>
                                              <input class="form-control" name="task_end_date" type="date" autocomplete="off">
                                            </div>
                                            <div class="col-md-6">
                                              <label for="sub-task">Assigned Employee</label>
                                              <select class="form-control" name="task_assign_user_id">
                                                <option value="">Select Employee</option>
                                                @foreach($getuser as $users)
                                                <option value="{{$users->id}}">{{$users->firstname}} {{$users->lastname}}</option>
                                                @endforeach
                                              </select>
                                            </div>
                                            
                                            <div class="col-md-6">
                                              <label for="sub-task">Task Status</label>
                                              <select class="form-select" name="task_status">
                                                <option>active</option>
                                                <option>inactive</option>
                                                
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                          <div class="modal-footer">
                                          <button class="btn btn-primary" type="submit">Create Task</button>
                                          <button class="btn btn-danger" type="button" data-bs-dismiss="modal"><a href=""></a>Cancel</button>
                                         
                                          </div>
                                        </form>
                  </div>
                </div>
              </div>
              <!-- User Modal Ends(add/create user form) -->
              @if(Auth::user()->usertype == 'Admin' || Auth::user()->usertype == 'Employee')
                  <div class="bookmark">
                    <ul>
                      <li>
                        <button class="btn btn-square btn-primary btn-s" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalLong" data-bs-original-title="" title="" fdprocessedid="6sjf0l"><i class="fa fa-plus-circle"></i> Add New Task</button>
                      </li>
                    </ul>
                  </div>
              @endif
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
                  <div class="" align="center"><h4 class="font-primary" ><b>Task's List <!--<i class="fa fa-tasks" class="font-primary" ></i>--></b></h4></div>
                  <div class="table-panel-body">
                    <div class="table-responsive">
                      <table class="display" id="usersTable" style="border-width: 2px !important;">
                        <thead>
                          <tr role="row" align="center">
                            <th class="sorting" tabindex="0" aria-controls="usersTable" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending" style="width:  286.45px; border-width: 5px !important;">Project Name</th>
                            <th class="sorting_asc" tabindex="0" aria-controls="usersTable" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" style="width: 286.45px; border-width: 5px !important;" aria-sort="ascending">Task Name</th>
                            <th class="sorting" tabindex="0" aria-controls="usersTable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 298.45px; border-width: 5px !important;">Task Description</th>
                            <th class="sorting" tabindex="0" aria-controls="usersTable" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 286.45px; border-width: 5px !important;">Task Assigned To</th>
                            <th class="sorting" tabindex="0" aria-controls="usersTable" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 175.525px; border-width: 5px !important;">Start Date</th>
                            <th class="sorting" tabindex="0" aria-controls="usersTable" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 175.525px; border-width: 5px !important;">End Date</th>
                            <th class="sorting" tabindex="0" aria-controls="usersTable" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 175.525px; border-width: 5px !important;">Tracking</th>
                            @if(Auth::user()->usertype == 'Admin' || Auth::user()->usertype == 'Employee')
                            <th class="sorting" tabindex="0" aria-controls="usersTable" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 162.4px; border-width: 5px !important;">Action</th>
                            @endif
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($FetchData as $alltask)
                          <tr align="center">
                            <td style="border-width: 5px !important;" value="{{$alltask->projectID}}">{{$alltask->task_related_project->project_name}}</td>
                            <td style="border-width: 5px !important;">{{$alltask->task_name}}</td>
                            <td style="border-width: 5px !important;">{{$alltask->task_details}}</td>
                            <td style="border-width: 5px !important;" value="{{$alltask->id}}">{{$alltask->task_related_user->firstname}} {{$alltask->task_related_user->lastname}}</td>
                            <td style="border-width: 5px !important;">{{$alltask->task_start_date}}</td>
                            <td style="border-width: 5px !important;">{{$alltask->task_end_date}}</td>
                            <td style="border-width: 5px !important;">
                            <div class="progress-showcase">
                                <div class="progress" style="height: 8px;">
                                  <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </td>
                            @if(Auth::user()->usertype == 'Admin' || Auth::user()->usertype == 'Employee')
                            <td style="border-width: 5px !important;">
                            
                             
                            
                            @if($alltask->task_status == 'active')
  <div class="modal fade" id="statusmodal{{$alltask->taskID}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Task Status</h5>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
        </div>
        <form action="{{route('taskStatus')}}" method="post">
          @csrf
          <div class="modal-body">
            <p>{{$alltask->task_name}} is in <span class="badge badge-primary">Active</span> status</p>
            <p>Do you really want to <span class="badge badge-danger">De-activate</span> {{$alltask->task_name}}</p>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="taskid" value="{{$alltask->taskID}}">
            <input type="hidden" name="taskstatus" value="inactive">
          
            <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Yes</button>
            <button class="btn btn-danger" type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Close</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!----User Status Modal----->
  <a href="{{route('taskStatus')}}" class="btn btn-primary btn-xs" data-bs-toggle="modal" data-bs-target="#statusmodal{{$alltask->taskID}}" data-bs-original-title="" title="">
    <i class="fa fa-power-off"></i></a>
  @else
  <div class="modal fade" id="statusmodal{{$alltask->taskID}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Task Status</h5>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
        </div>
        <form action="{{route('taskStatus')}}" method="post">
          @csrf
          <div class="modal-body">
            <p>{{$alltask->task_name}} is in <span class="badge badge-danger">De-Active</span> status</p>
            <p>Do you really want to <span class="badge badge-primary">Activate</span> {{$alltask->task_name}}</p>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="taskid" value="{{$alltask->taskID}}">
            <input type="hidden" name="taskstatus" value="active">
           
            <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Yes</button>
            <button class="btn btn-danger " type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Close</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!----User Status Modal----->
  <a href="{{route('taskStatus')}}" class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#statusmodal{{$alltask->taskID}}" data-bs-original-title="" title="">
    <i class="fa fa-power-off"></i></a>
  @endif
</td>
@endif

                              
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
    <div class="customizer-links"> <div class="nav flex-column nac-pills" id="c-pills-tab" role="tablist" aria-orientation="vertical"> <a class="nav-link active" id="c-pills-home-tab" data-bs-toggle="pill" href="#layout-type" data-bs-original-title="" title=""> <div class="settings"><i class="icofont icofont-laptop-alt"></i></div><span>Check Layout</span> </a> <a class="nav-link" id="c-pills-home-tab" data-bs-toggle="pill" href="#c-pills-home" data-bs-original-title="" title=""> <div class="settings"><i class="icofont icofont-ui-settings"></i></div><span>Sidebar Type</span> </a> <a class="nav-link" id="c-pills-home-tab1" data-bs-toggle="pill" href="#c-pills-profile" data-bs-original-title="" title=""> <div class="settings color-settings"><i class="icofont icofont-color-bucket"></i></div><span>Color Picker</span> </a> </div><div class="customizer-contain"> <div class="tab-content" id="c-pills-tabContent"> <div class="customizer-header"> <i class="icofont-close icon-close"></i> <h5>Live customizer</h5> <p class="mb-0">Customize &amp; Preview Real Time</p></div><div class="customizer-body custom-scrollbar"> <div class="tab-pane fade active show" id="layout-type"> <ul class="sidebar-type layout-grid layout-types"> <li data-attr="defaul-layout"> <div class="layout-img"> <a href="javascript:void(0)" data-bs-original-title="" title=""><img class="img-fluid" src="../assets/images/landing/demo/1.jpg" alt=""></a> <h6>Defaul layout</h6> </div></li><li data-attr="compact-layout"> <div class="layout-img"> <a href="javascript:void(0)" data-bs-original-title="" title=""><img class="img-fluid" src="../assets/images/landing/demo/2.jpg" alt=""></a> <h6>Compact layout</h6> </div></li><li data-attr="modern-layout"> <div class="layout-img"> <a href="javascript:void(0)" data-bs-original-title="" title=""><img class="img-fluid" src="../assets/images/landing/demo/3.jpg" alt=""></a> <h6>Modern layout</h6> </div></li></ul> </div><div class="tab-pane fade" id="c-pills-home"> <h6>Layout Type</h6> <ul class="main-layout layout-grid"> <li class="active" data-attr="ltr"> <div class="header bg-light"> <ul> <li></li><li></li><li></li></ul> </div><div class="body"> <ul> <li class="bg-light sidebar"></li><li class="bg-light body"><span class="badge badge-primary">LTR</span></li></ul> </div></li><li data-attr="rtl"> <div class="header bg-light"> <ul> <li></li><li></li><li></li></ul> </div><div class="body"> <ul> <li class="bg-light body"><span class="badge badge-primary">RTL</span></li><li class="bg-light sidebar"></li></ul> </div></li><li class="box-layout px-3" data-attr="ltr"> <div class="header bg-light"> <ul> <li></li><li></li><li></li></ul> </div><div class="body"> <ul> <li class="bg-light sidebar"></li><li class="bg-light body"><span class="badge badge-primary">Box</span></li></ul> </div></li></ul> <h6>Sidebar Typedd</h6> <ul class="sidebar-type layout-grid"> <li data-attr="normal-sidebar"> <div class="header bg-light"> <ul> <li></li><li></li><li></li></ul> </div><div class="body"> <ul> <li class="bg-dark sidebar"></li><li class="bg-light body"></li></ul> </div></li><li data-attr="compact-sidebar"> <div class="header bg-light"> <ul> <li></li><li></li><li></li></ul> </div><div class="body"> <ul> <li class="bg-dark sidebar compact"></li><li class="bg-light body"></li></ul> </div></li></ul> </div><div class="tab-pane fade" id="c-pills-profile"> <h6>Light layout</h6> <ul class="layout-grid customizer-color"> <li class="color-layout" data-attr="color-1" data-primary="#24695c" data-secondary="#ba895d"> <div></div></li><li class="color-layout" data-attr="color-2" data-primary="#d97f3d" data-secondary="#f25f4c"> <div></div></li><li class="color-layout" data-attr="color-3" data-primary="#168eea" data-secondary="#90b4cd"> <div></div></li><li class="color-layout" data-attr="color-4" data-primary="#665ed5" data-secondary="#d1d1e9"> <div></div></li><li class="color-layout" data-attr="color-5" data-primary="#3a9aa8" data-secondary="#984ff3"> <div></div></li><li class="color-layout" data-attr="color-6" data-primary="#7951aa" data-secondary="#72757D"> <div></div></li></ul> <h6>Dark Layout</h6> <ul class="layout-grid customizer-color dark"> <li class="color-layout" data-attr="color-1" data-primary="#24695c" data-secondary="#ba895d"> <div></div></li><li class="color-layout" data-attr="color-2" data-primary="#d97f3d" data-secondary="#f25f4c"> <div></div></li><li class="color-layout" data-attr="color-3" data-primary="#168eea" data-secondary="#90b4cd"> <div></div></li><li class="color-layout" data-attr="color-4" data-primary="#665ed5" data-secondary="#d1d1e9"> <div></div></li><li class="color-layout" data-attr="color-5" data-primary="#3a9aa8" data-secondary="#984ff3"> <div></div></li><li class="color-layout" data-attr="color-6" data-primary="#7951aa" data-secondary="#72757D"> <div></div></li></ul> <h6>Mix Layout</h6> <ul class="layout-grid customizer-mix"> <li class="color-layout active" data-attr="light-only"> <div class="header bg-light"> <ul> <li></li><li></li><li></li></ul> </div><div class="body"> <ul> <li class="bg-light sidebar"></li><li class="bg-light body"></li></ul> </div></li><li class="color-layout" data-attr="dark-sidebar"> <div class="header bg-light"> <ul> <li></li><li></li><li></li></ul> </div><div class="body"> <ul> <li class="bg-dark sidebar"></li><li class="bg-light body"></li></ul> </div></li><li class="color-layout" data-attr="dark-only"> <div class="header bg-dark"> <ul> <li></li><li></li><li></li></ul> </div><div class="body"> <ul> <li class="bg-dark sidebar"></li><li class="bg-dark body"></li></ul> </div></li></ul> </div></div></div></div></div>
    <!-- login js-->
    <!-- Plugin used-->
    @endsection