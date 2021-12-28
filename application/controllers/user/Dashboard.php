<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		// $this->load->model('dashboard_model');
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('session');
	}


	public function index()
	{
		$this->load->view('layout/top');
		$this->load->view('user/dashboard');
		$this->load->view('layout/bottom');
	}


}?>