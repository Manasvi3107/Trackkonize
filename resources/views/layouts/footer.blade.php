@extends('layouts.app')
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