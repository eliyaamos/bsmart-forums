<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Location extends MY_Controller {
 
 public function __construct()
 {
    parent::__construct();
   
 }

    public function index() {  
       $this->db->select('id,name'); 
       $query = $this->db->get('regions');
       $data['regions'] = $query->result_array(); 
       
       /* load the view page */ 
         $this->load->view('layout/top');
		$this->load->view('superadmin/location',$data);
		$this->load->view('layout/bottom');
       
    }
    
     public function getregions() { 
        if(isset($_POST['regions'])) { 
          /* code to fetch all Districts of selected Regions */
          $this->db->select('id,name'); 
          $this->db->where('region_id', $_POST['regions']); 
          $query  =  $this->db->get('districts'); 
          $result =  $query->result_array();
          if(isset($result[0]) && is_array($result)) { 
             $options = ''; 
             $options .= '<option selected disabled>Select Districts</option>';
             foreach ($result as $key => $value)  { 
                $options  .= '<option value="'.$value['id'].'">'.
                $value['name'].'</option>'; 
             }
             echo $options; 
         } 
        } 
    }

    public function loadDistricts() { 
        if(isset($_POST['districts'])) { 
           /* code to fetch all Wards of selected Districts */
           $this->db->select('id,name'); 
           $this->db->where('district_id', $_POST['districts']); 
           $query  =  $this->db->get('wards'); 
           $result =  $query->result_array();
           if(isset($result[0]) && is_array($result)) { 
              $options = ''; 
              $options .= '<option selected disabled>Select Place</option>';
              foreach ($result as $key => $value)  { 
                 $options  .= '<option value="'.$value['id'].'">'.
                 $value['name'].'</option>'; 
              }
              echo $options; 
          } 
         } 
     }

     public function loadWards() { 
        if(isset($_POST['wards'])) { 
           /* code to fetch all places of selected Wards */
           $this->db->select('id,name'); 
           $this->db->where('ward_id', $_POST['wards']); 
           $query  =  $this->db->get('villages'); 
           $result =  $query->result_array();
           if(isset($result[0]) && is_array($result)) { 
              $options = ''; 
              $options .= '<option selected disabled>Select</option>';
              foreach ($result as $key => $value)  { 
                 $options  .= '<option value="'.$value['name'].'">'.
                 $value['name'].'</option>'; 
              }
              echo $options; 
          } 
         } 
     }

        public function update_profile(){

			if($this->input->post('save')){
			// $data = $this->input->post(save); 
			$data['region']=$this->input->post('region');
			$data['district']=$this->input->post('district');
			// $data['id']=$this->input->post('id');
			$data['ward']=$this->input->post('ward');
			$data['village']=$this->input->post('village');
			$response = $this->location_model->update_profile($data);
		
			if($response==true){       
				redirect('location');       
			}else{	
				echo "Insert error !";
			}
		}
	
   }
 }  