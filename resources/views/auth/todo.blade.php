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
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row"> 
                <div class="col-sm-6">
                  <h3>To-Do</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Apps   </li>
                    <li class="breadcrumb-item active">To-Do</li>
                  </ol>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark">
                    <ul>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                      <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                        <form class="form-inline search-form">
                          <div class="form-group form-control-search">
                            <input type="text" placeholder="Search..">
                          </div>
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
              <div class="col-xl-12">
                <div class="card">
                  <div class="card-header">
                    <h5>To-Do</h5>
                  </div>
                  <div class="card-body pt-0">
                    <div class="todo">
                      <div class="todo-list-wrapper">
                        <div class="todo-list-container">
                          <div class="mark-all-tasks">
                            <div class="mark-all-tasks-container"><span class="mark-all-btn" id="mark-all-finished" role="button"><span class="btn-label">Mark all as finished</span><span class="action-box completed"><i class="icon"><i class="icon-check"></i></i></span></span><span class="mark-all-btn move-down" id="mark-all-incomplete" role="button"><span class="btn-label">Mark all as Incomplete</span><span class="action-box"><i class="icon"><i class="icon-check"></i></i></span></span></div>
                          </div>
                          <div class="todo-list-body">
                            <ul id="todo-list">
                              <li class="task">
                                <div class="task-container">
                                  <h4 class="task-label">Weekly Bigbazar Shopping </h4><span class="task-action-btn"><span class="action-box large delete-btn" title="Delete Task"><i class="icon"><i class="icon-trash"></i></i></span><span class="action-box large complete-btn" title="Mark Complete"><i class="icon"><i class="icon-check"></i></i></span></span>
                                </div>
                              </li>
                              <li class="task">
                                <div class="task-container">
                                  <h4 class="task-label">Go Outside Picnic on Sunday</h4><span class="task-action-btn"><span class="action-box large delete-btn" title="Delete Task"><i class="icon"><i class="icon-trash"></i></i></span><span class="action-box large complete-btn" title="Mark Complete"><i class="icon"><i class="icon-check"></i></i></span></span>
                                </div>
                              </li>
                              <li class="completed task">
                                <div class="task-container">
                                  <h4 class="task-label">Write a blog post </h4><span class="task-action-btn"><span class="action-box large delete-btn" title="Delete Task"><i class="icon"><i class="icon-trash"></i></i></span><span class="action-box large complete-btn" title="Mark Complete"><i class="icon"><i class="icon-check"></i></i></span></span>
                                </div>
                              </li>
                              <li class="task">
                                <div class="task-container">
                                  <h4 class="task-label">Do the chicken dance</h4><span class="task-action-btn"><span class="action-box large delete-btn" title="Delete Task"><i class="icon"><i class="icon-trash"></i></i></span><span class="action-box large complete-btn" title="Mark Incomplete"><i class="icon"><i class="icon-check"></i></i></span></span>
                                </div>
                              </li>
                              <li class="task">
                                <div class="task-container">
                                  <h4 class="task-label">Pay the electricity bills</h4><span class="task-action-btn"><span class="action-box large delete-btn" title="Delete Task"><i class="icon"><i class="icon-trash"></i></i></span><span class="action-box large complete-btn" title="Mark Complete"><i class="icon"><i class="icon-check"></i></i></span></span>
                                </div>
                              </li>
                              <li class="task completed">
                                <div class="task-container">
                                  <h4 class="task-label">Make dinner reservation</h4><span class="task-action-btn"><span class="action-box large delete-btn" title="Delete Task"><i class="icon"><i class="icon-trash"></i></i></span><span class="action-box large complete-btn" title="Mark Complete"><i class="icon"><i class="icon-check"></i></i></span></span>
                                </div>
                              </li>
                              <li class="task">
                                <div class="task-container">
                                  <h4 class="task-label">Meeting with photographer</h4><span class="task-action-btn"><span class="action-box large delete-btn" title="Delete Task"><i class="icon"><i class="icon-trash"></i></i></span><span class="action-box large complete-btn" title="Mark Complete"><i class="icon"><i class="icon-check"></i></i></span></span>
                                </div>
                              </li>
                              <li class="task">
                                <div class="task-container">
                                  <h4 class="task-label">Birthday wish to best friend</h4><span class="task-action-btn"><span class="action-box large delete-btn" title="Delete Task"><i class="icon"><i class="icon-trash"></i></i></span><span class="action-box large complete-btn" title="Mark Complete"><i class="icon"><i class="icon-check"></i></i></span></span>
                                </div>
                              </li>
                            </ul>
                          </div>
                          <div class="todo-list-footer">
                            <div class="add-task-btn-wrapper"><span class="add-task-btn">
                                <button class="btn btn-primary"><i class="icon-plus"></i> Add new task</button></span></div>
                            <div class="new-task-wrapper">
                              <textarea id="new-task" placeholder="Enter new task here. . ."></textarea><span class="btn btn-danger cancel-btn" id="close-task-panel">Close</span><span class="btn btn-success ms-3 add-new-task-btn" id="add-task">Add Task</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="notification-popup hide">
                        <p><span class="task"></span><span class="notification-text"></span></p>
                      </div>
                    </div>
                    <!-- HTML Template for tasks-->
                    <script id="task-template" type="tect/template">
                      <li class="task">
                      <div class="task-container">
                      <h4 class="task-label"></h4>
                      <span class="task-action-btn">
                      <span class="action-box large delete-btn" title="Delete Task">
                      <i class="icon"><i class="icon-trash"></i></i>
                      </span>
                      <span class="action-box large complete-btn" title="Mark Complete">
                      <i class="icon"><i class="icon-check"></i></i>
                      </span>
                      </span>
                      </div>
                      </li>
                    </script>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
          <!-- Container-fluid ends                    -->
        </div>
        @include('layouts.footer')
      </div>
    </div>
@endsection