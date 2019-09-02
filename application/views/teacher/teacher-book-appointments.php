<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>easy Tutor</title>
    <link rel="icon" href="<?php echo base_url();?>assets/images/icon.png" sizes="192x192" />
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
<?php $this->load->view('teacher/include/teacher-sidemenu');?>

<!-- Main content -->
<div class="content-wrapper profiledetailwrap profiledetailwrap26">
    <div class="user_detail">
        <div class="content-group">
            
        </div>
        <!-- /user details -->
    </div>
</div>
<!-- /main content -->

 </div>
        <!-- /page content -->
    </div>
    <!-- /page container -->
  <?php $this->load->view('teacher/include/teacher-footer');?>
    <!-- /footer -->
</body>

</html>