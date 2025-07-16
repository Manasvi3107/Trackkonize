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
        <div class="page-body dashboard-2-main">
          <!-- Container-fluid starts-->
          <div class="container-fluid">
          <div class="col-sm-6">
                  <h3>Staff Roaster
                  </h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item">Staff Roaster</li>
                  </ol>
                </div>
                
            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('staff_roaster.store') }}" method="post">
                    @csrf
                        <div class="row formtype">
                            <div class="col-md-4">
                                <div class="form-group">
                               
                                <label for="employee_id">Employee Name:</label>
                                <select class="form-control" name="employee_id" id="employee_id" required>
                                    <option>Select Employees</option>
                                    @foreach($employees as $employee)
                                        <option value="{{ $employee->id }}" >{{ $employee->username }}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="shift_start_time">Shift Start Time:</label>
                                    <input type="time" class="form-control" name="shift_start_time" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="shift_end_time">Shift End Time:</label>
                                     <input type="time" class="form-control" name="shift_end_time" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="day_of_working">Day of Working:</label>
                                     <input type="text" class="form-control" name="day_of_working" required>
                                </div>
                            </div>
                           


                            <div class="col-md-4 mt-4">
                            <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Submit</button>
                           
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="datatable table table-stripped">
                                    <thead>
                                        <tr>
                                        <th>Sr no.</th>
                                        <th>Employee Name</th>
                                        <th>Shift Start Time</th>
                                        <th>Shift End Time</th>
                                        <th>Day of Working</th>
                                        <th>Total Leaves</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        
                                        @foreach($rosters as $roster)
                                        <tr>
                                        <td>{{ $roster->id }}</td>
                                        <td>{{ $roster->user->username }}</td>
                                        <td>{{ $roster->shift_start_time }}</td>
                                        <td>{{ $roster->shift_end_time }}</td>
                                        <td>{{ $roster->day_of_working }}</td>
                                        <td>{{ $roster->no_of_days }}</td>
                                        <td>{{ $roster->created_at }}</td>
                                        <td>{{ $roster->updated_at }}</td>
                                        </tr>
                                        @endforeach
                                        
                                        
                                    </tbody>
                                   
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="delete_asset" class="modal fade delete-modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <img src="assets/img/sent.png" alt="" width="50" height="46">
                        <h3 class="delete_class">Are you sure want to delete this Asset?</h3>
                        <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection
