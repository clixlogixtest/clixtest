<?php $teacher_details = $this->session->userdata('teacher_logged_in');?>
    <!-- Main navbar -->
    <div class="navbar navbar-inverse bg-primary  navbar-fixed-top">
        <div class="navbar-header">
            <a data-toggle="collapse" data-target="#navbar-mobile" class=" mobile_show mobile_menu_toggle">
                <i class="icon-three-bars"></i>
            </a>

            <a class="navbar-brand" href="<?php echo site_url('teacher-dashboard');?>">
                <img src="<?php echo base_url();?>assets/images/logo.png" alt="">
            </a>

            <ul class="nav navbar-nav visible-xs-block">
                <li class="mobile_hide">
                    <a data-toggle="collapse" data-target="#navbar-mobile">
                        <i class="icon-three-bars"></i>
                    </a>
                </li>
                <li>
                    <a class="sidebar-mobile-main-toggle">
                        <i class="icon-user"></i>
                    </a>
                </li>
            </ul>
        </div>

        <div class="navbar-collapse collapse" id="navbar-mobile">
            <ul class="nav navbar-nav middle-menu">
                <li>
                    <a class="sidebar-control sidebar-main-toggle hidden-xs">
                        <i class="icon-paragraph-justify3"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#">MEMBERS</a>
                </li>
                <li class="nav-item">
                    <a href="">CREATE MONTHLY RECIEPT</a>
                </li>
                <li class="nav-item">
                    <a href="">I AM ONLINE
                        <label class="online">
                            <input type="checkbox" onclick="change_status()" checked>
                            <span class="onlineslider round"></span>
                        </label>
                    </a>
                </li>

            </ul>

            <!-- <p class="navbar-text"><span class="label bg-success-400">Online</span></p> -->

            <ul class="nav navbar-nav navbar-right">
                <!-- <li class="dropdown language-switch">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo base_url();?>assets/images/flags/gb.png" class="position-left" alt="">
                        English
                        <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="deutsch"><img src="<?php echo base_url();?>assets/images/flags/de.png" alt=""> Deutsch</a></li>
                        <li><a class="ukrainian"><img src="<?php echo base_url();?>assets/images/flags/ua.png" alt=""> Українська</a></li>
                        <li><a class="english"><img src="<?php echo base_url();?>assets/images/flags/gb.png" alt=""> English</a></li>
                        <li><a class="espana"><img src="<?php echo base_url();?>assets/images/flags/es.png" alt=""> España</a></li>
                        <li><a class="russian"><img src="<?php echo base_url();?>assets/images/flags/ru.png" alt=""> Русский</a></li>
                    </ul>
                </li> -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-envelop3"></i>
                        <span class="visible-xs-inline-block position-right">Messages</span>
                        <span class="badge bg-warning-400">2</span>
                    </a>

                    <div class="dropdown-menu dropdown-content width-350">
                        <div class="dropdown-content-heading">
                            Messages
                            <ul class="icons-list">
                                <li>
                                    <a href="#">
                                        <i class="icon-compose"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <ul class="media-list dropdown-content-body">
                            <li class="media">
                                <div class="media-left">
                                    <img src="<?php echo base_url();?>assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                    <span class="badge bg-danger-400 media-badge">5</span>
                                </div>

                                <div class="media-body">
                                    <a href="#" class="media-heading">
                                        <span class="text-semibold">James Alexander</span>
                                        <span class="media-annotation pull-right">04:58</span>
                                    </a>

                                    <span class="text-muted">who knows, maybe that would be the best thing for me...</span>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left">
                                    <img src="<?php echo base_url();?>assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                    <span class="badge bg-danger-400 media-badge">4</span>
                                </div>

                                <div class="media-body">
                                    <a href="#" class="media-heading">
                                        <span class="text-semibold">Margo Baker</span>
                                        <span class="media-annotation pull-right">12:16</span>
                                    </a>

                                    <span class="text-muted">That was something he was unable to do because...</span>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left">
                                    <img src="<?php echo base_url();?>assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-heading">
                                        <span class="text-semibold">Jeremy Victorino</span>
                                        <span class="media-annotation pull-right">22:48</span>
                                    </a>

                                    <span class="text-muted">But that would be extremely strained and suspicious...</span>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left">
                                    <img src="<?php echo base_url();?>assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-heading">
                                        <span class="text-semibold">Beatrix Diaz</span>
                                        <span class="media-annotation pull-right">Tue</span>
                                    </a>

                                    <span class="text-muted">What a strenuous career it is that I've chosen...</span>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-left">
                                    <img src="<?php echo base_url();?>assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-heading">
                                        <span class="text-semibold">Richard Vango</span>
                                        <span class="media-annotation pull-right">Mon</span>
                                    </a>

                                    <span class="text-muted">Other travelling salesmen live a life of luxury...</span>
                                </div>
                            </li>
                        </ul>

                        <div class="dropdown-content-footer">
                            <a href="../messagelist.html" data-popup="tooltip" title="All messages">
                                <i class="icon-menu display-block"></i>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle animation" data-animation="shake" data-toggle="dropdown">
                        <i class="icon-bell2"></i>
                        <span class="visible-xs-inline-block position-right">Notification</span>
                        <span class="badge bg-warning-400">12</span>
                    </a>

                    <div class="dropdown-menu dropdown-content">
                        <!-- <div class="dropdown-content-heading">
                                Users online
                                <ul class="icons-list">
                                    <li><a href="#"><i class="icon-gear"></i></a></li>
                                </ul>
                            </div> -->

                            <ul class="media-list dropdown-content-body width-300">
                                <li class="media">
                                    <div class="media-left">
                                        <img src="<?php echo base_url();?>assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                    </div>
                                    <div class="media-body">
                                        <a href="#" class="media-heading text-semibold">Jordana Ansley</a>
                                        <span class="display-block text-muted text-size-small">Lead web developer</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <span class="status-mark border-success"></span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <img src="<?php echo base_url();?>assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                    </div>
                                    <div class="media-body">
                                        <a href="#" class="media-heading text-semibold">Will Brason</a>
                                        <span class="display-block text-muted text-size-small">Marketing manager</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <span class="status-mark border-danger"></span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <img src="<?php echo base_url();?>assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                    </div>
                                    <div class="media-body">
                                        <a href="#" class="media-heading text-semibold">Hanna Walden</a>
                                        <span class="display-block text-muted text-size-small">Project manager</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <span class="status-mark border-success"></span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <img src="<?php echo base_url();?>assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                    </div>
                                    <div class="media-body">
                                        <a href="#" class="media-heading text-semibold">Dori Laperriere</a>
                                        <span class="display-block text-muted text-size-small">Business developer</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <span class="status-mark border-warning-300"></span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <img src="<?php echo base_url();?>assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                    </div>
                                    <div class="media-body">
                                        <a href="#" class="media-heading text-semibold">Vanessa Aurelius</a>
                                        <span class="display-block text-muted text-size-small">UX expert</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <span class="status-mark border-grey-400"></span>
                                    </div>
                                </li>
                            </ul>

                            <div class="dropdown-content-footer">
                                <a href="#" data-popup="tooltip" title="All users">
                                    <i class="icon-menu display-block"></i>
                                </a>
                            </div>
                        </div>
                    </li>


                    <li class="dropdown dropdown-user mobile_hide">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <?php if (!empty($teacher_details['image_url'])) { ?>
                            <img src="<?php echo base_url();?>assets/upload/user/<?php echo $teacher_details['image_url'];?>" alt="">
                            <?php } else{ ?>
                            <img src="<?php echo base_url();?>assets/images/profile_pic.png" alt="">
                            <?php } ?>
                            <span><?php echo $teacher_details['name'];?></span>
                            <i class="caret"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a href="<?php echo site_url('teacher-profile');?>">
                                    <i class="icon-user-plus"></i> My profile</a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="icon-stack-empty"></i> My Products</a>
                                    </li>
                                    <li>
                                        <a href="message.html">
                                            <span class="badge bg-teal-400 pull-right">58</span>
                                            <i class="icon-comment-discussion"></i> Messages</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo site_url('teacher-logout');?>">
                                                <i class="icon-switch2"></i> Logout</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>