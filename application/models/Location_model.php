<?php
class Location_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();

        $this->db = $this->load->database('default', true);
        $this->load->library('datatables');

    }

 function fetch_country()
 {
  $this->db->order_by("name", "ASC");
  $query = $this->db->get("regions");
  return $query->result();
 }

 function fetch_state($id)
 {
  $this->db->where('region_id', $region_id);
  $this->db->order_by('name', 'ASC');
  $query = $this->db->get('districts');
  $output = '<option value="">Select State</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->id.'">'.$row->name.'</option>';
  }
  return $output;
 }

 function fetch_city($districts_id)
 {
  $this->db->where('districts_id', $districts_id);
  $this->db->order_by('name', 'ASC');
  $query = $this->db->get('wards');
  $output = '<option value="">Select City</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->id.'">'.$row->name.'</option>';
  }
  return $output;
 }


    public function update_profile($data){
         
     
         $this->db->update('users',$data);
         return true;
    }

}?>