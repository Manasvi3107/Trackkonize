@extends('layouts.app')
@section('content')
<div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      @include('layouts.header')
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
        @include('layouts.sidebar')
        <!-- Page Sidebar Ends-->
        <div class="page-body dashboard-2-main">
          <!-- Container-fluid starts-->
          <div class="container-fluid">
          <div class="col-sm-6">
                  <h3>Leave</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item">Leave</li>
                  </ol>
                </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('leave.store') }}" method="post">
                    @csrf
                        <div class="row formtype">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Employee Name</label>
                                    <input class="form-control" type="text" name="user_id" value="{{auth()->user()->username}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Leave Type</label>
                                    <select class="form-control" id="sel1" name="leave_type">
                                        <option>Select</option>
                                        <option value="Casual Leave">Casual Leave</option>
                                        <option value="Medical Leave">Medical Leave</option>
                                        <option value="Loss Of Pay">Loss Of Pay</option>
                                    </select>
                                </div>
                            </div>
                            @if(Auth::user()->usertype == 'Admin')
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Leave Status</label>
                                    <select class="form-control" id="sel2" name="leave_status">
                                        <option>Select</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Approved">Approved</option>
                                        <option value="Rejected">Rejected</option>
                                    </select>
                                </div>
                            </div>
                            @endif
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>From</label>
                                    <div class="cal-icon">
                                        <input type="date" name="from_date" class="form-control datetimepicker">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>To</label>
                                    <div class="cal-icon">
                                        <input type="date" name="to_date" class="form-control datetimepicker">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>No Of Days</label>
                                    <div class="cal-icon">
                                        <input type="text" name="no_of_days" class="form-control datetimepicker">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Reason</label>
                                    <div class="cal-icon">
                                        <input type="text" name="reason" class="form-control datetimepicker">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mt-4">
                            <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Submit</button>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div><br>
            
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="datatable table table-stripped">
                                    <thead>
                                        <tr>
                                            <th>Employee</th>
                                            <th>Leave Type</th>
                                            @if(Auth::user()->usertype == 'Admin')
                                            <th>Leave status</th>
                                            @endif
                                            <th>From</th>
                                            <th>To</th>
                                            <th>No Of Days</th>
                                            <th>Reason</th>
                                            <!--<th class="text-right">Actions</th>-->
                                        </tr>
                                    </thead>
                                    @foreach($leaveApplications as $leaveApplication)
                                    <tbody>
                                        <tr>
                                            <td>{{ $leaveApplication->user->username }}</td>
                                            <td>{{ $leaveApplication->leave_type }}</td>
                                            @if(Auth::user()->usertype == 'Admin')
                                            <td>{{ $leaveApplication->leave_status }}</td>
                                            @endif
                                            <td>{{ $leaveApplication->from_date }}</td>
                                            <td>{{ $leaveApplication->to_date }}</td>
                                            <td>{{ $leaveApplication->no_of_days }}</td>
                                            <td>{{ $leaveApplication->reason  }}</td>
                                            <td class="text-right">
                                                
                                                      <!--  <a class="dropdown-item" href="{{ url("/add-salary/{$leaveApplication->id}") }}"><i
                                                                class="fas fa-pencil-alt m-r-5"></i> <b> Salary</b></a>-->
                                                       
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="delete_asset" class="modal fade delete-modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <img src="assets/img/sent.png" alt="" width="50" height="46">
                        <h3 class="delete_class">Are you sure want to delete this Asset?</h3>
                        <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
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
      <!-- <script src="{{asset('assets')}}/js/script.js"></script>
 <script src="{{asset('assets')}}/js/theme-customizer/customizer.js"></script>-->
    <div class="customizer-links"> 
        <div class="nav flex-column nac-pills" id="c-pills-tab" role="tablist" aria-orientation="vertical"> 
            <a class="nav-link" id="c-pills-home-tab" data-bs-toggle="pill" href="#layout-type" data-bs-original-title="" title=""> 
                <div class="settings">
                    <i class="icofont icofont-laptop-alt"></i>
                </div><span>Check Layout</span> 
            </a> 
            <a class="nav-link active" id="c-pills-home-tab" data-bs-toggle="pill" href="#c-pills-home" data-bs-original-title="" title=""> 
                <div class="settings"><i class="icofont icofont-ui-settings"></i></div>
                <span>Sidebar Type</span> 
            </a> 
            <a class="nav-link" id="c-pills-home-tab1" data-bs-toggle="pill" href="#c-pills-profile" data-bs-original-title="" title=""> 
                <div class="settings color-settings"><i class="icofont icofont-color-bucket"></i></div>
                <span>Color Picker</span> 
            </a> 
        </div>
        <div class="customizer-contain"> 
            <div class="tab-content" id="c-pills-tabContent"> 
                <div class="customizer-header"> 
                    <i class="icofont-close icon-close"></i> 
                    <h5>Live customizer</h5> 
                    <p class="mb-0">Customize &amp; Preview Real Time</p>
                </div>
                <div class="customizer-body custom-scrollbar"> 
                    <div class="tab-pane fade" id="layout-type"> 
                        <ul class="sidebar-type layout-grid layout-types"> 
                            <li data-attr="defaul-layout"> 
                                <div class="layout-img"> 
                                    <a href="javascript:void(0)" data-bs-original-title="" title="">
                                        <img class="img-fluid" src="../assets/images/landing/demo/1.jpg" alt="">
                                    </a> 
                                    <h6>Defaul layout</h6> 
                                </div>
                            </li>
                            <li data-attr="compact-layout"> 
                                <div class="layout-img"> 
                                    <a href="javascript:void(0)" data-bs-original-title="" title="">
                                        <img class="img-fluid" src="../assets/images/landing/demo/2.jpg" alt="">
                                    </a> 
                                    <h6>Compact layout</h6> 
                                </div>
                            </li>
                            <li data-attr="modern-layout"> 
                                <div class="layout-img"> 
                                    <a href="javascript:void(0)" data-bs-original-title="" title="">
                                        <img class="img-fluid" src="../assets/images/landing/demo/3.jpg" alt="">
                                    </a> 
                                    <h6>Modern layout</h6> 
                                </div>
                            </li>
                        </ul> 
                    </div>
                    <div class="tab-pane fade active show" id="c-pills-home"> 
                        <h6>Layout Type</h6> 
                        <ul class="main-layout layout-grid">
                             <li class="" data-attr="ltr"> 
                                <div class="header bg-light"> 
                                    <ul> 
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul> 
                                </div>
                                <div class="body"> 
                                    <ul> 
                                        <li class="bg-light sidebar"></li>
                                        <li class="bg-light body">
                                            <span class="badge badge-primary">LTR</span>
                                        </li>
                                    </ul> 
                                </div>
                            </li>
                            <li data-attr="rtl" class=""> 
                                <div class="header bg-light"> 
                                    <ul> 
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul> 
                                </div>
                                <div class="body"> 
                                    <ul> 
                                        <li class="bg-light body">
                                            <span class="badge badge-primary">RTL</span>
                                        </li>
                                        <li class="bg-light sidebar"></li>
                                    </ul> 
                                </div>
                            </li>
                            <li class="box-layout px-3 active" data-attr="ltr"> 
                                <div class="header bg-light"> 
                                    <ul> 
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul> 
                                </div>
                                <div class="body"> 
                                    <ul> 
                                        <li class="bg-light sidebar">

                                        </li><li class="bg-light body"><span class="badge badge-primary">Box</span></li></ul> </div></li></ul> <h6>Sidebar Typedd</h6> <ul class="sidebar-type layout-grid"> <li data-attr="normal-sidebar"> <div class="header bg-light"> <ul> <li></li><li></li><li></li></ul> </div><div class="body"> <ul> <li class="bg-dark sidebar"></li><li class="bg-light body"></li></ul> </div></li><li data-attr="compact-sidebar"> <div class="header bg-light"> <ul> <li></li><li></li><li></li></ul> </div><div class="body"> <ul> <li class="bg-dark sidebar compact"></li><li class="bg-light body"></li></ul> </div></li></ul> </div><div class="tab-pane fade" id="c-pills-profile"> <h6>Light layout</h6> <ul class="layout-grid customizer-color"> <li class="color-layout" data-attr="color-1" data-primary="#24695c" data-secondary="#ba895d"> <div></div></li><li class="color-layout" data-attr="color-2" data-primary="#d97f3d" data-secondary="#f25f4c"> <div></div></li><li class="color-layout" data-attr="color-3" data-primary="#168eea" data-secondary="#90b4cd"> <div></div></li><li class="color-layout" data-attr="color-4" data-primary="#665ed5" data-secondary="#d1d1e9"> <div></div></li><li class="color-layout" data-attr="color-5" data-primary="#3a9aa8" data-secondary="#984ff3"> <div></div></li><li class="color-layout" data-attr="color-6" data-primary="#7951aa" data-secondary="#72757D"> <div></div></li></ul> <h6>Dark Layout</h6> <ul class="layout-grid customizer-color dark"> <li class="color-layout" data-attr="color-1" data-primary="#24695c" data-secondary="#ba895d"> <div></div></li><li class="color-layout" data-attr="color-2" data-primary="#d97f3d" data-secondary="#f25f4c"> <div></div></li><li class="color-layout" data-attr="color-3" data-primary="#168eea" data-secondary="#90b4cd"> <div></div></li><li class="color-layout" data-attr="color-4" data-primary="#665ed5" data-secondary="#d1d1e9"> <div></div></li><li class="color-layout" data-attr="color-5" data-primary="#3a9aa8" data-secondary="#984ff3"> <div></div></li><li class="color-layout" data-attr="color-6" data-primary="#7951aa" data-secondary="#72757D"> <div></div></li></ul> <h6>Mix Layout</h6> <ul class="layout-grid customizer-mix"> <li class="color-layout active" data-attr="light-only"> <div class="header bg-light"> <ul> <li></li><li></li><li></li></ul> </div><div class="body"> <ul> <li class="bg-light sidebar"></li><li class="bg-light body"></li></ul> </div></li><li class="color-layout" data-attr="dark-sidebar"> <div class="header bg-light"> <ul> <li></li><li></li><li></li></ul> </div><div class="body"> <ul> <li class="bg-dark sidebar"></li><li class="bg-light body"></li></ul> </div></li><li class="color-layout" data-attr="dark-only"> <div class="header bg-dark"> <ul> <li></li><li></li><li></li></ul> </div><div class="body"> <ul> <li class="bg-dark sidebar"></li><li class="bg-dark body"></li></ul> </div></li></ul> </div></div></div></div></div>
    <!-- login js-->
    <!-- Plugin used-->
    @endsection