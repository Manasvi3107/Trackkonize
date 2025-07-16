@extends('layouts.app')
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
        
        @include('layouts.footer')
      </div>
    </div>
@endsection