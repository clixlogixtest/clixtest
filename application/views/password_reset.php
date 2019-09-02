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

<body class="navbar-bottom login-container" style="background-image: url('assets/images/betterLearningBg2.png');background-repeat: no-repeat;background-position: center;background-size: cover;">

	<div class="navbar navbar-inverse bg-primary">
		<div class="navbar-header">
			<a	 class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt=""></a>

			<!-- <ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul> -->
		</div>
		</div>
	<!-- Page container -->
	<div class="page-container">

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
				<!-- Password recovery -->
				<form method="POST" action="<?php echo site_url('reset-password').'/'.$random_string;?>">
					<div class="panel panel-body login-form">
						<div class="text-center">
							<div class="icon-object border-warning text-warning"><i class="icon-spinner11"></i></div>
							<h5 class="content-group">Reset Password </h5>
						</div>

						<div class="form-group has-feedback">
							<input type="password" name="password" class="form-control" placeholder="Password" required>
							<input type="password" name="conf_password" class="form-control" placeholder="Confirm Password" required>
							<div class="form-control-feedback">
								<i class="icon-key text-muted"></i>
							</div>
							<?php echo form_error('password'); ?>
							<div class="form-control-feedback" style="top:40px;">
								<i class="icon-key text-muted"></i>
							</div>
							<?php echo form_error('conf_password'); ?>
						</div>

						<button type="submit" class="btn bg-blue btn-block">Reset password <i class="icon-arrow-right14 position-right"></i></button>
					</div>
				</form>
				<!-- /password recovery -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->


	<!-- Footer -->
	<div class="navbar navbar-default navbar-fixed-bottom footer">
		<ul class="nav navbar-nav visible-xs-block">
			<li><a class="text-center collapsed" data-toggle="collapse" data-target="#footer"><i class="icon-circle-up2"></i></a></li>
		</ul>

		<div class="navbar-collapse collapse" id="footer">
			<div class="navbar-text">
				&copy; 2016-2017 - <a href="#" class="navbar-link">Easy-Tutor</a>
				 <!-- by <a href="http://themeforest.net/user/Kopyov" class="navbar-link" target="_blank">Eugene Kopyov</a> -->
			</div>

			<div class="navbar-right">
				<ul class="nav navbar-nav">
					<li><a href="index.html">About</a></li>
					<li><a href="index.html">Terms</a></li>
					<li><a href="index.html">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /footer -->

</body>
</html>
