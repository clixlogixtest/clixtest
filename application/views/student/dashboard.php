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
	<!-- <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css"> -->
	<?php $this->load->view('student/include/student-top-header'); ?>

	<body class="navbar-bottom">
	<?php $this->load->view('student/include/student-header');?>
	<!-- Page header -->
	<!-- <div class="page-header">
		<div class="breadcrumb-line">
			<ul class="breadcrumb">
				<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
				<li class="active">Dashboard</li>
			</ul>

			<ul class="breadcrumb-elements">
				<li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-gear position-left"></i>
						Settings
						<span class="caret"></span>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
						<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
						<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
						<li class="divider"></li>
						<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="page-header-content">
			<div class="page-title">
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Dashboard <small>Hello, Victoria!</small></h4>
			</div>

			<div class="heading-elements">
				<div class="heading-btn-group">
					<a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-bars-alt text-indigo-400"></i><span>Statistics</span></a>
					<a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-calculator text-indigo-400"></i><span>Invoices</span></a>
					<a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-calendar5 text-indigo-400"></i><span>Schedule</span></a>
				</div>
			</div>
		</div>
	</div> -->
	<!-- /page header -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<?php $this->load->view('student/include/student-side-menu');?>
			<!--End Main sidebar -->
			
			<!-- Main content -->
			<div class="content-wrapper dashbord">
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

					

					<table class="table datatable-basic upcomingtable">
						<thead>
							<tr>
								<th>Date</th>
								<th>Time</th>
								<th>Name</th>
								<th>Subject</th>
								<th>Duration</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>22 Jun 1972</td>
								<td>9:00 AM</td>
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
								<td>9:00 AM</td>
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
								<td>9:00 AM</td>
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
								<td>9:00 AM</td>
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
								<td>9:00 AM</td>
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
								<td>9:00 AM</td>
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
								<td>9:00 AM</td>
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
								<td>9:00 AM</td>
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
								<td>9:00 AM</td>
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
								<td>9:00 AM</td>
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
								<h2 class="panel-title text-center">My Teacher</h2>
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
					<div class="col-md-6 col-lg-5">
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
											<th>Subject</th>
											<th class="text-center">Easy Cloud</th>

										</tr>
									</thead>
									<tbody>
										<tr>

											<td>22 Jun 1972</td>
											<td>English</td>
											<td class="text-center">
												<span class="btn btn-xs bg-success-400 btn-rounded" onclick="window.location.href='selectteacher.html'">Join</span>
											</td>
										</tr>
										<tr>

											<td>22 Jun 1972</td>
											<td>Physics</td>
											<td class="text-center">
												<span class="btn btn-xs bg-success-400 btn-rounded" onclick="window.location.href='selectteacher.html'">Join</span>
											</td>
										</tr>
										<tr>

											<td>22 Jun 1972</td>
											<td>French</td>
											<td class="text-center">
												<span class="btn btn-xs bg-success-400 btn-rounded" onclick="window.location.href='selectteacher.html'">Join</span>
											</td>
										</tr>
										<tr>

											<td>22 Jun 1972</td>
											<td>English</td>
											<td class="text-center">
												<span class="btn btn-xs bg-success-400 btn-rounded" onclick="window.location.href='selectteacher.html'">Join</span>
											</td>
										</tr>
										<tr>

											<td>22 Jun 1972</td>
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
	<?php $this->load->view('student/include/student-footer');?>
	<!-- /footer -->

</body>

</html>