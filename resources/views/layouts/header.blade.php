@extends('layouts.app')

<div class="page-main-header">
        <div class="main-header-right row m-0">
          <div class="main-header-left">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="{{asset('assets')}}/images/logo/logo4.png" alt=""></a></div>
            <div class="dark-logo-wrapper"><a href="index.html"><img class="img-fluid" src="{{asset('assets')}}/images/logo.png" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
          </div>
          <div class="left-menu-header col">
            <ul>
              <li>
                <form class="form-inline search-form">
                  <div class="search-bg"><i class="fa fa-search"></i>
                    <input class="form-control-plaintext" placeholder="Search here.....">
                  </div>
                </form><span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
              </li>
            </ul>
          </div>

          <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
            
              <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg></a></li>
             
             
              <li>
                <div class="mode"><a href="{{route('darkMode')}}"><i class="fa fa-moon-o"></i></a></div>
              </li>
              <li class="onhover-dropdown p-0">
                <button class="btn btn-primary-light" type="button"><a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i data-feather="log-out"></i>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }} </a></button>
              </li>
             
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
            </ul>
          </div>
          <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
        </div>
      </div>
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
    <script src="{{asset('assets')}}/js/notify/bootstrap-notify.min.js"></script>
    <script src="{{asset('assets')}}/js/sweet-alert/sweetalert.min.js"></script>
    <script src="{{asset('assets')}}/js/select2/select2.full.min.js"></script>
    <script src="{{asset('assets')}}/js/select2/select2-custom.js"></script>
    <script src="{{asset('assets')}}/js/form-validation-custom.js"></script>
    <script src="{{asset('assets')}}/js/bookmark/jquery.validate.min.js"></script>
    <script src="{{asset('assets')}}/js/contacts/custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{asset('assets')}}/js/script.js"></script>
    <script src="{{asset('assets')}}/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
    
>