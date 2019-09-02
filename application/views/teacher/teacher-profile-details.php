<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>easy Tutor</title>
    <link rel="icon" href="../assets/images/icon.png" sizes="192x192" />
    <meta name="description" content="easy tutor, online tutor">
    <?php $this->load->view('teacher/include/teacher-top-header');?>
</head>
<body class="navbar-bottom">
    <?php $this->load->view('teacher/include/teacher-header');?>

    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main sidebar -->
            <?php 
                $this->load->view('teacher/include/teacher-sidemenu');
                $teacher_details = $this->session->userdata('teacher_logged_in');
            ?>
            <!-- /main sidebar -->


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
                                    <?php echo $teacher_details['name'];?>
                                </h6>

                                <span class="display-block"><?php echo get_rolename_by_id($teacher_details['role']);?></span>
                            </div>

                            <a href="#" class="display-inline-block content-group-sm">
                                <?php if (!empty($teacher_details['image_url'])) { ?>
                                <img id="profile-img-tag" src="<?php echo base_url();?>assets/upload/user/<?php echo $teacher_details['image_url'];?>" class="img-circle img-responsive" alt="" style="width: 110px; height: 110px;">
                                <?php } else{ ?>
                                <img id="profile-img-tag" src="<?php echo base_url();?>assets/images/profile_pic.png" class="img-circle img-responsive" alt="" style="width: 110px; height: 110px;">
                                <?php } ?>
                            </a>

                            
                        </div>

                        <div class="panel no-border-top no-border-radius-top">
                            <ul class="details">
                                <li class="title">Profile Detail</li>
                                <li>
                                    <label class="cell"><i class="icon-user"></i> Name</label>
                                    <label class="data"><?php echo $profile['fname']." ".$profile['lname'];?></label>
                                </li>
                                <li>
                                    <label class="cell"><i class="icon-envelop"></i> Email ID</label>
                                    <label class="data"><?php echo $teacher_details['email'];?></label>
                                </li>
                                <li>
                                    <label class="cell"><i class="icon-phone"></i> Telephone No</label>
                                    <label class="data"><?php echo $profile['phone'];?></label>
                                </li>
                                <li>
                                    <label class="cell"><i class="icon-location4"></i> Address</label>
                                    <label class="data"><?php if (!empty($profile['address'])) {
                                        echo $profile['address'];}else{echo "N/A";}?></label>
                                </li>
                                <li>
                                    <label class="cell"><i class="icon-book3"></i> Subject</label>
                                    <label class="data"><?php echo $subjects_list;?></label>
                                </li>
                            </ul>
                            <div class="panel-footer text-center">
                                <a href="<?php echo site_url('teacher-change-password');?>"><button class="btn btn-primary bg-primary btn-rouded">Change Password</button></a>
                                <a href="<?php echo site_url('teacher-edit-profile');?>"><button class="btn btn-primary bg-primary btn-rouded">Change profile deatils</button></a>
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
   <?php $this->load->view('teacher/include/teacher-footer');?>
    <!-- /footer -->

</body>

</html>