<?php 
class Productcategory_model extends CI_Model{
function __construct(){
parent::__construct();
$this->load->database();
}
    public function add_prod_cat($data1){
     $this->db->insert('prod_category',$data1);
     return true;     
      
    }
	public function checkcatname($user)
 {
   $this->db->select('product_category');
		$this->db->from('prod_category');
		$this->db->where_in('product_category',$user);
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
	
	
	public function prod_cat_list(){
        $this->db->select("id,product_category,status",FALSE);
		$this->db->from('prod_category'); 
		$this->db->order_by('id','DESC'); 
		$query = $this->db->get();
        return $query->result();
    }
	public function getprodcatbyid($id){
        $this->db->select("id,product_category",FALSE);
		$this->db->from('prod_category'); 
		$this->db->where('id', $id);
		$query = $this->db->get();
        return $query->result();
    }
	
	public function update_prod_cat($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('prod_category',$data);
    }
	
	public function update_status_prod_cat($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('prod_category',$data);
    }
	public function update_status_prod_cat1($data,$id){ 
	
        $this->db->where('id',$id); 
		$this->db->update('prod_category',$data);
    }
	
	public function category_validation($product_id)
	{
		$query = $this->db->get_where('prod_category', array('product_category' => $product_id));
        return $numrow = $query->num_rows();
	}
	
	
}