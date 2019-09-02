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
     
     <style>
    .select2-results ul.select2-results__options li{color:#000;}
    </style>
    <!-- /global stylesheets -->
    <!-- Core JS files -->
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
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/selects/select2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/ui/moment/moment.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/ui/fullcalendar/fullcalendar.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/pickers/daterangepicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/pickers/anytime.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/pickers/pickadate/picker.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/pickers/pickadate/picker.date.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/pickers/pickadate/picker.time.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/pickers/pickadate/legacy.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/pages/picker_date.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/core/libraries/jquery_ui/interactions.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/core/libraries/jquery_ui/widgets.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/core/libraries/jquery_ui/effects.min.js"></script>
    
    <!-- datepicker Theme JS files -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/pages/datatables_basic.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/pages/form_select2.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/pages/extra_fullcalendar.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/styling/switch.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/core/app.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/pages/form_checkboxes_radios.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/ui/ripple.min.js"></script>

</head>

<body class="navbar-bottom teacherevent_wrap3">

    <!-- Main navbar -->
    <?php $this->load->view('student/include/student-header');?>
    <!-- /main navbar -->




<!-- Page container -->
<div class="page-container">
    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
       <?php $this->load->view('student/include/student-side-menu');?>
        <!-- /main sidebar -->
        <div class="content-wrapper teacherTimeTable">
            <!-- Basic datatable -->

            <div class="panel panel-flat">
                <div class="clearfix mobile_view4">
                <div class="panel-heading text-center">
                   <figure>
                                    <img src="<?php echo base_url().get_profile_pic_by_id($teachers_details_list[0]['user_id']);?>"  alt=""/>
                                </figure>
                                <div class="panel-heaading-content">
                                <h3><img src=""/><?php echo $teachers_details_list[0]['fname']." ".$teachers_details_list[0]['lname'];?></h3>
                                <p><?php echo $teachers_details_list[0]['message'];?></p>
                                <div class="panel-subject-container"><i class="icon-graduation2"></i> <span class="panel-subject"><?php echo $this->Teacher_model->get_subject_name_list_by_id($teachers_details_list[0]['user_id']);?></span></div>
                                </div>
                </div>
                <div class="panel-heading-rightbox">
                <div class="selectedlesson_container">
                 <h3>Selected Lesson</h3>
                 <ul>
                 <li></li>
                 </ul>
                </div>
                </div>
            
            </div>
               
                <div class="teacherlisting_btncontianer">
                <label class="teachervent_choosebtn">
                    <select class="select" name="subject">
                        <?php foreach ($subjects_list as $details) 
                            { 
                                echo '<option value="'.$details['sub_id'].'" '.(($subjects_id == $details['sub_id']) ? "selected" : "").' >'.$details['sub_name'].'</option>';
                            }
                            ?>
                    </select>
                    </label>

                   <!--  <label class="teachervent_choosebtn1">
                        <select class="select">
                            <option>Choose Duration</option>
                            <option>45 min</option>
                            <option>60 min</option>
                            <option>90 min</option>
                        </select>
                    </label> -->

                    <button class="btn bg-primary teacher_proceedbtn">Proceed <i class="icon-arrow-right8"></i></button>
                </div>   
                <input type="hidden" name="time_slots" value='<?php print_r($time_slots);?>' id="time_slots">
                <input type="hidden" name="date" value='<?php echo $date;?>' id="date">
                  <div class="tab-content teachertab1">
                    <div id="home" class="tab-pane fade in active">
                             <div class="fullcalendar-agenda teacherevent"></div>
                     </div>
                    
                  </div>
                
            </div>
        </div>
        <!-- /basic datatable -->

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
                <a href="index.html" class="navbar-link">Easy-Tutor</a>
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