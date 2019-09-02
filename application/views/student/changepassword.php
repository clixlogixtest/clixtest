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
    <!-- /main navbar -->




    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main sidebar -->
            <?php 
            $this->load->view('student/include/student-side-menu');
            $user_details = $this->session->userdata('logged_in');
            ?>
            <!-- /main sidebar -->


            <!-- Main content -->
            <div class="content-wrapper changepasswrap">
                <div class="classAlert">
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
                  </div>
               	<!-- Unlock user -->
				<form method="POST" action="<?php echo site_url('student-change-password');?>" class="login-form changepassword">
					<div class="panel">
						<div class="panel-body">
							<div class="thumb thumb-rounded">
								<img src="<?php echo base_url();?>assets/images/profile_pic.png" alt="">
								<div class="caption-overflow">
									<span>
                                        
                                        <a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded btn-xs"><i class="icon-user-plus"></i></a>

									</span>
								</div>
							</div>

							<h6 class="content-group text-center text-semibold no-margin-top"><?php echo $user_details['name'];?> <small class="display-block">change password</small></h6>

							<div class="form-group has-feedback">
								<input type="password" name="old_password" class="form-control" required placeholder="Your password">
								<div class="form-control-feedback">
									<i class="icon-user-lock text-muted"></i>
								</div>
                                <?php echo form_error('old_password'); ?>
                            </div>
                            
							<div class="form-group has-feedback">
								<input type="password" name="password" class="form-control" required placeholder="New password">
								<div class="form-control-feedback">
									<i class="icon-lock5 text-muted"></i>
								</div>
                                <?php echo form_error('password'); ?>
                            </div>
                            <div class="form-group has-feedback">
								<input type="password" name="conf_password" class="form-control" required placeholder="Confirm password">
								<div class="form-control-feedback">
									<i class="icon-lock5 text-muted"></i>
								</div>
                                <?php echo form_error('conf_password'); ?>
							</div>
                            <div class="text-center full-width">
                            <button type="submit" class="btn bg-primary btn-rounded">Change Password<i class="icon-key position-right"></i></button>
                        </div>
							<!-- <a href="changeemail.html" class="btn bg-primary btn-primary btn-rounded">Change Email ID<i class="icon-envelop2 position-right"></i></a> -->
						</div>
					</div>
				</form>
				<!-- /unlock user -->
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