@extends('layouts.app')
@section('content')
	<!--<div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div> -->
    <div class="page-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      @include('layouts.header')
      <!-- Page Header Ends                              -->
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
                  <h3>Admin</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Admin</li>
                  </ol>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  
                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
            	 <div class="col-sm-6 col-xl-6 col-lg-6">
                <a href="{{route('users')}}">
                  <div class="card">
                   <div class="card-header bg-primary d-flex justify-content-between align-items-center">
                    <h4>Users</h4>
                      <p class="mb-0">
                        ADD
                        <i class="icofont icofont-caret-right"></i>
                        UPDATE
                        <i class="icofont icofont-caret-right"></i>
                        DELETE
                      </p>  
                   </div>
                  </div>
                </a>
              </div>
              <div class="col-sm-6 col-xl-6 col-lg-6">
                <a href="{{route('clients')}}">
                <div class="card">
                  <div class="card-header bg-primary d-flex justify-content-between align-items-center">
                    <h4>Clients</h4>
                        <p class="mb-0">
                          ADD
                          <i class="icofont icofont-caret-right"></i>
                          UPDATE
                          <i class="icofont icofont-caret-right"></i>
                          DELETE
                        </p>
                  </div>
                </div>
                </a>
              </div>
              <div class="col-sm-6 col-xl-6 col-lg-6">
                <a href="{{route('projects')}}">
                  <div class="card">
                   <div class="card-header bg-primary d-flex justify-content-between align-items-center">
                    <h4>Projects</h4>
                      <p class="mb-0">
                        ADD
                        <i class="icofont icofont-caret-right"></i>
                        UPDATE
                        <i class="icofont icofont-caret-right"></i>
                        DELETE
                      </p>  
                   </div>
                  </div>
                </a>
              </div>
              <div class="col-sm-6 col-xl-6 col-lg-6">
                <a href="{{route('tasks')}}">
                  <div class="card">
                   <div class="card-header bg-primary d-flex justify-content-between align-items-center">
                    <h4>Tasks</h4>
                      <p class="mb-0">
                        ADD
                        <i class="icofont icofont-caret-right"></i>
                        UPDATE
                       
                      </p>  
                   </div>
                  </div>
                </a>
              </div>
              <div class="col-sm-6 col-xl-6 col-lg-6">
                <a href="{{route('leave')}}">
                  <div class="card">
                   <div class="card-header bg-primary d-flex justify-content-between align-items-center">
                    <h4>Leave</h4>
                      <p class="mb-0">
                        ADD
                        <i class="icofont icofont-caret-right"></i>
                        UPDATE
                        <i class="icofont icofont-caret-right"></i>
                        DELETE
                      </p>  
                   </div>
                  </div>
                </a>
              </div>
              <div class="col-sm-6 col-xl-6 col-lg-6">
                <a href="{{route('masterpayment')}}">
                  <div class="card">
                   <div class="card-header bg-primary d-flex justify-content-between align-items-center">
                    <h4>Payment</h4>
                      <p class="mb-0">
                        ADD
                        <i class="icofont icofont-caret-right"></i>
                        UPDATE
                        <i class="icofont icofont-caret-right"></i>
                        DELETE
                      </p>  
                   </div>
                  </div>
                </a>
              </div>
              <div class="col-sm-6 col-xl-6 col-lg-6">
                <a href="{{route('staff_roaster')}}">
                  <div class="card">
                   <div class="card-header bg-primary d-flex justify-content-between align-items-center">
                    <h4>Staff Roaster</h4>
                      <p class="mb-0">
                        ADD
                        <i class="icofont icofont-caret-right"></i>
                        UPDATE
                        <i class="icofont icofont-caret-right"></i>
                        DELETE
                      </p>  
                   </div>
                  </div>
                </a>
              </div>
              <div class="col-sm-6 col-xl-6 col-lg-6">
                <a href="{{route('tracking')}}">
                  <div class="card">
                   <div class="card-header bg-primary d-flex justify-content-between align-items-center">
                    <h4>Tracking</h4>
                      <p class="mb-0">
                        ADD
                        <i class="icofont icofont-caret-right"></i>
                        UPDATE
                        <i class="icofont icofont-caret-right"></i>
                        DELETE
                      </p>  
                   </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2021-22 © TRACKKONIZE All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">Hand crafted & made with <i class="fa fa-heart font-primary"></i></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
@endsection