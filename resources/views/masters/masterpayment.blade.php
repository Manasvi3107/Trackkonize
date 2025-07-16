@extends('layouts.app')

@section('content')
<div class="page-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      @include('layouts.header')
      <!-- Page Header Ends-->
      <!-- Page Body Start-->
      <div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Start-->
       @include('layouts.sidebar') 
       <div class="page-body">
       <div class="container-fluid">
        <div class="page-header">
          <div class="row">
            <div class="col-sm-6">
              <h3>Master Payment</h3>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="" data-bs-original-title="" title="">Dashboard</a></li>
                <li class="breadcrumb-item">Masters</li>
                <li class="breadcrumb-item active">Master Payment</li>
              </ol>
            </div>
            <div class="col-sm-6">
              <!-- Bookmark Start-->
                            <!---Store Create Modal---->
              <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Create Payment Method</h5>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
                    </div>
                    <form action="" method="POST">
                      <input type="hidden" name="_token" value="cgJC4gSrmDtHtNdiZEZAXxacapyDDCZ9smCJXMVe" data-bs-original-title="" title="">                      <div class="modal-body">
                      <div class="col-xxl-12 box-col-12">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>Credit card </h5>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-7">
                        <form class="theme-form mega-form">
                          <div class="mb-3">
                            <input class="form-control" type="text" placeholder="Card number">
                          </div>
                          <div class="mb-3">
                            <input class="form-control" type="text" placeholder="First Name">
                          </div>
                          <div class="mb-3">
                            <input class="form-control" type="date">
                          </div>
                          <div class="mb-3">
                            <input class="form-control" type="text" placeholder="Name on card">
                          </div>
                          <div class="mb-3">
                            <select class="form-select" size="1">
                              <option>Select Type</option>
                              <option>Master</option>
                              <option>Visa</option>
                            </select>
                          </div>
                        </form>
                      </div>
                      <div class="col-md-5 text-center"><img class="img-fluid" src="{{asset('assets')}}/images/ecommerce/card.png" alt=""></div>
                    </div>
                  </div>
                </div>
              </div>
                      </div>
                      <div class="modal-footer">
                      <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Create</button>
                        <button class="btn btn-danger" type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Cancel</button>
                      
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!---Store Create Modal---->
              <div class="bookmark">
                    <ul>
                      <li>
                        <button class="btn btn-square btn-primary btn-s" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalLong" data-bs-original-title="" title="" fdprocessedid="6sjf0l"><i class="fa fa-plus-circle"></i> Create payment</button>
                       
                                
                           
                      </li>
                        </form>
                      </li>
                    </ul>
                  </div>
                            <!-- Bookmark Ends-->
            </div>
          </div>
        </div>
        <div class="container-fluid">
        <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                        <div class="" align="center"><h4 class="font-primary" ><b>Masterpayment's List <i class="fa fa-inr" class="font-primary" ></b></h4></i></div>
                            <div class="table-responsive">
                                <table class="datatable table table-stripped">
                                    <thead>
                                        <tr>
                                            <th>Userame</th>
                                            <th>Type</th>
                                            <th>Bank Name</th>
                                            <th>Account no</th>
                                            <th>Account Type</th>
                                            <th>IFSC Code</th>
                                            <th>Name in bank</th>
                                            <!--<th>Days of Working</th>-->
                                            <th>Leaves</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>No Of Days</th>
                                            <th>Reason</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    @foreach($leaveApplications as $leaveApplication)
                                    <tbody>
                                        <tr>
                                            <td>{{ $leaveApplication->user->username }}</td>
                                            <td>{{ $leaveApplication->user->rolename }}</td>
                                            <td>{{ $leaveApplication->user->bankname }}</td>
                                            <td>{{ $leaveApplication->user->account_number }}</td>
                                            <td>{{ $leaveApplication->user->account_type }}</td>
                                            <td>{{ $leaveApplication->user->ifsc_code }}</td>
                                            <td>{{ $leaveApplication->user->name_in_bank }}</td>
                                           <!-- <td>{{ $leaveApplication->day_of_working }}</td>-->
                                            <td>{{ $leaveApplication->leave_type }}</td>
                                            <td>{{ $leaveApplication->from_date }}</td>
                                            <td>{{ $leaveApplication->to_date }}</td>
                                            <td>{{ $leaveApplication->no_of_days }}</td>
                                            <td>{{ $leaveApplication->reason  }}</td>
                                            <td class="text-right">
                                                <!--<a href="{{ url("/add-salary/{$leaveApplication->id}") }}" data-bs-original-title="" title=""><i class=""></i><b>Invoice</b></a>-->
                                                <a href="{{route('createinvoice')}}" class="btn btn-primary btn-s"  data-bs-original-title="" title="">invoice</a>
                                                       
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
       
        </div>
      
      </div>
      </div>
      @include('layouts.footer')

      @endsection