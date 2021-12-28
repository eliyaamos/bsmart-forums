<?php

define('THEMES_DIR', 'themes');
define('BASE_URI', str_replace('index.php', '', $_SERVER['SCRIPT_NAME']));

class MY_Controller extends CI_Controller
{

    protected $langs = array();

    public function __construct()
    {

        parent::__construct();
        $this->load->database();
         $this->load->model('location_model');
        $this->load->model('dashboard_model');
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('session');

        if($this->session->has_userdata('log_email')){

            $email = $this->session->userdata('log_email');
            $id = $this->session->userdata('id');
            $full_name = $this->session->userdata('full_name');
            $phone = $this->session->userdata('phone');
            $user_type = $this->session->userdata('user_type');
            }else {
              redirect();
            }
          
    } 

     

}

