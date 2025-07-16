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
          <div class="page-body checkout">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <div class="page-header-left">
                    <h3>Invoice</h3>
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">Home                                       </a></li>
                      <li class="breadcrumb-item">Admin</li>
                      <li class="breadcrumb-item">Master Payment</li>
                      <li class="breadcrumb-item active">Invoice</li>
                    </ol>
                  </div>
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
            <div class="card">
              <div class="card-header pb-0">
              <h4 class="media-heading f-w-600">TRACKKONIZE Invoice # <span class="digits counter">1069</span></h4>  <h3></h3>
                                  <p>trackkonize@gmail.com<br><span class="digits">289-335-6503</span></p>
                                  
                                 
                                <p>Issued: march<span class="digits"> 27, 2024</span></p>     
              </div>
              
              <div class="card-body">
                <div class="row">
                  <div class="col-xl-12 col-sm-12">
                    <form>
                      <div class="row">
                        <div class="mb-3 col-sm-6">
                          <label for="firstname">First Name</label>
                          <input class="form-control" id="firstname" value="manasvi" type="text">
                        </div>
                        <div class="mb-3 col-sm-6">
                          <label for="lastname">Last Name</label>
                          <input class="form-control" id="lastname" value="vaghela"type="text">
                        </div>
                      </div>
                      <div class="row">
                        <div class="mb-3 col-sm-6">
                          <label for="inputEmail5">Phone</label>
                          <input class="form-control" id="inputEmail5" value="12345677890"type="email">
                        </div>
                        <div class="mb-3 col-sm-6">
                          <label for="email">Email Address</label>
                          <input class="form-control" id="email" value="manasvi@gmail.com"type="email">
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="inputState">Country</label>
                        <select class="form-control" id="inputState">
                          <option selected="">India</option>
                          <option>Australia</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="inputAddress5">Address</label>
                        <input class="form-control" id="inputAddress5" value="qwerty"type="text">
                      </div>
                      <div class="mb-3">
                        <label for="inputCity">Town/City</label>
                        <input class="form-control" id="inputCity" value="ahmedabad"type="text">
                      </div>
                      <div class="mb-3">
                        <label for="inputAddress2">State/Country</label>
                        <input class="form-control" id="inputAddress2"value="gujarat" type="text">
                      </div>
                      <div class="mb-3">
                        <label for="inputAddress6">Postal Code</label>
                        <input class="form-control" id="inputAddress6"value="380015" type="text">
                      </div>
                      
                    </form>
                  </div>
                  
                        <!-- End InvoiceTop-->
                        <div class="row invo-profile">
                          <div class="col-xl-4">
                            <div class="media">
                              <div class="media-left"><img class="media-object rounded-circle img-60" src="../assets/images/user/1.jpg" alt=""></div>
                              <div class="media-body m-l-20">
                                <h4 class="media-heading f-w-600">Manasvi vaghela</h4>
                                <p>manasvi@gmail.com<br><span class="digits">1234567890</span></p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-8">
                            <div class="text-xl-end" id="project">
                              <h6>Project names</h6>
                              <li>Software Product Development: AI-Powered Virtual Assistant</li>
                              <li>Digital Infrastructure Enhancement Project	</li>
                            </div>
                          </div>
                        </div>
                        <!-- End Invoice Mid-->
                        <div>
                          <div class="table-responsive invoice-table" id="table">
                            <table class="table table-bordered table-striped">
                              <tbody>
                                <tr>
                                  <td class="item">
                                    <h6 class="p-2 mb-0">Task Description</h6>
                                  </td>
                                  <td class="Hours">
                                    <h6 class="p-2 mb-0">Hours</h6>
                                  </td>
                                  <td class="Rate">
                                    <h6 class="p-2 mb-0">Rate</h6>
                                  </td>
                                  <td class="subtotal">
                                    <h6 class="p-2 mb-0">Sub-total</h6>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <label>Requirement Gathering and Analysis</label>
                                    <p class="m-0">Collaborate with stakeholders to gather requirements and define the scope of the virtual assistant software. Analyze user needs, preferences, and interaction patterns to design intuitive user interfaces and functionalities.</p>
                                  </td>
                                  <td>
                                    <p class="itemtext digits">5</p>
                                  </td>
                                  <td>
                                    <p class="itemtext digits">$75</p>
                                  </td>
                                  <td>
                                    <p class="itemtext digits">$375.00</p>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <label>Network Optimization</label>
                                    <p class="m-0">Assess current network infrastructure, identify bottlenecks, and optimize network configurations for improved performance and reliability.</p>
                                  </td>
                                  <td>
                                    <p class="itemtext digits">3</p>
                                  </td>
                                  <td>
                                    <p class="itemtext digits">$75</p>
                                  </td>
                                  <td>
                                    <p class="itemtext digits">$225.00</p>
                                  </td>
                                </tr>
                               
                                  
                                </tr>
                                <tr>
                                  <td></td>
                                  <td></td>
                                  <td class="Rate">
                                    <h6 class="mb-0 p-2">Total</h6>
                                  </td>
                                  <td class="payment digits">
                                    <h6 class="mb-0 p-2">$3,644.25</h6>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <!-- End Table-->
                          <div class="row mt-3">
                            
                            <div class="col-md-4">
                              <form class="text-end invo-pal">
                                <input type="image" src="../assets/images/other-images/paypal.png" name="submit" alt="PayPal - The safer, easier way to pay online!">
                              </form>
                            </div>
                          </div>
                        </div>
                        <!-- End InvoiceBot-->
                      </div>
                      <div class="col-sm-12 text-center mt-3">
                        <button class="btn btn btn-primary me-2" type="button" onclick="myFunction()">Print</button>
                        <button class="btn btn-danger" type="button">Cancel</button>
                      </div>
                      <!-- End Invoice-->
                      <!-- End Invoice Holder-->
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
@endsection
