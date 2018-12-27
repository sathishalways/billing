<?php 
class Accessories_model extends CI_Model{
function __construct(){
parent::__construct();
$this->load->database();
}
    public function add_accessory($data){
     $this->db->insert('accessories',$data);
    return true;     
      
    }
	public function getaccessbyid($id){
		$this->db->select("id As ac_id, accessory",FALSE);
		$this->db->from('accessories');
		//$this->db->join('prod_category', 'prod_category.id=brands.cat_id');
		//$this->db->join('prod_subcategory', 'prod_subcategory.id=brands.subcat_id'); 
		$this->db->where('id', $id);
		$this->db->order_by('id', 'asc'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	public function checkaccessname($user)
 {
   $this->db->select('accessory');
		$this->db->from('accessories');
		$this->db->where_in('accessory',$user);
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
	
	
	public function accessories_list(){
        $this->db->select("id,accessory",FALSE);
		$this->db->from('accessories'); 
		$query = $this->db->get();
        return $query->result();
    }
	public function update_accessory($data,$id){ 
        $this->db->where('id',$id); 
		 $this->db->update('accessories',$data);
    }
	public function del_accessory($id){
        $this->db->where('id',$id);
        $this->db->delete('accessories');
    }
	
	public function acc_validation($product_id)
	{
		$query = $this->db->get_where('accessories', array('accessory' => $product_id));
        return $numrow = $query->num_rows();
	}
	
}