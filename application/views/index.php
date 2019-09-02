<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 ,maximum-scale=1">
    <title>easy Tutor</title>
    <link rel="icon" href="<?php echo base_url();?>assets/images/icon.png" sizes="192x192" />
    <meta name="description" content="easy tutor, online tutor">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <!-- default css start -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <!-- default css ends -->
    <?php $this->load->view('include/front-top-header');?>
</head>

<body class="homewrap">
    <?php $this->load->view('include/front-header');?>
    <!--    header Ends-->  

    <!--sample of content start -->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- <img src="<?php echo base_url();?>assets/images/Nachhilfe-Schülerin-mit-Lehrer-Tischszene.png" alt="banner bg" /> -->
                    <img class="uabb-photo-img wp-image-11525 size-full" src="<?php echo base_url();?>assets/images/Nachhilfe-Schülerin-mit-Lehrer-Tischszene.png" alt="Schülerin und Lehrer in der Online-Nachhilfe"
                        itemprop="image" srcset="<?php echo base_url();?>assets/images/Nachhilfe-Schülerin-mit-Lehrer-Tischszene.png 490w, <?php echo base_url();?>assets/images/Nachhilfe-Schülerin-mit-Lehrer-Tischszene-300x216.png 300w"
                        sizes="(max-width: 490px) 100vw, 490px">
                </div>
                <div class="col-md-6">
                    <h1 class="title">Better grades through
                        <br> online lessons with
                        <br> certified teachers</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Cras vel tempus nunc. Nulla elementumrhoncus
                        ultriciesMorbi vehicula tempus turpis, sed ullamcor</p>
                    <figure class="brand-icon text-center homebanner">
                        <br>
                        <a href="#" class="btn btn-default">Search Teachers</a>
                        
                        <img src="<?php echo base_url();?>assets/images/expert.png" alt="asas" /> &nbsp;&nbsp;
                        <img src="<?php echo base_url();?>assets/images/proven_icon.png" alt="aaa" />
                    </figure>
                </div>
                <div class="col-sm-12 text-center nextArrow">
                    <h4 class="theme flowerFont ">What are advantage of Easy Tutor?</h4>
                    <a href="#next">
                        <!-- <img src="<?php echo base_url();?>assets/images/arrow_down.png" alt="arrow_down" /> -->
                        <img src="<?php echo base_url();?>assets/images/scroll_down_image.gif" alt="arrow_down"/>
                        <!-- <i class="fa fa-angle-down"></i> -->
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="lesson" id="next">
        <div class="container">
            <div class="content">
                <div class="right code code--small code--right" data-aos="fade-left">
                    <figure>
                        <img src="<?php echo base_url();?>assets/images/privateLession.png" alt="high quality" />
                    </figure>
                </div>
                <div class="text code code--small code--right" data-aos="fade-right">
                    <h2>High Quality Private Lessons</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Cras vel tempus nunc. Nulla elementumrhoncus
                        ultriciesMorbi vehicula tempus turpis, sed ullamcor</p>
                </div>
            </div>
        </div>
    </section>
    <section class="timing">
        <div class="container">
            <div class="content media">
                <div class="media-left code code--small code--right" data-aos="fade-right">
                    <figure>
                        <img src="<?php echo base_url();?>assets/images/freeTiming.png" alt="high quality" />
                    </figure>
                </div>
                <div class="text media-body code code--small code--right" data-aos="fade-left">
                    <h2>Stress free timing</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Cras vel tempus nunc. Nulla elementumrhoncus
                        ultriciesMorbi vehicula tempus turpis, sed ullamcor</p>
                </div>
            </div>
        </div>
    </section>
    <section class="lesson">
        <div class="container">
            <div class="content">
                <div class="right code code--small code--right" data-aos="fade-left">
                    <figure>
                        <img src="<?php echo base_url();?>assets/images/maxProtection.png" alt="maximum protection" />
                    </figure>
                </div>
                <div class="text code code--small code--right" data-aos="fade-right">
                    <h2>Maximum Protection</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Cras vel tempus nunc. Nulla elementumrhoncus
                        ultriciesMorbi vehicula tempus turpis, sed ullamcor</p>
                </div>
            </div>
        </div>
    </section>
    <!--    sample of content Ends -->

    <!--    better learning Start-->
    <section class="learning" style="background-image:url('<?php echo base_url();?>assets/images/betterLearningBg.png');">
        <div class="container text-center">
            <h2 class="title">Three steps to better learning</h2>
            <ul>
                <li data-aos="zoom-in-right">
                    <h4>Select Teacher</h4>
                    <img src="<?php echo base_url();?>assets/images/selectTeacher.png" alt="select Teacher" />
                    <figcaption>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</figcaption>
                </li>
                <li class="active"  data-aos="zoom-out">
                    <h4>Book Appointment</h4>
                    <img src="<?php echo base_url();?>assets/images/appointment.png" alt="Book Appointment" />
                    <figcaption>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</figcaption>
                </li>
                <li data-aos="zoom-in-left">
                    <h4>Start Learning</h4>
                    <img src="<?php echo base_url();?>assets/images/startLearning.png" alt="Start Learning" />
                    <figcaption>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</figcaption>
                </li>
            </ul>
        </div>
    </section>
    <!--    better learning Ends-->

    <!-- demo easy tutor video  -->
    <section class="demoVideo">
            <h2 class="title text-center text-white">All Pros explained in only 2 minutes</h2>
        <figure class="fifCaption text-center">
            <iframe src="https://www.youtube.com/embed/7OmJBMGYbms?rel=0&showinfo=0&controls=1&modestbranding=0&iv_load_policy=3" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
        </figure>
    </section>
    <!-- demo easy tutor video Ends -->

    <!--    why us Start-->
    <section class="whyUs">
        <h2 class="title text-center">Why Easy-Tutor</h2>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="content">
                        <figure class="text-center">
                            <img src="<?php echo base_url();?>assets/images/clock@3x.png" alt="Appointments" />
                        </figure>
                        <h3 class="text-center">Book Flexible Appointments</h3>
                        <p>Choos a teacher flexible for each subject? During the holidays treat yourself to learning break?
                            Postpone appointments without loosing money? No Problem with us you decide when you learn!</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="content">
                        <figure class="text-center">
                            <img src="<?php echo base_url();?>assets/images/carddd@3x.png" alt="Appointments" />
                        </figure>
                        <h3 class="text-center">Secure Payment</h3>
                        <p>Choos a teacher flexible for each subject? During the holidays treat yourself to learning break?
                            Postpone appointments without loosing money? No Problem with us you decide when you learn!</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="content">
                        <figure class="text-center">
                            <img src="<?php echo base_url();?>assets/images/group@3x.png" alt="Appointments" />
                        </figure>
                        <h3 class="text-center">First-Class Support</h3>
                        <p>Choos a teacher flexible for each subject? During the holidays treat yourself to learning break?
                            Postpone appointments without loosing money? No Problem with us you decide when you learn!</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="content">
                        <figure class="text-center">
                            <img src="<?php echo base_url();?>assets/images/cloud@3x (1).png" alt="Appointments" />
                        </figure>
                        <h3 class="text-center">Easy Cloud</h3>
                        <p>Choos a teacher flexible for each subject? During the holidays treat yourself to learning break?
                            Postpone appointments without loosing money? No Problem with us you decide when you learn!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    why us Ends-->

    <!--    Every Teacher  Start -->
    <section class="Everyteacher_wrap clearfix">
    <section class="EveryTeacher">
        <div class="container text-center">
            <!-- <h3 class="title">We don't take every teacher</h3>
            <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nisl sem, tristique sit amet lacus et, finibus
                imperdiet elit. Duis at quam quis arcu feugiat accumsan et nec enim. Cras nec turpis nec mauris ultricies
                sagittis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum vitae ex eget eros</p> -->
            <div class="row">
                    <div class="col-md-6">
                            <h2>Conditions of teachers</h2>
                            <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                            <ul class="condition_ul">
                             <li><i class="fa fa-thumbs-up"></i><p>Duis aute irure voluptate velit adipiscing elit</p></li>
                             <li><i class="fa fa-thumbs-up"></i><p>Duis aute irure voluptate velit adipiscing elit</p></li>
                             <li><i class="fa fa-thumbs-up"></i><p>Duis aute irure voluptate velit adipiscing elit</p></li>
                            </ul>
                            <p class="text-left conditionteacher_bottomtxt">Duis aute irure voluptate velit adipiscing elit</p>
                            
                        </div>
                <div class="col-md-6 testimonial_block">
                    
                    <h2>Testimonials</h2>
                    <img src="<?php echo base_url();?>assets/images/widget_recommendation_465_0.png" />
                    </div>



<div class="row">
    <div class="col-sm-12">
        <div class="testimonial_wrap3">
                <div class="one-time">
                        <div>
                          <div class="slick-caption">
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. .</p>
                           <h3>Client Name</h3>
                          </div>
                        </div>
                        <div>
                           <div class="slick-caption">
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. .</p>
                              <h3>Client Name</h3>
                             </div>
                          </div>
                          <div>
                              <div class="slick-caption">
                                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. .</p>
                                  <h3>Client Name</h3>
                                 </div>
                              </div>
                              
                        </div>
        </div>
    </div>
</div>



                </div>
                

                <!-- <div class="col-sm-12 text-center">
                    <a href="#" class="btn btn-default">Contact Us</a>
                </div> -->
                <!-- <div class="col-sm-12 text-center">
                    <figure class="userDesktop text-center">
                        <img src="<?php echo base_url();?>assets/images/footerUser.png" alt="userDesktop" />
                    </figure>
                </div> -->
            </div>
        </div>
    </section>



    <section class="prefooter">
        <div class="container">
            <h2 class="title text-center">Ready to get started ?</h2>
            <a href="<?php echo site_url('tutor-registration');?>"><button class="btn btn-secondary btn-default btn-rounded choosebtn3">Choose A Teacher</button></a>&nbsp;
            <button class="btn btn-secondary btn-rounded">How we Work</button>
        </div>
    </section>
</section>
    <!--    Every Teacher  Ends -->
     <?php $this->load->view('include/front-footer');?>
   
		
</body>

</html>