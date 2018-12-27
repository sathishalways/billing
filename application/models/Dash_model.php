<?php 
class Dash_model extends CI_Model{
function __construct(){
parent::__construct();
$this->load->database();
}
   
	public function areawise_count(){
		$this->db->select("service_location.service_loc, count(service_request_details.request_id) As req_id, service_location.id",FALSE);
		$this->db->from('service_request_details');
		$this->db->join('service_request', 'service_request.id = service_request_details.request_id');
		$this->db->join('service_location', 'service_location.id = service_request_details.zone');
		$this->db->where_in('service_request.status', array('1','9'));
		$this->db->group_by('service_location.service_loc'); 	
		$this->db->limit(5);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function spare_min_alerts(){
		//$query = $this->db->query("SELECT * from spare_minimum_level ORDER BY UNIX_TIMESTAMP(alert_on) DESC LIMIT 3");
		//echo "<pre>";print_r($query->result());exit;
		$query=$this->db->query("SELECT * from spares where min_qty >= spare_qty  ORDER BY id DESC LIMIT 3");
        return $query->result();
    }
	
	
	
	public function spare_stock_cnt(){
		$this->db->select("spare_name, spare_qty",FALSE);
		$this->db->from('spares');
		$this->db->where('dashboard_show', '1');
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function offsite_cnt(){
		$this->db->select("count(site) As site",FALSE);
		$this->db->from('service_request_details');
		$this->db->where('site', 'Customer Site');
		//$this->db->join('service_location', 'service_location.id = service_request_details.zone');
		//$this->db->group_by('request_id'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function amc_cnt(){
		$query = $this->db->query("SELECT count(ord.id) As site from order_details As ord 
		inner join prod_category As pcat ON pcat.id = ord.cat_id
		inner join prod_subcategory As psubcat ON psubcat.id = ord.subcat_id
		inner join brands As brnd ON brnd.id = ord.brand_id
		inner join products As prod ON prod.id = ord.model_id
		inner join service_location As s_loc ON s_loc.id = ord.service_loc_id WHERE unix_timestamp(ord.amc_end_date) > unix_timestamp(CURDATE())");
         //echo $this->db->last_query();exit;
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	public function onsite_cnt(){
		$this->db->select("count(site) As site",FALSE);
		$this->db->from('service_request_details');
		$this->db->where('site', 'Service Center');
		//$this->db->join('service_location', 'service_location.id = service_request_details.zone');
		//$this->db->group_by('request_id'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	public function readyfordelivery_cnt(){
		$this->db->select("count(status) As status",FALSE);
		$this->db->from('service_request');
		$this->db->where('status', '3');
		//$this->db->join('service_location', 'service_location.id = service_request_details.zone');
		//$this->db->group_by('request_id'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	public function onsite_list(){
		$this->db->select("service_request.id, service_request.request_id, service_request.request_date, customers.customer_name,service_request.status",FALSE);
		$this->db->from('service_request_details');
		$this->db->join('service_request', 'service_request.id=service_request_details.request_id');
		$this->db->join('customers', 'customers.id=service_request.cust_name');
		$this->db->where('service_request_details.site', 'Service Center');
		//$this->db->join('service_location', 'service_location.id = service_request_details.zone');
		//$this->db->group_by('request_id'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function onsite_list1(){
		$this->db->select("service_request_details.id, service_request_details.request_id, service_request_details.machine_status, service_request_details.site, products.model, service_location.service_loc",FALSE);
    $this->db->from('service_request_details');
	$this->db->join('products', 'products.id = service_request_details.model_id'); 
	$this->db->join('service_location', 'service_location.id = service_request_details.zone');
	$this->db->where('service_request_details.site', 'Service Center');	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function service_req_listforEmp(){
		$this->db->select("service_request_details.request_id, employee.emp_name",FALSE);
    $this->db->from('service_request_details');
    $this->db->join('employee', 'employee.id = service_request_details.assign_to'); 
	$this->db->where('service_request_details.site', 'Service Center');	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function stamping_list(){
		$this->db->select("service_request.id, service_request.request_id, service_request.request_date, customers.customer_name,service_request.status",FALSE);
		$this->db->from('service_request_details');
		$this->db->join('service_request', 'service_request.id=service_request_details.request_id');
		$this->db->join('customers', 'customers.id=service_request.cust_name');
		$this->db->where('service_request_details.site', 'Stamping');
		//$this->db->join('service_location', 'service_location.id = service_request_details.zone');
		//$this->db->group_by('request_id'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function stamping_list1(){
		$this->db->select("service_request_details.id, service_request_details.request_id, service_request_details.machine_status, service_request_details.site, products.model, service_location.service_loc",FALSE);
    $this->db->from('service_request_details');
	$this->db->join('products', 'products.id = service_request_details.model_id'); 
	$this->db->join('service_location', 'service_location.id = service_request_details.zone');
	$this->db->where('service_request_details.site', 'Stamping');	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function stamping_listforEmp(){
		$this->db->select("service_request_details.request_id, employee.emp_name",FALSE);
    $this->db->from('service_request_details');
    $this->db->join('employee', 'employee.id = service_request_details.assign_to'); 
	$this->db->where('service_request_details.site', 'Stamping');	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	public function stamping_cnt(){
		$this->db->select("count(site) As site",FALSE);
		$this->db->from('service_request_details');
		$this->db->where('site', 'Stamping');
		//$this->db->join('service_location', 'service_location.id = service_request_details.zone');
		//$this->db->group_by('request_id'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function engg_list($id){
		$this->db->select("service_request.id, service_request.request_id, service_request.request_date, customers.customer_name,employee.emp_name",FALSE);
		$this->db->from('service_request_details');
		$this->db->join('service_request', 'service_request.id=service_request_details.request_id');
		$this->db->join('customers', 'customers.id=service_request.cust_name');
		$this->db->join('employee', 'employee.id=service_request_details.assign_to');
		$this->db->where('service_request_details.assign_to', $id);
		//$this->db->join('service_location', 'service_location.id = service_request_details.zone');
		//$this->db->group_by('request_id'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function engg_list1($id){
		$this->db->select("service_request_details.id, service_request_details.request_id, service_request_details.machine_status, products.model, service_location.service_loc",FALSE);
    $this->db->from('service_request_details');
	$this->db->join('employee', 'employee.id=service_request_details.assign_to');
	$this->db->join('products', 'products.id = service_request_details.model_id'); 
	$this->db->join('service_location', 'service_location.id = service_request_details.zone');
	$this->db->where('service_request_details.assign_to', $id);	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	
	
	public function engg_workinpro_list($id){
		$this->db->select("service_request.id, service_request.request_id, service_request.status, service_request.request_date, customers.customer_name,employee.emp_name",FALSE);
		$this->db->from('service_request_details');
		$this->db->join('service_request', 'service_request.id=service_request_details.request_id');
		$this->db->join('customers', 'customers.id=service_request.cust_name');
		$this->db->join('employee', 'employee.id=service_request_details.assign_to');
		$this->db->where('service_request_details.assign_to', $id);
		$this->db->where('service_request.status', '1');
		//$this->db->join('service_location', 'service_location.id = service_request_details.zone');
		//$this->db->group_by('request_id'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function engg_workinpro_list1($id){
		$this->db->select("service_request_details.id, service_request_details.request_id, service_request_details.machine_status, service_request_details.site, products.model, service_location.service_loc",FALSE);
    $this->db->from('service_request_details');
	$this->db->join('employee', 'employee.id=service_request_details.assign_to');
	$this->db->join('products', 'products.id = service_request_details.model_id'); 
	$this->db->join('service_location', 'service_location.id = service_request_details.zone');
	$this->db->where('service_request_details.assign_to', $id);	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	
	public function engg_onhold_list($id){
		$this->db->select("service_request.id, service_request.request_id, service_request.status, service_request.request_date, customers.customer_name,employee.emp_name",FALSE);
		$this->db->from('service_request_details');
		$this->db->join('service_request', 'service_request.id=service_request_details.request_id');
		$this->db->join('customers', 'customers.id=service_request.cust_name');
		$this->db->join('employee', 'employee.id=service_request_details.assign_to');
		$this->db->where('service_request_details.assign_to', $id);
		$this->db->where('service_request.status', '9');
		//$this->db->join('service_location', 'service_location.id = service_request_details.zone');
		//$this->db->group_by('request_id'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function engg_onhold_list1($id){
		$this->db->select("service_request_details.id, service_request_details.request_id, service_request_details.machine_status, service_request_details.site, products.model, service_location.service_loc",FALSE);
    $this->db->from('service_request_details');
	$this->db->join('employee', 'employee.id=service_request_details.assign_to');
	$this->db->join('products', 'products.id = service_request_details.model_id'); 
	$this->db->join('service_location', 'service_location.id = service_request_details.zone');
	$this->db->where('service_request_details.assign_to', $id);	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	public function engg_awaiting_list($id){
		$this->db->select("service_request.id, service_request.request_id, service_request.status, service_request.request_date, customers.customer_name,employee.emp_name",FALSE);
		$this->db->from('service_request_details');
		$this->db->join('service_request', 'service_request.id=service_request_details.request_id');
		$this->db->join('customers', 'customers.id=service_request.cust_name');
		$this->db->join('employee', 'employee.id=service_request_details.assign_to');
		$this->db->where('service_request_details.assign_to', $id);
		$this->db->where('service_request.status', '7');
		//$this->db->join('service_location', 'service_location.id = service_request_details.zone');
		//$this->db->group_by('request_id'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function engg_awaiting_list1($id){
		$this->db->select("service_request_details.id, service_request_details.request_id, service_request_details.machine_status, service_request_details.site, products.model, service_location.service_loc",FALSE);
    $this->db->from('service_request_details');
	$this->db->join('employee', 'employee.id=service_request_details.assign_to');
	$this->db->join('products', 'products.id = service_request_details.model_id'); 
	$this->db->join('service_location', 'service_location.id = service_request_details.zone');
	$this->db->where('service_request_details.assign_to', $id);	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	
	public function engg_ready_list($id){
		$this->db->select("service_request.id, service_request.request_id, service_request.status, service_request.request_date, customers.customer_name,employee.emp_name",FALSE);
		$this->db->from('service_request_details');
		$this->db->join('service_request', 'service_request.id=service_request_details.request_id');
		$this->db->join('customers', 'customers.id=service_request.cust_name');
		$this->db->join('employee', 'employee.id=service_request_details.assign_to');
		$this->db->where('service_request_details.assign_to', $id);
		$this->db->where('service_request.status', '3');
		//$this->db->join('service_location', 'service_location.id = service_request_details.zone');
		//$this->db->group_by('request_id'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function engg_ready_list1($id){
		$this->db->select("service_request_details.id, service_request_details.request_id, service_request_details.machine_status, service_request_details.site, products.model, service_location.service_loc",FALSE);
    $this->db->from('service_request_details');
	$this->db->join('employee', 'employee.id=service_request_details.assign_to');
	$this->db->join('products', 'products.id = service_request_details.model_id'); 
	$this->db->join('service_location', 'service_location.id = service_request_details.zone');
	$this->db->where('service_request_details.assign_to', $id);	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	
	
	
	public function offsite_list(){
		$this->db->select("service_request.id, service_request.request_id, service_request.request_date, customers.customer_name,service_request.status",FALSE);
		$this->db->from('service_request_details');
		$this->db->join('service_request', 'service_request.id=service_request_details.request_id');
		$this->db->join('customers', 'customers.id=service_request.cust_name');
		$this->db->where('service_request_details.site', 'Customer Site');
		//$this->db->join('service_location', 'service_location.id = service_request_details.zone');
		//$this->db->group_by('request_id'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function offsite_list1(){
		$this->db->select("service_request_details.id, service_request_details.request_id, service_request_details.machine_status, service_request_details.site, products.model, service_location.service_loc",FALSE);
    $this->db->from('service_request_details');
	$this->db->join('products', 'products.id = service_request_details.model_id'); 
	$this->db->join('service_location', 'service_location.id = service_request_details.zone');
	$this->db->where('service_request_details.site', 'Customer Site');	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function offsite_listforEmp(){
		$this->db->select("service_request_details.request_id, employee.emp_name",FALSE);
    $this->db->from('service_request_details');
    $this->db->join('employee', 'employee.id = service_request_details.assign_to'); 
	$this->db->where('service_request_details.site', 'Customer Site');	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function Areawise_list($id){
		$this->db->select("service_request.id, service_request.request_id, service_request.request_date, customers.customer_name",FALSE);
		$this->db->from('service_request_details');
		$this->db->join('service_request', 'service_request.id=service_request_details.request_id');
		$this->db->join('customers', 'customers.id=service_request.cust_name');
		$this->db->where('service_request_details.zone', $id);
		//$this->db->join('service_location', 'service_location.id = service_request_details.zone');
		//$this->db->group_by('request_id'); 
		$this->db->limit(5);	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function Areawise_list1($id){
		$this->db->select("service_request_details.id, service_request_details.request_id, service_request_details.machine_status, products.model, service_location.service_loc",FALSE);
		$this->db->from('service_request_details');
		$this->db->join('products', 'products.id = service_request_details.model_id'); 
		$this->db->join('service_location', 'service_location.id = service_request_details.zone');
		$this->db->where('service_request_details.zone', $id);	
		$this->db->limit(5);
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	public function Areawise_listforEmp($id){
		$this->db->select("service_request_details.request_id, employee.emp_name",FALSE);
    $this->db->from('service_request_details');
    $this->db->join('employee', 'employee.id = service_request_details.assign_to'); 
	$this->db->where('service_request_details.zone', $id);	
	$this->db->limit(5);	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	
	public function req_alert_cnt(){
		$this->db->select("count(status) As status",FALSE);
		$this->db->from('service_request');
		$this->db->where_in('status', array('1','9'));
		//$this->db->join('service_location', 'service_location.id = service_request_details.zone');
		//$this->db->group_by('request_id'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function request_list(){
		$this->db->select("service_request.id, service_request.request_id, products.model, service_request_details.service_type, quote_review.delivery_date, status.status, service_request.status As statusid, customers.customer_name, problem_category.prob_category",FALSE);
		$this->db->from('service_request');
		$this->db->join('service_request_details', 'service_request_details.request_id = service_request.id');
		$this->db->join('quote_review', 'quote_review.req_id = service_request.id');
		$this->db->join('products', 'products.id = service_request_details.model_id');
		$this->db->join('customers', 'customers.id = service_request.cust_name');
		$this->db->join('problem_category', 'problem_category.id = service_request_details.problem');
		$this->db->join('status', ' status.id = service_request.status');
		$this->db->where_in('service_request.status', array('1','2','16'));
		$this->db->order_by('service_request.id','asc'); 
		$this->db->limit(5);		
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function engineer_status(){
		$this->db->select("employee.emp_name, service_request_details.assign_to, count(service_request_details.request_id) As total_reqs",FALSE);
		$this->db->from('service_request');
		$this->db->join('service_request_details', 'service_request_details.request_id = service_request.id');
		$this->db->join('employee', 'employee.id = service_request_details.assign_to');
		$this->db->group_by('service_request_details.assign_to'); 
		$this->db->limit(5);		
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function engineer_work_inpro(){
		$this->db->select("employee.emp_name, service_request_details.assign_to, count(service_request_details.request_id) As total_reqs",FALSE);
		$this->db->from('service_request');
		$this->db->join('service_request_details', 'service_request_details.request_id = service_request.id');
		$this->db->join('employee', 'employee.id = service_request_details.assign_to');
		$this->db->where('service_request.status', '1');
		$this->db->group_by('service_request_details.assign_to'); 
		$this->db->limit(5);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function engineer_ready_delivery(){
		$this->db->select("employee.emp_name, service_request_details.assign_to, count(service_request_details.request_id) As total_reqs",FALSE);
		$this->db->from('service_request');
		$this->db->join('service_request_details', 'service_request_details.request_id = service_request.id');
		$this->db->join('employee', 'employee.id = service_request_details.assign_to');
		$this->db->where('service_request.status', '3');
		$this->db->group_by('service_request_details.assign_to'); 
		$this->db->limit(5);		
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function engineer_quote_awaiting_approval(){
		$this->db->select("employee.emp_name, service_request_details.assign_to, count(service_request_details.request_id) As total_reqs",FALSE);
		$this->db->from('service_request');
		$this->db->join('service_request_details', 'service_request_details.request_id = service_request.id');
		$this->db->join('employee', 'employee.id = service_request_details.assign_to');
		$this->db->where('service_request.status', '7');
		$this->db->group_by('service_request_details.assign_to'); 
		$this->db->limit(5);	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function engineer_on_hold(){
		$this->db->select("employee.emp_name, service_request_details.assign_to, count(service_request_details.request_id) As total_reqs",FALSE);
		$this->db->from('service_request');
		$this->db->join('service_request_details', 'service_request_details.request_id = service_request.id');
		$this->db->join('employee', 'employee.id = service_request_details.assign_to');
		$this->db->where('service_request.status', '9');
		$this->db->group_by('service_request_details.assign_to'); 
		$this->db->limit(5);	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	 public function get_spare_name(){
		$this->db->select("service_request.request_id,quote_review_spare_details.spare_id,service_request_details.accepted_engg_id,employee.emp_name,GROUP_CONCAT(spares.spare_name)as sname",FALSE);
		$this->db->from('quote_review_spare_details');
		$this->db->join('service_request_details', 'service_request_details.request_id = quote_review_spare_details.request_id');
		$this->db->join('service_request', 'service_request.id = service_request_details.request_id');
		$this->db->join('employee', 'employee.id = service_request_details.assign_to');
		$this->db->join('spares', 'spares.id = quote_review_spare_details.spare_id');
		$this->db->group_by('service_request.request_id'); 
		//$this->db->where('service_request.status', '9');
		//$this->db->group_by('service_request_details.assign_to'); 
		$this->db->limit(5);	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
	}
	 public function get_spare_name_all(){
		$this->db->select("service_request.request_id,quote_review_spare_details.spare_id,service_request_details.accepted_engg_id,employee.emp_name,GROUP_CONCAT(spares.spare_name)as sname",FALSE);
		$this->db->from('quote_review_spare_details');
		$this->db->join('service_request_details', 'service_request_details.request_id = quote_review_spare_details.request_id');
		$this->db->join('service_request', 'service_request.id = service_request_details.request_id');
		$this->db->join('employee', 'employee.id = service_request_details.assign_to');
		$this->db->join('spares', 'spares.id = quote_review_spare_details.spare_id');
		$this->db->group_by('service_request.request_id'); 
		//$this->db->limit(5);	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
	}
	 
	
	
}