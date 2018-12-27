<?php 
class Tax_model extends CI_Model{
function __construct(){
parent::__construct();
$this->load->database();
}
    public function add_tax($data){
     $this->db->insert('tax_details',$data);
    return true;     
      
    }
		public function checktaxname($data)
 { //echo $data; exit;
 
 $query = $this->db->get_where('tax_details', array('tax_name' => $data));
        return $numrow = $query->num_rows();		
 }
	public function tax_list(){
		
		$this->db->select("id, tax_name, tax_percentage, tax_default, status",FALSE);
		$this->db->from('tax_details');
		$this->db->order_by("id","desc");
     	$query = $this->db->get();
	
		
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function update_tax_info($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('tax_details',$data);
    }
	
	public function update_tax_default($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('tax_details',$data);
    }
	
	
	public function del_tax_info($id){
        $this->db->where('id',$id);
        $this->db->delete('tax_details');
    }
	public function update_tax_list($data,$id){ print_r($data); print_r($id);
        $this->db->where('id',$id); 
		$this->db->update('tax_details',$data);
    }
	public function update_status_customer1($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('tax_details',$data);
    }
}