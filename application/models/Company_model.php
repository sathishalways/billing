<?php 
class Company_model extends CI_Model{
function __construct(){
parent::__construct();
$this->load->database();
}
    
	public function update_company($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('company_details',$data);
    }
	
	public function company_list(){
        $this->db->select("*",FALSE);
		$this->db->from('company_details'); 
		$query = $this->db->get();
        return $query->result();
    }
	public function state_list(){
		$this->db->select("id,state",FALSE);
		$this->db->from('state'); 
		$this->db->order_by('state', 'asc'); 
		//$this->db->limit(1);	
		$query = $this->db->get();
		return $query->result();
    }
	public function add_city($data){
		$this->db->insert('city',$data);
		return true;        
    }
	
	
}