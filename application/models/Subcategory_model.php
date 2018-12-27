<?php 
class Subcategory_model extends CI_Model{
function __construct(){
parent::__construct();
$this->load->database();
}
    public function add_subcategory($data){
     $this->db->insert('prod_subcategory',$data);
    return true;     
      
    }
	public function checksubcatname($pro_cat,$sub_catname)
 {
	 $this->db->where_in('prod_category_id',$pro_cat);	
		$this->db->where_in('subcat_name',$sub_catname);
		$this->db->from('prod_subcategory');
		$query=$this->db->get();
		if($query->num_rows()>0)
		{
			return $query->result();
		}
		else{
			return $query->result();
			return false;
		}
 }
		//echo "<pre>";print_r($query->result());
		//return $numrow = $query->num_rows();
	 
   /*$this->db->select('prod_category_id,subcat_name');
		$this->db->from('prod_subcategory');
		$this->db->where_in('prod_category_id,subcat_name');
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
		
		
   
 }*/
	
	public function prod_cat_dropdownlist(){
        $this->db->select("id,product_category",FALSE);
		$this->db->from('prod_category'); 
		$query = $this->db->get();
        return $query->result();
    }
	
	public function prod_sub_cat_list(){
		
		$this->db->select("prod_category.id As procat_id, prod_subcategory.id As prosubcat_id, prod_subcategory.subcat_name, prod_category.product_category, prod_subcategory.prod_category_id As pro_catid, prod_subcategory.status As status",FALSE);
    $this->db->from('prod_subcategory');
    $this->db->join('prod_category', 'prod_subcategory.prod_category_id=prod_category.id');
	$this->db->order_by('prod_subcategory.id','DESC');	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function prod_sub_cat_listbyid($id){
		
		$this->db->select("prod_category.id As procat_id, prod_subcategory.id As prosubcat_id, prod_subcategory.subcat_name, prod_category.product_category, prod_subcategory.prod_category_id As pro_catid",FALSE);
    $this->db->from('prod_subcategory');
    $this->db->join('prod_category', 'prod_subcategory.prod_category_id=prod_category.id'); 
	$this->db->where('prod_subcategory.id', $id);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function update_status_prod_cat($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('prod_subcategory',$data);
    }
	public function update_status_prod_cat1($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('prod_subcategory',$data);
    }
	
	public function update_sub_cat($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('prod_subcategory',$data);
    }
	public function update_sub_cat_name($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('prod_subcategory',$data);
    }
	public function del_sub_cat($id){
        $this->db->where('id',$id);
        $this->db->delete('prod_subcategory');
    }
	
	public function subcategory_validation($category,$sub_category)
	{
		$this->db->where('prod_category_id',$category);	
		$this->db->where('subcat_name',$sub_category);
		$this->db->from('prod_subcategory');
		$query=$this->db->get();
		//echo "<pre>";print_r($query->result());
		return $numrow = $query->num_rows();
	}
	
}