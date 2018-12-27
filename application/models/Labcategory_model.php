<?php 
class labcategory_model extends CI_Model{
function __construct(){
parent::__construct();
$this->load->database();
$this->load->helper('array');
}
public function add_lab_cat($data1){
    $query= $this->db->insert('lab_tech',$data1);
   return true;  
 
    }
	public function checkusername($user)
 {
   $this->db->select('lab_name');
		$this->db->from('lab_tech');
		$this->db->where_in('lab_name',$user);
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
	
	public function labss_list()
	{
		$this->db->select('*');
		$this->db->from('lab_tech');
		$this->db->order_by('id','desc');
		$query=$this->db->get();
		return $query->result();
	}
	
	public function getlabbyid($id)
	{
		$this->db->select('*');
		$this->db->from('lab_tech');
		$this->db->where('id',$id);
		$this->db->order_by('id','desc');
		$query=$this->db->get();
		return $query->result();
	}
	
	public function update_lab($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('lab_tech',$data);
    }
	
	public function update_status_prod_cat($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('lab_tech',$data);
    }
	
	public function update_status_prod_cat1($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('lab_tech',$data);
    }
	
	public function category_validation($product_id)
	{
		$query = $this->db->get_where('lab_tech', array('lab_name' => $product_id));
        return $numrow = $query->num_rows();
	}
}
?>