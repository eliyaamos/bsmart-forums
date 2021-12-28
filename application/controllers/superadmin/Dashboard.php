<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('dashboard_model');
		$this->load->model('location_model');
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('session');
	}


	public function index()
	{	$session_data_uni = $this->session->userdata();
		$get['user_data'] = $this->dashboard_model->get_uni_data($session_data_uni['id']);
		
		$this->load->view('layout/top');
		$this->load->view('superadmin/dashboard', $get);
		$this->load->view('layout/bottom');
	}

	
}
?>