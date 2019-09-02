<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Controller extends CI_Controller 
{

		public function __construct()
	{
		parent::__construct();  
		$this->load->model('Crud_model');
		$this->load->library('format');
		$this->load->library('FacebookSDK');

		$this->fb = $this->facebooksdk;
		 if(!empty($this->session->userdata('logged_in'))){
                redirect('student-dashboard');
		 }
		 elseif(!empty($this->session->userdata('teacher_logged_in'))){
                redirect('teacher-dashboard');
         }
         elseif(!empty($this->session->userdata('parent_logged_in'))){
                redirect('parent-dashboard');
		 }
	}
			

	public function index()
	{
		if(!empty($this->input->post()))
        {
        	$this->form_validation->set_rules('login_email', 'Email', 'trim|required');
            $this->form_validation->set_rules('login_password', 'Password', 'trim|required');
            if ($this->form_validation->run() == FALSE)
			{
				$cb = "".site_url()."Login_Controller/callback/";
				$contents['fb_url'] = $this->fb->getLoginUrl($cb);
				$contents['login_url'] = $this->googleplus->loginURL();
				$this->load->view('login');
			}
			else
			{
				$email      = $this->input->post('login_email');
				$password   = $this->input->post('login_password');

				$check_auth = $this->Crud_model->authenticate($email,$password);
				if($check_auth)
				{
					if ($check_auth=='1' || $check_auth=='2') {
						redirect('student-dashboard');
					}elseif ($check_auth=='4') {
						redirect('teacher-dashboard');
					}elseif ($check_auth=='3') {
                        redirect('parent-dashboard');
                    }
				    
				}
				else
				{
				    redirect('login');
				}
			}

        }else
        {
        	$cb = "".site_url()."Login_Controller/callback/";
        	$contents['fb_url'] = $this->fb->getLoginUrl($cb);
        	$contents['login_url'] = $this->googleplus->loginURL();
        	$this->load->view('login',$contents);
        }
	}

	public function sign_up()
	{
	 if(!empty($this->input->post()))
	  	{
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			$this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'trim|required|matches[password]');
			$this->form_validation->set_rules('studentRdo', 'Type', 'trim|required');
			$this->form_validation->set_rules('student_name', 'Student Name', 'trim|required');
			$this->form_validation->set_rules('school_type', 'School Type', 'trim|required');
			$this->form_validation->set_rules('class_level', 'Class Level', 'trim|required');
			$this->form_validation->set_rules('registerphone', 'Mobile Number', 'trim|required|numeric|min_length[10]');
            if ($this->input->post("studentRdo")=='3') {
                $this->form_validation->set_rules('parent_name', 'parent Name', 'trim|required');
            }

			if ($this->form_validation->run() == FALSE)
			{
                $cb = "".site_url()."Login_Controller/callback/";
                $contents['fb_url'] = $this->fb->getLoginUrl($cb);
                $contents['login_url'] = $this->googleplus->loginURL();
                $this->load->view('login',$contents);
			}
			else
			{
                if ($this->input->post("studentRdo")=='3') {
                    $name = $this->input->post("parent_name");
                }else{
                    $name = $this->input->post("student_name");
                }

				$data_users=array(
							'email' 		=> 	$this->input->post("email"),
							'password' 		=> 	hash_password($this->input->post("password")),
							'name' 			=> 	$name,
							'role' 			=> 	$this->input->post("studentRdo"),
							'phone' 		=> 	$this->input->post("registerphone"),
							'created_at' 	=> 	date('Y-m-d H:i:s'),
							'update_at' 	=> 	date('Y-m-d H:i:s'),
							'user_activation_link' 		=> 	generate_random().time()
						);
                $user_id = 0;
                $user_id = $this->Crud_model->student_registration_into_user_db($data_users);

                if ($this->input->post("studentRdo")=='3')                  //code for parent
                {
                    $data_parent=array(
                            'user_id'       =>  $user_id,
                            'name'          =>  $this->input->post("parent_name"),
                            'phone'         =>  $this->input->post("registerphone"),
                            'created_at'    =>  date('Y-m-d H:i:s'),
                            'update_at'     =>  date('Y-m-d H:i:s')
                        );
                    $parent_id = $this->Crud_model->parent_registration_into_profile_db($data_parent);
                    $data_profile=array(
                                'user_id'       =>  '0',
                                'parent_id'     =>  $parent_id,
                                'name'          =>  $this->input->post("student_name"),
                                'school'        =>  $this->input->post("school_type"),
                                'grade'         =>  $this->input->post("class_level"),
                                'created_at'    =>  date('Y-m-d H:i:s'),
                                'update_at'     =>  date('Y-m-d H:i:s')
                            );
                }
                else {                                                      //code for student
                    $parent_id = '0';
                    $data_profile=array(
                                'user_id'       =>  $user_id,
                                'parent_id'     =>  $parent_id,
                                'name'          =>  $this->input->post("student_name"),
                                'phone'         =>  $this->input->post("registerphone"),
                                'school'        =>  $this->input->post("school_type"),
                                'grade'         =>  $this->input->post("class_level"),
                                'created_at'    =>  date('Y-m-d H:i:s'),
                                'update_at'     =>  date('Y-m-d H:i:s')
                            );
                }
				
				$this->Crud_model->student_registration_into_profile_db($data_profile);
                    
                    if(!empty($user_id))
                    {
                        $this->user_create_activation_sendmail($data_users);
                        $this->session->set_flashdata('success','Activation link sent to your email. Please active.');
                        redirect('login');
                    }
                    else
                    {
                        $this->session->set_flashdata('failure','There was a problem please try again later.');
                        redirect('login');
                    }
			}
		}
	 else
        {
            $cb = "".site_url()."Login_Controller/callback/";
            $contents['fb_url'] = $this->fb->getLoginUrl($cb);
            $contents['login_url'] = $this->googleplus->loginURL();
            $this->load->view('login',$contents);
        }
	}


	public function user_create_activation_sendmail($input_data)
    {
        $this->load->helper('email_helper');
        $template_config = array(
                'type' => 'send_activation_link',
                'name' => ucwords($input_data['name']),
                'email' => $input_data['email'],
                'user_activation_link' => site_url('Login_Controller/active_user/').$input_data['user_activation_link']
        );
        $message_details = message_template($template_config);
        $headers = "From: RanchBuilder (team001@clixlogix.org)";
        $mail_config = array(
                'to'        => $input_data['email'],
                'subject'   => 'User Activation Link',
                'message'   => $message_details['message'],
                'headers'   => $headers
            );
        send_email($mail_config);
    }

    public function active_user()
    {
        $random_string = $this->uri->segment(3);
        $user_details = $this->Crud_model->get_user_details_by_randomstring($random_string);

        if(!empty($user_details))
        {
            $status = $this->Crud_model->update_active_user($random_string);
            if($status == 1)
            {
                $this->session->set_flashdata('success','Your account has been activated. Please login..');
                redirect('login');
            }
            else
            {
                $this->session->set_flashdata('failure','There was a problem to activate your account. Try again later.');
                redirect('login');
            }
        }
        else
        {
            $this->session->set_flashdata('failure','Acount already activated. Please login..');
            redirect('login');      
        }
    }

    public function forgot_password()
    {
    	if(!empty($this->input->post()))
        {
        	$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('forgot_password');
            }
            else
            {
            	$email = $this->input->post('email');
                $status = $this->Crud_model->check_email_exist_by_email($email);
                if($status == 1)
                {
                    $user_details = $this->Crud_model->get_user_details_by_email($email);

                    $data['forget_password_random_string'] = generate_random().time();
                    $data['email'] = $email;

                    $forget_password_status = $this->Crud_model->update_forget_password_random_string($data);
                    if($forget_password_status)
                    {
                        $email_data = array();
                        $email_data['email'] = $user_details['email'];
                        $email_data['name'] = $user_details['name'];
                        $email_data['reset_password_link'] = site_url('reset-password/').$data['forget_password_random_string'];
                        $this->user_forget_sendmail($email_data);
                        $this->session->set_flashdata('success','Please check your email. The password reset link has been sent your email.');
                        redirect('forgot-password');
                    }
                    else
                    {
                        $this->session->set_flashdata('failure','There was a problem please try again later.');
                        redirect('forgot-password');
                    }
                }
                else
                {
                    $this->session->set_flashdata('failure','Email does not exist.');
                    redirect('forgot-password');
                }

            }
        }
        else
        {
        	$this->load->view('forgot_password');
        }
    }

	public function user_forget_sendmail($email_data)
	{       
	    $this->load->helper('email_helper');
	    $template_config = array(
	        'type'          => 'forget_password',
	        'email'         => $email_data['email'],
	        'name'    		=> $email_data['name'],
	        'reset_password_link' => $email_data['reset_password_link'],
	    );
	    $message_details = message_template($template_config);

	    $headers = "From: RanchBuilder (team001@clixlogix.org)";
	    $mail_config = array('to'       =>  $email_data['email'],
	                        'subject'   =>  'Re-set Password Request',
	                        'message'   =>  $message_details['message'],
	                        'headers'   =>  $headers
	                    );
	    send_email($mail_config);
	}

	public function reset_password()
    {
        $random_string = $this->uri->segment(2);
        $user_details = $this->Crud_model->get_user_details_reset_password($random_string);
        if(!empty($user_details))
        {
            if($random_string == $user_details['forget_password_random_string'])
            {
                if($this->input->post())
                {
                    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
                    $this->form_validation->set_rules('conf_password', 'Confirm Password', 'trim|required|matches[password]');
                    if ($this->form_validation->run() == FALSE)
                    {
                        $data = array();
                        $data['random_string'] = $random_string;
                        $this->load->view('password_reset',$data);
                    }
                    else
                    {
                        $password = $this->input->post('password');
                        $input_data['password'] = hash_password($password);
                        $input_data['email'] = $user_details['email'];
                        $input_data['reset_password_link'] = $random_string;

                        // Checking for old password
                        if($this->Crud_model->match_old_password($password, $input_data['email']))
                        { 
                            $status = $this->Crud_model->update_password($input_data);
                        }
                        else
                        {
                         $this->session->set_flashdata('failure','Your password is matched with your current password, Please try something else!');
                            redirect('reset-password/'.$input_data['reset_password_link']);
                        }

                        // $status = $this->Crud_model->update_password($input_data);
                        if($status)
                        {
                            $this->Crud_model->update_reset_link($input_data['email']);
                            $this->session->set_flashdata('success','Password reset was successfully completed. Please login with new password.');
                            redirect('login');  
                        }
                        else
                        {
                            $this->session->set_flashdata('failure','There was a problem. Please try again later..');
                            redirect('forgot-password');
                        }
                    }
                }
                else
                {
                    $data = array();
                    $data['random_string'] = $random_string;
                    $this->load->view('password_reset',$data);
                }
            }
            else
            {
                $this->session->set_flashdata('failure','Invalid request.');
                redirect('forgot-password');    
            }
        }
        else
        {
            $this->session->set_flashdata('failure','Invalid request.');
            redirect('forgot-password');    
        }
    }


    /*
         * Display user google signup.
         */
        public function gsignup()
        {
            if(!empty($this->session->userdata('logged_in')))
                redirect('login');
            if(isset($_GET['code']))
            {
                    $auth=$this->googleplus->getAuthenticate();
                    $data=$this->googleplus->getUserInfo();
                    
                    $user_id=$this->Crud_model->check_googleId_exist($data['id']);
                    
                    if(!empty($user_id))
                    {
                        $userDetails=$this->Crud_model->getUserDetailsByID($user_id);
                        $user=$userDetails[0];
                         $sess_array = array(
	                        'user_id'   => $user->id,
	                        'name'     	=> $user->name,                        
	                        'email'     => $user->email,
	                        'role'      => $user->role,
	                        'image_url' => $user->image,
	                        'login_type' => $user->login_type
                    	);
                        $this->session->set_userdata('logged_in',$sess_array);  
                        redirect('student-dashboard');
                    }
                    else
                    {
                        if(!empty($data['email']))
                        {
                        $filename=$data['id'].time().'.jpg';
                        $path= './assets/upload/user/'.$filename;
                        copy($data['picture'],$path);
                        // $input_data['image_url']    = $filename;
                        }
                        $data_users=array(
                                    'email'         =>  $data['email'],
                                    'name'          =>  $data['name'],
                                    'role'          =>  '1',
                                    'login_type'    =>  '2',
                                    'status'        =>  '1',
                                    'google_id'     =>  $data['id'],
                                    'image'         =>  $filename,
                                    'created_at'    =>  date('Y-m-d H:i:s'),
                                    'update_at'     =>  date('Y-m-d H:i:s')
                                );
                        
                        $user_id=$this->Crud_model->student_registration_into_user_db($data_users);
                        $data_profile=array(
                        			'user_id' 		=> 	$user_id,
                        			'name' 			=> 	$data['name'],
                        			'created_at' 	=> 	date('Y-m-d H:i:s'),
                        			'update_at' 	=> 	date('Y-m-d H:i:s')
                        		);
                        $this->Crud_model->student_registration_into_profile_db($data_profile);

                        $userDetails=$this->Crud_model->getUserDetailsByID($user_id);
                        $user=$userDetails[0];
                        $sess_array = array(
	                        'user_id'   => $user->id,
	                        'name'     	=> $user->name,                        
	                        'email'     => $user->email,
	                        'role'      => $user->role,
	                        'image_url' => $user->image,
	                        'login_type' => $user->login_type
                    	);

                        $this->session->set_userdata('logged_in',$sess_array);              
                        redirect('student-dashboard');               
                       
                    }
              
            }
            else
            {
                $this->format->view('login');
            }
        }

     /*
     *   Facebook Callback function
     */
    // public function callback()
    //  {
    //      $act = $this->fb->getAccessToken();
    //      $data = $this->fb->getUserData($act);
    //      print_r($data);die();
    //      $userDetails = $this->Crud_model->facebookSignup($data);
    //      if(!empty($userDetails) || isset($userDetails)) 
    //      {
    //          $user=$userDetails[0];
    //          $sess_array = array(
    //              'user_id'   => $user->id,
    //              'fname'     => $user->first_name, 
    //              'lname'     => $user->last_name,                        
    //              'email'     => $user->email,
    //              'role'      => $user->role,
    //              'image_url' => $user->image_url,
    //              'login_type' => $user->login_type
    //          );
    //          $this->session->set_userdata('logged_in', $sess_array);
    //          redirect('login','refresh');              
    //      }
    //      else
    //      {
    //          redirect('login','refresh');              
    //      }
    //  }

     public function termsofservice()
     {
     	$this->load->view('termsofservice');
     }
}
?>
