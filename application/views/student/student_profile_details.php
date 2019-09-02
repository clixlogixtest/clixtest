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

     <!-- /main navbar -->
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
            <!--End Main sidebar -->


            <!-- Main content -->
            <div class="content-wrapper profiledetailwrap">
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
                <div class="user_detail">
                    <div class="content-group">
                        <div class="panel-body bg-indigo-400 border-radius-top text-center" style="background-image: url(http://demo.interface.club/limitless/assets/images/bg.png); background-size: contain;">
                            <div class="content-group-sm">
                                <h6 class="text-semibold no-margin-bottom">
                                    <?php echo $user_details['name'];?>
                                </h6>

                                <!-- <span class="display-block">Head of UX</span> -->
                            </div>

                    <a href="#" class="display-inline-block content-group-sm">
                        <?php if (!empty($user_details['image_url'])) { ?>
                        <img src="<?php echo base_url();?>assets/upload/user/<?php echo $user_details['image_url'];?>" class="img-circle img-responsive" alt="" style="width: 110px; height: 110px;">
                        <?php } else{ ?>
                        <img src="<?php echo base_url();?>assets/images/profile_pic.png" class="img-circle img-responsive" alt="" style="width: 110px; height: 110px;">
                        <?php } ?>
                    </a>

                            
                        </div>

                        <div class="panel no-border-top no-border-radius-top">
                            <ul class="details">
                                <li class="title">Profile Detail</li>
                                <li>
                                    <label class="cell"><i class="icon-user"></i> Name</label>
                                    <label class="data"><?php echo $profile['name'];?></label>
                                </li>
                                <li>
                                    <label class="cell"><i class="icon-envelop"></i> Email ID</label>
                                    <label class="data"><?php echo $user_details['email'];?></label>
                                </li>
                                <li>
                                    <label class="cell"><i class="icon-briefcase3"></i> Designation</label>
                                    <label class="data"><?php echo get_rolename_by_id($user_details['role']);?></label>
                                </li>
                                <li>
                                    <label class="cell"><i class="icon-phone"></i> Telephone No</label>
                                    <label class="data"><?php if (!empty($profile['phone'])) {
                                        echo $profile['phone'];}else{echo "N/A";}?></label>
                                </li>
                                <li>
                                    <label class="cell"><i class="icon-location4"></i> Address</label>
                                    <label class="data"><?php if (!empty($profile['address'])) {
                                        echo $profile['address'];}else{echo "N/A";}?></label>
                                </li>
                                <li>
                                    <label class="cell"><i class="icon-office"></i> Type of School</label>
                                    <label class="data"><?php if (!empty($profile['school'])) {
                                        echo get_school_by_id($profile['school']);}else{echo "N/A";}?></label>
                                </li>
                                <li>
                                    <label class="cell"><i class="icon-rating3"></i> Grade</label>
                                    <label class="data"><?php if (!empty($profile['grade'])) {
                                        echo get_grade_by_id($profile['grade']);}else{echo "N/A";}?></label>
                                </li>
                            </ul>
                            <div class="panel-footer text-center">
                                <!-- <button class="btn btn-primary bg-primary btn-rouded">Change Email ID</button> -->
                                <?php if ($user_details['login_type']=='1') { ?>
                                <a href="<?php echo site_url('student-change-password');?>"><button class="btn btn-primary bg-primary btn-rouded">Change Password</button></a>
                                <?php }?>
                                <a href="<?php echo site_url('student-edit-profile');?>"><button class="btn btn-primary bg-primary btn-rouded">Change profile details</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- /user details -->
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