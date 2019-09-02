    <!-- Global stylesheets -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css"> -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/colors.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/teacherstyle.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    
    
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/ui/moment/moment.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/ui/fullcalendar/fullcalendar.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/js/core/app.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/pages/extra_fullcalendarteacherdashboard.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/selects/select2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/pickers/daterangepicker.js"></script>



    <script type="text/javascript" src="<?php echo base_url();?>assets/js/pages/datatables_basic.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/ui/ripple.min.js"></script>

    <!-- /theme JS files -->
    <style>
        .allappointment_container .icon-envelop{    font-size: 15px;}
        .studntbookedinner {width: 361px;}
        .listofappointment_title .teacherappoinment_viewall {
            margin-left: -195px;
        }
        @media screen and (max-width:1200px) {
            .listofappointment_title{   text-align: center;}
            .listofappointment_title .teacherappoinment_viewall {
                float: none;
                margin: 0 auto;
            }
        }
        @media screen and (max-width:768px) {
            .panel-flat .panel-heading .visible-elements{    margin-top: 20px;
                border-bottom: 0;}
                .listofappointment_title .teacherappoinment_viewall {
                    position: inherit;
                    margin: 0 auto -35px;
                    float: none;

                }
                .heading-elements-toggle{display:none;}
            }
        </style>