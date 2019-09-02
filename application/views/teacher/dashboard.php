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
<!-- /main sidebar -->


<!-- Main content -->


<div class="content-wrapper dashbord listofappointment_contentwrapper">
<div class="row">
<div class="col-md-6 col-lg-6 dashbord_allpast2 recentlistofappointment36">
<div class="panel panel-flat">
    <div class="panel-heading">
        <h2 class="panel-title text-center Past_Session_Head">List of Last 5 Students</h2>
        <div class="panel_view viewappoinment_12 pastbtn21">
            <a href="#">List Of All Students</a>
        </div>
        <div class="heading-elements">
            <ul class="icons-list">
                <li>
                    <a data-action="collapse"></a>
                </li>
                <li>
                    <a data-action="reload"></a>
                </li>
                <li>
                    <a data-action="close"></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="datatable-scroll">
        <table class="table datatable-basic upcomingtable listofappointment_teachertable" data-page-length="5">

            <thead>
                <tr>
                    <th></th>
                    <th>My Recent Students</th>
                    <th>Message</th>
                    <th></th>
                    <th style="display:none;"></th>

                </tr>
            </thead>
            <tbody>


                <tr>
                    <td></td>
                    <td>
                        <table class="table studntbookedinner">
                            <tr>
                                <td>
                                    <img src="<?php echo base_url();?>assets/images/002-boy copy 7.png" height="auto" width="55px">
                                </td>
                                <td>
                                    <table>
                                        <tr>
                                            <td>
                                                <div class="text-left bookedstudent">Kylie Poland</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="text-left bookedstudent">Physics</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="text-left bookedstudent"><i class="icon-calendar"></i>&nbsp; 20 June 2012 , <i class="icon-alarm"></i>&nbsp; 9:00 AM</div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                     <span class="btn btn-rounded btn-xs bg-info-800"><i class="icon-envelop"></i> Message</span>
                 </td>
                 <td>

                 </td>
                 <td style="display:none;"></td>
                 <td style="display:none;"></td>


             </tr>
             <tr>
                <td></td>
                <td>
                    <table class="table studntbookedinner">
                        <tr>
                            <td>
                                <img src="<?php echo base_url();?>assets/images/002-boy copy 7.png" height="auto" width="55px">
                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <div class="text-left bookedstudent">Kylie Poland</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-left bookedstudent">Physics</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-left bookedstudent"><i class="icon-calendar"></i>&nbsp; 20 June 2012 , <i class="icon-alarm"></i>&nbsp; 9:00 AM</div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                 <span class="btn btn-rounded btn-xs bg-info-800"><i class="icon-envelop"></i> Message</span>
             </td>
             <td>
             </td>
             <td style="display:none;"></td>
             <td style="display:none;"></td>


         </tr>
         <tr>
            <td></td>
            <td>
                <table class="table studntbookedinner">
                    <tr>
                        <td>
                            <img src="<?php echo base_url();?>assets/images/002-boy copy 7.png" height="auto" width="55px">
                        </td>
                        <td>
                            <table>
                                <tr>
                                    <td>
                                        <div class="text-left bookedstudent">Kylie Poland</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="text-left bookedstudent">Physics</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="text-left bookedstudent"><i class="icon-calendar"></i>&nbsp; 20 June 2012 , <i class="icon-alarm"></i>&nbsp; 9:00 AM</div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
            <td>
             <span class="btn btn-rounded btn-xs bg-info-800"><i class="icon-envelop"></i> Message</span>
         </td>
         <td>
         </td>
         <td style="display:none;"></td>
         <td style="display:none;"></td>

     </tr>
     <tr>
        <td></td>
        <td>
            <table class="table studntbookedinner">
                <tr>
                    <td>
                        <img src="<?php echo base_url();?>assets/images/002-boy copy 7.png" height="auto" width="55px">
                    </td>
                    <td>
                        <table>
                            <tr>
                                <td>
                                    <div class="text-left bookedstudent">Kylie Poland</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-left bookedstudent">Physics</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-left bookedstudent"><i class="icon-calendar"></i>&nbsp; 20 June 2012 , <i class="icon-alarm"></i>&nbsp; 9:00 AM</div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
        <td>
         <span class="btn btn-rounded btn-xs bg-info-800"><i class="icon-envelop"></i> Message</span>
     </td>
     <td>
     </td>
     <td style="display:none;"></td>
     <td style="display:none;"></td>


 </tr>

 <tr>
    <td></td>
    <td>
        <table class="table studntbookedinner">
            <tr>
                <td>
                    <img src="<?php echo base_url();?>assets/images/002-boy copy 7.png" height="auto" width="55px">
                </td>
                <td>
                    <table>
                        <tr>
                            <td>
                                <div class="text-left bookedstudent">Kylie Poland</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="text-left bookedstudent">Physics</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="text-left bookedstudent"><i class="icon-calendar"></i>&nbsp; 20 June 2012 , <i class="icon-alarm"></i>&nbsp; 9:00 AM</div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>
    <td>
     <span class="btn btn-rounded btn-xs bg-info-800"><i class="icon-envelop"></i> Message</span>
 </td>
 <td>
 </td>
 <td style="display:none;"></td>
 <td style="display:none;"></td>


                     </tr>

                     <tr>
                        <td></td>
                        <td>
                            <table class="table studntbookedinner">
                                <tr>
                                    <td>
                                        <img src="<?php echo base_url();?>assets/images/002-boy copy 7.png" height="auto" width="55px">
                                    </td>
                                    <td>
                                        <table>
                                            <tr>
                                                <td>
                                                    <div class="text-left bookedstudent">Kylie Poland</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="text-left bookedstudent">Physics</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="text-left bookedstudent"><i class="icon-calendar"></i>&nbsp; 20 June 2012 , <i class="icon-alarm"></i>&nbsp; 9:00 AM</div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                         <span class="btn btn-rounded btn-xs bg-info-800"><i class="icon-envelop"></i> Message</span>
                     </td>
                     <td>
                     </td>
                     <td style="display:none;"></td>
                     <td style="display:none;"></td>


                 </tr>

                 <tr>
                    <td></td>
                    <td>
                        <table class="table studntbookedinner">
                            <tr>
                                <td>
                                    <img src="<?php echo base_url();?>assets/images/002-boy copy 7.png" height="auto" width="55px">
                                </td>
                                <td>
                                    <table>
                                        <tr>
                                            <td>
                                                <div class="text-left bookedstudent">Kylie Poland</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="text-left bookedstudent">Physics</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="text-left bookedstudent"><i class="icon-calendar"></i>&nbsp; 20 June 2012 , <i class="icon-alarm"></i>&nbsp; 9:00 AM</div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                     <span class="btn btn-rounded btn-xs bg-info-800"><i class="icon-envelop"></i> Message</span>
                 </td>
                 <td>
                 </td>
                 <td style="display:none;"></td>
                 <td style="display:none;"></td>


             </tr>


         </tbody>
     </table>
     <h3 class="listapp_totalhr text-center">
        Total Hours Taught This Months -186 Hours
    </h3>
</div>
</div>
</div>
<div class="col-md-6 col-lg-6 dashbord_allpast2">
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h2 class="panel-title text-center Past_Session_Head">Upcoming 5 Appointment</h2>
            <div class="panel_view viewappoinment_12 pastbtn21">
                <a href="#">List of All Appointment</a>
            </div>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li>
                        <a data-action="collapse"></a>
                    </li>
                    <li>
                        <a data-action="reload"></a>
                    </li>
                    <li>
                        <a data-action="close"></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="datatable-scroll">
            <table class="table datatable-basic upcomingtable listofappointment_teachertable teachertabdashboard_all" data-page-length="5">

                <thead>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Lesson</th>
                        <th></th>
                        <th style="display:none;"></th>

                    </tr>
                </thead>
                <tbody>


                    <tr>
                        <td></td>
                        <td>
                           <img src="<?php echo base_url();?>assets/images/002-boy copy 7.png" height="auto" width="55px">
                           <div class="text-left bookedstudent">Kylie Poland</div>

                       </td>
                       <td>
                        <div class="text-left bookedstudent_sub">Physics</div>
                        <div class="text-left bookedstudent"><i class="icon-calendar"></i>&nbsp; 20 June 2012 <br/> <i class="icon-alarm"></i>&nbsp; 9:00 AM</div>


                    </td>
                    <td>
                        <span class="label label-success label-rounded">Join</span>
                        <a href="teacherevent.html">
                            <span class="label label-warning label-rounded label-lg">Cancel</span>
                        </a>
                    </td>
                    <td style="display:none;"></td>
                    <td style="display:none;"></td>


                </tr>
                <tr>
                    <td></td>
                    <td>
                       <img src="<?php echo base_url();?>assets/images/002-boy copy 7.png" height="auto" width="55px">
                       <div class="text-left bookedstudent">Kylie Poland</div>

                   </td>
                   <td>
                    <div class="text-left bookedstudent_sub">Physics</div>
                    <div class="text-left bookedstudent"><i class="icon-calendar"></i>&nbsp; 20 June 2012 <br/> <i class="icon-alarm"></i>&nbsp; 9:00 AM</div>


                </td>
                <td>
                    <span class="label label-success label-rounded">Join</span>
                    <a href="teacherevent.html">
                        <span class="label label-warning label-rounded label-lg">Cancel</span>
                    </a>
                </td>
                <td style="display:none;"></td>
                <td style="display:none;"></td>


            </tr>
            <tr>
                <td></td>
                <td>
                   <img src="<?php echo base_url();?>assets/images/002-boy copy 7.png" height="auto" width="55px">
                   <div class="text-left bookedstudent">Kylie Poland</div>

               </td>
               <td>
                <div class="text-left bookedstudent_sub">Physics</div>
                <div class="text-left bookedstudent"><i class="icon-calendar"></i>&nbsp; 20 June 2012 <br/> <i class="icon-alarm"></i>&nbsp; 9:00 AM</div>


            </td>
            <td>
                <span class="label label-success label-rounded">Join</span>
                <a href="teacherevent.html">
                    <span class="label label-warning label-rounded label-lg">Cancel</span>
                </a>
            </td>
            <td style="display:none;"></td>
            <td style="display:none;"></td>


        </tr>
        <tr>
            <td></td>
            <td>
               <img src="<?php echo base_url();?>assets/images/002-boy copy 7.png" height="auto" width="55px">
               <div class="text-left bookedstudent">Kylie Poland</div>

           </td>
           <td>
            <div class="text-left bookedstudent_sub">Physics</div>
            <div class="text-left bookedstudent"><i class="icon-calendar"></i>&nbsp; 20 June 2012 <br/> <i class="icon-alarm"></i>&nbsp; 9:00 AM</div>
            

        </td>
        <td>
            <span class="label label-success label-rounded">Join</span>
            <a href="teacherevent.html">
                <span class="label label-warning label-rounded label-lg">Cancel</span>
            </a>
        </td>
        <td style="display:none;"></td>
        <td style="display:none;"></td>


    </tr>

    <tr>
        <td></td>
        <td>
           <img src="<?php echo base_url();?>assets/images/002-boy copy 7.png" height="auto" width="55px">
           <div class="text-left bookedstudent">Kylie Poland</div>

       </td>
       <td>
        <div class="text-left bookedstudent_sub">Physics</div>
        <div class="text-left bookedstudent"><i class="icon-calendar"></i>&nbsp; 20 June 2012 <br/> <i class="icon-alarm"></i>&nbsp; 9:00 AM</div>


    </td>
    <td>
        <span class="label label-success label-rounded">Join</span>
        <a href="teacherevent.html">
            <span class="label label-warning label-rounded label-lg">Cancel</span>
        </a>
    </td>
    <td style="display:none;"></td>
    <td style="display:none;"></td>


</tr>

<tr>
    <td></td>
    <td>
       <img src="<?php echo base_url();?>assets/images/002-boy copy 7.png" height="auto" width="55px">
       <div class="text-left bookedstudent">Kylie Poland</div>

   </td>
   <td>
    <div class="text-left bookedstudent_sub">Physics</div>
    <div class="text-left bookedstudent"><i class="icon-calendar"></i>&nbsp; 20 June 2012 <br/> <i class="icon-alarm"></i>&nbsp; 9:00 AM</div>


</td>
<td>
    <span class="label label-success label-rounded">Join</span>
    <a href="teacherevent.html">
        <span class="label label-warning label-rounded label-lg">Cancel</span>
    </a>
</td>
<td style="display:none;"></td>
<td style="display:none;"></td>


</tr>

<tr>
    <td></td>
    <td>
       <img src="<?php echo base_url();?>assets/images/002-boy copy 7.png" height="auto" width="55px">
       <div class="text-left bookedstudent">Kylie Poland</div>

   </td>
   <td>
    <div class="text-left bookedstudent_sub">Physics</div>
    <div class="text-left bookedstudent"><i class="icon-calendar"></i>&nbsp; 20 June 2012 <br/> <i class="icon-alarm"></i>&nbsp; 9:00 AM</div>


</td>
<td>
    <span class="label label-success label-rounded">Join</span>
    <a href="teacherevent.html">
        <span class="label label-warning label-rounded label-lg">Cancel</span>
    </a>
</td>
<td style="display:none;"></td>
<td style="display:none;"></td>

</tr>

</tbody>
</table>

</div>
</div>
</div>

</div>

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-flat teachersdashboard_calendar">
            <div class="panel-heading">
                <h2 class="panel-title text-center Past_Session_Head">Appointment This Week</h2>


            </div> 
            <div class="teacherlistingcolor clearfix">
                <div class="teacherlistingsub"><span class="green"></span> Available</div>
                <div class="teacherlistingsub"><span class="blue"></span> Booked</div>
                <div class="teacherlistingsub"><span class="gray"></span> Closed</div>
            </div>
            <div class="appointmentofweek appointmentllisting_table31">
             <div class="fullcalendar-agenda teacherevent"></div>
         </div>
     </div>
 </div>
</div>

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