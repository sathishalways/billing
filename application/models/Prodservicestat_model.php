<?php 
class Prodservicestat_model extends CI_Model{
function __construct(){
parent::__construct();
$this->load->database();
}
    public function add_prod_ser_stat($data){
     $this->db->insert('service_status',$data);
    return true;     
      
    }
	
	public function prod_service_status_list(){
        $this->db->select("id,prod_service_status",FALSE);
		$this->db->from('service_status'); 
		$query = $this->db->get();
        return $query->result();
    }
	public function update_prod_ser_stat($data,$id){ 
        $this->db->where('id',$id); 
		echo $this->db->update('service_status',$data);exit;
    }
	public function del_prod_ser_stat($id){
        $this->db->where('id',$id);
        $this->db->delete('service_status');
    }
	
}