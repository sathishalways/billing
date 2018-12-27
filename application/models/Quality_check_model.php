<?php 
class quality_check_model extends CI_Model{
function __construct(){
parent::__construct();
$this->load->database();
}

	public function quality_check_list($user_access,$user_type){
		
		if($user_access=="nonstamping_user"){
			$this->db->select("service_request.id, service_request.request_id, service_request.request_date, service_request.active_req, customers.customer_name",FALSE);
			$this->db->from('service_request');
			$this->db->join('quote_review', 'quote_review.req_id=service_request.id');
			$this->db->join('customers', 'customers.id=service_request.cust_name');
			$this->db->where('service_request.active_req', '0');
			$this->db->where_in('service_request.status', array('2'));
			$this->db->order_by('service_request.id', 'asc'); 	
			$query = $this->db->get();
			//echo "<pre>";print_r($query->result());exit;
			return $query->result();
		}elseif($user_type=="1"){
			$this->db->select("service_request.id, service_request.request_id, service_request.request_date, service_request.active_req, customers.customer_name",FALSE);
			$this->db->from('service_request');
			$this->db->join('quote_review', 'quote_review.req_id=service_request.id');
			$this->db->join('customers', 'customers.id=service_request.cust_name');
			$this->db->where('service_request.active_req', '0');
			$this->db->where_in('service_request.status', array('2'));
			$this->db->order_by('service_request.id', 'asc'); 	
			$query = $this->db->get();
			//echo "<pre>";print_r($query->result());exit;
			return $query->result();
		}else{
			$this->db->select("service_request.id, service_request.request_id, service_request.request_date, service_request.active_req, customers.customer_name",FALSE);
			$this->db->from('service_request');
			$this->db->join('quote_review', 'quote_review.req_id=service_request.id');
			$this->db->join('customers', 'customers.id=service_request.cust_name');
			$this->db->where('service_request.active_req', '0');
			$this->db->where_in('service_request.status', '111');
			$this->db->order_by('service_request.id', 'asc'); 	
			$query = $this->db->get();
			//echo "<pre>";print_r($query->result());exit;
			return $query->result();
		}
		
    }
	
	public function service_req_list1(){
		$where = "service_request.active_req!='1'";
		$this->db->select("service_request_details.id, service_request_details.request_id, service_request.id, service_request.active_req, service_request_details.machine_status, products.model, service_location.service_loc",FALSE);
    $this->db->from('service_request_details');
	$this->db->join('products', 'products.id = service_request_details.model_id'); 
	$this->db->join('service_location', 'service_location.id = service_request_details.zone');
    $this->db->join('service_request', 'service_request.id=service_request_details.request_id');
    $this->db->where($where);	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	public function service_req_listforEmp(){
		$this->db->select("service_request_details.request_id, service_request.id, service_request.active_req, employee.emp_name",FALSE);
    $this->db->from('service_request_details');
    $this->db->join('employee', 'employee.id = service_request_details.assign_to'); 
	$this->db->join('service_request', 'service_request.id=service_request_details.request_id');
	$this->db->where('service_request.active_req', '0');
	//$this->db->order_by('order_details.order_id', 'asc'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function service_req_listforEmp1($id){
		$this->db->select("service_request_details.request_id, service_request.id, service_request.active_req, employee.emp_name, employee.id",FALSE);
    $this->db->from('service_request_details');
    $this->db->join('employee', 'employee.id = service_request_details.assign_to'); 
	$this->db->join('service_request', 'service_request.id=service_request_details.request_id');
	$this->db->where('service_request_details.request_id', $id);
	$this->db->where('service_request.active_req', '0');
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function service_req_listforProb(){
	$this->db->select("service_request_details.request_id, service_request.id, service_request.active_req, problem_category.prob_category",FALSE);
    $this->db->from('service_request_details');
    $this->db->join('problem_category', 'problem_category.id = service_request_details.problem'); 
	$this->db->join('service_request', 'service_request.id=service_request_details.request_id');
	$this->db->where('service_request.active_req', '0');
	//$this->db->order_by('order_details.order_id', 'asc'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function service_req_listforserviceCat(){
		$this->db->select("service_request_details.request_id, service_request.id, service_request.active_req, service_category.service_category",FALSE);
    $this->db->from('service_request_details');
    $this->db->join('service_category', 'service_category.id = service_request_details.service_cat');
    $this->db->join('service_request', 'service_request.id=service_request_details.request_id');
    $this->db->where('service_request.active_req', '0');	
	//$this->db->order_by('order_details.order_id', 'asc'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function getWarrantyInfo($id){
		$this->db->select("id, machine_status",FALSE);
		$this->db->from('service_request_details');
		//$this->db->join('order_details', 'order_details.serial_no = service_request_details.serial_no'); 
		$this->db->where('request_id', $id);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	public function status_listForquoteInpro(){
		$this->db->select("id, status",FALSE);
		$this->db->from('status'); 
		$this->db->where_in('id', array('2'));
		$query = $this->db->get();
        return $query->result();
    }
	
	public function status_listForqc(){
		$this->db->select("id, status",FALSE);
		$this->db->from('status'); 
		$this->db->where_in('id', array('1','3'));
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	public function get_status($id){
		$this->db->select("service_request.status",FALSE);
    $this->db->from('service_request');
    $this->db->join('quote_review', 'quote_review.req_id = service_request.id'); 
	$this->db->where('service_request.id', $id);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function add_quotereview($data){
     $this->db->insert('quote_review',$data);
	}
	
	public function add_quotereview_spares($data1){
		$this->db->insert_batch('quote_review_spare_details',$data1); 
    }
	
	/*public function getQuoteReviewDetByID($id){
		$this->db->select("quote_review.status",FALSE);
    $this->db->from('quote_review');
   // $this->db->join('quote_review_spare_details', 'quote_review_spare_details.request_id = quote_review.req_id'); 
	$this->db->where('quote_review.req_id', $id);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }*/
	
	public function getQuoteReviewDetByID1($id){
		$this->db->select("quote_review.spare_tax, quote_review.spare_tot, quote_review.labourcharge, quote_review.concharge, quote_review.total_amt, quote_review.delivery_date, quote_review.model_id, quote_review.notes",FALSE);
    $this->db->from('quote_review');
   // $this->db->join('quote_review_spare_details', 'quote_review_spare_details.request_id = quote_review.req_id'); 
	$this->db->where('quote_review.req_id', $id);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());
        return $query->result();
    }
	
	
	
	public function getQuoteReviewSpareDetByID($id){
		$this->db->select("quote_review_spare_details.id, quote_review_spare_details.spare_id, quote_review_spare_details.spare_qty, quote_review_spare_details.amt,quote_review_spare_details.approval_status,quote_review_spare_details.warranty_claim_status,quote_review_spare_details.warranty_claim_status, quote_review_spare_details.desc_failure, quote_review_spare_details.why_failure, quote_review_spare_details.correct_action",FALSE);
    $this->db->from('quote_review_spare_details');
    //$this->db->join('quote_review_spare_details', 'quote_review_spare_details.request_id = quote_review.req_id'); 
	$this->db->where('quote_review_spare_details.request_id', $id);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	
	public function getQuoteByReqId($id){
		$this->db->select("customers.customer_name, customers.company_name, customer_service_location.branch_name, customer_service_location.mobile As cust_mobile, customer_service_location.address, customer_service_location.address1, products.model, products.id As modelid, service_request_details.warranty_date, service_request.request_id, service_request.request_date, service_request_details.machine_status, service_request_details.notes, service_request_details.assign_to, service_request_details.blank_app, service_request_details.service_cat, service_request_details.problem, service_location.service_loc, service_location.concharge ,order_details.purchase_date",FALSE);
    $this->db->from('service_request_details');
    $this->db->join('service_request', 'service_request.id = service_request_details.request_id'); 
	$this->db->join('customers', 'customers.id = service_request.cust_name'); 
	$this->db->join('customer_service_location', 'customer_service_location.id = service_request.br_name');
	$this->db->join('products', 'products.id = service_request_details.model_id'); 
	$this->db->join('service_location', 'service_location.id = service_request_details.zone'); 
	$this->db->join('order_details', 'order_details.serial_no = service_request_details.serial_no'); 
	$this->db->where('service_request_details.request_id', $id);
	$this->db->group_by('service_request_details.request_id');
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->row());exit;
        return $query->result();
    }
	
	public function getProbforQuoteByReqId($id){
		$this->db->select("problem_category.id, problem_category.prob_category",FALSE);
    $this->db->from('service_request_details');
    $this->db->join('problem_category', 'problem_category.id = service_request_details.problem'); 
	$this->db->where('service_request_details.request_id', $id);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->row());exit;
        return $query->result();
    }
	
	public function getServiceCatbyID($service_service_cat, $service_modelid){
		$this->db->select("service_charge.id, service_charge.service_charge, service_category.service_category",FALSE);
    $this->db->from('service_charge');
    $this->db->join('service_category', 'service_category.id = service_charge.service_cat_id'); 
	//$this->db->join('service_charge', 'service_charge.service_cat_id = service_request_details.service_cat');
	
	$this->db->where('service_charge.service_cat_id', $service_service_cat);
	$this->db->where('service_charge.model', $service_modelid);
     	$query = $this->db->get();
		// echo $this->db->last_query();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function update_stats($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('service_request',$data);
    }
	
	
	public function update_quotereview($data,$id){ 
        $this->db->where('req_id',$id); 
		$this->db->update('quote_review',$data);
    }
	
	public function delete_quote_review($id){
        $this->db->where('request_id',$id);
        $this->db->delete('quote_review_spare_details');
    }
	
	
	public function status_list(){
		$this->db->select("id, status",FALSE);
		$this->db->from('status'); 
		$query = $this->db->get();
        return $query->result();
    }
	
	
	
	
	
	public function spareListByModelId($modelid){
		$this->db->select("spares.id, spares.spare_name, spares.spare_qty, spares.used_spare, spares.sales_price",FALSE);
		$this->db->from('spare_details');
		$this->db->join('spares', 'spares.id = spare_details.spare_id'); 
		$this->db->where('spare_details.model_id', $modelid);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function getsparedetbyid($id){
		$this->db->select("spares.id, spares.spare_name, spares.spare_qty, spares.used_spare, spares.stock_spare, spares.sales_price",FALSE);
		$this->db->from('spare_details');
		$this->db->join('spares', 'spares.id = spare_details.spare_id'); 
		$this->db->where('spares.id', $id);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function getsparedetForEditbyid($id){
		$this->db->select("id, spare_name, spare_qty, used_spare, sales_price",FALSE);
		$this->db->from('spares');
		//$this->db->join('spares', 'spares.id = spare_details.spare_id'); 
		$this->db->where('spares.id', $id);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	
	public function getTaxDefaultInfo(){
		$query = $this->db->get_where('tax_details', array('tax_default' => '1'));
		//echo "<pre>";print_r($query->result());exit;
		return $query->result();
    }
	
	public function update_spare_balance($data){ 
       // $this->db->where('id',$id); 
		$this->db->update_batch('spares',$data,'id');
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
	
	
	
	public function service_req_list(){
		$this->db->select("service_request.id, service_request.request_id, service_request.request_date, customers.customer_name",FALSE);
		$this->db->from('service_request');
		$this->db->join('customers', 'customers.id=service_request.cust_name');
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
		
		$this->db->select("service_request_details.id, service_request_details.request_id, service_request_details.serial_no, service_request_details.warranty_date, service_request_details.service_type, service_request_details.service_cat, service_request_details.zone, service_request_details.problem, service_request_details.assign_to, service_request_details.received, service_request_details.machine_status,
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
        $this->db->select("id,service_category	",FALSE);
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
	
	public function delete_serv_req_details($id){
        $this->db->where('request_id',$id);
        $this->db->delete('service_request_details');
    }
	
	public function delete_orders($id){
        $this->db->where('id',$id);
        $this->db->delete('orders');
    }
	
}