<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>easy Tutor</title>
    <link rel="icon" href="<?php echo base_url();?>assets/images/icon.png" sizes="192x192" />
    <meta name="description" content="easy tutor, online tutor">
    <?php $this->load->view('student/include/student-top-header'); ?>
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

    <!-- Main navbar -->
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
<div class="content-wrapper profiledetailwrap profiledetailwrap26">
    <div class="user_detail">
        <div class="content-group">
            <form method="POST" enctype="multipart/form-data" action="<?php echo site_url('student-edit-profile');?>">
            <div class="panel-body bg-indigo-400 border-radius-top text-center" style="background-image: url(http://demo.interface.club/limitless/<?php echo base_url();?>assets/images/bg.png); background-size: contain;">
                <div class="content-group-sm">
                    <h6 class="text-semibold no-margin-bottom">
                       <?php echo $user_details['name'];?>
                    </h6>

                    <!-- <span class="display-block">Head of UX</span> -->
                </div>

                <a href="#" class="display-inline-block content-group-sm profiledetail_imgupload_sub">
                    <img src="<?php echo base_url();?>assets/images/profile_pic.png" class="img-circle img-responsive" alt="">

                   <input type="file" id="profiledetail_input"/>
                    <div class="profiledetail_imgupload"><i class="icon-camera"></i></div>
                </a>





                <div class="circle">
                    <?php if (!empty($user_details['image_url'])) { ?>
                    <img id="profile-img-tag" src="<?php echo base_url();?>assets/upload/user/<?php echo $user_details['image_url'];?>" class="profile-pic" alt="">
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
                        <label class="cell"><i class="icon-user"></i> Name</label>
                        <label class="data"><input type="text" name="student_name" class="form-control" value="<?php echo $profile['name'];?>" required></label>
                        <?php echo form_error('student_name'); ?>
                    </li>
                    <!-- <li>
                        <label class="cell"><i class="icon-envelop"></i> Email ID</label>
                        <label class="data"><input type="text" name="email" class="form-control" value="<?php echo $user_details['email'];?>" required></label>
                    </li>
                    <li>
                        <label class="cell"><i class="icon-briefcase3"></i> Designation</label>
                        <label class="data"><input type="text" name="role" class="form-control" value="<?php echo get_rolename_by_id($user_details['role']);?>" required></label>
                    </li> -->
                    <li>
                        <label class="cell"><i class="icon-phone"></i> Telephone No</label>
                        <label class="data"><input type="text" name="registerphone" class="form-control" value="<?php if (!empty($profile['phone'])) { echo $profile['phone'];}?>" required></label>
                        <?php echo form_error('registerphone'); ?>
                    </li>
                    <li>
                        <label class="cell"><i class="icon-location4"></i> Address</label>
                        <label class="data"><input type="text" name="address" class="form-control" value="<?php if (!empty($profile['address'])) { echo $profile['address'];}?>" required></label>
                        <?php echo form_error('address'); ?>
                    </li>
                    <li>
                        <label class="cell"><i class="icon-office"></i> Type of School</label>
                        <label class="data">
                            <select name="school_type" data-placeholder="Type of school" class="form-control" required>
                                <?php foreach ($school_list as $school) { ?>
                                <option value="<?php echo $school['id'];?>" <?php if ($profile['school']==$school['id']) { echo 'selected';}?>><?php echo $school['name'];?></option>
                                <?php } ?>
                            </select><?php echo form_error('school_type'); ?>
                        </label>
                    </li>
                    <li>
                        <label class="cell"><i class="icon-rating3"></i> Grade</label>
                        <label class="data">
                            <select name="class_level" data-placeholder="Type of school" class="form-control" required>
                                <?php foreach ($grade_list as $grade) { ?>
                                <option value="<?php echo $grade['id'];?>" <?php if ($profile['grade']==$grade['id']) { echo 'selected';}?>><?php echo $grade['name'];?></option>
                                <?php } ?>
                            </select><?php echo form_error('class_level'); ?>
                        </label>
                    </li>
                </ul>
                <div class="panel-footer text-center profiledetail_footer">
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
    <?php $this->load->view('student/include/student-footer');?>
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