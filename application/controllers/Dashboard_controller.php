<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_controller extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('dashboard_model');
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('session');
	}


	public function index()
	{
		// $session_data = $this->session->userdata();
		// $get['user_data'] = $this->dashboard_model->get_data($session_data['id']);
		

		// $this->load->view('layout/top');
		
		// $this->load->view('dashboard/dashboard_view_student', $get);
		
		// $this->load->view('layout/bottom');
	
		// $this->load->view('layout/top');
		// $this->load->view('dashboard/dashboard_view_student');
		// $this->load->view('layout/bottom');
		$this->student_details();
	}

	public function student_profile(){

		$stu_profile_sess = $this->session->userdata();
		$get['user_data'] = $this->dashboard_model->get_data($stu_profile_sess['id']);

		
		$this->load->view('layout/top');
		$this->load->view('profile/student_profile', $get);
		$this->load->view('layout/bottom');
	

	}

	public function mentor_profile(){

		$mentor_profile_sess = $this->session->userdata();
		$get['user_data'] = $this->dashboard_model->get_mentor_data($mentor_profile_sess['id']);

		$this->load->view('layout/top');
		$this->load->view('profile/mentor_profile', $get);
		$this->load->view('layout/bottom');

	}

	public function university_profile(){

		$uni_profile_sess = $this->session->userdata();
		$get['user_data'] = $this->dashboard_model->get_uni_data($uni_profile_sess['id']);

		$this->load->view('layout/top');
		$this->load->view('profile/uni_profile', $get);
		$this->load->view('layout/bottom');

	}

	public function mentor_dashboard(){

		$session_data_mentor = $this->session->userdata();
		$get['user_data'] = $this->dashboard_model->get_mentor_data($session_data_mentor['id']);
		
		$this->load->view('layout/top');
		$this->load->view('dashboard/dashboard_view_mentor', $get);
		$this->load->view('layout/bottom');

	}

	public function university_dashboard(){

		$session_data_uni = $this->session->userdata();
		$get['user_data'] = $this->dashboard_model->get_uni_data($session_data_uni['id']);
		
		$this->load->view('layout/top');
		$this->load->view('dashboard/dashboard_view_uni', $get);
		$this->load->view('layout/bottom');

	}
	// public function student_data()
	// {
				
	// 			// print_r($session_data);   
	// 			// **** Output: Array ( [__ci_last_regenerate] => 1546944246 [log_email] => shivanjali012@gmail.com [id] => 5 [full_name] => Shivanjali [phone] => Chaurasia ) 

	// 			// echo "<br>".$session_data['id'];     result = id
				

	// 							// $this->student_details();
				
	// 							// $get['user_data'] = $this->dashboard_model->get_data($session_data['id']);
	// 							// $this->load->view('layout/top');
	// 							// $this->load->view('dashboard/dashboard_view_student', $get);
	// 							// $this->load->view('layout/bottom');
								
	// 							//print_r($get['data']);
						
	// }
	public function student_details(){
		
		$session_data_student = $this->session->userdata();
		$get['user_data'] = $this->dashboard_model->get_data($session_data_student['id']);

		$this->load->view('layout/top');
		$this->load->view('dashboard/dashboard_view_student', $get);
		$this->load->view('layout/bottom');
		// print_r($get);
		//  $this->load->view('pages/success', $get);
		}

	public function dash_student_details(){
			$session_details = $this->session->userdata();
		if ($this->input->post('dash_submit'))

		{		
	
				$dash_dob = $this->input->post('dash_dob');
				$dash_gender = $this->input->post('dash_gender');
				$dash_elevel = $this->input->post('dash_elevel');
				$dash_professional = $this->input->post('dash_professional');
				$dash_cstudied = $this->input->post('dash_cstudied');
				$dash_institution = $this->input->post('dash_institution');
				$dash_course = $this->input->post('dash_course');
				$dash_year = $this->input->post('dash_year');
				$dash_graduate = $this->input->post('dash_graduate');
				$dash_college = $this->input->post('dash_college');
				$dash_bsmartprogram = $this->input->post('dash_bsmartprogram');
				$dash_asoftoday = $this->input->post('dash_asoftoday');
				$dash_ambassador = $this->input->post('ambassador');


				$data = array('id' =>$session_details['id'],
							  'email' =>$session_details['log_email'],
							  'dob' =>$dash_dob,
							  'gender' =>$dash_gender,
							  'elevel' =>$dash_elevel,
							  'professional' =>$dash_professional,
							  'cstudied' =>$dash_cstudied,
							  'institution' =>$dash_institution,
							  'bsmartprogram' =>$dash_bsmartprogram,
							  'course' =>$dash_course,
							  'year' =>$dash_year,
							  'graduate' =>$dash_graduate,
							  'asoftoday' =>$dash_asoftoday,
							  'college' =>$dash_college,
							  'ambassador' =>$dash_ambassador,
							);

				// $id = $session_details['id'];

								$result = $this->dashboard_model->insert_student_data($data);
								// print_r($data);
							 redirect("dashboard_controller/student_profile");
								// redirect("dashboard_controller/", 'refresh');
								


		}	
		else if($this->input->post('dash_update'))
			
				{			$up_graduate = $this->input->post('dash_graduate');
							$up_elevel = $this->input->post('dash_elevel');
							$up_professional = $this->input->post('dash_professional');
							$up_cstudied = $this->input->post('dash_cstudied');
							$up_institution = $this->input->post('dash_institution');
							$up_bsmartprogram = $this->input->post('dash_bsmartprogram');
							$up_college = $this->input->post('dash_college');
							$up_gender = $this->input->post('dash_gender');
							$up_ambassador = $this->input->post('dash_ambassador');
						

		$updated_data = array(
						'graduate' =>$up_graduate,
						'elevel' =>$up_elevel,
						'professional' =>$up_professional,
						'cstudied' =>$up_cstudied,
						'institution' =>$up_institution,
						'bsmartprogram' =>$up_bsmartprogram,
						'college' =>$up_college,
						'gender' =>$up_gender,
						'ambassador' =>$up_ambassador );

		$id = $session_details['id'];
		//print_r($updated_data);
		$up_result= $this->dashboard_model->update_data($updated_data, $id);

	                redirect("dashboard_controller/student_profile");
	
	                //INSTEAD OF RELOADING DASHBOARD AFTER UPDATING DATA
// 		$this->load->view('layout/top');
// 		$this->load->view('profile/student_profile');
// 		$this->load->view('layout/bottom');

	

		}else{

		echo "<script>window.alert('Oops! Something Went Wrong!');</script>";

		}	

	}


	public function dash_uni_details(){

		$session_uni = $this->session->userdata();

			if ($this->input->post('uni_submit'))

			{	
				$founder_day = $this->input->post('founder_day');
				$phone = $this->input->post('phone');
				$contact1 = $this->input->post('contact1');
				$phone1 = $this->input->post('phone1');
				$contact2 = $this->input->post('contact2');
				$phone2 = $this->input->post('phone2');
				$reg_no = $this->input->post('reg_no');
				$email = $this->input->post('email');
				

				$uni_data = array(	'id' => $session_uni['id'] ,
							  		'email' => $session_uni['log_email'],
									  'phone' => $session_uni['phone'],
							  		'founder_day' => $founder_day,
							  		'contact1' => $contact1,
							  		'phone1' => $phone1,
							  		'contact2' => $contact2,
							  		'reg_no' => $reg_no);

								$result = $this->dashboard_model->insert_data_uni($uni_data);
								// print_r($uni_data);
								 $this->university_dashboard();

		}	
		 else if($this->input->post('uni_update'))
			
				{ 
					$contact1 = $this->input->post('contact1');
					$phone1 = $this->input->post('phone1');
					$contact2 = $this->input->post('contact2');
					$phone2 = $this->input->post('phone2');
					$reg_no = $this->input->post('reg_no');
					$founder_day = $this->input->post('founder_day');

					$updated_data = array(	
										
										'contact1' => $contact1,
								  		'phone1' => $phone1,
								  		'contact2' => $contact2,
								  		'phone2' => $phone2,
										 'reg_no' => $reg_no,
										 'founder_day' => $founder_day);


		$id = $session_uni['id'];
		// print_r($updated_data);
		$up_result= $this->dashboard_model->update_uni($updated_data, $id);

		$this->university_dashboard();
		redirect("dashboard_controller/university_profile");

		}
		else{

		echo "<script>window.alert('Oops! Something Went Wrong!');</script>";

		}	
	}


		public function dash_mentor_details(){

		$session_mentor = $this->session->userdata();

			if ($this->input->post('ment_submit'))

			{	
				$ment_regdate = $this->input->post('ment_regdate');
				$ment_etype = $this->input->post('ment_etype');
				$ment_company = $this->input->post('ment_company');
				$ment_region = $this->input->post('ment_region');
				$ment_district = $this->input->post('ment_district');
				$ment_designation = $this->input->post('ment_designation');
				$ment_eooperation = $this->input->post('ment_eooperation');


				$ment_data = array(
								'id' => $session_mentor['id'] ,
							  'email' => $session_mentor['log_email'],
							  'regdate' => $ment_regdate,
							  'etype' => $ment_etype,
							  'company' => $ment_company,
							  'region' => $ment_region,
							  'district' => $ment_district,
							  'designation' => $ment_designation,
								'eooperation'=>$ment_eooperation);
								$result = $this->dashboard_model->insert_data_mentor($ment_data);
								//print_r($ment_data);
								 $this->mentor_dashboard();

		}	
		 else if($this->input->post('ment_update'))
			
				{
							$up_redate = $this->input->post('ment_regdate');
							$up_company = $this->input->post('ment_company');
							$up_designation = $this->input->post('ment_designation');
							$up_district = $this->input->post('ment_district');
							$up_region = $this->input->post('ment_region');
							$up_etype = $this->input->post('ment_etype');
							$up_eooperation = $this->input->post('ment_eooperation');
						

		$updated_data = array(
						'etype' => $up_etype,
						'region' => $up_region,
						'district' => $up_district,
						'company' => $up_company,
						'eooperation' => $up_eooperation,
						 );

		$id = $session_mentor['id'];
		// print_r($updated_data);
		$up_result= $this->dashboard_model->update_mentor($updated_data, $id);

		$this->mentor_dashboard();
		redirect("dashboard_controller/mentor_profile");

		}
		else{

		echo "<script>window.alert('Oops! Something Went Wrong!');</script>";

		}	

	}

	public function student_image(){

		// if(isset($_FILES['stu_pic'])){
		// 	$target = base_url().'assets/img/profile_pics/';
		// 	 $filename = $_FILES['stu_pic']['name'];
		// 	  $filetmp = $_FILES['stu_pic']['tmp_name'];
		// 	    move_uploaded_file($filetmp, $target.$filename);

		// 	     echo $filename."<br>";

  //               echo $target.$filename;
		// }
					$student_image = $this->session->userdata();
					$id = $student_image['id'];

		 		$config['upload_path']          = 'assets/img/profile_pics/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 10000;
                $config['max_width']            = 10000;
                $config['max_height']           = 10000;
                $config['encrypt_name']			= TRUE;
                $config['remove_spaces']		= TRUE;
                 $config['overwrite']			= FALSE;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('stu_pic'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        print_r($error);
                       
                        
                      //  $this->load->view('dashboard/student_profile', $error);
                }
				else
                {
                        $data = $this->upload->data();

                         $path = $data['file_name'];

                         $this->dashboard_model->student_pic($path, $id);

                         $this->student_profile();
						 // $this->load->view('dashboard/student_profile';
                        
                     
                }

        }

	//}

        public function mentor_image(){

     			$mentor_image = $this->session->userdata();
				$id = $mentor_image['id'];

		 		$config['upload_path']          = 'assets/img/profile_pics/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 10000;
                $config['max_width']            = 10000;
                $config['max_height']           = 10000;
                $config['encrypt_name']			= TRUE;
                $config['remove_spaces']		= TRUE;
                 $config['overwrite']			= FALSE;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('ment_pic'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        print_r($error);
                   }
                else
                {
                        $data = $this->upload->data();

                         $path = $data['file_name'];

                         $this->dashboard_model->mentor_pic($path, $id);

                         $this->mentor_profile();
                        
                     
             }
        }

public function uni_image(){

     			$uni_image = $this->session->userdata();
				$id = $uni_image['id'];

		 		$config['upload_path']          = 'assets/img/profile_pics/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 10000;
                $config['max_width']            = 10000;
                $config['max_height']           = 10000;
                $config['encrypt_name']			= TRUE;
                $config['remove_spaces']		= TRUE;
                 $config['overwrite']			= FALSE;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('uni_pic'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        print_r($error);
                   }
                else
                {
                        $data = $this->upload->data();

                         $path = $data['file_name'];

                         $this->dashboard_model->uni_pic($path, $id);

                         $this->university_profile();
                        
                     
                }
        }

    	//============Admin VIEWING APPLICANTS=================
   public function list_students_admin(){

   		$get['details'] = $this->dashboard_model->list_students();
   		// echo "<pre>";
   		// print_r($get);
   		// echo "<pre>";
 		$this->load->view('layout/top');
		$this->load->view('pages/list_students_admin', $get);
		$this->load->view('layout/bottom');
		
   }

		
   public function list_students(){
	$session_data_student = $this->session->userdata();
	$get['user_data'] = $this->dashboard_model->get_data($session_data_student['id']);

	$get['details'] = $this->dashboard_model->list_students();
  	$this->load->view('layout/top');
 	$this->load->view('pages/list_students', $get);
 	$this->load->view('layout/bottom');
	}

   public function list_mentors(){

   		$get['details'] = $this->dashboard_model->list_mentors();
		
		$this->load->view('layout/top');
		$this->load->view('pages/list_mentors', $get);
		$this->load->view('layout/bottom');

   }

    public function list_university(){

    	$uni_profile_sess = $this->session->userdata();
		$get['details'] = $this->dashboard_model->get_uni_data($uni_profile_sess['id']);
   		
		$this->load->view('layout/top');
		$this->load->view('pages/list_university', $get);
		$this->load->view('layout/bottom');

   }
//===========================TERMS=======================
   public function terms(){

	$this->load->view('layout/top');
	$this->load->view('pages/terms');
	$this->load->view('layout/bottom');

}

//===========================UPDATE REQUESTS=======================
// public function update_request(){

// 	$session_mentor = $this->session->userdata();

// 		if ($this->input->post('request'))

// 		{	
// 			$name_employer = $this->input->post('name_employer');
// 			$phone_employer = $this->input->post('phone_employer');
// 			$name_applicant = $this->input->post('name_applicant');
// 			$phone_applicant = $this->input->post('phone_applicant');

// 			$request_data = array(
// 						  'name_employer' => $name_employer,
// 						  'phone_employer' => $phone_employer,
// 						  'name_applicant' => $name_applicant,
// 						  'phone_applicant' => $phone_applicant);
// 							$result = $this->dashboard_model->set_request($request_data);
// 							 $this->update_request();
// 						$this->load->view("dashboard_controller/list_student");

// 	}else{

// 	 echo "<script>window.alert('Oops! Something Went Wrong!');</script>";

// 	 }
	 

// }

	public function update_request()
	{
		/*load registration view form*/
		// $this->load->view('pages/list_student');
	
		/*Check submit button */
		if($this->input->post('request'))
		{
		    $data['name_employer']=$this->input->post('name_employer');
			$data['phone_employer']=$this->input->post('phone_employer');
			$data['phone_applicant']=$this->input->post('phone_applicant');
			$data['name_applicant']=$this->input->post('name_applicant');
			$response=$this->dashboard_model->update_request($data);
			if($response==true){
				redirect('dashboard_controller/list_students', 'refresh');
			       
			}
			else{
					echo "Insert error !";
			}
		}
	}

//===========================REQUESTS=======================
public function request(){
	$get['details'] = $this->dashboard_model->request();
	$this->load->view('layout/top');
	$this->load->view('pages/request', $get);
	$this->load->view('layout/bottom');

}

   public function delete_mentor(){

   	$id = $this->input->get('id');
   	$this->dashboard_model->delete_mentor($id);

   		redirect('dashboard_controller/list_mentors', 'refresh');

   	// $this->list_mentors();

   }

   public function delete_student(){

   	$id = $this->input->get('id');
   	$this->dashboard_model->delete_student($id);

   	redirect('dashboard_controller/list_students', 'refresh');

   }

   public function delete_stu_profile(){

   	$id = $this->input->get('id');
   	$this->dashboard_model->delete_student($id);
   	$this->session->sess_destroy();

   	redirect();

   }


   public function delete_ment_profile(){

   	$id = $this->input->get('id');
   	$this->dashboard_model->delete_mentor($id);
   	$this->session->sess_destroy();

   		redirect();

   	// $this->list_mentors();

   }


//    public function delete_all(){
//    	 $data = $this->input->post('select');

//    	  // $checked = implode(',',$data);
//    	 // echo "<pre>";
//    	 // print_r($data);
//    	 //  echo "</pre>";
//    	  for ($i = 0; $i < sizeof($data); $i++) {
       			
//        	$arr[] = $data[$i];
       	
//         // $this->dashboard_model->delete_all($data[$i]);
//       }

// 	 $da = implode(",",$arr);
// 	 $this->dashboard_model->delete_all($da);	
// 	 redirect('dashboard_controller/list_students', 'refresh');
//     //      $checked = implode(',',$data[$i]);
   
//     }

   

    public function delete_all_ment(){
   	 $data = $this->input->post('select');

    for ($i = 0; $i < sizeof($data); $i++) {
       	$arr[] = $data[$i];
        }
	 $da = implode(",",$arr);
	$this->dashboard_model->delete_all_ment($da);	
	redirect('dashboard_controller/list_mentors', 'refresh');
   }


	public function update_password(){

		$session_user = $this->session->userdata();

			if ($this->input->post('password_update'))

			
				{
							$old_pass = $this->input->post('password');
							$new_pass = $this->input->post('password');

		$updated_data = array(
						'password' => $password,
						'password' => $password,);

		$id = $session_user['id'];
		// print_r($updated_data);
		$up_result= $this->dashboard_model->update_password($updated_data, $id);

		$this->mentor_dashboard();
		redirect("dashboard_controller");

		}
		else{

		echo "<script>window.alert('Oops! Something Went Wrong!');</script>";

		}	
		$this->load->view('layout/top');
	   $this->load->view('pages/change_password', $get);
		$this->load->view('layout/bottom');


	}

	public function club_list()
	{
		$get['details'] = $this->dashboard_model->list_students();
		$this->load->view('layout/top');
	    $this->load->view('clubs/club_list' , $get);
		$this->load->view('layout/bottom');

	}

	public function about_club()
	{	
		$this->load->view('layout/top');
	    $this->load->view('clubs/about_club');
		$this->load->view('layout/bottom');
	}

	public function club_profile()
	{	$stu_profile_sess = $this->session->userdata();
		$get['user_data'] = $this->dashboard_model->get_data($stu_profile_sess['id']);

		$this->load->view('layout/top');
	    $this->load->view('clubs/club_profile');
		$this->load->view('layout/bottom');
	}

	public function set_about_club()
	{	$get['user_data'] = $this->dashboard_model->show_about_club();
		$this->load->view('layout/top');
	   	$this->load->view('clubs/about_club', $get);
		$this->load->view('layout/bottom');  

		if($this->input->post('save'))
		{
		    $data['about_club']=$this->input->post('about_club');
			$data['about_title']=$this->input->post('about_title');
			$response=$this->dashboard_model->set_about_club($data);
			if($response==true){
				redirect('dashboard_controller/set_about_club');
			}
			else{
					echo "Insert error !";
			}
		}
		
	}
	public function show_about_club(){
		$get['user_data'] = $this->dashboard_model->show_about_club();
		$this->load->view('layout/top');
		$this->load->view('clubs/show_about', $get);
		$this->load->view('layout/bottom');
	}

	public function tv()
	{	
		$this->load->view('layout/top');
	    $this->load->view('pages/bsmart_tv');
		$this->load->view('layout/bottom');
	}

	
}
?>