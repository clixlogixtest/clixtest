<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>easy Tutor</title>
	<link rel="icon" href="<?php echo base_url();?>assets/images/icon.png" sizes="192x192" />
	<meta name="description" content="easy tutor, online tutor">
	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/colors.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/parentstyle.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/pickers/daterangepicker.js"></script>



	<script type="text/javascript" src="<?php echo base_url();?>assets/js/core/app.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/pages/datatables_basic.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/ui/ripple.min.js"></script>



</head>

</head>

<body class="navbar-bottom">

	<!-- Main navbar -->
	<div class="navbar navbar-inverse bg-primary  navbar-fixed-top parenthome_header">
			<div class="navbar-header">
					<a data-toggle="collapse" data-target="#navbar-mobile" class=" mobile_show mobile_menu_toggle">
							<i class="icon-three-bars"></i>
						</a>
					
				<a class="navbar-brand" href="../index.html">
					<img src="<?php echo base_url();?>assets/images/logo.png" alt="">
				</a>
	
				<ul class="nav navbar-nav visible-xs-block">
					<li  class="mobile_hide">
						<a data-toggle="collapse" data-target="#navbar-mobile">
							<i class="icon-three-bars"></i>
						</a>
					</li>
					<li>
						<a class="sidebar-mobile-main-toggle">
							<i class="icon-user"></i>
						</a>
					</li>
				</ul>
			</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav middle-menu">
				<li>
					<a class="sidebar-control sidebar-main-toggle hidden-xs">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>

				<li class="nav-item">
						<a href="#" class="legitRipple">FIND TEACHER </a>
					</li>
					<li class="nav-item">
						<a href="" class="legitRipple">THIS IS HOW IT WORKS</a>
					</li>
					<li class="nav-item">
						<a href="" class="legitRipple">PRICES</a>
					</li>
					<li class="nav-item">
						<a href="" class="legitRipple">CONTACT US</a>
					</li>
					 <li class="nav-item">
						<a href="" class="legitRipple">BOOK FOR GROUP SESSION</a>
					</li>
			</ul>

			<!-- <p class="navbar-text"><span class="label bg-success-400">Online</span></p> -->

			<ul class="nav navbar-nav navbar-right">
				<!-- <li class="dropdown language-switch">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="assets/images/flags/gb.png" class="position-left" alt="">
						English
						<span class="caret"></span>
					</a>

					<ul class="dropdown-menu">
						<li><a class="deutsch"><img src="assets/images/flags/de.png" alt=""> Deutsch</a></li>
						<li><a class="ukrainian"><img src="assets/images/flags/ua.png" alt=""> Українська</a></li>
						<li><a class="english"><img src="assets/images/flags/gb.png" alt=""> English</a></li>
						<li><a class="espana"><img src="assets/images/flags/es.png" alt=""> España</a></li>
						<li><a class="russian"><img src="assets/images/flags/ru.png" alt=""> Русский</a></li>
					</ul>
				</li> -->
				<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-envelop3"></i>
							<span class="visible-xs-inline-block position-right">Messages</span>
							<span class="badge bg-warning-400">2</span>
						</a>
	
						<div class="dropdown-menu dropdown-content width-350">
							<div class="dropdown-content-heading">
								Messages
								<ul class="icons-list">
									<li>
										<a href="#">
											<i class="icon-compose"></i>
										</a>
									</li>
								</ul>
							</div>
	
							<ul class="media-list dropdown-content-body">
								<li class="media">
									<div class="media-left">
										<img src="<?php echo base_url();?>assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
										<span class="badge bg-danger-400 media-badge">5</span>
									</div>
	
									<div class="media-body">
										<a href="#" class="media-heading">
											<span class="text-semibold">James Alexander</span>
											<span class="media-annotation pull-right">04:58</span>
										</a>
	
										<span class="text-muted">who knows, maybe that would be the best thing for me...</span>
									</div>
								</li>
	
								<li class="media">
									<div class="media-left">
										<img src="<?php echo base_url();?>assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
										<span class="badge bg-danger-400 media-badge">4</span>
									</div>
	
									<div class="media-body">
										<a href="#" class="media-heading">
											<span class="text-semibold">Margo Baker</span>
											<span class="media-annotation pull-right">12:16</span>
										</a>
	
										<span class="text-muted">That was something he was unable to do because...</span>
									</div>
								</li>
	
								<li class="media">
									<div class="media-left">
										<img src="<?php echo base_url();?>assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-heading">
											<span class="text-semibold">Jeremy Victorino</span>
											<span class="media-annotation pull-right">22:48</span>
										</a>
	
										<span class="text-muted">But that would be extremely strained and suspicious...</span>
									</div>
								</li>
	
								<li class="media">
									<div class="media-left">
										<img src="<?php echo base_url();?>assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-heading">
											<span class="text-semibold">Beatrix Diaz</span>
											<span class="media-annotation pull-right">Tue</span>
										</a>
	
										<span class="text-muted">What a strenuous career it is that I've chosen...</span>
									</div>
								</li>
	
								<li class="media">
									<div class="media-left">
										<img src="<?php echo base_url();?>assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-heading">
											<span class="text-semibold">Richard Vango</span>
											<span class="media-annotation pull-right">Mon</span>
										</a>
	
										<span class="text-muted">Other travelling salesmen live a life of luxury...</span>
									</div>
								</li>
							</ul>
	
							<div class="dropdown-content-footer">
								<a href="#" data-popup="tooltip" title="All messages">
									<i class="icon-menu display-block"></i>
								</a>
							</div>
						</div>
					</li>
				<li class="dropdown">
						<a href="#" class="dropdown-toggle animation" data-animation="shake" data-toggle="dropdown">
							<i class="icon-bell2"></i>                         <span class="visible-xs-inline-block position-right">Notification</span>
							<span class="badge bg-warning-400">12</span>
						</a>
						
						<div class="dropdown-menu dropdown-content">
							<!-- <div class="dropdown-content-heading">
								Users online
								<ul class="icons-list">
									<li><a href="#"><i class="icon-gear"></i></a></li>
								</ul>
							</div> -->
	
							<ul class="media-list dropdown-content-body width-300">
								<li class="media">
									<div class="media-left"><img src="<?php echo base_url();?>assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
									<div class="media-body">
										<a href="#" class="media-heading text-semibold">Jordana Ansley</a>
										<span class="display-block text-muted text-size-small">Lead web developer</span>
									</div>
									<div class="media-right media-middle"><span class="status-mark border-success"></span></div>
								</li>
	
								<li class="media">
									<div class="media-left"><img src="<?php echo base_url();?>assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
									<div class="media-body">
										<a href="#" class="media-heading text-semibold">Will Brason</a>
										<span class="display-block text-muted text-size-small">Marketing manager</span>
									</div>
									<div class="media-right media-middle"><span class="status-mark border-danger"></span></div>
								</li>
	
								<li class="media">
									<div class="media-left"><img src="<?php echo base_url();?>assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
									<div class="media-body">
										<a href="#" class="media-heading text-semibold">Hanna Walden</a>
										<span class="display-block text-muted text-size-small">Project manager</span>
									</div>
									<div class="media-right media-middle"><span class="status-mark border-success"></span></div>
								</li>
	
								<li class="media">
									<div class="media-left"><img src="<?php echo base_url();?>assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
									<div class="media-body">
										<a href="#" class="media-heading text-semibold">Dori Laperriere</a>
										<span class="display-block text-muted text-size-small">Business developer</span>
									</div>
									<div class="media-right media-middle"><span class="status-mark border-warning-300"></span></div>
								</li>
	
								<li class="media">
									<div class="media-left"><img src="<?php echo base_url();?>assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
									<div class="media-body">
										<a href="#" class="media-heading text-semibold">Vanessa Aurelius</a>
										<span class="display-block text-muted text-size-small">UX expert</span>
									</div>
									<div class="media-right media-middle"><span class="status-mark border-grey-400"></span></div>
								</li>
							</ul>
	
							<div class="dropdown-content-footer">
								<a href="#" data-popup="tooltip" title="All users"><i class="icon-menu display-block"></i></a>
							</div>
						</div>
					</li>
				

				<li class="dropdown dropdown-user mobile_hide">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="<?php echo base_url();?>assets/images/profile_pic.png" alt="">
						<span>Victoria</span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li>
							<a href="profile_detail.html">
							<i class="icon-user-plus"></i> My profile</a>
							</li>
							<li>
							<a href="">
							<i class="icon-stack-empty"></i> My Products</a>
							</li>
							<li>
							<a href="message.html">
							<span class="badge bg-teal-400 pull-right">58</span>
							<i class="icon-comment-discussion"></i> Messages</a>
							</li>
							<li class="divider"></li>
							<li>
							<a href="<?php echo site_url('parent-logout');?>">
							<i class="icon-switch2"></i> Logout</a>
							</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main sidebar-default">
					<div class="sidebar-content">

							<!-- Main navigation -->
							<div class="sidebar-category sidebar-category-visible">
								<div class="sidebar-user-material">
									<div class="category-content">
										<div class="sidebar-user-material-content">
											<a href="#">
												<img src="<?php echo base_url();?>assets/images/profile_pic.png" class="img-circle img-responsive" alt="">
											</a>
											<h6>Victoria Baker</h6>
											<span class="text-size-small">Santa Ana, CA</span>
										</div>
		
										<div class="sidebar-user-material-menu mobile_hide">
											<a href="#user-nav" data-toggle="collapse">
												<span>My account</span>
												<i class="caret"></i>
											</a>
										</div>
									</div>
		
									<div class="navigation-wrapper collapse" id="user-nav">
										<ul class="navigation">
											<li class="mobile_hide">
												<a href="profile_detail.html">
													<i class="icon-user-plus"></i>
													<span>My profile</span>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="icon-coins"></i>
													<span>My products</span>
												</a>
											</li>
											<li class="mobile_hide">
												<a href="#">
													<i class="icon-comment-discussion"></i>
													<span>
														<span class="badge bg-teal-400 pull-right">58</span> Messages</span>
												</a>
											</li>
											<li class="divider"></li>
											<li>
												<a href="#">
													<i class="icon-cog5"></i>
													<span>Obsolete</span>
												</a>
											</li>
											<li class="mobile_hide">
												<a href="<?php echo site_url('parent-logout');?>">
													<i class="icon-switch2"></i>
													<span>Logout</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
		
								<div class="category-content no-padding">
		
									<ul class="navigation navigation-main navigation-accordion">
		
										<!-- Main -->
										<li class="navigation-header">
											<span>Main</span>
											<i class="icon-menu" title="Main pages"></i>
										</li>
										<li class="active">
												<a href="dashboard.html">
													<i class="icon-home4"></i>
													<span>Dashboard</span>
												</a>
											</li>
											
											<li>
													<a href="appointmentCalender.html">
														<i class="icon-calendar3"></i>
														<span>Appointment Calender</span>
													</a>
												</li>
											<li>
												<a href="myproduct.html">
													<i class="icon-stack-empty"></i>
													<span>All My Products</span>
												</a>
											</li>
											<li>
                                                    <a href="all_appointments.html" class="legitRipple">
                                                        <i class="icon-user-check"></i>
                                                        <span>All Appointment</span>
                                                    </a>
                                                </li>
											<li>
												<a href="">
												<i class="icon-bag"></i>
												<span>Buy Packages</span>
												</a>
												</li>
												
											<li>
												<a href="/login.html#basic-tab2">
													<i class="icon-users2"></i>
													<span>Create A Child Account</span>
												</a>
											</li>
											
											<li class="mobile_show mobile_logout">
													<a href="<?php echo site_url('parent-logout');?>">
													<i class="icon-switch2"></i>
													<span>Logout</span>
													</a>
													</li>
										<!-- /page kits -->
		
									</ul>
		
								</div>
							</div>
							<!-- /main navigation -->
		
						</div>
			</div>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper dashbord  parenthomedashbordwrap34">
					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h2 class="panel-title text-center dashbordupcominghead">Upcoming Session</h2>
							<div class="panel_view viewappoinment_12">
								<a href="all_appointments.html">View All Appointments</a>
							</div>
							<div class="heading-elements">
								<ul class="icons-list">
									<li>
										<a data-action="collapse"></a>
									</li>
									<li>
										<a data-action="reload"></a>
									</li>
									<li>
										<a data-action="close"></a>
									</li>
								</ul>
							</div>
						</div>
	
						
	
						<table class="table datatable-basic upcomingtable parenthomedashbord34">
							<thead>
								<tr>
									<th>Date</th>
									<th>Time <span class="parentstudent">Student</span></th>
									<th>Teacher</th>
									<th>Subject</th>
									<th>Duration</th>
									<th></th>
									
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>22 Jun 1972</td>
									<td>9:00 AM <span class="parentstudent">Vikash</span></td>
									<td>John Deo</td>
									<td>
	
										Maths
									</td>
									<td>
										1 Hour
									</td>
									<td>
										<span class="label label-success label-rounded">Join</span>
										<a href="teacherevent.html">
											<span class="label label-warning label-rounded label-lg">Reschedule</span>
										</a>
									</td>
								</tr>
								<tr>
									<td>22 Jun 1972</td>
									<td>9:00 AM <span class="parentstudent">Shrikant</span></td>
									<td>Marth</td>
									<td>
										Physics
									</td>
									<td>
										1:30 Hour
									</td>
									<td>
										<span class="label label-success label-rounded">Join</span>
										<a href="teacherevent.html">
											<span class="label label-warning label-rounded label-lg">Reschedule</span>
										</a>
									</td>
								</tr>
								<tr>
									<td>22 Jun 1972</td>
									<td>9:00 AM <span class="parentstudent">John Doe</span></td>
									<td>Assamam</td>
									<td>
										English
									</td>
									<td>
										1 Hour
									</td>
									<td>
										<span class="label label-success label-rounded">Join</span>
										<a href="teacherevent.html">
											<span class="label label-warning label-rounded label-lg">Reschedule</span>
										</a>
									</td>
								</tr>
								<tr>
									<td>22 Jun 1972</td>
									<td>9:00 AM <span class="parentstudent">Vikash</span></td>
									<td>Adams</td>
									<td>
										Maths
									</td>
									<td>
										2 Hour
									</td>
									<td>
										<span class="label label-success label-rounded">Join</span>
										<a href="teacherevent.html">
											<span class="label label-warning label-rounded label-lg">Reschedule</span>
										</a>
									</td>
								</tr>
								<tr>
									<td>22 Jun 1972</td>
									<td>9:00 AM <span class="parentstudent">Shrikant</span></td>
									<td>Naukarinami</td>
									<td>
										Physics
									</td>
									<td>
										1:30 Hour
									</td>
									<td>
										<span class="label label-success label-rounded">Join</span>
										<a href="teacherevent.html">
											<span class="label label-warning label-rounded label-lg">Reschedule</span>
										</a>
									</td>
								</tr>
								<tr>
									<td>22 Jun 1972</td>
									<td>9:00 AM <span class="parentstudent">John Doe</span></td>
									<td>Paul Harbous</td>
									<td>
										English
									</td>
									<td>
										1 Hour
									</td>
									<td>
										<span class="label label-success label-rounded">Join</span>
										<a href="teacherevent.html">
											<span class="label label-warning label-rounded label-lg">Reschedule</span>
										</a>
									</td>
								</tr>
								<tr>
									<td>22 Jun 1972</td>
									<td>9:00 AM <span class="parentstudent">Vikash</span></td>
									<td>Paul Marks</td>
									<td>
										Maths
									</td>
									<td>
										1 Hour
									</td>
									<td>
										<span class="label label-success label-rounded">Join</span>
										<a href="teacherevent.html">
											<span class="label label-warning label-rounded label-lg">Reschedule</span>
										</a>
									</td>
								</tr>
								<tr>
									<td>22 Jun 1972</td>
									<td>9:00 AM <span class="parentstudent">Shrikant</span></td>
									<td>AM Adams</td>
									<td>
										Physics
									</td>
									<td>
										2 Hour
									</td>
									<td>
										<span class="label label-success label-rounded">Join</span>
										<a href="teacherevent.html">
											<span class="label label-warning label-rounded label-lg">Reschedule</span>
										</a>
									</td>
								</tr>
								<tr>
									<td>22 Jun 1972</td>
									<td>9:00 AM <span class="parentstudent">John Doe</span></td>
									<td>Sresha Nani</td>
									<td>
										English
									</td>
									<td>
										1 Hour
									</td>
									<td>
										<span class="label label-success label-rounded">Join</span>
										<a href="teacherevent.html">
											<span class="label label-warning label-rounded label-lg">Reschedule</span>
										</a>
									</td>
								</tr>
								<tr>
									<td>22 Jun 1972</td>
									<td>9:00 AM <span class="parentstudent">Vikash</span></td>
									<td>Srikant</td>
									<td>
										Physics
									</td>
									<td>
										1:30 Hour
									</td>
									<td>
										<span class="label label-success label-rounded">Join</span>
										<a href="teacherevent.html">
											<span class="label label-warning label-rounded label-lg">Reschedule</span>
										</a>
									</td>
								</tr>
	
	
	
							</tbody>
						</table>
	
					</div>
					<!-- /basic datatable -->
					<div class="row">
						<div class="col-md-6 col-lg-7">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h2 class="panel-title text-center">Teacher Hired</h2>
									<div class="heading-elements">
										<ul class="icons-list">
											<li>
												<a data-action="collapse"></a>
											</li>
											<li>
												<a data-action="reload"></a>
											</li>
											<li>
												<a data-action="close"></a>
											</li>
										</ul>
									</div>
								</div>
								<div class="datatable-scroll">
									<table class="table  datatable-scroll-y dashboard_myteacher">
										<thead>
											<tr>
												<th>Name</th>
												<th class="text-center">Book</th>
												<th class="text-center">Message</th>
											</tr>
										</thead>
										<tbody>
	
											<tr>
												<td>
													<div class="media">
														<div class="media-left media-middle">
															<img src="<?php echo base_url();?>assets/images/profile_pic.png" height="auto" width="40px" />
														</div>
														<small class="media-right">John Deo
															<br>
															<i class="text-info">English</i>
														</small>
													</div>
												</td>
												<td class="text-center">
													<a href="teacherevent.html">
														<span class="btn btn-rounded btn-xs bg-indigo-800">
															<i class="icon-calendar3"></i> Book</span>
													</a>
												</td>
												<td class="text-center">
													<span class="btn btn-rounded btn-xs bg-info-800">
														<i class="icon-envelop"></i> Message</span>
												</td>
	
											</tr>
											<tr>
	
												<td>
													<div class="media">
														<div class="media-left media-middle">
															<img src="<?php echo base_url();?>assets/images/profile_pic.png" height="auto" width="40px" />
														</div>
														<small class="media-right">Adams
															<br>
															<i class="text-info">English</i>
														</small>
													</div>
												</td>
												<td class="text-center">
													<a href="teacherevent.html">
														<span class="btn btn-rounded btn-xs bg-indigo-800">
															<i class="icon-calendar3"></i> Book</span>
													</a>
												</td>
												<td class="text-center">
													<span class="btn btn-rounded btn-xs bg-info-800">
														<i class="icon-envelop"></i> Message</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="media">
														<div class="media-left media-middle">
															<img src="<?php echo base_url();?>assets/images/profile_pic.png" height="auto" width="40px" />
														</div>
														<small class="media-right">Shrikant
															<br>
															<i class="text-info">Science</i>
														</small>
													</div>
												</td>
												<td class="text-center">
													<a href="teacherevent.html">
														<span class="btn btn-rounded btn-xs bg-indigo-800">
															<i class="icon-calendar3"></i> Book</span>
													</a>
												</td>
												<td class="text-center">
													<span class="btn btn-rounded btn-xs bg-info-800">
														<i class="icon-envelop"></i> Message</span>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="panel-footer text-center">
									<button class="btn btn-primary btn-rounded">Find New Teacher</button>
								</div>
	
							</div>
						</div>
						<div class="col-md-6 col-lg-5 parentdashbordrecentfile">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h2 class="panel-title text-center">Recently used files</h2>
									<div class="heading-elements">
										<ul class="icons-list">
											<li>
												<a data-action="collapse"></a>
											</li>
											<li>
												<a data-action="reload"></a>
											</li>
											<li>
												<a data-action="close"></a>
											</li>
										</ul>
									</div>
								</div>
								<div class="datatable-scroll">
									<table class="table">
										<thead>
											<tr>
	
												<th style="width:130px;">Date</th>
												<th>Student</th>
												<th>Subject</th>
												<th class="text-center">Easy Cloud</th>
	
											</tr>
										</thead>
										<tbody>
											<tr>
	
												<td>22 Jun 1972</td>
												<td>Vikash</td>
												<td>English</td>
												<td class="text-center">
													<span class="btn btn-xs bg-success-400 btn-rounded" onclick="window.location.href='selectteacher.html'">Join</span>
												</td>
											</tr>
											<tr>
	
												<td>22 Jun 1972</td>
												<td>Shrikant</td>
												<td>Physics</td>
												<td class="text-center">
													<span class="btn btn-xs bg-success-400 btn-rounded" onclick="window.location.href='selectteacher.html'">Join</span>
												</td>
											</tr>
											<tr>
	
												<td>22 Jun 1972</td>
												<td>Vikash</td>
												<td>French</td>
												<td class="text-center">
													<span class="btn btn-xs bg-success-400 btn-rounded" onclick="window.location.href='selectteacher.html'">Join</span>
												</td>
											</tr>
											<tr>
	
												<td>22 Jun 1972</td>
												<td>Shrikant</td>
												<td>English</td>
												<td class="text-center">
													<span class="btn btn-xs bg-success-400 btn-rounded" onclick="window.location.href='selectteacher.html'">Join</span>
												</td>
											</tr>
											<tr>
	
												<td>22 Jun 1972</td>
												<td>John Doe</td>
												<td>English</td>
												<td class="text-center">
													<span class="btn btn-xs bg-success-400 btn-rounded" onclick="window.location.href='selectteacher.html'">Join</span>
												</td>
											</tr>
	
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-lg-7 dashbord_allpast2">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h2 class="panel-title text-center Past_Session_Head">Past Session</h2>
									<div class="panel_view viewappoinment_12 pastbtn21">
										<a href="#">All Past Appointments</a>
									</div>
									<div class="heading-elements">
										<ul class="icons-list">
											<li>
												<a data-action="collapse"></a>
											</li>
											<li>
												<a data-action="reload"></a>
											</li>
											<li>
												<a data-action="close"></a>
											</li>
										</ul>
									</div>
								</div>
								<div class="datatable-scroll">
									<table class="table  datatable-scroll-y dashbord_pastsection">
										<thead>
											<tr>
	
												<th>Date</th>
												<th style="padding-left:40px; width:100px;">Time</th>
												<th>Student</th>
												<th>Teacher</th>
												<th>Duration</th>
											</tr>
										</thead>
										<tbody>
											<tr>
	
												<td>
													22/11/2017
												</td>
												<td>
													<i class="icon-clock"></i>&nbsp;9:00 AM
												</td>
												<td>Vikash</td>
												<td>
													<small>John Deo
														<br>
														<i class="text-info">English</i>
													</small>
												</td>
												<td>1 Hour</td>
											</tr>
											<tr>
	
												<td>
													22/11/2017
												</td>
												<td>
													<i class="icon-clock"></i>&nbsp;9:00 AM
												</td>
												<td>Shrikant</td>
												<td>
													<small>John Deo
														<br>
														<i class="text-info">English</i>
													</small>
												</td>
												<td>1 Hour</td>
											</tr>
											<tr>
	
												<td>
													22/11/2017
												</td>
												<td>
													<i class="icon-clock"></i>&nbsp;9:00 AM
												</td>
												<td>John Doe</td>
												<td>
													<small>John Deo
														<br>
														<i class="text-info">English</i>
													</small>
												</td>
												<td>1 Hour</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-5">
							<div class="panel panel-flat hr_container">
								<div class="panel-heading">
									<h2 class="panel-title text-center">Hours Counter</h2>
									<div class="heading-elements">
										<ul class="icons-list">
											<li>
												<a data-action="collapse"></a>
											</li>
											<li>
												<a data-action="reload"></a>
											</li>
											<li>
												<a data-action="close"></a>
											</li>
										</ul>
									</div>
								</div>
								<div class="datatable-scroll">
									<table class="table">
										<thead>
											<tr>
												<th>Subject</th>
												<th class="text-center">Hours</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>English</td>
												<td class="text-center">3:00 hours</td>
											</tr>
											<tr>
												<td>Physics</td>
												<td class="text-center">4:30 hours</td>
											</tr>
											<tr>
												<td>French</td>
												<td class="text-center">5:30 hours</td>
											</tr>
										</tbody>
										<tfoot>
											<tr>
												<td class="text-primary">
													<h6>Total Hours</h6>
												</td>
												<td>
													<p class="text-center">30 hours</p>
												</td>
											</tr>
											<tr>
												<td>
													<span class="text-info-800">REMAINING HOURS</span>
												</td>
												<td>
													<p>5338 hour</p>
												</td>
											</tr>
	
										</tfoot>
									</table>
								</div>
							</div>
						</div>
	
	
					</div>
	
	
				</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->


	<!-- Footer -->
	<div class="navbar navbar-default navbar-fixed-bottom footer">
		<ul class="nav navbar-nav visible-xs-block">
			<li>
				<a class="text-center collapsed" data-toggle="collapse" data-target="#footer">
					<i class="icon-circle-up2"></i>
				</a>
			</li>
		</ul>

		<div class="navbar-collapse collapse" id="footer">
			<div class="navbar-text">
				&copy; 2016-2017 -
				<a href="../index.html" class="navbar-link">Easy-Tutor</a>
			</div>

			<div class="navbar-right">
				<ul class="nav navbar-nav">
					<li>
						<a href="#">About</a>
					</li>
					<li>
						<a href="#">Terms</a>
					</li>
					<li>
						<a href="#">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /footer -->

</body>

</html>