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
        <div class="container-fluid">
        <div class="page-header">
          <div class="row">
            <div class="col-sm-6">
              <h3>Profile</h3>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                <li class="breadcrumb-item active">User Profile</li>
              </ol>
            </div>
            <div class="col-sm-6">
              <!-- Bookmark Start-->
              <!-- <div class="bookmark">
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
              </div> -->
              <!-- Bookmark Ends-->
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="user-profile">
            <div class="row">
                <!-- user profile header start-->
                <div class="col-sm-12">
                    <div class="card profile-header bg-size" style="background-image: url(&quot;https://staging.poppos.net.au/assets/images/user-profile/bg-profile.jpg&quot;); background-size: cover; background-position: center center; display: block;">
                        <img class="img-fluid bg-img-cover" src="https://staging.poppos.net.au/assets/images/user-profile/bg-profile.jpg" alt="" style="display: none;">
                        <div class="profile-img-wrrap bg-size" style="background-image: url(&quot;https://staging.poppos.net.au/assets/images/user-profile/bg-profile.jpg&quot;); background-size: cover; background-position: center center; display: block;">
                            <img class="img-fluid bg-img-cover" src="https://staging.poppos.net.au/assets/images/user-profile/bg-profile.jpg" alt="" style="display: none;">
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <!----Password Reset Modal------->
                                <div class="modal fade" id="passwordreset" tabindex="-1" role="dialog" aria-labelledby="passwordreset" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title">Reset Password</h5>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <form action="https://staging.poppos.net.au/personal-password-reset" method="POST">
                                        <input type="hidden" name="_token" value="OEva58jC2xQhiWHUVM1iytOemaplc4c8wLDn9CIS">                                            <input type="hidden" name="userid" value="1">
                                          <div class="modal-body">
                                            <div class="form-group">
                                                <label>Old Password (*)</label>
                                                <input type="password" class="form-control" name="oldpassword" placeholder="Old Password" required="">
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>New Password (*)</label>
                                                        <input type="password" class="form-control" name="newpassword" placeholder="New Password" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Confirm New Password (*)</label>
                                                        <input type="password" class="form-control" name="confirmnewpassword" placeholder="Confirm New Password" required="">
                                                    </div>  
                                                </div>
                                            </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                                            <button class="btn btn-primary" type="submit">Save Password</button>
                                          </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                                <!----Password Reset Modal------->
                                <div class="userpro-box">
                                  <div class="img-wrraper">                              
                                    <div class="avatar">
                                                                                <img class="img-fluid" alt="" src="https://staging.poppos.net.au/assets/images/user/1655703588.jpg">
                                                                            </div>
                                  </div>
                                  <div class="user-designation">
                                    <div class="title">
                                        <a target="_blank" href=""> 
                                            <h4>Rahul Raghav (rahul)</h4>
                                            <h6>Administrator</h6>
                                        </a>
                                    </div>
                                    <div class="social-media">
                                      <ul class="user-list-social">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#passwordreset"><i class="fa fa-lock"></i> Change Password</a>
                                      </ul>
                                    </div>
                                    <!-- <div class="follow">
                                      <ul class="follow-list">
                                        <li>
                                          <div class="follow-num counter">325</div><span>Follower</span>
                                        </li>
                                        <li>
                                          <div class="follow-num counter">450</div><span>Following</span>
                                        </li>
                                        <li>
                                          <div class="follow-num counter">500</div><span>Likes</span>
                                        </li>
                                      </ul>
                                    </div> -->
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-panel">
                                            <div class="table-panel-heading"><h6>Details</h6></div>
                                                <div class="table-panel-body">
                                                    <form action="" method="POST" enctype="multipart/form-data">
                                                        <input type="hidden" name="_token" value="OEva58jC2xQhiWHUVM1iytOemaplc4c8wLDn9CIS">                                                        <input type="hidden" name="userid" value="1">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label>DOB</label>
                                                                    <input type="date" class="form-control" name="dob" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label>Contact</label>
                                                                    <input type="text" class="form-control" name="contact" value="000000000000" fdprocessedid="y1nk1f">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label>Alt. Contact (Emergency)</label>
                                                                    <input type="text" class="form-control" name="altcontact" value="000000000" fdprocessedid="cmz0r">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label>Email (*)</label>
                                                                    <input type="text" class="form-control" name="email" value="rahul@gmail.com" required="" fdprocessedid="zjnnbd">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Address</label>
                                                                    <textarea class="form-control" name="address">ahmedabad ,Gujrat</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Profile Picture</label>
                                                                    <input type="file" class="form-control" name="profilepicture">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12" style="text-align: right;">
                                                                <button class="btn btn-primary" type="submit" fdprocessedid="hs7m0d">Update</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- user profile header end-->
            </div>
        </div>
@endsection