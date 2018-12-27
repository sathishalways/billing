<?php 
class quote_in_progress_model extends CI_Model{
function __construct(){
parent::__construct();
$this->load->database();
}
    public function add_services($data){
     $this->db->insert('service_request',$data);
	 return $this->db->insert_id();
      
    }
	
	public function add_service_details($data1){
		$this->db->insert('service_request_details',$data1); 
    }
	
	public function get_customerdetails($id){
		$query = $this->db->get_where('customers', array('id' => $id));
		return $query->result();
    }
	
	public function customerlist(){
		$this->db->select("id, customer_id, customer_name, customer_type, mobile, email_id",FALSE);
		$this->db->from('customers'); 
		$query = $this->db->get();
        return $query->result();
    }
	
	public function list_serialnos(){
		$this->db->select("serial_no",FALSE);
		$this->db->from('order_details');
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function get_orderdetails($id){
		$this->db->select("prod_category.id As catid, prod_subcategory.id As subcatid, brands.id As brandid, products.id As modelid, prod_category.product_category, prod_subcategory.subcat_name, brands.brand_name, products.model, order_details.warranty_date, service_location.service_loc, service_location.id As locid",FALSE);
    $this->db->from('order_details');
    $this->db->join('prod_category', 'prod_category.id = order_details.cat_id');
	$this->db->join('prod_subcategory', 'prod_subcategory.id = order_details.subcat_id'); 
	$this->db->join('brands', 'brands.id = order_details.brand_id'); 
	$this->db->join('products', 'products.id = order_details.model_id'); 
	$this->db->join('service_location', 'service_location.id = order_details.service_loc_id'); 
	//$this->db->order_by('order_details.order_id', 'asc'); 
	$this->db->where('order_details.serial_no', $id);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function service_req_list($user_access,$user_type){
		
		if($user_access=="nonstamping_user"){
			$query = $this->db->query("SELECT service_request.id, service_request.request_id, service_request.request_date, customers.customer_name from service_request as service_request
			inner join customers as customers ON customers.id=service_request.cust_name
			inner join service_request_details as service_request_details ON service_request_details.request_id=service_request.id
			where (service_request.status IN(5,8) and service_request_details.assign_to!='' and (service_request_details.site='Service Center' or service_request_details.site='Customer Site')) ORDER BY service_request.id ASC");
			//echo "<pre>";print_r($query->result());exit;
			return $query->result();
					
			
		}elseif($user_type=="1"){
			//$this->db->select("service_request.id, service_request.request_id, service_request.request_date, customers.customer_name",FALSE);
			//$this->db->from('service_request');
			//$this->db->join('customers', 'customers.id=service_request.cust_name');
			//$this->db->join('service_request_details', 'service_request_details.request_id=service_request.id');
			//$this->db->where_in('service_request.status', array('5','8'));
			//$this->db->where('service_request_details.assign_to!=', '');
			//$this->db->where_in('service_request_details.site', 'Service Center');
			
			//$this->db->order_by('service_request.id', 'asc'); 	
			//$query = $this->db->get();
			//echo "<pre>";print_r($query->result());exit;
			//return $query->result();
			
			
			$query = $this->db->query("SELECT service_request.id, service_request.request_id, service_request.request_date, customers.customer_name from service_request as service_request
			inner join customers as customers ON customers.id=service_request.cust_name
			inner join service_request_details as service_request_details ON service_request_details.request_id=service_request.id
			where (service_request.status IN(5,8) and service_request_details.assign_to!='' and (service_request_details.site='Service Center' or service_request_details.site='Customer Site')) ORDER BY service_request.id ASC");
			//echo "<pre>";print_r($query->result());exit;
			return $query->result();
			
			
		}else{
			$this->db->select("service_request.id, service_request.request_id, service_request.request_date, customers.customer_name",FALSE);
			$this->db->from('service_request');
			$this->db->join('customers', 'customers.id=service_request.cust_name');
			$this->db->join('service_request_details', 'service_request_details.request_id=service_request.id');
			
			$this->db->where_in('service_request_details.site', '');
			
			$this->db->order_by('service_request.id', 'asc'); 	
			$query = $this->db->get();
			//echo "<pre>";print_r($query->result());exit;
			return $query->result();
		}
		
    }
	
	public function service_req_list1(){
		$this->db->select("service_request_details.id, service_request_details.request_id, service_request_details.machine_status, service_request_details.site, products.model, service_location.service_loc",FALSE);
    $this->db->from('service_request_details');
    //$this->db->join('prod_category', 'prod_category.id = order_details.cat_id');
	//$this->db->join('prod_subcategory', 'prod_subcategory.id = order_details.subcat_id'); 
	//$this->db->join('brands', 'brands.id = order_details.brand_id'); 
	$this->db->join('products', 'products.id = service_request_details.model_id'); 
	$this->db->join('service_location', 'service_location.id = service_request_details.zone'); 
	//$this->db->join('employee', 'employee.id = service_request_details.assign_to'); 
	//$this->db->order_by('order_details.order_id', 'asc'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function service_req_listforEmp(){
		$this->db->select("service_request_details.request_id, employee.emp_name",FALSE);
    $this->db->from('service_request_details');
    $this->db->join('employee', 'employee.id = service_request_details.assign_to'); 
	//$this->db->order_by('order_details.order_id', 'asc'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function status_list(){
		$this->db->select("id, status",FALSE);
		$this->db->from('status'); 
		$query = $this->db->get();
        return $query->result();
    }
	
	public function combine_status_list(){
		
		$this->db->select("service_request.id, service_request.status",FALSE);
		$this->db->from('service_request');
		//$this->db->join('quote_review', 'quote_review.req_id=service_request.id');
		//$this->db->where('service_request.id', $id);	
		$this->db->order_by('service_request.id', 'asc');		
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
		
    }
	
	
	
	public function getservicereqbyid($id){
		
		$this->db->select("service_request.id, service_request.request_id, service_request.request_date, service_request.mobile, service_request.email_id, customers.customer_name, customers.id As cust_id",FALSE);
		$this->db->from('service_request');
		$this->db->join('customers', 'customers.id=service_request.cust_name');
		$this->db->where('service_request.id', $id);	
		$this->db->order_by('service_request.id', 'asc');		
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
		
    }
	
	public function getservicereqDetailsbyid($id){
		
		$this->db->select("service_request_details.id, service_request_details.request_id, service_request_details.serial_no, service_request_details.warranty_date, service_request_details.service_type, service_request_details.service_cat, service_request_details.zone, service_request_details.problem, service_request_details.assign_to, service_request_details.received, service_request_details.machine_status, service_request_details.site,
		prod_category.id As catid, prod_subcategory.id As subcatid, brands.id As brandid, products.id As modelid, prod_category.product_category, prod_subcategory.subcat_name, brands.brand_name, products.model, service_location.service_loc, service_location.id As locid",FALSE);
		$this->db->from('service_request_details');
		$this->db->join('prod_category', 'prod_category.id = service_request_details.cat_id');
		$this->db->join('prod_subcategory', 'prod_subcategory.id = service_request_details.subcat_id'); 
		$this->db->join('brands', 'brands.id = service_request_details.brand_id'); 
		$this->db->join('products', 'products.id = service_request_details.model_id'); 
		$this->db->join('service_location', 'service_location.id = service_request_details.zone'); 
		//$this->db->join('employee', 'employee.id = service_request_details.assign_to'); 
		$this->db->where('service_request_details.request_id', $id);
		$this->db->order_by('service_request_details.id', 'asc'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
		
		
    }
	
	public function getserviceEmpbyid($id){
		
		$this->db->select("service_request_details.assign_to, employee.id As emp_id, employee.emp_name ",FALSE);
		$this->db->from('service_request_details');
		$this->db->join('employee', 'employee.id = service_request_details.assign_to'); 
		$this->db->where('service_request_details.request_id', $id);
		$this->db->order_by('service_request_details.id', 'asc'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
		
		
    }
	
	public function servicecat_list(){
        $this->db->select("id,service_category",FALSE);
		$this->db->from('service_category'); 
		$query = $this->db->get();
        return $query->result();
    }
	
	public function problemlist(){
        $this->db->select("id,prob_category	",FALSE);
		$this->db->from('problem_category'); 
		$query = $this->db->get();
        return $query->result();
    }
	
	public function employee_list(){
        $this->db->select("id, emp_id, emp_name",FALSE);
		$this->db->from('employee'); 
		$query = $this->db->get();
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
	
	public function brandlist(){
		$this->db->select("id, cat_id, subcat_id, brand_name",FALSE);
		$this->db->from('brands'); 
		$query = $this->db->get();
        return $query->result();
    }
	
	
	
	
	public function serviceLocList(){
		$this->db->select("id, service_loc",FALSE);
		$this->db->from('service_location'); 
		$query = $this->db->get();
        return $query->result();
    }
	
	public function get_branch($id){
		$query = $this->db->get_where('customer_service_location', array('customer_id' => $id));
		return $query->result();
    }
	
	
	
	public function getsub_cat($id){
		$query = $this->db->get_where('prod_subcategory', array('prod_category_id' => $id));
		return $query->result();
		
		//$this->db->where('prod_category_id',$id);
		//return $this->db->get('prod_subcategory')->row();
    }
	
	public function get_brands($categoryid,$subcatid){
		$query = $this->db->get_where('brands', array('cat_id' => $categoryid, 'subcat_id' => $subcatid));
		return $query->result();
		
    }
	public function get_models($categoryid,$subcatid,$brandid){
		$query = $this->db->get_where('products', array('category' => $categoryid, 'subcategory' => $subcatid, 'brand' => $brandid));
		return $query->result();
		
    }
	
	
	public function orderlist1(){
		$this->db->select("orders.id, customers.customer_name,customers.customer_type",FALSE);
    $this->db->from('orders');
    $this->db->join('customers', 'customers.id=orders.customer_id');
	$this->db->order_by('orders.id', 'asc'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	
	public function update_service_request($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('service_request',$data);
    }
	
	public function update_service_status($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('service_request',$data);
    }
	
	public function delete_serv_req_details($id){
        $this->db->where('request_id',$id);
        $this->db->delete('service_request_details');
    }
	
	public function delete_orders($id){
        $this->db->where('id',$id);
        $this->db->delete('orders');
    }
	
}