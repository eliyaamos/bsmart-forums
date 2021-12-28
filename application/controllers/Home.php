<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		$this->load->model('dashboard_model');
		$this->load->database();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('email');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('email');

	}

	public function index()
	{
		// $this->load->view('layout/top');
		$this->load->view('layout/login_header');
		$this->load->view('home');
		// $this->load->view('layout/bottom');
	}

	public function register()
	{
		if ($this->input->post('reg_button'))

	{
		//$this->form_validation->set_message('vaild_email', 'Please enter a valid email id');

		// $email = $this->input->post('reg_email');
		// $email2 = $this->input->post('reg_email2');
		// echo $email."<br>".$email2;

		$this->form_validation->set_rules('reg_full_name', 'Full Name', 'trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('reg_phone', 'Phone', 'trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('reg_email', 'Email', 'required|is_unique[users.email]|callback_email_check');
		$this->form_validation->set_rules('reg_email2', 'Confirm Email', 'required|matches[reg_email]');
		$this->form_validation->set_rules('reg_password', 'Password', 'trim|required');
		$this->form_validation->set_rules('reg_password2', ' Confirm Password', 'trim|required|matches[reg_password]');




				 if ($this->form_validation->run() == FALSE)
                {
                 // echo "<script>window.alert('Oops! Error! Refresh your page and try again!')</script>";
                	echo validation_errors();
                	exit;
                }
                else
                {		
						$reg_full_name = $this->input->post('reg_full_name');
						$reg_phone = $this->input->post('reg_phone');
						$reg_email = $this->input->post('reg_email');
						$reg_email2 = $this->input->post('reg_email2');
						$reg_password = $this->input->post('reg_password');
						$reg_password2 = $this->input->post('reg_password2');
						$user_type = $this->input->post('user_type');
				        
				       $result = $this->home_model->insert_data($reg_full_name, $reg_phone, $reg_email, $reg_password, $user_type);

				       $get = $this->home_model->get_details($reg_email);
				       $session_data = array('log_email' => $reg_email, 'id'=> $get[0]['id'], 'full_name' => $get[0]['full_name'], 'phone' => $get[0]['phone'], 'user_type' => $get[0]['user_type']);
			
						$this->session->set_userdata($session_data);
                     
			                    if($user_type == 'user' )
							{ 
								redirect('dashboard_controller/', 'refresh');
							}
							else if ($user_type == 'employer' )
							{
								redirect('dashboard_controller/mentor_dashboard/', 'refresh');
							}
							else if ($user_type == 'member' )
							{
								redirect('dashboard_controller/club_profile/', 'refresh');
							}
							else if ($user_type == 'admin' )
							{
								redirect('superadmin/', 'refresh');
							}
			                }
 		    

    	 	}
		
    	}

    	 public function email_check($email){

    	 	if(filter_var($email, FILTER_VALIDATE_EMAIL)){

    	 		return TRUE;
    	 	}else {
    	 		$this->form_validation->set_message('email_check', 'Please Enter a valid Email id!');
    	 		return FALSE;
    	 	}
 
    	 }

    	 public function password_check($password){

    	 	if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,20}$/', $password)) {
   						 $this->form_validation->set_message('password_check', 'Password Must Contain Captial Letters, Number and Special Characters, with minimum 8 Characters Long!');
   					 return FALSE;
				}
				else{
					return TRUE;
				}

    	 }
    	 // preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/',$password)
    	 	// preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,20}$/', $password)
public function login(){

	$log_email = $this->input->post('log_email');
		$log_password = $this->input->post('log_password');

		$check_login = $this->home_model->check_login($log_email, $log_password);

		if($check_login['status'] == 1)
		{		
				$get = $this->home_model->get_details($log_email);

				// echo "<pre>";                                                       
				// // ([0] => Array  ( [id] => 5 [full_name] => Shivanjali [phone] => Chaurasia [email] => shivanjali012@gmail.com [password] => 1234567890 [user_type] => student ) //output
				// print_r($get);   

				// echo "</pre>";

				// print_r($get[0]['user_type']);  //prints id

				// foreach ($get as $id) {
				// 	echo $id['full_name'];   //prints Full Name
				// }

				
				$session_data = array('log_email' => $log_email, 'id'=> $get[0]['id'], 'full_name' => $get[0]['full_name'], 'phone' => $get[0]['phone'], 'user_type' => $get[0]['user_type']);
			
				$this->session->set_userdata($session_data);

				if($get[0]['user_type'] == 'user' )
				{ 
					redirect('user/dashboard', 'refresh');
				}
				else if ($get[0]['user_type'] == 'admin' )
				{
					redirect('admin/dashboard', 'refresh');
				}
				else if ($get[0]['user_type'] == 'member' )
				{
					redirect('dashboard_controller/club_profile/', 'refresh');
				}
				else if ($get[0]['user_type'] == 'super_admin' )
				{
					redirect('superadmin/dashboard', 'refresh');
				}

		}
		else {

			echo "<script>window.alert('Oops! Something went Wrong! Check your credentials and try again!');</script>";
			
			$this->load->view('layout/login_header');
			$this->load->view('home');
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect();
	}

}
