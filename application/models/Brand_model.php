<?php 
class Brand_model extends CI_Model{
function __construct(){
parent::__construct();
$this->load->database();
}
    public function add_brands($data){
     $this->db->insert('brands',$data);
    return true;     
      
    }
	public function checkbrandname($user)
 {
   $this->db->select('brand_name');
		$this->db->from('brands');
		$this->db->where_in('brand_name',$user);
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
	
	public function brand_list(){
		$this->db->select("id As br_id, brand_name, status",FALSE);
		$this->db->from('brands');
		//$this->db->join('prod_category', 'prod_category.id=brands.cat_id');
		//$this->db->join('prod_subcategory', 'prod_subcategory.id=brands.subcat_id'); 
		$this->db->order_by('id', 'DESC'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function getbrandbyid($id){
		$this->db->select("id As br_id, brand_name",FALSE);
		$this->db->from('brands');
		//$this->db->join('prod_category', 'prod_category.id=brands.cat_id');
		//$this->db->join('prod_subcategory', 'prod_subcategory.id=brands.subcat_id'); 
		$this->db->where('id', $id);
		$this->db->order_by('id', 'asc'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function prod_cat_dropdownlist(){
        $this->db->select("id,product_category",FALSE);
		$this->db->from('prod_category'); 
		$query = $this->db->get();
        return $query->result();
    }
	
	public function prod_sub_cat_dropdownlist(){
		$this->db->select("id,prod_category_id,subcat_name",FALSE);
		$this->db->from('prod_subcategory'); 
		$query = $this->db->get();
        return $query->result();
    }
	
	public function getsub_cat($id){
		$query = $this->db->get_where('prod_subcategory', array('prod_category_id' => $id));
		return $query->result();
		
		//$this->db->where('prod_category_id',$id);
		//return $this->db->get('prod_subcategory')->row();
    }
	
	public function update_cat($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('brands',$data);
    }
	
	public function update_subcat($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('brands',$data);
    }
	
	public function update_brandname($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('brands',$data);
    }
	
	public function update_status_brand($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('brands',$data);
    }
	public function update_status_brand1($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('brands',$data);
    }
	
	
	public function del_brands($id){
        $this->db->where('id',$id);
        $this->db->delete('brands');
    }
	
	public function brand_validation($brand)
	{
		$this->db->where('brand_name',$brand);	
		$this->db->from('brands');
		$query=$this->db->get();
		
		//echo "<pre>";print_r($query->result());exit;
		return $numrow = $query->num_rows();
	}
}