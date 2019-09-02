<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parent_Controller extends CI_Controller 
{

		public function __construct()
	{
		parent::__construct();  
		$this->load->model('Teacher_model');
		check_parent_sess();
	}

	public function index()
	{
		// $this->layout->view('parent/dashboard');
		$this->load->view('parent/dashboard');
	}

	public function logout()
	{
	    if($this->session->userdata('parent_logged_in'))
	    {
	        unset($_COOKIE['rm_cookie']);
	        setcookie('rm_cookie', null, -1, '/');
	        $this->session->unset_userdata('parent_logged_in');
	        $this->session->sess_destroy();   
	        redirect('sign-up');
	    }
	}
}
?>