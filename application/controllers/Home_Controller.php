<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require('./vendor/autoload.php');
class Home_Controller extends CI_Controller 
{

		public function __construct()
	{
		parent::__construct();  
		$this->load->model('Student_model');
		$this->load->model('Crud_model');
		$this->load->model('Teacher_model');
		check_user_sess();
	}

	public function index()
	{
		$this->load->view('student/dashboard');
	}

	public function logout()
	{
	    if($this->session->userdata('logged_in'))
	    {
	        unset($_COOKIE['rm_cookie']);
	        setcookie('rm_cookie', null, -1, '/');
	        $this->session->unset_userdata('logged_in');
	        $this->session->sess_destroy();
	        
	        redirect('login');
	    }
	}


	public function student_profile_details()
	{
		$user_id = $this->session->userdata('logged_in')['user_id'];
		$data['profile'] = $this->Student_model->get_student_profile_deatils_by_id($user_id);
		$this->load->view('student/student_profile_details',$data);
	}

	public function update_profile_details()
	{
		if($this->input->post())
		{
			$this->form_validation->set_rules('student_name', 'Student Name', 'trim|required');
			$this->form_validation->set_rules('school_type', 'School Type', 'trim|required');
			$this->form_validation->set_rules('class_level', 'Class Level', 'trim|required');
			$this->form_validation->set_rules('address', 'Address', 'trim|required');
			$this->form_validation->set_rules('registerphone', 'Mobile Number', 'trim|required|numeric|min_length[10]');
			if ($this->form_validation->run() == FALSE)
			{
                $user_id = $this->session->userdata('logged_in')['user_id'];
    			$data['profile'] = $this->Student_model->get_student_profile_deatils_by_id($user_id);
    			$data['school_list'] = $this->Crud_model->get_school_list();
    			$data['grade_list'] = $this->Crud_model->get_grade_list();
    			$this->load->view('student/edit-profile',$data);
			}
			else
			{
				$user_id = $this->session->userdata('logged_in')['user_id'];

				$config['upload_path']          = './assets/upload/user/';
                $config['allowed_types']        = 'pdf|jpg|png|jpeg';
                $config['max_size']             = 10000;
                $config['encrypt_name']         = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if(!empty($_FILES['profile_pic']['name']))
                {
                    $this->upload->do_upload('profile_pic');
                    $profile_pic = $this->upload->data('file_name');
                    update_profilepic_by_id($user_id,$profile_pic);
                }
				$data_profile=array(
				            'name'          =>  $this->input->post("student_name"),
				            'phone'         =>  $this->input->post("registerphone"),
				            'school'        =>  $this->input->post("school_type"),
				            'grade'         =>  $this->input->post("class_level"),
				            'address'       =>  $this->input->post("address"),
				            'update_at'     =>  date('Y-m-d H:i:s')
				        );

				 $status  = $this->Student_model->update_profile($user_id, $data_profile);
				if($status == true)
                {	
                	$profile = get_details_from_user_table_by_id($user_id);
                	$sess_array = array(
                	    'user_id'   => $profile['id'],
                	    'name'     	=> $profile['name'],                       
                	    'email'     => $profile['email'],
                	    'role'      => $profile['role'],
                	    'login_type'=> $profile['login_type'],
                	    'image_url' => $profile['image']
                	);

                	$this->session->set_userdata('logged_in',$sess_array); 
					$this->session->set_flashdata('success','Profile update was successfully completed.');
					redirect('student-profile');
				}
			}
		}else
		{
			$user_id = $this->session->userdata('logged_in')['user_id'];
			$data['profile'] = $this->Student_model->get_student_profile_deatils_by_id($user_id);
			$data['school_list'] = $this->Crud_model->get_school_list();
			$data['grade_list'] = $this->Crud_model->get_grade_list();
			$this->load->view('student/edit-profile',$data);
		}
	}

	public function student_change_password()
	{
		if($this->input->post())
		{
		    $this->form_validation->set_rules('old_password', 'Current Password', 'trim|required');
		    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
		    $this->form_validation->set_rules('conf_password', 'Confirm Password', 'trim|required|matches[password]');
		    if ($this->form_validation->run() == FALSE)
		    {
		       $this->load->view('student/changepassword');
		    }
		    else
		    {
		        
		        $old_password = $this->input->post('old_password');
		        $password = $this->input->post('password');
		        $input_data['password'] = hash_password($password);
		        $input_data['email'] = $this->session->userdata('logged_in')['email'];
		        if ($this->Crud_model->match_old_password($old_password, $input_data['email'])) 
		        {
			    	$this->session->set_flashdata('failure','Old password is incorrect. Please try again later..');
			            redirect('student-change-password');   
			    }
			    else
			    {
			    	 if($this->Crud_model->match_old_password($password, $input_data['email']))
			        { 
			            $status = $this->Student_model->update_change_password($input_data);
			        }
			        else
			        {
			         $this->session->set_flashdata('failure','Your password is matched with your current password, Please try something else!');
			            redirect('student-change-password');
			        }
			        if($status)
			        {
			            $this->session->set_flashdata('success','Password reset was successfully completed.');
			            redirect('student-change-password');  
			        }
			        else
			        {
			            $this->session->set_flashdata('failure','There was a problem. Please try again later..');
			            redirect('student-change-password'); 
			        }
			    }
		    }
		}else
		{
			$this->load->view('student/changepassword');
		}
	}

	public function find_teacher()
	{
		$data['subject_list'] = $this->Crud_model->get_subject_list();
		$data['teachers_details_list'] = $this->Student_model->get_teachers_details();
		$this->load->view('student/find-teacher',$data);
	}

	public function show_date_by_month_id()
	{
		$subject_id = $this->input->post('sub_id');
		$year_month = $this->input->post('month');
		$date = $this->input->post('date');

		if (!empty($subject_id) && !empty($year_month))
		{
			
			$acuity = new AcuityScheduling(array(
		          'userId' => acuity_user_id,
			  'apiKey' => acuity_apikey
			));

			$dates = $acuity->request('/availability/dates', array(
			  'query' => array(
			    'month' => $year_month,
			    'appointmentTypeID' => $subject_id 
			  ) 
			));
			echo "<option>Choose Date</option>";
			foreach ($dates as $value) 
			{ 
				echo '<option value="'.$value['date'].'" '.(($date == $value['date']) ? "selected" : "").'>'.$value['date'].'</option>';
			}
		}
	}

	public function show_timeslots_by_date_id()
	{
		$subject_id = $this->input->post('sub_id');
		$date = $this->input->post('date');
		if (!empty($subject_id) && !empty($date))
		{
			$acuity = new AcuityScheduling(array(
		          'userId' => acuity_user_id,
			  'apiKey' => acuity_apikey
			));

			$times = $acuity->request('/availability/times', array(
			  'query' => array(
			    'date' => $date,
			    'appointmentTypeID' => $subject_id
			  ) 
			));
			echo "<option>Choose Time</option>";
	        foreach ($times as $value) 
	        { 
	        	$pretime = explode("T",$value['time']);
	        	$time   = explode("+", $pretime[1]);
	        	echo '<option value="'.$value['time'].'">'.$time[0].'</option>';
			}
		}
	}

	// public function filter_teacher_list_by_ajax()
	// {
	// 	$subject_id = $this->input->post('sub_id');
	// 	$data['teachers_list'] = $this->Student_model->filter_teacher_list_by_ajax($subject_id);
	// 	print_r($data);
	// }

	public function submit_filters()
	{
		if($this->input->post())
		{
			$subject = $this->input->post('subject');
			$date 	= $this->input->post('date');
			$final_string = "";
			$status_code = "";

			$teachers_list = $this->Student_model->filter_teacher_list_by_subject($subject);

			$acuity = new AcuityScheduling(array(
			          'userId' => acuity_user_id,
				  'apiKey' => acuity_apikey
				));
			foreach ($teachers_list as $value) 
			{

				$times = $acuity->request('/availability/times', array(
			          'query' => array(
			            'date' => $date,
			            'appointmentTypeID' => $subject,
						'calendarID' => $value['calendar_id']

			          ) 
			        ));

				if (empty($times)) 
				{
					redirect('search-teacher');
				}
				else{
					$final_string .= $value['calendar_id'].",";
				}
				unset($times);
			}

			$abc = rtrim($final_string,',');

			$data['subject_list'] = $this->Crud_model->get_subject_list();
			$data['teachers_details_list'] = get_teachers_details_by_id($abc);
			$this->load->view('student/find-teacher',$data);
		}
		else
		{
	        redirect('search-teacher');
		}
	}

	public function book_teacher_timeslots($subject_id,$calendar_id,$date)	
	{	
		if (!empty($subject_id) && !empty($calendar_id) && !empty($date)) 
		{
			$array =array();
					$acuity = new AcuityScheduling(array(
						          'userId' => acuity_user_id,
							  'apiKey' => acuity_apikey
							));

					$times = $acuity->request('/availability/times', array(
						          'query' => array(
						            'date' => $date,
						            'appointmentTypeID' => $subject_id,
									'calendarID' => $calendar_id

						          ) 
						        ));
					$b = array();

					if (!empty($times)) 
					{
						if (array_key_exists("status_code",$times))
						{
							if ($times['status_code']!="400") 
							{
								foreach ($times as $value)
								{
					            	$array = $value['time'];
					            	array_push($b, array('start' => $array));
								}
							}

						}else
						{
							foreach ($times as $value)
							{
				            	$array = $value['time'];
				            	array_push($b, array('start' => $array));
							}
						}
					}

					$data['teachers_details_list'] = get_teachers_details_by_id($calendar_id);
					$data['subjects_list'] = get_subject_list_by_calendar_id($calendar_id);
					$data['subjects_id'] = $subject_id;
					$data['date'] = $date;
					$data['time_slots']= json_encode($b);
					$this->load->view('student/book-teacher',$data);
		}else{
			redirect('search-teacher');
		}
	}
}?>