<?php $teacher_details = $this->session->userdata('teacher_logged_in');?>
<div class="sidebar sidebar-main sidebar-default">
<div class="sidebar-content">

<!-- Main navigation -->
<div class="sidebar-category sidebar-category-visible">
<div class="sidebar-user-material">
<div class="category-content">
<div class="sidebar-user-material-content">
    <a href="<?php echo site_url('teacher-dashboard');?>">
        <?php if (!empty($teacher_details['image_url'])) { ?>
        <img src="<?php echo base_url();?>assets/upload/user/<?php echo $teacher_details['image_url'];?>" class="img-circle img-responsive" alt="">
        <?php } else{ ?>
        <img src="<?php echo base_url();?>assets/images/profile_pic.png" class="img-circle img-responsive" alt="">
        <?php } ?>
    </a>
    <h6><?php echo $teacher_details['name'];?></h6>
    <span class="text-size-small"><?php echo get_rolename_by_id($teacher_details['role']);?></span>
</div>

<div class="sidebar-user-material-menu mobile_hide">
    <a href="#user-nav" data-toggle="collapse">
        <span>My account</span>
        <i class="caret"></i>
    </a>
</div>
</div>

<div class="navigation-wrapper collapse" id="user-nav">
<ul class="navigation">
    <li class="mobile_hide">
        <a href="#">
            <i class="icon-user-plus"></i>
            <span>My profile</span>
        </a>
    </li>
    <li>
        <a href="#">
            <i class="icon-coins"></i>
            <span>My products</span>
        </a>
    </li>
    <li class="mobile_hide">
        <a href="#">
            <i class="icon-comment-discussion"></i>
            <span>
                <span class="badge bg-teal-400 pull-right">58</span> Messages</span>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="#">
                <i class="icon-cog5"></i>
                <span>Obsolete</span>
            </a>
        </li>
        <li class="mobile_hide">
            <a href="#">
                <i class="icon-switch2"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</div>
</div>

<div class="category-content no-padding">

<ul class="navigation navigation-main navigation-accordion">
    
    <!-- Main -->
    <li class="navigation-header">
        <span>Main</span>
        <i class="icon-menu" title="Main pages"></i>
    </li>
    <li class="active">
        <a href="<?php echo site_url('teacher-dashboard');?>">
            <i class="icon-home4"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li>
        <a href="<?php echo site_url('book-appointments');?>">
            <i class="icon-stack-empty"></i>
            <span>Book Appointments</span>
        </a>
    </li>
    <li>
        <a href="all_appointments.html">
            <i class="icon-stack-empty"></i>
            <span>List of Appointments</span>
        </a>
    </li>
    <li class="mobile_show mobile_profile">
        <a href="<?php echo site_url('teacher-profile');?>" class="legitRipple">
            <i class="icon-user-plus"></i>
            <span>My profile</span>
        </a>
    </li>
    
    <li>
        <a href="selectteacher.html">
            <i class="icon-user-plus"></i>
            <span>Easy Cloud</span>
        </a>
    </li>                                      
                    <!-- <li class="mobile_show">
                        <a href="#">
                            <i class="icon-comment-discussion"></i>
                            <span>
                                <span class="badge bg-teal-400 pull-right">58</span> Messages</span>
                        </a>
                    </li> -->
                    <li>
                        <a href="listofstudent.html">
                            <i class="icon-users2"></i>
                            <span>List of My Students</span>
                        </a>
                    </li>                                       
                    <li class="mobile_show mobile_logout">
                        <a href="<?php echo site_url('teacher-logout');?>">
                            <i class="icon-switch2"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                    <!-- /page kits -->
                    
                </ul>
                
            </div>
        </div>
        <!-- /main navigation -->
        
    </div>
</div>