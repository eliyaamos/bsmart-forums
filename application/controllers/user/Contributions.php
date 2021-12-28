<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contributions extends MY_Controller {
 
 public function __construct()
 {
    parent::__construct();
   
 }

    public function index() {  
       /* load the view page */ 
         $this->load->view('layout/top');
		$this->load->view('user/contributions');
		$this->load->view('layout/bottom');
       
    }
}