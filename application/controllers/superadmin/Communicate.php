<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Communicate extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
		
	}


	public function index()
	{	
		$this->load->view('layout/top');
		$this->load->view('superadmin/communicate');
		$this->load->view('layout/bottom');
	}

	
}
?>