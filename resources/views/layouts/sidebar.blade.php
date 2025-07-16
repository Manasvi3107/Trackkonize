@extends('layouts.app')

<header class="main-nav">
          <div class="sidebar-user text-center"><!--<a class="setting-primary" href="javascript:void(0)"><i class="fa fa-spin fa-gear"></i></a>--><img class="img-100 square-circle" src="{{asset('assets')}}/{{auth()->user()->picture}}" alt="">
            <a href="user-profile.html">
              <h6 class="mt-3 f-14 f-w-600">{{auth()->user()->firstname}} {{auth()->user()->lastname}}</h6></a>
            <ul>
            <li class="dropdown">
              <a class="" href="">
                <i class="icofont icofont-user-alt-7"></i>
                <p>Profile</p>
              </a></li>
              <li class="dropdown">
              <a class="onhover-dropdown p-0" href="">
                <i class="icofont icofont-wheel"></i>
                <p>{{auth()->user()->rolename}}</p>
              </a></li>
              <li class="dropdown">
              <a class="" href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out"></i>
                <p>Logout</p> 
              </a>            </li>
            </ul>
          </div>
          <nav>
            <div class="main-navbar">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="mainnav">           
                <ul class="nav-menu custom-scrollbar">
                  <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>General</h6>
                    </div>
                  </li>
                   <li><a class="nav-link menu-title link-nav"href="{{route('master')}}" href="javascript:void(0)"><i data-feather="home" ></i><span>Admin Dashboard</span></a></li>
                   
                   <li><a class="nav-link menu-title link-nav"href=""><i  data-feather="airplay" ></i><span>Client Dashboard</span></a></li>
                
                 <!--<li><a class="nav-link menu-title link-nav"href="{{route('clients')}}"><i data-feather="users" ></i><span>Clients</span></a></li>
                 <li><a class="nav-link menu-title link-nav"href="{{route('projects')}}"><i data-feather="layers" ></i><span>Projects</span></a></li>
                 <li><a class="nav-link menu-title link-nav"href="{{route('tasks')}}"><i data-feather="check-square" ></i><span>Tasks</span></a></li>
                 <li><a class="nav-link menu-title link-nav"href="{{route('leave')}}"><i data-feather="users" ></i><span>Leave</span></a></li>
                 <li><a class="nav-link menu-title link-nav"href="{{route('masterpayment')}}"><i data-feather="users" ></i><span>Payment</span></a></li>
                 <li><a class="nav-link menu-title link-nav"href="{{route('staff_roaster')}}"><i data-feather="users" ></i><span>Staff Roaster</span></a></li>-->

                  
                  <li class="sidebar-main-title">
                    <div>
                      <h6>Applications </h6>
                    </div>
                 
                   <!--<li><a class="nav-link menu-title link-nav"href="{{route('emailinbox')}}"><i data-feather="mail" ></i><span>Email Inbox</span></a></li>
                  <li><a class="nav-link menu-title link-nav"href="{{route('emailread')}}"><i data-feather="mail" ></i><span>Read Mail</span></a></li>
                  <li><a class="nav-link menu-title link-nav"href="{{route('emailcompose')}}"><i data-feather="mail" ></i><span>Compose Mail</span></a></li>-->
                  
                  <!--<li><a class="nav-link menu-title link-nav"href="{{route('userpfp')}}"><i  data-feather="users" ></i><span>Users Profile</span></a></li>-->
                  <li><a class="nav-link menu-title link-nav"href="{{route('userprofile')}}"><i data-feather="user" ></i><span> User Profile</span></a></li>
                 <!-- <li><a class="nav-link menu-title link-nav"href="{{route('useredit')}}"><i data-feather="users" ></i><span>Users Edit</span></a></li>-->
                  <!--<li><a class="nav-link menu-title link-nav" href="javascript:void(0)"><i data-feather="layers"></i><span> Weekly Reports</span></a></li>
                  <li><a class="nav-link menu-title link-nav" href="javascript:void(0)"><i data-feather="layers"></i><span> MonthlyReports</span></a></li>-->

                  <!--<li><a class="nav-link menu-title link-nav"href=""><i data-feather="message-circle" ></i><span>Chat App</span></a></li>
                  <li><a class="nav-link menu-title link-nav"href=""><i data-feather="message-circle" ></i><span>Video App</span></a></li>-->
                  
                 <!-- <li class="dropdown"><a class="nav-link menu-title link-nav" href="{{route('contacts')}}"><i data-feather="list"></i><span>Contacts</span></a></li>-->
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="{{route('tasks')}}"><i data-feather="check-square"></i><span>Tasks</span></a></li>
                 <!-- <li class="dropdown"><a class="nav-link menu-title link-nav" href="{{route('calender')}}"><i data-feather="calendar"></i><span>Calender</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="{{route('todo')}}"><i data-feather="clock"></i><span>To-Do</span></a></li>-->
                  <li class="sidebar-main-title">
                  <li><a class="nav-link menu-title link-nav"href="{{route('tracking')}}"><i data-feather="navigation-2" ></i><span>Tracking</span></a></li>
                 
                 
                  <li><a class="nav-link menu-title link-nav"href="{{route('faq')}}"><i data-feather="help-circle" ></i><span>FAQ</span></a></li>
                 
          
          </div>
          </nav>
        </header>