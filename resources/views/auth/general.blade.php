@extends('layouts.app')
@section('content')
<div class="page-body">
         <!-- page-wrapper Start-->
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
                  <h3>General</h3>
                  <ol class="breadcrumb"
                    <li class="breadcrumb-item active">General</li>
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
          <div class="container-fluid general-widget">
            <div class="row">
              <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                  <div class="bg-primary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"></div>
                      <div class="media-body"><span class="m-0"><h4>{{ Auth::user()->username }}</h4></span>
                       <i class="icon-bg" data-feather="database"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                  <div class="bg-secondary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"></div>
                      <div class="media-body"><span class="m-0"><h4>{{ Auth::user()->usertype }}</h4></span>
                        <i class="icon-bg" data-feather="shopping-bag"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             <div class="col-sm-6 col-xl-6 col-lg-6">
                <div class="card o-hidden border-0">
                  <div class="bg-primary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"></div>
                      <div class="media-body"><span class="m-0"><h4>{{ Auth::user()->email}}</h4></span>
                       <i class="icon-bg" data-feather="message-circle"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
               <!--<div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                  <div class="bg-primary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"></div>
                      <div class="media-body"><span class="m-0">New Use</span>
                       <i class="icon-bg" data-feather="user-plus"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>-->
              
                    
              <div class="col-xl-6 xl-100 box-col-12">
                <div class="card">
                  <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                    <h5>PROJECT'S CART <i class="icofont icofont-law-document"></h5></i>
                    <div class="setting-list">
                      <ul class="list-unstyled setting-option">
                        <li>
                          <div class="setting-primary"><i class="icon-settings"></i></div>
                        </li>
                        <li><i class="view-html fa fa-code font-primary"></i></li>
                        <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                        <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                        <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                        <li><i class="icofont icofont-error close-card font-primary"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="user-status table-responsive">
                      <table class="table table-bordernone">
                        <thead>
                          <tr>
                            <th scope="col">Project Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Type</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($projectdata as $allproject)
                          <tr>
                            <td class="f-w-600">{{$allproject->project_name}}</td>
                            <td>{{$allproject->project_description}}</td>
                            <td class="font-primary">{{$allproject->project_type}}</td>
                            <td>
                              <div class="span badge square-pill pill-badge-secondary">{{$allproject->project_status}}</div>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#products-cart" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="products-cart">div class="card"&gt;
 &lt;div class="card-header pb-0 d-flex justify-content-between align-items-center"&gt;
   &lt;h5&gt;PRODUCTS CART&lt;/h5&gt;
   &lt;div class="setting-list"&gt;
     &lt;ul class="list-unstyled setting-option"&gt;
       &lt;li&gt;
         &lt;div class="setting-primary"&gt;&lt;i class="icon-settings"&gt;&lt;/i&gt;&lt;/div&gt;
       &lt;/li&gt;
       &lt;li&gt;&lt;i class="view-html fa fa-code font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
       &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
       &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
       &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
       &lt;li&gt;&lt;i class="icofont icofont-error close-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
     &lt;/ul&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="card-body"&gt;
   &lt;div class="user-status table-responsive"&gt;
     &lt;table class="table table-bordernone"&gt;
       &lt;thead&gt;
         &lt;tr&gt;
           &lt;th scope="col"&gt;Details&lt;/th&gt;
           &lt;th scope="col"&gt;Quantity&lt;/th&gt;
           &lt;th scope="col"&gt;Status&lt;/th&gt;
           &lt;th scope="col"&gt;Price&lt;/th&gt;
         &lt;/tr&gt;
       &lt;/thead&gt;
       &lt;tbody&gt;
         &lt;tr&gt;
           &lt;td class="f-w-600"&gt;Simply dummy text of the printing&lt;/td&gt;
           &lt;td&gt;1&lt;/td&gt;
           &lt;td class="font-primary"&gt;Pending&lt;/td&gt;
           &lt;td&gt;
             &lt;div class="span badge rounded-pill pill-badge-secondary"&gt;6523&lt;/div&gt;
           &lt;/td&gt;
         &lt;/tr&gt;
         &lt;tr&gt;
           &lt;td class="f-w-600"&gt;Long established&lt;/td&gt;
           &lt;td&gt;5&lt;/td&gt;
           &lt;td class="font-secondary"&gt;Cancle&lt;/td&gt;
           &lt;td&gt;
             &lt;div class="span badge rounded-pill pill-badge-success"&gt;6523&lt;/div&gt;
           &lt;/td&gt;
         &lt;/tr&gt;
         &lt;tr&gt;
           &lt;td class="f-w-600"&gt;sometimes by accident&lt;/td&gt;
           &lt;td&gt;10&lt;/td&gt;
           &lt;td class="font-secondary"&gt;Cancle&lt;/td&gt;
           &lt;td&gt;
             &lt;div class="span badge rounded-pill pill-badge-warning"&gt;6523&lt;/div&gt;
           &lt;/td&gt;
         &lt;/tr&gt;
         &lt;tr&gt;
           &lt;td class="f-w-600"&gt;Classical Latin literature&lt;/td&gt;
           &lt;td&gt;9&lt;/td&gt;
           &lt;td class="font-primary"&gt;Return&lt;/td&gt;
           &lt;td&gt;
             &lt;div class="span badge rounded-pill pill-badge-primary"&gt;6523&lt;/div&gt;
           &lt;/td&gt;
         &lt;/tr&gt;
         &lt;tr&gt;
           &lt;td class="f-w-600"&gt;keep the site on the Internet&lt;/td&gt;
           &lt;td&gt;8&lt;/td&gt;
           &lt;td class="font-primary"&gt;Pending&lt;/td&gt;
           &lt;td&gt;
               &lt;div class="span badge rounded-pill pill-badge-danger"&gt;6523&lt;/div&gt;
           &lt;/td&gt;
         &lt;/tr&gt;
         &lt;tr&gt;
             &lt;td class="f-w-600"&gt;Molestiae consequatur&lt;/td&gt;
             &lt;td&gt;3&lt;/td&gt;
             &lt;td class="font-secondary"&gt;Cancle&lt;/td&gt;
             &lt;td&gt;
               &lt;div class="span badge rounded-pill pill-badge-info"&gt;6523&lt;/div&gt;
             &lt;/td&gt;
         &lt;/tr&gt;
         &lt;tr&gt;
           &lt;td class="f-w-600"&gt;Pain can procure&lt;/td&gt;
           &lt;td&gt;8&lt;/td&gt;
           &lt;td class="font-primary"&gt;Return&lt;/td&gt;
           &lt;td&gt;
             &lt;div class="span badge rounded-pill pill-badge-primary"&gt;6523&lt;/div&gt;
           &lt;/td&gt;
         &lt;/tr&gt;
       &lt;/tbody&gt;
     &lt;/table&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 xl-100 box-col-12">
                <div class="card employee-status">
                  <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                    <h5>EMPLOYEE & CLIENT STATUS <i class="icofont icofont-users"></h5></i>
                    <div class="setting-list">
                      <ul class="list-unstyled setting-option">
                        <li>
                          <div class="setting-primary"><i class="icon-settings"></i></div>
                        </li>
                        <li><i class="view-html fa fa-code font-primary"></i></li>
                        <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                        <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                        <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                        <li><i class="icofont icofont-error close-card font-primary"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="user-status table-responsive">
                      <table class="table table-bordernone">
                        <thead>
                          <tr>
                            
                            <th scope="col">Employee Name</th>
                            <th scope="col">Employee Profile</th>
                            <th scope="col">Designation</th>
                            <!--<th scope="col">Skill Level</th>-->
                            <th scope="col">Employee Email</th>
                            <th scope="col">Employee Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($usersdata as $allusers)
                          <tr>
                            
                            <td>
                           
                                  <h6>{{$allusers->firstname}} {{$allusers->lastname}}</h6>
                             
                            </td>
                            <td class="bd-t-none u-s-tb">
                               <img class="img-80 square-circle" src="{{ asset('assets/' . $allusers->picture) }}" alt="">
                              
                            </td>
                            <td>{{$allusers->rolename}}</td>
                            <!--<td>
                              <div class="progress-showcase">
                                <div class="progress" style="height: 8px;">
                                  <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </td>-->
                            <td>{{$allusers->email}} </td>
                            <td><div class="span badge square-pill pill-badge-secondary">{{$allusers->employee_status}}</div></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#emplotee-status" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="emplotee-status">&lt;div class="card"&gt;
 &lt;div class="card-header pb-0 d-flex justify-content-between align-items-center"&gt;
   &lt;h5&gt;EMPLOYEE STATUS&lt;/h5&gt;
   &lt;div class="setting-list"&gt;
     &lt;ul class="list-unstyled setting-option"&gt;
       &lt;li&gt;
         &lt;div class="setting-primary"&gt;&lt;i class="icon-settings"&gt;&lt;/i&gt;&lt;/div&gt;
       &lt;/li&gt;
       &lt;li&gt;&lt;i class="view-html fa fa-code font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
       &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
       &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
       &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
       &lt;li&gt;&lt;i class="icofont icofont-error close-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
     &lt;/ul&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="card-body"&gt;
   &lt;div class="user-status table-responsive"&gt;
     &lt;table class="table table-bordernone"&gt;
       &lt;thead&gt;
         &lt;tr&gt;
           &lt;th scope="col"&gt;Name&lt;/th&gt;
           &lt;th scope="col"&gt;Designation&lt;/th&gt;
           &lt;th scope="col"&gt;Skill Level&lt;/th&gt;
           &lt;th scope="col"&gt;Experience&lt;/th&gt;
         &lt;/tr&gt;
       &lt;/thead&gt;
       &lt;tbody&gt;
         &lt;tr&gt;
           &lt;td class="bd-t-none u-s-tb"&gt;
             &lt;div class="align-middle image-sm-size"&gt;&lt;img class="img-radius align-top m-r-15 rounded-circle" src="{{asset('assets')}}/images/user/4.jpg" alt=""&gt;
               &lt;div class="d-inline-block"&gt;
                 &lt;h6&gt;John Deo &lt;span class="text-muted"&gt;(14+ Online)&lt;/span&gt;&lt;/h6&gt;
               &lt;/div&gt;
             &lt;/div&gt;
           &lt;/td&gt;
           &lt;td&gt;Designer&lt;/td&gt;
           &lt;td&gt;
             &lt;div class="progress-showcase"&gt;
               &lt;div class="progress" style="height: 8px;"&gt;
                 &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
               &lt;/div&gt;
             &lt;/div&gt;
           &lt;/td&gt;
           &lt;td&gt;2 Year&lt;/td&gt;
         &lt;/tr&gt;
         &lt;tr&gt;
           &lt;td class="bd-t-none u-s-tb"&gt;
             &lt;div class="align-middle image-sm-size d-flex align-items-center"&gt;&lt;img class="img-radius align-top m-r-15 rounded-circle" src="{{asset('assets')}}/images/user/1.jpg" alt=""&gt;
               &lt;div class="d-inline-block"&gt;
                 &lt;h6&gt;Holio Mako &lt;span class="text-muted"&gt;(250+ Online)&lt;/span&gt;&lt;/h6&gt;
               &lt;/div&gt;
             &lt;/div&gt;
           &lt;/td&gt;
           &lt;td&gt;Developer&lt;/td&gt;
           &lt;td&gt;
             &lt;div class="progress-showcase"&gt;
               &lt;div class="progress" style="height: 8px;"&gt;
                 &lt;div class="progress-bar bg-secondary" role="progressbar" style="width: 70%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
               &lt;/div&gt;
             &lt;/div&gt;
           &lt;/td&gt;
          &lt;td&gt;3 Year&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class="bd-t-none u-s-tb"&gt;
            &lt;div class="align-middle image-sm-size"&gt;&lt;img class="img-radius align-top m-r-15 rounded-circle" src="{{asset('assets')}}/images/user/5.jpg" alt=""&gt;
                &lt;div class="d-inline-block"&gt;
                  &lt;h6&gt;Mohsib lara&lt;span class="text-muted"&gt;(99+ Online)&lt;/span&gt;&lt;/h6&gt;
                &lt;/div&gt;
             &lt;/div&gt;
           &lt;/td&gt;
           &lt;td&gt;Tester&lt;/td&gt;
           &lt;td&gt;
             &lt;div class="progress-showcase"&gt;
               &lt;div class="progress" style="height: 8px;"&gt;
                 &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
               &lt;/div&gt;
             &lt;/div&gt;
           &lt;/td&gt;
           &lt;td&gt;5 Month&lt;/td&gt;
         &lt;/tr&gt;
         &lt;tr&gt;
           &lt;td class="bd-t-none u-s-tb"&gt;
             &lt;div class="align-middle image-sm-size"&gt;&lt;img class="img-radius align-top m-r-15 rounded-circle" src="{{asset('assets')}}/images/user/6.jpg" alt=""&gt;
               &lt;div class="d-inline-block"&gt;
                 &lt;h6&gt;Hileri Soli &lt;span class="text-muted"&gt;(150+ Online)&lt;/span&gt;&lt;/h6&gt;
               &lt;/div&gt;
             &lt;/div&gt;
           &lt;/td&gt;
           &lt;td&gt;Designer&lt;/td&gt;
           &lt;td&gt;
             &lt;div class="progress-showcase"&gt;
               &lt;div class="progress" style="height: 8px;"&gt;
                 &lt;div class="progress-bar bg-secondary" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
               &lt;/div&gt;
             &lt;/div&gt;
           &lt;/td&gt;
           &lt;td&gt;3 Month&lt;/td&gt;
         &lt;/tr&gt;
         &lt;tr&gt;
           &lt;td class="bd-t-none u-s-tb"&gt;
             &lt;div class="align-middle image-sm-size"&gt;&lt;img class="img-radius align-top m-r-15 rounded-circle" src="{{asset('assets')}}/images/user/7.jpg" alt=""&gt;
               &lt;div class="d-inline-block"&gt;
                  &lt;h6&gt;Pusiz bia &lt;span class="text-muted"&gt;(14+ Online)&lt;/span&gt;&lt;/h6&gt;
               &lt;/div&gt;
             &lt;/div&gt;
           &lt;/td&gt;
           &lt;td&gt;Designer&lt;/td&gt;
             &lt;td&gt;
               &lt;div class="progress-showcase"&gt;
                 &lt;div class="progress" style="height: 8px;"&gt;
                   &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
                   &lt;/div&gt;
               &lt;/div&gt;
             &lt;/td&gt;
             &lt;td&gt;5 Year&lt;/td&gt;
         &lt;/tr&gt;
       &lt;/tbody&gt;
     &lt;/table&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
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
        @include('layouts.footer')
</div>
</div>
@endsection