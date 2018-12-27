<?php 
class Employee_model extends CI_Model{
function __construct(){
parent::__construct();
$this->load->database();
}
    public function add_emp($data){
     $this->db->insert('employee',$data);
	 return $this->db->insert_id();   
    }

	public function add_city($data){
		$this->db->insert('city',$data);
		return true;        
    }
	public function checkemployeename($name)
 {
   $this->db->select('emp_name');
		$this->db->from('employee');
		$this->db->where_in('emp_name',$name);
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
	
	
	public function check_emp($id){
		$this->db->select("*",FALSE);
		$this->db->from('employee');
		$this->db->where('emp_id', $id);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function service_zone_list(){
		$this->db->select("*",FALSE);
		$this->db->from('service_location');
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	public function product_list(){
		$this->db->select("products.id As id, products.product_name As pname, products.model As model, products.description As description, products.addlinfo As addlinfo, prod_category.product_category As category, prod_subcategory.subcat_name As subcategory, brands.brand_name As brand_name",FALSE);
    $this->db->from('products');
    $this->db->join('prod_category', 'products.category=prod_category.id');
	$this->db->join('prod_subcategory', 'products.subcategory=prod_subcategory.id'); 
	$this->db->join('brands', 'products.brand=brands.id');
	$this->db->order_by('products.id', 'asc'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	public function service_cat_list(){
        $this->db->select("id,service_category",FALSE);
		$this->db->from('service_category'); 
		$query = $this->db->get();
        return $query->result();
    }
	public function add_service($data){
        $this->db->insert_batch('employee_service_skill',$data);
		return true;
    }
	public function employee_list(){
		$this->db->select("employee.id,employee.emp_id,employee.emp_name,employee.emp_designation,employee.emp_mobile,employee.emp_email,employee.emp_city",FALSE);
		$this->db->from('employee');
		$query = $this->db->get();
		return $query->result();
    }
	
	
	public function emp_cnt(){
		$this->db->select("id",FALSE);
		$this->db->from('employee'); 
		$this->db->order_by('id', 'desc'); 
		$this->db->limit(1);	
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
	public function get_cities($id){
		$this->db->distinct();
		$this->db->select("city",FALSE);
		$this->db->from('city'); 
		$this->db->like('city', $id, 'after'); 
		//$this->db->limit(1);	
		$query = $this->db->get();
		return $query->result();
		
    }
	
	
	
	
	
	public function getemployeebyid($id){
		$this->db->select("id, emp_id, emp_name, emp_designation, emp_mobile, emp_email, emp_edu, emp_exp, doj, emp_addr, emp_addr1, emp_city, emp_state, emp_pincode, service_zone",FALSE);
		$this->db->from('employee');
		$this->db->where('id', $id);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function getemployeeserviceskillbyid($id){
		$this->db->select("id, empid, p_category, sub_category, p_model, service_category",FALSE);
		$this->db->from('employee_service_skill');
		$this->db->where('empid', $id);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function update_employee($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('employee',$data);
    }
	
	public function delete_employee_service_skill($id){
    $this->db->where('empid',$id);
        $this->db->delete('employee_service_skill');
    }
	
	
	public function del_emp($id){
        $this->db->where('id',$id);
        $this->db->delete('employee');
    }
	public function mobile_validation($mobile)
	{
		$this->db->where('emp_mobile',$mobile);	
		$this->db->from('employee');
		$query=$this->db->get();
		
		//echo "<pre>";print_r($query->result());exit;
		return $numrow = $query->num_rows();
	}
	
}