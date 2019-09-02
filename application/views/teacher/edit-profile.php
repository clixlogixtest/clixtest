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
        <style type="text/css">
        .fileUpload {
            position: relative;
            overflow: hidden;
            margin: 10px;
        }
        .fileUpload input.upload {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            padding: 0;
            font-size: 20px;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
        }
    </style>
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
<div class="content-wrapper profiledetailwrap profiledetailwrap26">
    <div class="user_detail">
        <div class="content-group">
            <form method="POST" enctype="multipart/form-data" action="<?php echo site_url('teacher-edit-profile');?>">
            <div class="panel-body bg-indigo-400 border-radius-top text-center" style="background-image: url(http://demo.interface.club/limitless/<?php echo base_url();?>assets/images/bg.png); background-size: contain;">
                <div class="content-group-sm">
                    <h6 class="text-semibold no-margin-bottom">
                       <?php echo $teacher_details['name'];?>
                    </h6>

                    <!-- <span class="display-block">Head of UX</span> -->
                </div>

                <a href="#" class="display-inline-block content-group-sm profiledetail_imgupload_sub">
                    <img src="<?php echo base_url();?>assets/images/profile_pic.png" class="img-circle img-responsive" alt="">

                   <input type="file" id="profiledetail_input"/>
                    <div class="profiledetail_imgupload"><i class="icon-camera"></i></div>
                </a>


                <div class="circle">
                    <?php if (!empty($teacher_details['image_url'])) { ?>
                    <img id="profile-img-tag" src="<?php echo base_url();?>assets/upload/user/<?php echo $teacher_details['image_url'];?>" class="profile-pic" alt="">
                    <?php } else{ ?>
                    <img id="profile-img-tag" src="<?php echo base_url();?>assets/images/profile_pic.png" class="profile-pic" alt="">
                    <?php } ?>
                  </div>
                  <div class="fileUpload btn btn-primary">
                      <i class="fa fa-camera upload-button"></i>
                      <input class="upload" id="profile-img" name="profile_pic" type="file" accept="image/*"/>
                  </div>           
            </div>

                        <div class="panel no-border-top no-border-radius-top">
                            <ul class="details">
                                <li class="title">Profile Detail</li>
                                <li>
                                    <label class="cell"><i class="icon-user"></i>First Name</label>
                                    <label class="data"><input type="text" class="form-control" name="fname" value="<?php echo $profile['fname'];?>"></label>
                                    <?php echo form_error('fname'); ?>
                                </li>
                                <li>
                                    <label class="cell"><i class="icon-briefcase3"></i>Last Name</label>
                                    <label class="data"><input type="text" class="form-control" name="lname" value="<?php echo $profile['lname'];?>"></label>
                                    <?php echo form_error('lname'); ?>
                                </li>
                                <li>
                                    <label class="cell"><i class="icon-phone"></i> Telephone No</label>
                                    <label class="data"><input type="text" class="form-control" name="phone" value="<?php echo $profile['phone'];?>"></label>
                                    <?php echo form_error('phone'); ?>
                                </li>
                                <li>
                                    <label class="cell"><i class="icon-location4"></i> Address</label>
                                    <label class="data"><input type="text" class="form-control" name="address" value="<?php echo $profile['address'];?>"></label>
                                    <?php echo form_error('address'); ?>
                                </li>
                            </ul>
                            <div class="panel-footer text-center">
                               <button type="submit" class="btn bg-primary btn-rounded">Submit </button>
                            </div>
                        </div>
                        </form>
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
     <script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profile-img").change(function(){
        readURL(this);
    });
</script>
</body>

</html>