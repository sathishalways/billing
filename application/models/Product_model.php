<?php 
class Product_model extends CI_Model{
function __construct(){
parent::__construct();
$this->load->database();
}
    public function add_prod($data){
     $this->db->insert('products',$data);
    return true;     
      
    }
	
	public function prod_cat_dropdownlist(){
        $this->db->select("id,product_category",FALSE);
		$this->db->from('prod_category'); 
		$this->db->where('status', '0');
		$this->db->order_by('product_category', 'asc'); 	
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function prod_sub_cat_dropdownlist(){
		$this->db->select("id,prod_category_id,subcat_name",FALSE);
		$this->db->from('prod_subcategory'); 
		$this->db->where('status', '0');
		$this->db->order_by('subcat_name', 'asc');
		$query = $this->db->get();
        return $query->result();
    }
	
	public function brandlist(){
		$this->db->select("id, brand_name",FALSE);
		$this->db->from('brands'); 
		$this->db->where('status', '0');
		$this->db->order_by('brand_name', 'asc');
		$query = $this->db->get();
        return $query->result();
    }
	
	public function getsub_cat($id){
		$query = $this->db->order_by('subcat_name', 'ASC')->get_where('prod_subcategory', array('prod_category_id' => $id, 'status'=> '0'));
		//$this->db->order_by('product_category', 'asc');
		//echo "<pre>";print_r($query->result());exit;
		return $query->result();
		
		//$this->db->where('prod_category_id',$id);
		//return $this->db->get('prod_subcategory')->row();
    }
	
	public function get_brands($categoryid,$subcatid){
		$query = $this->db->get_where('brands', array('cat_id' => $categoryid, 'subcat_id' => $subcatid));
		return $query->result();
		
    }
	
	public function brandlists(){
		$query = $this->db->order_by('brand_name', 'asc')->get_where('brands', array('status' => '0'));
		//echo "<pre>";print_r($query->result());exit;
		return $query->result();
		
    }
	
	public function accessories_list(){
		$this->db->select("id, accessory",FALSE);
		$this->db->from('accessories'); 
		$this->db->order_by('accessory', 'asc');
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	public function product_list(){
		$this->db->select("products.id As id, products.model As model, products.description As description, products.status As status, prod_category.product_category As category, prod_subcategory.subcat_name As subcategory",FALSE);
    $this->db->from('products');
    $this->db->join('prod_category', 'products.category=prod_category.id');
	$this->db->join('prod_subcategory', 'products.subcategory=prod_subcategory.id'); 
	$this->db->order_by('products.id', 'DESC'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function getproductbyid($id){
		$this->db->select("id, category, subcategory, model, description, stock_qty",FALSE);
    $this->db->from('products');
    $this->db->where('id', $id);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	public function edit_products($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('products',$data);
    }
	
	public function del_products($id){
        $this->db->where('id',$id);
        $this->db->delete('products');
    }
	public function update_status_prod($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('products',$data);
    }
	public function update_status_prod1($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('products',$data);
    }
	
	public function update_stock_in_hand($qty,$pid){ 
        $this->db->query("UPDATE products SET stock_qty = stock_qty + $qty WHERE id = $pid", FALSE);
        //echo $this->db->last_query();
		
    }
	
}