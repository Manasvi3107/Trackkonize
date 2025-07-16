@extends('layouts.frontapp')
   <!-- <body id="top">-->
		<!-- start preloader -->
		<section id="top">
		<div class="preloader">
			<div class="sk-spinner sk-spinner-wave">
     	 		<div class="sk-rect1"></div>
       			<div class="sk-rect2"></div>
       			<div class="sk-rect3"></div>
      	 		<div class="sk-rect4"></div>
      			<div class="sk-rect5"></div>
     		</div>
    	</div>
    	<!-- end preloader -->
      
        <!-- start navigation -->
		<nav class="navbar navbar-default templatemo-nav" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand"><img class="img-fluid" src="{{asset('assets')}}/images/logo/logo4.png" alt=""><link rel="shortcut icon"  type="image/x-icon"></a>
					
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#top">HOME</a></li>
						<li><a href="#about">ABOUT</a></li>
						<li><a href="#team">TEAM</a></li>
						<li><a href="#whyus">WHY US?</a></li>
						<li> <a class="form-group">
                            <button class="btn btn-primary btn-block" onclick="window.location.href='{{ url('login') }}'">Login</button></a></li>
					</ul>
				</div>
			</div>
		</nav>
		<section>
       <!-- end navigation -->

    	<!-- start home -->
    	<section id="home">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-offset-2 col-md-8">
    					<h1 class="wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">We manage website <span>awesomely</span></h1>
    					<div class="element">
                            <div class="sub-element">Hello, This is a EMPLOYEE AND PROJECT TRACKING SYSTEM.</div>
                            <div class="sub-element">TRACKKONIZE Website is Designed and provided by INFOMAX DIGITAL.</div>
                            <div class="sub-element">If you need this website, Please contact us.</div>
                        </div>
    					
    				</div>
    			</div>
    		</div>
    	</section>
        <!-- end home -->
<!-- start about -->
<section id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">WE ARE <span>TRACKKONIZE</span></h2>
    				</div>
					<div>
						<h3 class="text-center">Empower your team and elevate project efficiency with our cutting-edge Employee and Project Management System. Streamline your workflow, enhance collaboration, and achieve project success like never before.</h3>
					</div><br>
					<div>
						<h2 class="text-center" >About <span>Us</span></h2>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s">
						<div class="media">
							<div class="media-heading-wrapper">
								<div class="media-object pull-left">
									<i class="fa fa-mobile"></i>
								</div>
								<h3 class="media-heading">Employee Management:</h3>
							</div>
							<div class="media-body">
								<p>Effortlessly manage your workforce with a centralized platform. Keep track of employee details, performance metrics, and schedules. Simplify HR tasks and focus on strategic initiatives.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-offset="50" data-wow-delay="0.9s">
						<div class="media">
							<div class="media-heading-wrapper">
								<div class="media-object pull-left">
									<i class="fa fa-comment-o"></i>
								</div>
								<h3 class="media-heading"> Customizable Dashboards:</h3>
							</div>
							<div class="media-body">
								<p>Tailor your dashboard to meet your unique needs. Gain insights at a glance with customizable widgets, charts, and reports. Make informed decisions based on real-time data.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-offset="50" data-wow-delay="0.9s">
						<div class="media">
							<div class="media-heading-wrapper">
								<div class="media-object pull-left">
									<i class="fa fa-comment-o"></i>
								</div>
								<h3 class="media-heading">Project Collaboration:</h3>
							</div>
							<div class="media-body">
								<p>Boost team collaboration and productivity. Our system facilitates seamless communication, file sharing, and task assignment. Enhance project visibility and keep everyone on the same page.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
						<div class="media">
							<div class="media-heading-wrapper">
								<div class="media-object pull-left">
									<i class="fa fa-html5"></i>
								</div>
								<h3 class="media-heading"> Task Tracking and Monitoring:</h3>
							</div>
							<div class="media-body">
								<p>Stay on top of project tasks with real-time tracking and monitoring. Visualize project progress, identify bottlenecks, and ensure timely delivery of milestones.</p>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
						<div class="media">
							<div class="media-heading-wrapper">
								<div class="media-object pull-left">
									<i class="fa fa-html5"></i>
								</div>
								<h3 class="media-heading">  Leave Management Simplified:</h3>
							</div>
							<div class="media-body">
								<p>Empower your team with a user-friendly leave management system. Employees can request leaves, view balances, and receive approvals effortlessly. Managers benefit from a centralized dashboard for quick decision-making.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-offset="50" data-wow-delay="0.9s">
						<div class="media">
							<div class="media-heading-wrapper">
								<div class="media-object pull-left">
									<i class="fa fa-comment-o"></i>
								</div>
								<h3 class="media-heading">Time and Attendance:</h3>
							</div>
							<div class="media-body">
								<p>Efficiently manage employee attendance and working hours. Track project-related time to ensure accurate billing and resource allocation AND MANY MORE.</p>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>
<!-- end about -->
		


    	<!-- start team -->
    	<section id="team">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>TRACKKONIZE</span> TEAM</h2>
    				</div>
    				<div class="col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.3s">
    					<div class="team-wrapper">
    						<img src="{{asset('front-assets/images/manu1.jpg')}}" class="img-responsive" alt="team img 1">
    							<div class="team-des">
    								<h4>Manasvi Vaghela</h4>
    								<span>Designer</span>
									<p>The visionary behind our seamless interface. With a focus on user-centric experiences, Designer's blends creativity with functionality, ensuring an intuitive and visually stunning platform. Elevate your employee and project management experience – where every detail is purposefully crafted to enhance productivity. </p>
    							</div>
    					</div>
    				</div>
    				<div class="col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s">
    					<div class="team-wrapper">
    						<img src="{{asset('front-assets/images/dhari1.jpg')}}" class="img-responsive" alt="team img 2">
    							<div class="team-des">
    								<h4>Dharitasu Dabhi</h4>
    								<span>Developer</span>
    								<p>With a passion for precision and a knack for problem-solving, Developer brings our employee and project management system to life. From seamless integrations to robust functionalities, every line of code reflects their dedication to optimizing your workflow. Dive into efficiency – where Developer turns intricate complexities into user-friendly solutions.</p>
    							</div>
    					</div>
    				</div>
    				<div class="col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.3s">
    					<div class="team-wrapper">
    						<img src="{{asset('front-assets/images/jahanvi1.jpg')}}" class="img-responsive" alt="team img 3">
						   
    							<div class="team-des">
    								<h4>Jahanvi Bhrambhatt</h4>
    								<span>Manager</span>
    								<p> A seasoned professional in project and employee management, Manager ensures our system aligns seamlessly with your organizational goals. From strategic planning to efficient execution, their expertise guarantees a well-coordinated and successful experience. Experience a system meticulously crafted under Manager guidance – where projects thrive and teams flourish.</p>
    							</div>
    					</div>
    				</div>	
    			</div>
    		</div>
    	</section>
<!-- end team -->
<section id="whyus">
					<div>
						<h2 class="text-center" >Why to <span>Choose Us</span></h2>
					</div>
					<div>
						<h3 class="text-center">User-Friendly Interface:</h3>
						<p class="text-center">Our intuitive design ensures that both employees and administrators can navigate the system with ease. Little to no training required.</p>
					</div>
					<div>
						<h3 class="text-center" >Dedicated Support:</h3>
						<p class="text-center">Our customer support team is available to assist you with any queries or concerns. From implementation to ongoing support, we've got you covered.</p>
					</div>
					<div>
						<h3 class="text-center">Data Security:</h3>
						<p class="text-center">Your sensitive payroll data is in safe hands. We employ robust security measures to protect your information.</p>
					</div>
					<div>
						<h3 class="text-center">Security and Compliance:</h3>
						<p class="text-center">Rest easy with our robust security measures and compliance standards. Your data is protected and your privacy is our priority.</p>
					</div>
					<div>
						<h3 class="text-center">Enhanced Employee Experience:</h3>
						<p class="text-center">Empower your employees with a self-service portal. They can access their salary slips and manage leaves conveniently, promoting transparency and satisfaction.</p>
					</div>
					<div>
						<h3 class="text-center">Time Savings:</h3>
						<p class="text-center">Eliminate hours spent on manual calculations and paperwork. Our system automates the process, allowing you to focus on strategic tasks.</p>
					</div>
					<div>
						<h3 class="text-center">Error Reduction:</h3>
						<p class="text-center">Minimize the risk of errors associated with manual payroll processing. Our system automates calculations, reducing the chances of inaccuracies.</p>
					</div>
					<div>
						<h3 class="text-center">Improved Compliance:</h3>
						<p class="text-center">Stay compliant with changing regulations effortlessly. Our system is designed to adapt to evolving legal requirements.</p>
					</div>
					<div>
						<h3 class="text-center">Increased Productivity:</h3>
						<p class="text-center">Streamlined workflows and improved collaboration lead to enhanced productivity and project success.</p>
					</div>
					<div>
						<h3 class="text-center">Ready to Simplify Payroll and Leave Management?</h3>
						<p class="text-center">Experience the efficiency and accuracy of <span>TRACKKONIZE</span>. Contact us today and witness the transformation in your payroll and leave processes.</p>
					</div>
</section>
<!--</body>-->
<!--end whyus -->

@include("layouts.frontappfooter")