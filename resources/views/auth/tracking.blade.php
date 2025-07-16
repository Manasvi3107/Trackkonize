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
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
            <div class="col-sm-6">
                  <h3>Tracking</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item">Tracking</li>
                  </ol>
                </div>

              <!--<div class="container px-1 px-md-4 py-5 mx-auto">-->
                <div class="card-body progress-showcase row">
                    <div class="col"><h4>Project Name: Enterprise Resource Planning (ERP) Implementation </h4>
                      <h5>Task Name: Business Process Analysis</h5>
                      <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <h5>Task Name: ERP System Selection</h5>
                          <div class="progress">
                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                    </div>
                </div>
                <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  <div class="card-body progress-showcase row">
                    <div class="col"><h4>Project Name: Digital Transformation Initiative</h4>
                      <h5>Task Name: Cloud Migration</h5>
                      <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <h5>Task Name: Hardware and Software Upgrades</h5>
                          <div class="progress">
                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                    </div>
                  </div>
                  <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    <div class="card-body progress-showcase row">
                      <div class="col"><h4>Project Name: Software Product Development: AI-Powered Virtual Assistant</h4>
                        <h5>Task Name: Requirement Gathering and Analysis</h5>
                        <div class="progress">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h5>Task Name: AI Model Development</h5>
                          <div class="progress">
                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                       
                      </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>

                 <div class="card-body progress-showcase row">
                    <div class="col"><h4>Project Name: AI-Powered Chatbot Development </h4>
                    <h5>Task Name: User Experience (UX) Design</h5>
                          <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 10%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                      <h5>Task Name: Natural Language Processing (NLP) Model Development</h5>
                      <div class="progress">
                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div> <h5>Task Name: Chatbot Architecture Design</h5>
                      <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 55%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>   
                      <h5>Task Name: integration with Backend Systems</h5>
                          <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          
                    </div>
                  </div>
                  <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  <div class="card-body progress-showcase row">
                    <div class="col"><h4>Project Name: Digital Infrastructure Enhancement Project </h4>
                      <h5>Task Name: Network Optimization</h5>
                      <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><h5>Task Name: Hardware and Software Upgrades</h5>
                      <div class="progress">
                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><h5>Task Name: Cybersecurity Strengthening</h5>
                      <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                     
                    </div>
                  </div>
                  <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  <div class="card-body progress-showcase row">
                    <div class="col"><h4>Project Name: Cloud Migration and Optimization Initiative </h4>
                    <h5>Task Name: Cloud Assessment and Strategy Planning</h5>
                      <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <h5>Task Name: Cloud Migration Execution</h5>
                      <div class="progress">
                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <h5>Task Name: Cloud Resource Optimization</h5>
                      <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <h5>Task Name: Cloud Security and Compliance</h5>
                      <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
             </div>
            </div>

        @include('layouts.footer')
</div>
</div>
@endsection
