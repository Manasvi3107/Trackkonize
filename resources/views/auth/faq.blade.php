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
                  <h3>FAQ</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">FAQ</li>
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
          <div class="container-fluid">
            <div class="faq-wrap">
              <div class="row">
                <div class="col-xl-4 xl-100 box-col-12">
                  <div class="card bg-primary">
                    <div class="card-body">
                      <div class="media faq-widgets">
                        <div class="media-body">
                          <h5>Articles</h5>
                          <p>TRACKKONIZE typically cover topics such as the importance of efficient resource allocation, effective task management, streamlined collaboration, progress tracking, performance evaluation, documentation, risk mitigation, reporting, compliance, and governance for organizational success.</p>
                        </div><i data-feather="file-text"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 xl-50 col-md-6 box-col-6">
                  <div class="card bg-primary">
                    <div class="card-body">
                      <div class="media faq-widgets">
                        <div class="media-body">
                          <h5>Knowledgebase</h5>
                          <p>A TRACKKONIZE knowledgebase provides concise information on various aspects, including resource allocation, task management, collaboration, progress tracking, performance evaluation, documentation, risk mitigation, reporting, compliance, and governance, aiding in efficient organizational operations.</p>
                        </div><i data-feather="book-open"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 xl-50 col-md-6 box-col-6">
                  <div class="card bg-primary">
                    <div class="card-body">
                      <div class="media faq-widgets">
                        <div class="media-body">
                          <h5>Support</h5>
                          <p>A TRACCKONIZE supports the efficient allocation of resources, task management, collaboration, progress monitoring, performance evaluation, documentation, risk management, reporting, compliance, and governance within organizations which is very much helpfull for the organization and for the users.</p>
                        </div><i data-feather="aperture"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="header-faq">
                    <h5 class="mb-0">Quick Questions are answered</h5>
                  </div>
                  <div class="row default-according style-1 faq-accordion" id="accordionoc">
                    <div class="col-xl-8 xl-60 col-lg-6 col-md-7 box-col-8">
                      <div class="card">
                        <div class="card-header">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseicon" aria-expanded="false" aria-controls="collapseicon"><i data-feather="help-circle"></i> How Resource Allocation helps in TRACKKONIZE?</button>
                          </h5>
                        </div>
                        <div class="collapse" id="collapseicon" aria-labelledby="collapseicon" data-parent="#accordionoc">
                          <div class="card-body">
                            <p>It helps in assigning the right employees to projects based on their skills, availability, and workload, ensuring optimal resource utilization.</p>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <h5 class="mb-2">
                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseicon2" aria-expanded="false" aria-controls="collapseicon2"><i data-feather="help-circle"></i> How Task Management works in TRACKKONIZE?</button>
                          </h5>
                        </div>
                        <div class="collapse" id="collapseicon2" data-parent="#accordionoc">
                          <div class="card-body">
                            <p>It facilitates the creation, assignment, and tracking of tasks, enabling efficient coordination and timely completion of project milestones.</p>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseicon5" aria-expanded="false"><i data-feather="help-circle"></i> How Performance Evaluation takes place in TRACKKONIZE?</button>
                          </h5>
                        </div>
                        <div class="collapse" id="collapseicon5" aria-labelledby="collapseicon5" data-parent="#accordionoc">
                          <div class="card-body">
                            <p>It assists in evaluating employee performance by tracking their contributions to projects, adherence to deadlines, and overall productivity.</p>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseicon3" aria-expanded="false" aria-controls="collapseicon2"><i data-feather="help-circle"></i>How Time Tracking works in TRACKKONIZE?</button>
                          </h5>
                        </div>
                        <div class="collapse" id="collapseicon3" data-parent="#accordionoc">
                          <div class="card-body">
                            <p> It allows employees to log their work hours accurately, aiding in project costing, billing, and performance evaluation. </p>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseicon4" aria-expanded="false" aria-controls="collapseicon2"><i data-feather="help-circle"></i>   What is Collaboration in TRACKKONIZE ?</button>
                          </h5>
                        </div>
                        <div class="collapse" id="collapseicon4" data-parent="#accordionoc">
                          <div class="card-body">
                            <p> It provides a centralized platform for team members to communicate, share files, and discuss ideas, fostering collaboration and knowledge sharing..</p>
                          </div>
                        </div>
                      </div>
                      <div class="faq-title">
                        <h6>Intellectual Property</h6>
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseicon5" aria-expanded="false"><i data-feather="help-circle"></i> User Interface Design:</button>
                          </h5>
                        </div>
                        <div class="collapse" id="collapseicon5" aria-labelledby="collapseicon5" data-parent="#accordionoc">
                          <div class="card-body">
                            <p>The design elements, layout, and usability features of the system's user interface may be considered part of its IP. This includes visual designs, interaction patterns, and user experience principles.</p>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseicon7" aria-expanded="false" aria-controls="collapseicon2"><i data-feather="help-circle"></i>   Software Code:</button>
                          </h5>
                        </div>
                        <div class="collapse" id="collapseicon7" data-parent="#accordionoc">
                          <div class="card-body">
                            <p>The source code of the software application itself is a crucial aspect of its IP. This includes algorithms, data structures, user interfaces, and any proprietary logic or methodologies used in the development of the system.</p>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseicon8" aria-expanded="false" aria-controls="collapseicon2"><i data-feather="help-circle"></i>Database Schema and Data Models:</button>
                          </h5>
                        </div>
                        <div class="collapse" id="collapseicon8" data-parent="#accordionoc">
                          <div class="card-body">
                            <p>The structure of the database and the way data is organized and stored within the system can be part of its IP. This includes schema designs, data relationships, and optimization techniques used for efficient data management.</p>
                          </div>
                        </div>
                      </div>
                      
                      <div class="card">
                        <div class="card-header">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseicon9" aria-expanded="false"><i data-feather="help-circle"></i> Algorithms and Logic:</button>
                          </h5>
                        </div>
                        <div class="collapse" id="collapseicon9" aria-labelledby="collapseicon9" data-parent="#accordionoc">
                          <div class="card-body">
                            <p>Any unique algorithms, heuristics, or decision-making logic employed within the system for tasks such as resource allocation, scheduling, prioritization, or automation may be protected as IP.</p>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseicon10" aria-expanded="false" aria-controls="collapseicon2"><i data-feather="help-circle"></i>Customization Frameworks: </button>
                          </h5>
                        </div>
                        <div class="collapse" id="collapseicon10" data-parent="#accordionoc">
                          <div class="card-body">
                            <p>If the system allows for customization or extensibility through plugins, modules, or scripting interfaces, the frameworks and APIs provided for this purpose may be part of its IP.</p>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseicon11" aria-expanded="false" aria-controls="collapseicon2"><i data-feather="help-circle"></i>Trade Secrets: </button>
                          </h5>
                        </div>
                        <div class="collapse" id="collapseicon11" data-parent="#accordionoc">
                          <div class="card-body">
                            <p> Confidential information, such as proprietary algorithms, business processes, or customer data handling procedures, may be protected as trade secrets under appropriate confidentiality agreements</p>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseicon12" aria-expanded="false" aria-controls="collapseicon2"><i data-feather="help-circle"></i>Integration Methods:</button>
                          </h5>
                        </div>
                        <div class="collapse" id="collapseicon12" data-parent="#accordionoc">
                          <div class="card-body">
                            <p>The methods and protocols used for integrating with external systems, services, or APIs may be considered proprietary if they offer unique functionality or efficiency compared to standard approaches and many more properties are there.</p>
                          </div>
                        </div>
                      </div>
                      <div class="faq-title">
                        <h6>User Accounts Facilities</h6>
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseicon13" aria-expanded="false"><i data-feather="help-circle"></i>User have Access Control:</button>
                          </h5>
                        </div>
                        <div class="collapse" id="collapseicon13" aria-labelledby="collapseicon13" data-parent="#accordionoc">
                          <div class="card-body">
                            <p> User accounts allow administrators to control who can access the system and what level of permissions they have. This ensures that sensitive information is only accessible to authorized individuals.</p>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseicon14" aria-expanded="false" aria-controls="collapseicon2"><i data-feather="help-circle"></i> User have Personalization right: </button>
                          </h5>
                        </div>
                        <div class="collapse" id="collapseicon14" data-parent="#accordionoc">
                          <div class="card-body">
                            <p> User accounts can be customized to reflect individual preferences, such as language settings, preferred dashboard views, or notification preferences, providing a personalized user experience.</p>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseicon16" aria-expanded="false" aria-controls="collapseicon2"><i data-feather="help-circle"></i> User also have Task Assignment right:</button>
                          </h5>
                        </div>
                        <div class="collapse" id="collapseicon16" data-parent="#accordionoc">
                          <div class="card-body">
                            <p>User accounts enable project managers to assign tasks to specific team members and track their progress. Each user can view their assigned tasks, deadlines, and priorities, helping to streamline workflow management.</p>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseicon17" aria-expanded="false" aria-controls="collapseicon2"><i data-feather="help-circle"></i>What is the purpose of user accounts?</button>
                          </h5>
                        </div>
                        <div class="collapse" id="collapseicon17" data-parent="#accordionoc">
                          <div class="card-body">
                            <p>User accounts in a TRACKKONIZE serve several critical purposes, enhancing functionality and security:</p>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseicon18" aria-expanded="false" aria-controls="collapseicon2"><i data-feather="help-circle"></i>Performance Evaluation: </button>
                          </h5>
                        </div>
                        <div class="collapse" id="collapseicon18" data-parent="#accordionoc">
                          <div class="card-body">
                            <p>User accounts enable managers to track individual performance metrics, such as task completion rates, time spent on tasks, and overall productivity. This information can be used for performance evaluations and identifying areas for improvement etc are the user account Facilities.</p>
                          </div>
                        </div>
                      </div>
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