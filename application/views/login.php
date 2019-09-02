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
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/colors.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet" type="text/css">

	<!-- /global stylesheets -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/core/libraries/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/slick.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/aos.js"></script>
	<script src="<?php echo base_url();?>assets/js/custom.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/wizards/steps.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/styling/switch.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/core/libraries/jasny_bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/validation/validate.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/extensions/cookie.js"></script>

	<script type="text/javascript" src="<?php echo base_url();?>assets/js/core/app.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/pages/wizard_steps.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/pages/form_checkboxes_radios.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/ui/ripple.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/core/app.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/pages/login.js"></script>




</head>

<body class="login-container" style="background-image: url('assets/images/betterLearningBg2.png');background-repeat: no-repeat;
background-position: center;
background-size: cover;">
<!-- Main navbar -->
<div class="navbar navbar-inverse bg-primary">
	<div class="navbar-header">
		<a class="navbar-brand" href="<?php echo site_url();?>">
			<img src="<?php echo base_url();?>assets/images/logo.png" alt="">
		</a>
			<!-- <ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul> -->
		</div>

		<!-- <div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="#">
						<i class="icon-display4"></i> <span class="visible-xs-inline-block position-right"> Go to website</span>
					</a>
				</li>

				<li>
					<a href="#">
						<i class="icon-user-tie"></i> <span class="visible-xs-inline-block position-right"> Contact admin</span>
					</a>
				</li>

				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-cog3"></i>
						<span class="visible-xs-inline-block position-right"> Options</span>
					</a>
				</li>
			</ul>
		</div> -->
	</div>
	<!-- /main navbar -->
	<!-- Page container -->
	<div class="page-container pb-60">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">
				<?php if(!empty($this->session->flashdata('success'))) { ?>
                     <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo $this->session->flashdata('success'); ?>
                     </div>
                     <?php } ?>
                     <?php if(!empty($this->session->flashdata('failure'))) { ?>
                     <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo $this->session->flashdata('failure'); ?>
                     </div>
                     <?php } ?>
				<!-- Tabbed form -->
				<div class="tabbable panel login-form width-400">
					<ul class="nav nav-tabs nav-justified">
						<li class="active">
							<a href="#basic-tab1" data-toggle="tab">
								<h6>Sign in</h6>
							</a>
						</li>
						<li>
							<a href="#basic-tab2" data-toggle="tab">
								<h6>Register</h6>
							</a>
						</li>
					</ul>

					<div class="tab-content panel-body">
						<div class="tab-pane fade in active" id="basic-tab1">
							<form action="<?php echo site_url('login');?>" method="post">
								<div class="text-center">
									<div class="icon-object border-slate-300 text-slate-300">
										<i class="icon-reading"></i>
									</div>
									<h5 class="content-group">Login to your account
										<small class="display-block">Your credentials</small>
									</h5>
								</div>

								<div class="form-group has-feedback has-feedback-left">
									<input type="text" class="form-control" placeholder="E-Mail-Adress" name="login_email" required="required">
									<div class="form-control-feedback">
										<i class=" icon-envelop text-muted"></i>
									</div>
									<?php echo form_error('login_email'); ?>
								</div>

								<div class="form-group has-feedback has-feedback-left">
									<input type="password" class="form-control" placeholder="Password" name="login_password" required="required">
									<div class="form-control-feedback">
										<i class="icon-lock2 text-muted"></i>
									</div>
									<?php echo form_error('login_password'); ?>
								</div>

								<div class="form-group login-options">
									<div class="row">
										<div class="col-sm-6">
											<label class="checkbox-inline">
												<input type="checkbox" name="remember" class="styled"> Remember
											</label>
										</div>

										<div class="col-sm-6 text-right">
											<a href="<?php echo site_url('forgot-password');?>">Forgot password?</a>
										</div>
									</div>
								</div>

								<div class="form-group">
									<button type="submit" class="btn bg-primary btn-block btn-rounded btn-lg">Login
										<i class="icon-arrow-right14 position-right"></i>
									</button>
								</div>
							</form>

							<div class="content-divider text-muted form-group">
								<span>or sign in with</span>
							</div>
							<ul class="list-inline form-group list-inline-condensed text-center">
								<li>
									<a href="<?php echo $fb_url;?>" target="_bank" class="btn border-indigo text-indigo btn-flat btn-icon btn-rounded">
										<i class="icon-facebook"></i>
									</a>
								</li>
								<li>
									<a href="<?php echo $login_url;?>" target="_bank" class="btn border-pink-300 text-pink-300 btn-flat btn-icon btn-rounded">
										<i class="icon-google-plus"></i>
									</a>
								</li>
								
								
							</ul>

							
						</div>

						<div class="tab-pane fade" id="basic-tab2">

							<form name="registerform1" method="POST" action="<?php echo site_url('sign-up');?>">
								<div id="registercontinue">
								<div class="text-center">
									<div class="icon-object border-success text-success">
										<i class="icon-plus3"></i>
									</div>
									<h5 class="content-group">Create new account
										<small class="display-block">All fields are required</small>
									</h5>
								</div>

								<div class="form-group has-feedback has-feedback-left">
									<input type="email" id="email" name="email" class="form-control" placeholder="E-Mail-Adress" value="<?php echo set_value('email');?>" required>
									<div class="form-control-feedback">
										<i class="icon-envelop text-muted"></i>
									</div>
								</div>
								<?php echo form_error('email'); ?>

								<div class="form-group has-feedback has-feedback-left">
									<input type="password" id="password" name="password" class="form-control" placeholder="Password" value="<?php echo set_value('password');?>" required>
									<div class="form-control-feedback">
										<i class="icon-reading text-muted"></i>
									</div>
								</div>
								<?php echo form_error('password'); ?>

								<div class="form-group has-feedback has-feedback-left">
									<input type="password" id="confirmpassword" name="confirmpassword" class="form-control" placeholder="Confirm Password" value="<?php echo set_value('confirmpassword');?>" required>
									<div class="form-control-feedback">
										<i class="icon-reading text-muted"></i>
									</div>
								</div>
								<?php echo form_error('confirmpassword'); ?>

								<a type="" class="btn bg-primary btn-block btn-rounded btn-lg" onclick="ptonclick()">Continue
									<i class="icon-circle-right2 position-right"></i>
								</a>
								</div>
							
							<div id="registersection">

								<div class="text-center">
									<div class="icon-object border-success text-success">
										<i class="icon-plus3"></i>
									</div>
									<h5 class="content-group">Create new account
										<small class="display-block">All fields are required</small>
									</h5>
								</div>



								<div class="form-group select_teacher_option">
									<label class="display-block text-semibold formyouare2">You are:</label>
									<label class="radio-inline radio-right">
										Student <input type="radio" name="studentRdo" value="1" <?php if (set_value('studentRdo')=='1') { echo 'checked';}?> class="styled">
									</label>
									<label class="radio-inline radio-right">
										University-Student <input type="radio" name="studentRdo" value="2" <?php if (set_value('studentRdo')=='2') { echo 'checked';}?> class="styled">
									</label>

									<label class="radio-inline radio-right">
										Parent <input type="radio" name="studentRdo" value="3" <?php if (set_value('studentRdo')=='3') { echo 'checked';}?> class="styled">
									</label>

									
								</div>
								<div class="form-group has-feedback has-feedback-left" id="parentFindTeacher">
									<?php if ((set_value('studentRdo')=='3')) { ?>
									<input type="text" value="<?php echo set_value('parent_name');?>" name="parent_name" class="form-control" placeholder="Name of Parent" required><div class="form-control-feedback"><i class="icon-user text-muted"></i></div>
									<?php } echo form_error('parent_name'); ?>
								</div>
								<div class="form-group has-feedback has-feedback-left">
									<input type="text" name="student_name" value="<?php echo set_value('student_name');?>" class="form-control" placeholder="Name of Student" required>
									<div class="form-control-feedback">
										<i class="icon-reading text-muted"></i>
									</div>
								</div>
								<?php echo form_error('student_name'); ?>

								<div class="form-group has-feedback-left">
									<div class="form-control-feedback">
										<i class="icon-office text-muted"></i>
									</div>
									<select name="school_type" data-placeholder="Type of school" class="select" required>
										<option></option>
										<option value="">School Type</option>
										<option value="2" <?php if (set_value('school_type')=='2') { echo 'selected';}?>>School Type1</option>
										<option value="3" <?php if (set_value('school_type')=='3') { echo 'selected';}?>>School Type2</option>
										<option value="4" <?php if (set_value('school_type')=='4') { echo 'selected';}?>>School Type3</option>
									</select>
								</div>
								<?php echo form_error('school_type'); ?>

								<div class="form-group has-feedback-left">
									<div class="form-control-feedback">
										<i class="icon-sort-amount-desc text-muted"></i>
									</div>
									<select name="class_level" data-placeholder="Class Level" class="select" required>
										<option value="1" <?php if (set_value('class_level')=='1') { echo 'selected';}?>>Level 1</option>
										<option value="2" <?php if (set_value('class_level')=='2') { echo 'selected';}?>>Level 2</option>
										<option value="3" <?php if (set_value('class_level')=='3') { echo 'selected';}?>>Level 3</option>
									</select>
								</div>
								<?php echo form_error('class_level'); ?>

								<div class="form-group has-feedback has-feedback-left">
									<input type="text" name="registerphone" value="<?php echo set_value('registerphone');?>" class="form-control" placeholder="Mobile Number" required>
									<div class="form-control-feedback">
										<i class="icon-address-book3 text-muted"></i>
									</div>
								</div>
								<?php echo form_error('registerphone'); ?>

								<div class="form-group has-feedback has-feedback-left">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="registercheckbox" class="styled" required/>
											<small style="font-size:12px;">By registering, you are acetping our
												<a href="" class="text-primary">terms and condition and privacy policy</a>
											</small>
										</label>
									</div>
								</div>
								<button type="submit" class="btn bg-primary btn-block btn-rounded btn-lg">Register
									<i class="icon-circle-right2 position-right"></i>
								</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- /tabbed form -->

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
				<a href="#" class="navbar-link">Easy-Tutor</a>
				<!-- by <a href="http://themeforest.net/user/Kopyov" class="navbar-link" target="_blank">Eugene Kopyov</a> -->
			</div>

			<div class="navbar-right">
				<ul class="nav navbar-nav">
					<li>
						<a href="index.html">About</a>
					</li>
					<li>
						<a href="index.html">Terms</a>
					</li>
					<li>
						<a href="index.html">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /footer -->

</body>

</html>