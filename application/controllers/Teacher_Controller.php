<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher_Controller extends CI_Controller 
{

		public function __construct()
	{
		parent::__construct();  
		$this->load->model('Teacher_model');
		$this->load->model('Crud_model');
		check_teacher_sess();
	}

	public function index()
	{
		$this->load->view('teacher/dashboard');
	}

	public function logout()
	{
	    if($this->session->userdata('teacher_logged_in'))
	    {
	        unset($_COOKIE['rm_cookie']);
	        setcookie('rm_cookie', null, -1, '/');
	        $this->session->unset_userdata('teacher_logged_in');
	        $this->session->sess_destroy();   
	        redirect('login');
	    }
	}

	public function teacher_profile_show()
	{
		$teacher_id = $this->session->userdata('teacher_logged_in')['user_id'];
		$data['profile'] = $this->Teacher_model->get_teacher_profile_deatils_by_id($teacher_id);
		$data['subjects_list'] = $this->Teacher_model->get_subject_name_list_by_id($teacher_id);
		$this->load->view('teacher/teacher-profile-details',$data);
	}

	public function teacher_profile_edit()
	{
		if($this->input->post())
		{
			$this->form_validation->set_rules('fname', 'First Name', 'trim|required');
			$this->form_validation->set_rules('lname', 'Last Name', 'trim|required');
			$this->form_validation->set_rules('phone', 'Mobile Number', 'trim|required|numeric|min_length[10]');
			$this->form_validation->set_rules('address', 'Address', 'trim|required');
			if ($this->form_validation->run() == FALSE)
			{
                $teacher_id = $this->session->userdata('teacher_logged_in')['user_id'];
                $data['profile'] = $this->Teacher_model->get_teacher_profile_deatils_by_id($teacher_id);
                $this->load->view('teacher/edit-profile',$data);
			}
			else
			{
				$user_id = $this->session->userdata('teacher_logged_in')['user_id'];
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
				            'fname'        =>  $this->input->post("fname"),
				            'lname'        =>  $this->input->post("lname"),
				            'phone'        =>  $this->input->post("phone"),
				            'address'      =>  $this->input->post("address"),
				            'update_at'    =>  date('Y-m-d H:i:s')
				        );

				 $status  = $this->Teacher_model->update_profile($user_id, $data_profile);
				if($status == true)
                {	
                	$profile = get_details_from_user_table_by_id($user_id);
                	$sess_array = array(
                	    'user_id'   => $profile['id'],
                	    'name'     	=> $profile['name'],                       
                	    'email'     => $profile['email'],
                	    'role'      => $profile['role'],
                	    'image_url' => $profile['image']
                	);

                	$this->session->set_userdata('teacher_logged_in',$sess_array); 
					$this->session->set_flashdata('success','Profile update was successfully completed.');
					redirect('teacher-profile');
				}
			}
		}
		else
		{
			$teacher_id = $this->session->userdata('teacher_logged_in')['user_id'];
			$data['profile'] = $this->Teacher_model->get_teacher_profile_deatils_by_id($teacher_id);
			$this->load->view('teacher/edit-profile',$data);
		}
	}

		public function teacher_change_password()
	{
		if($this->input->post())
		{
		    $this->form_validation->set_rules('old_password', 'Current Password', 'trim|required');
		    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
		    $this->form_validation->set_rules('conf_password', 'Confirm Password', 'trim|required|matches[password]');
		    if ($this->form_validation->run() == FALSE)
		    {
		       $this->load->view('teacher/change-password');
		    }
		    else
		    {
		        
		        $old_password = $this->input->post('old_password');
		        $password = $this->input->post('password');
		        $input_data['password'] = hash_password($password);
		        $input_data['email'] = $this->session->userdata('teacher_logged_in')['email'];
		        if ($this->Crud_model->match_old_password($old_password, $input_data['email'])) 
		        {
			    	$this->session->set_flashdata('failure','Old password is incorrect. Please try again later..');
			            redirect('teacher-change-password');   
			    }
			    else
			    {
			    	 if($this->Crud_model->match_old_password($password, $input_data['email']))
			        { 
			            $status = $this->Teacher_model->update_change_password($input_data);
			        }
			        else
			        {
			         $this->session->set_flashdata('failure','Your password is matched with your current password, Please try something else!');
			            redirect('teacher-change-password');
			        }
			        if($status)
			        {
			            $this->session->set_flashdata('success','Password reset was successfully completed.');
			            redirect('teacher-change-password');  
			        }
			        else
			        {
			            $this->session->set_flashdata('failure','There was a problem. Please try again later..');
			            redirect('teacher-change-password'); 
			        }
			    }
		    }
		}else
		{
			$this->load->view('teacher/change-password');
		}
	}

	public function book_appointments()
	{
		$this->load->view('teacher/teacher-book-appointments');
	}

}?>