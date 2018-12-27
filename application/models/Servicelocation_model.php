<?php 
class Servicelocation_model extends CI_Model{
function __construct(){
parent::__construct();
$this->load->database();
}
    public function add_service_location($data){
     $this->db->insert('service_location',$data);
     return $this->db->insert_id();   
      
    }
	public function checkzoonname($user)
 {
   $this->db->select('service_loc');
		$this->db->from('service_location');
		$this->db->where_in('service_loc',$user);
		//$this->db->order_by('id','desc');
		$query=$this->db->get();
		//return $query->result();
		if($query->num_rows()>0)
		{
			return $query->result();
		}
		else{
			return $query->result();
			return false;
		}
		
		
   
 }
	
	public function add_zone_pincode($data){
     $this->db->insert_batch('zone_pincodes',$data);
    }
	
	public function add_zone_pincode1($data){
     $this->db->insert('zone_pincodes',$data);
    }
	
	
	
	public function update_zone_pincodes($data1,$where){
		 /* echo "<pre>";
	  print_r($data1);
	  echo "Where: ".$where;
	  exit; */
		$qry = $this->db->update_string('zone_pincodes', $data1, $where); 
		$this->db->query($qry);
	}
	
	
	
	public function service_location_list(){
        $this->db->select("id,serv_loc_code,service_loc,concharge",FALSE);
		$this->db->from('service_location'); 
		$query = $this->db->get();
        return $query->result();
    }
	public function update_serv_loc($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('service_location',$data);
    }
	public function del_serv_loc($id){
        $this->db->where('id',$id);
        $this->db->delete('service_location');
    }
	
	public function getserviceLocbyid($id){
		$this->db->select("*",FALSE);
		$this->db->from('service_location');
		$this->db->where('id', $id);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function getZonePincodebyid($id){
		$this->db->select("*",FALSE);
		$this->db->from('zone_pincodes');
		$this->db->where('zone_code', $id);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	public function del_zone_pincode($id){
        $this->db->where('id',$id);
        $this->db->delete('zone_pincodes');
    }
	public function checkpin($idd,$zone)
 {
		$this->db->select('id');
		$this->db->from('service_location');
		$this->db->where('service_loc',$zone);
		$query=$this->db->get();
		$res=$query->result();
		$slocid=$res[0]->id;
		
		$this->db->where('pincode',$idd);
		$this->db->where('zone_code',$slocid);		
		$this->db->from('zone_pincodes');
		$query=$this->db->get();
		
		//echo "<pre>";print_r($query->result());exit;
		return $numrow = $query->num_rows();
		
		
   
 }
	public function checkname($idd)
 {
		
		$this->db->from('service_location');
		$this->db->where('service_loc',$idd);
		$query=$this->db->get();
		
		return $numrow = $query->num_rows();
	
 }
 public function checkcode($idd)
 {
		//echo $idd;exit;
		$this->db->from('service_location');
		$this->db->where('serv_loc_code',$idd);
		$query=$this->db->get();
		//echo "<pre>";print_r($query->result());exit;
		return $numrow = $query->num_rows();
		
		
   
 }
	
	
}