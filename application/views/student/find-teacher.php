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
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/selects/select2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/ui/moment/moment.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/pickers/daterangepicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/forms/styling/switch.min.js"></script>
    <!-- datepicker Theme JS files -->
    <!-- Theme JS files -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/ui/moment/moment.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/pickers/daterangepicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/pickers/anytime.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/pickers/pickadate/picker.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/pickers/pickadate/picker.date.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/pickers/pickadate/picker.time.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/pickers/pickadate/legacy.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/pages/picker_date.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/core/libraries/jquery_ui/interactions.min.js"></script>
    <!-- datepicker Theme JS files -->


    <script type="text/javascript" src="<?php echo base_url();?>assets/js/core/app.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/pages/datatables_basic.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/pages/form_select2.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/ui/ripple.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.flexslider.js"></script>
    <script>
        $(document).ready(function(){
            setTimeout(() => {
                sicetoggle();    
            },500);           
        });

        var sicetoggle=  function() {
            var windowSize = $(window).width();               
            if (windowSize > 1435) {
                $('body').removeClass('sidebar-xs');  
            }

        }

        $(document).ready(function(e) {
            $('.vertical-slider').flexslider({
              animation: "slide",
              direction: "vertical", 
              controlNav: false, 
              directionNav: true,
              slideshowSpeed: 4000
          });
        });
    </script>

<style>

.headerListTeacher .form-control[readonly]{border-bottom-style:solid;}
.headerListTeacher .select2-selection--single .select2-selection__rendered {padding-left: 0px;padding-right:40px;}

.vertical-slider{text-align:left;padding-left: 100px;}
.vertical-slider .vertical-caption{font-size:17px;color: #000;display:block;text-align:left;margin-bottom:0px;line-height:37px;}
.vertical-slider .flex-direction-nav{display:none;}

@media screen and (min-width:1436px) and (max-width:1540px){
    .vertical-slider {padding-left: 87px;}
    .vertical-slider .vertical-caption{line-height: 36px;font-size:15px;}  
}
@media screen and (max-width:1500px){
    .feedback_container24 h4{width:90px;font-size:16px !important;}
}
@media screen and (max-width:1300px){
    .vertical-slider .vertical-caption {font-size: 15px;}
    .vertical-slider {padding-left:86px;}
}
@media screen and (max-width:1220px){
    .vertical-slider .vertical-caption {font-size: 14px;}
    .vertical-slider {padding-left:86px;}
    .teacherList .table tr {margin-left:2px;margin-right:3px;}
}
@media screen and (max-width:1199px){
    .vertical-slider .vertical-caption {font-size: 14px;}
    .vertical-slider {padding-left:86px;}
    .feedback_container24 h4 {width: 100%;font-size: 16px !important;position: relative;text-align: center;}
    .vertical-slider {padding-left: 0px;}
    .vertical-slider .vertical-caption{text-align:center;line-height:20px;}
}
@media screen and (max-width:768px){
    .vertical-slider {margin-bottom:10px;}
    .teacherList .teacherlisting12 tbody tr td:last-child{display:none !important;}
    .teacherList .teacherlisting12 tbody tr td:nth-last-child(2){display: table-cell;border-top:0px;}
    .teacherList .table tr {margin:10px;}
    .vertical-slider .vertical-caption{ white-space: initial;padding-left:10px;padding-right:10px;}
}
@media screen and (min-width:769px) and (max-width:1435px){
   body:not(.sidebar-xs) .datatable-scroll {overflow-x: scroll;}
}

@media screen and (max-width:600px){
.teacherList .panel-body .panel-body {padding-left:0px;padding-right:0px;}
#myPageContent p{font-size: 13px;height: 50px;line-height:18px;}
.teacherlisting12 tr td:nth-last-child(2) label{margin-top:7px;}
}

</style>
<!-- /theme JS files -->

</head>

<body class="navbar-bottom sidebar-xs">

    <!-- Main navbar -->
    <?php
    $this->load->view('student/include/student-header');
    ?>
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
            <div class="content-wrapper teacherList teacherList16">
                <!-- Basic datatable -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h2 class="panel-title text-center">Find Teacher</h2>
                    </div>
                    <div class="panel-body">
                        <div class="panel-body">

                            <div class="row headerListTeacher">
                                <form method="POST" action="<?php echo site_url('submit-filters');?>">
                                <div class="listteacher_sub">
                                    <label>
                                        <select id="subject" class="select" name="subject">
                                            <option value="">Choose subject</option>
                                            <?php foreach ($subject_list as $details) 
                                            { ?>
                                            <option value="<?php echo $details['sub_id'];?>" <?php if (set_value('subject')==$details['sub_id']) { echo "selected"; }?>><?php echo $details['sub_name'];?></option>';
                                            <?php } ?>
                                        </select>
                                    </label>

                                </div>
                                
                                <div class="listteacher_sub">
                                    <label class="listingcalender_margin1" style="vertical-align: middle;">
                                        <select class="select" id="month" name="month" onchange="get_date(this.value);" >
                                            <option value="">Choose Month</option>
                                            <?php for ($i=date('m'); $i <=12 ; $i++)
                                            {
                                                if (strlen($i)=='1') { $i = '0'.$i; }
                                                $dateObj   = DateTime::createFromFormat('!m', $i);
                                                echo '<option value="'.date('Y').'-'.$i.'" '.((set_value('month') == date('Y').'-'.$i) ? "selected" : "").' >'.$dateObj->format('F').'</option>';
                                            }?>
                                        </select>
                                    </label>
                                </div>

                                <div class="listteacher_sub">
                                    <label class="listingcalender_margin1" style="vertical-align: middle;">
                                       <select class="select" id="date" name="date">
                                           <option>Choose Month First </option>
                                        </select>
                                    </label>
                                </div>
                                <div class="listteacher_sub">
                                    
                                       <input type="submit" name="submit" value="submit">
                                    
                                </div>  
                                <!-- <div class="listteacher_sub">
                                    <label class="listingcalender_margin" style="vertical-align: middle;">
                                        <select class="select" id="time" name="time">
                                           <option>Choose Date First </option>
                                        </select>
                                    </label>
                                </div>
                                --> 
                                <div class="listteacher_sub text-right">
                                    <div class="checkbox checker-success">
                                        <label>
                                            <input type="checkbox" class="styled"> Now Online
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <br>
            <div class="table-resposive">
                <table class="table datatable-basic teacherlisting12 teacherlisting16">
                    <thead style="display:none">
                        <tr>
                            <th style="width:180px">

                            </th>
                            <th>

                            </th>

                            <th>

                            </th>
                        </tr>
                    </thead>
                    <tbody id="teacher_list">
                        <?php 
                        if (!empty($teachers_details_list)) 
                        {
                            foreach ($teachers_details_list as $teacher_detail) { ?>
                        <tr>
                            <td>
                                <figure class="prfl_imglist" style="background:url('<?php echo base_url().get_profile_pic_by_id($teacher_detail['user_id']);?>');"></figure>
                            </td>
                            <td colspan="4">
                                <h4><?php echo $teacher_detail['fname']." ".$teacher_detail['lname'];?></h4>
                                <div class="subject"><i class="icon-graduation2"></i> <?php echo $this->Teacher_model->get_subject_name_list_by_id($teacher_detail['user_id']);?></div>
                                <h5>Message</h5>
                                <div class="subject_description">
                                    <?php echo $teacher_detail['message'];?>
                                </div>
                                <div class="feedback_container24">
                                  <h4>Feedback : </h4>

                                  <div class="vertical-slider">
                                    <ul class="slides">
                                      <li><p class="vertical-caption">" Lorem Ipsum is simply dummy text of the printing and typesetting "</p></li>
                                      <li><p class="vertical-caption">" It is a long established fact thata reader will be distracted by "</p></li>
                                      <li><p class="vertical-caption">" There are many variations of passages f Lorem Ipsum available to "</p></li>
                                      <li><p class="vertical-caption">" All the Lorem Ipsum generators on the Internet tend to repeat to "</p></li>
                                  </ul>
                              </div>
                          </div>
                      </td>
                      <td colspan="2" style="display:none;"></td>
                      <td style="display:none;"></td>
                      <td>
                        <label>10
                            <small>Lessons</small>
                        </label>
                        <?php if (empty(set_value('date'))) { $date = date("Y-m-d"); }else{ $date = set_value('date'); }
                        if (empty(set_value('subject'))) { $subject_data = get_subject_list_by_calendar_id($teacher_detail['calendar_id']); $subject = $subject_data[0]['sub_id']; }else{ $subject = set_value('subject'); }
                        ?>
                        <a href="<?php echo site_url('book-teacher');?>/<?php echo $subject."/".$teacher_detail['calendar_id']."/".$date;?>">
                        <div class="input-group">

                            <span class="input-group-addon">
                                <i class="icon-calendar3"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Book appointment&hellip;">
                        </div>
                        </a>
                        <br>
                        <button class="btn bnt-sm btn-success btn-rounded pull-right btn-xs teacherlisting_send">
                           <i class="icon-envelop sendmessage_btn"></i>   Send Message
                       </button>
                   </td>
                   <td class="display:none;"></td>

               </tr>
               <?php } } ?>
               </tbody>
           </table>
       </div>
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
<script type="text/javascript">

    //     function get_teacher_on_subject(subject_id) {
    //     var sub_id = subject_id;
    //     if (sub_id!="") {
    //         $.ajax({
    //         type: "POST",
    //         url: "<?php echo site_url();?>/filter-teachers-list/",
    //         data:{
    //                 'sub_id':sub_id
    //             },
    //         success: function(data)
    //         {
    //             alert(data);
    //             // $('#date').html(data);
    //         }
    //         });
    //     }
    // }

    function get_date(month) {
        var sub_id =$('#subject').val();
        var month   = month;
        var date   = '<?php echo set_value('date');?>';

        if (sub_id!="" && month!="") {
            $.ajax({
            type: "POST",
            url: "<?php echo site_url();?>/search-date-by-month/",
            data:{
                    'sub_id':sub_id,
                    'month':month,
                    'date':date,
                },
            success: function(data)
            {
                $('#date').html(data);
            }
            });
        }else{
            alert('Please select subject');
        }
    }

    // function get_time(date) {
    //     var sub_id =$('#subject').val();
    //     var date   = date;
    //     $.ajax({
    //     type: "POST",
    //     url: "<?php echo site_url();?>/search-time-by-date/",
    //     data:{
    //             'sub_id':sub_id,
    //             'date':date
    //         },
    //     success: function(data)
    //     {
    //         $('#time').html(data);
    //     }
    //     });
    // }

    $( document ).ready(function() {
        var month =$('#month').val();
        if (month) {
            get_date(month);
        }
});
</script>
</body>

</html>