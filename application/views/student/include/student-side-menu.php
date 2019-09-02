			<!-- Main sidebar -->
			<div class="sidebar sidebar-main sidebar-default">
				<div class="sidebar-content">
					<?php $user_details = $this->session->userdata('logged_in');?>
					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="sidebar-user-material">
							<div class="category-content">
								<div class="sidebar-user-material-content">
									<a href="#">
										<?php if (!empty($user_details['image_url'])) { ?>
				                        <img src="<?php echo base_url();?>assets/upload/user/<?php echo $user_details['image_url'];?>" class="img-circle img-responsive">
				                        <?php } else{ ?>
				                        <img src="<?php echo base_url();?>assets/images/profile_pic.png" class="img-circle img-responsive" alt="">
				                        <?php } ?>
									</a>
									<h6><?php echo $user_details['name'];?></h6>
									<span class="text-size-small"><?php echo get_rolename_by_id($user_details['role']);?></span>
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
										<a href="profile_detail.html">
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
									<a href="<?php echo site_url('student-dashboard');?>">
										<i class="icon-home4"></i>
										<span>Dashboard</span>
									</a>
								</li>
								<li>
									<a href="myproduct.html">
										<i class="icon-stack-empty"></i>
										<span>My Products</span>
									</a>
								</li>
								<li>
									<a href="all_appointments.html">
										<i class="icon-user-check"></i>
										<span>All Appointment</span>
									</a>
								</li>
								<li class="mobile_show mobile_profile">
									<a href="<?php echo site_url('student-profile');?>">
										<i class="icon-user-plus"></i>
										<span>My profile</span>
									</a>
								</li>
								<li class="mobile_show">
									<a href="#">
										<i class="icon-comment-discussion"></i>
										<span>
											<span class="badge bg-teal-400 pull-right">58</span> Messages</span>
									</a>
								</li>
								<li>
									<a href="/login.html#basic-tab2">
										<i class="icon-users2"></i>
										<span>Create Parent Account</span>
									</a>
								</li>
								<li>
									<a href="index.html">
										<i class="icon-users4"></i>
										<span>Join Group Session</span>
									</a>
								</li>
								<li>
									<a href="selectteacher.html">
										<i class="icon-cloud-check"></i>
										<span>Easy Cloud</span>
									</a>
								</li>
								<li>
									<a href="bonusprogram.html">
										<i class="icon-stats-growth"></i>
										<span>Bonus Program</span>
									</a>
								</li>
								<li>
									<a href="reportaspan.html">
										<i class="icon-rotate-cw"></i>
										<span>Report a Problem</span>
									</a>
								</li>
								<li class="mobile_show mobile_logout">
									<a href="#">
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
			<!-- /main sidebar -->