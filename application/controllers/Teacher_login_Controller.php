<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher_login_Controller extends CI_Controller 
{

		public function __construct()
	{
		parent::__construct();  
		$this->load->model('Crud_model');
		 if(!empty($this->session->userdata('logged_in'))){
                redirect('student-dashboard');
		 }
	}

	public function tutor_registration()
	{
		if(!empty($this->input->post()))
        {
        	$this->form_validation->set_rules('fname', 'First Name', 'trim|required');
        	$this->form_validation->set_rules('lname', 'Last Name', 'trim|required');
        	$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        	$this->form_validation->set_rules('phone', 'Mobile Number', 'trim|required|numeric|min_length[10]');
        	$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
        	$this->form_validation->set_rules('conf_password', 'Confirm Password', 'trim|required|matches[password]');
        	$this->form_validation->set_rules('message', 'Message', 'trim|required');
            $this->form_validation->set_rules('subjects[]', 'subjects', 'required');
            $subjects = $this->input->post("subjects");
            
            if (empty($_FILES['teacher_cv']['name']))
            {
                $this->form_validation->set_rules('teacher_cv', 'CV', 'required');
            }
            if (empty($_FILES['certificate']['name']))
            {
                $this->form_validation->set_rules('certificate', 'Certificate', 'required');
            }


        	if ($this->form_validation->run() == FALSE)
        	{
        	    $data['subject_list'] = $this->Crud_model->get_subject_list();
                $data['subject_loop'] = fmod(count($data['subject_list']), 5);
                $this->load->view('tutor-registration',$data);
        	}
        	else{
        		$data_users=array(
        					'email' 		=> 	$this->input->post("email"),
        					'password' 		=> 	hash_password($this->input->post("password")),
        					'name' 			=> 	$this->input->post("fname"),
        					'role' 			=> 	'4',
        					'login_type' 	=> 	'1',
        					'status' 		=> 	'1',
        					'phone' 		=> 	$this->input->post("phone"),
        					'created_at' 	=> 	date('Y-m-d H:i:s'),
        					'update_at' 	=> 	date('Y-m-d H:i:s')
        				);
        		$user_id = 0;
        		$user_id = $this->Crud_model->teacher_registration_into_user_db($data_users);

                $config['upload_path']          = './assets/upload/teacher_documents/';
                $config['allowed_types']        = 'pdf|jpg|png|docx|doc|txt|rtf';
                $config['max_size']             = 10000;
                $config['encrypt_name']         = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if(!empty($_FILES['teacher_cv']['name']))
                {
                    $this->upload->do_upload('teacher_cv');
                    $cv_name = $this->upload->data('file_name');
                }else{
                    $cv_name ="";
                }
                if(!empty($_FILES['certificate']['name']))
                {
                    $this->upload->do_upload('certificate');
                    $certificate_name = $this->upload->data('file_name');
                }else{
                    $certificate_name = "";
                }

                foreach ($subjects as $value) 
                {
                    $data_teacher_subject = array(
                                                'teacher_id'  =>  $user_id,
                                                'subject_id'  =>  $value,
                                                'status'      =>  '1',
                                                );
                    $this->Crud_model->assign_subject_into_teacher_subject($data_teacher_subject);
                    unset($data_teacher_subject);
                }
                
        		$data_profile=array(
							'user_id' 		=> 	$user_id,
							'teacher_status'=> 	'0',
							'fname' 		=> 	$this->input->post("fname"),
							'lname' 		=> 	$this->input->post("lname"),
							'phone' 		=> 	$this->input->post("phone"),
                            'message'       =>  $this->input->post("message"),
                            'teacher_cv'    =>  $cv_name,
							'certificate'   => 	$certificate_name,
							'created_at' 	=> 	date('Y-m-d H:i:s'),
							'update_at' 	=> 	date('Y-m-d H:i:s')
						);

				$this->Crud_model->teacher_registration_into_profile_db($data_profile);
				 if(!empty($user_id))
                    {
                        $this->session->set_flashdata('success','Your account has been created. Please login..');
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
            $data['subject_list'] = $this->Crud_model->get_subject_list();
            $data['subject_loop'] = fmod(count($data['subject_list']), 5);
			$this->load->view('tutor-registration',$data);
        }
	}

}?>