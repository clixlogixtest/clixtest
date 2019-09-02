<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require('./vendor/autoload.php');
class Front_Controller extends CI_Controller 
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
	}

	public function index()
	{
		// $acuity = new AcuityScheduling(array(
	 //          'userId' => 13360167,
		//   'apiKey' => '3ae751f860961b61146b7f7d7069e2f3'
		// ));


		// $types = $acuity->request('/appointment-types');
  //               echo "<pre>";
	 //        print_r($types);die();
		$this->load->view('index');
	}

	public function add_subject()
	{
		//  $acuity = new AcuityScheduling(array(
	 //          'userId' => 13360167,
		//   'apiKey' => '3ae751f860961b61146b7f7d7069e2f3'
		// ));


		// $types = $acuity->request('/appointment-types');
		// $this->Crud_model->insert_subject_list($types);
	}

}
?>