<?php 
class Service_model extends CI_Model{
function __construct(){
parent::__construct();
$this->load->database();
}

	public function get_zons($id){
		$this->db->select("id, serv_loc_code, service_loc",FALSE);
		$this->db->from('service_location'); 
		$this->db->like('service_loc', $id, 'after'); 
		$this->db->order_by('service_loc', 'asc');
		$query = $this->db->get();
        return $query->result();
    }


    public function add_services($data){
		//$this->db->insert('service_request',$data);
		//return $this->db->insert_id();
		/* echo "<pre>";
		print_r($data);
		exit; */
		
		if($data['request_id']=='00001'){
			$this->db->insert('service_request',$data);
			return $this->db->insert_id();
		}else{
			$rid=explode('-',$data['request_id']);
			
			if($rid[0]=='P'){
				$query = $this->db->query("INSERT INTO service_request(request_id,cust_name,br_name,mobile,email_id,address,address1,request_date,status,created_on,updated_on,user_id) VALUES('".$data['request_id']."' ,'".$data['cust_name']."','".$data['br_name']."','".$data['mobile']."','".$data['email_id']."','".$data['address']."','".$data['address1']."','".$data['request_date']."','".$data['status']."','".$data['created_on']."','".$data['updated_on']."','".$data['user_id']."')");
				//echo $this->db->last_query();exit;
				return $this->db->insert_id();
			}else{
				$query = $this->db->query("INSERT INTO service_request(request_id,cust_name,br_name,mobile,email_id,address,address1,request_date,status,created_on,updated_on,user_id) SELECT 
				case length(cast(request_id+1 as DECIMAL(5,0)))
				when 1 then CONCAT('0000',request_id+1)
				when 2 then CONCAT('000',request_id+1)
				when 3 then CONCAT('00',request_id+1)
				when 4 then CONCAT('0',request_id+1) 
				else request_id+1
				end request_id,'".$data['cust_name']."','".$data['br_name']."','".$data['mobile']."','".$data['email_id']."','".$data['address']."','".$data['address1']."','".$data['request_date']."','".$data['status']."','".$data['created_on']."','".$data['updated_on']."','".$data['user_id']."' FROM service_request WHERE request_id NOT LIKE '%P-%' ORDER BY id DESC LIMIT 1");
				//echo $this->db->last_query();exit;
				return $this->db->insert_id();
				}
		
		}
		
    }
	
	
	public function add_servicess($data2)
	{
		$this->db->insert('service_request',$data2);
		return $this->db->insert_id();
	}
	
	
	
	
	public function add_stamping_info($data){
     $this->db->insert('stamping_details',$data);
	
    }
	
	public function stamping_details($id){
		$this->db->select("*",FALSE);
		$this->db->from('stamping_details'); 
		$this->db->where('req_id', $id);
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
		return $query->result();
    }
	
	public function update_service_details($data1,$where){
		/*  echo "<pre>";
	  print_r($data1);
	  echo "Where: ".$where;
	  exit; */
		$qry = $this->db->update_string('service_request_details', $data1, $where); 
		$this->db->query($qry);
		/* echo $this->db->last_query();
		exit; */
		//exit; 
    }
	
	public function add_service_details($data1){
		$this->db->insert('service_request_details',$data1); 
    }
	
	public function add_log_reassign_engg($data1){
		$this->db->insert('log_reassign_engg',$data1); 
    }
	
	public function get_reassigned_ById($id){
		$this->db->select("*",FALSE);
		$this->db->from('log_reassign_engg'); 
		$this->db->where('req_id', $id);
		$this->db->order_by('id', 'desc'); 
		$this->db->limit(1);
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
		return $query->result();
    }
	
	
	public function get_customerdetails($id){
		$this->db->select("customers.id, customers.mobile, customers.company_name, customers.email_id, customer_service_location.service_zone_loc, service_location.service_loc",FALSE);
		$this->db->from('customers'); 
		$this->db->join('customer_service_location', 'customer_service_location.customer_id = customers.id');
		$this->db->join('service_location', 'service_location.id = customer_service_location.service_zone_loc');
		$this->db->where('customers.id', $id);
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
		return $query->result();
    }
	
	
	public function warranty_pending_claims(){
		$this->db->select("quote_review_spare_details.id, quote_review_spare_details.request_id as quote_req_id, service_request.request_id, service_request.active_req, products.model, customers.company_name,quote_review.status,quote_review.warranty_mode,quote_review.code_no,quote_review.code_date",FALSE);
		$this->db->from('quote_review_spare_details');
		$this->db->join('service_request', 'service_request.id=quote_review_spare_details.request_id');
		$this->db->join('service_request_details', 'service_request_details.request_id=service_request.id');
		$this->db->join('products', 'products.id = service_request_details.model_id');
		$this->db->join('customers', 'customers.id = service_request.cust_name');
		$this->db->join('customer_service_location', 'customer_service_location.id = service_request.br_name');
		$this->db->join('quote_review', 'quote_review.req_id = service_request.request_id');
		$this->db->where('service_request.active_req', '0');
		$this->db->group_by('quote_review_spare_details.request_id');
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function updatestsid($id)
	{
		$this->db->select('code_no,code_date,warranty_mode');
		$this->db->from('quote_review');
		$this->db->where('req_id',$id);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function view_claim($id){
		$this->db->select("quote_review_spare_details.id, quote_review_spare_details.request_id as quote_req_id, quote_review_spare_details.warranty_claim_status, quote_review_spare_details.desc_failure, quote_review_spare_details.why_failure, quote_review_spare_details.correct_action, quote_review_spare_details.spare_qty, service_request.request_id, service_request.request_date, service_request_details.serial_no, products.model, customers.company_name, customer_service_location.address, customer_service_location.address1, customer_service_location.city, customer_service_location.state, customer_service_location.pincode, customer_service_location.contact_name, customer_service_location.mobile, GROUP_CONCAT(spares.id,'-',spares.spare_name,'-',spares.part_no) as spare_details, order_details.purchase_date,employee.emp_name",FALSE);
		$this->db->from('quote_review_spare_details');
		$this->db->join('service_request', 'service_request.id=quote_review_spare_details.request_id');
		$this->db->join('service_request_details', 'service_request_details.request_id=service_request.id');
		$this->db->join('employee', 'employee.id=service_request_details.accepted_engg_id','left');
		$this->db->join('order_details', 'order_details.serial_no=service_request_details.serial_no');
		$this->db->join('products', 'products.id = service_request_details.model_id');
		$this->db->join('customers', 'customers.id = service_request.cust_name');
		$this->db->join('customer_service_location', 'customer_service_location.id = service_request.br_name');
		$this->db->join('spares', 'spares.id = quote_review_spare_details.spare_id');
		$this->db->where('quote_review_spare_details.request_id', $id);
		$this->db->group_by('quote_review_spare_details.request_id');
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function get_modelById($id){
		$this->db->select("*",FALSE);
		$this->db->from('products'); 
		$this->db->where('id', $id);
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
		return $query->result();
    }
	
	public function updateclaim($data,$id)
	{ //echo "<pre>";print_r($data);exit;
		$this->db->where('req_id',$id);
		return $this->db->update('quote_review',$data);
	}
	
	
	public function preventive_req_list1($prev_date){
		$this->db->select("orders.id, customers.customer_name, service_location.service_loc, products.model ,(
		CASE 
			WHEN order_details.warranty_date!='' THEN 'Warranty'
			WHEN order_details.prev_main!='' THEN 'Preventive'
			WHEN order_details.paid!='' THEN 'Paid'
			ELSE 1
			END) AS machine_status, order_details.prenos, order_details.prev_main, order_details.prev_main_updated, order_details.prenos_cnt",FALSE);
		$this->db->from('orders');
		$this->db->join('order_details', 'order_details.order_id=orders.id');
		$this->db->join('customers', 'customers.id=orders.customer_id');
		$this->db->join('products', 'products.id = order_details.model_id'); 
		$this->db->join('service_location', 'service_location.id = order_details.service_loc_id'); 
		//$this->db->order_by('service_request.id', 'asc'); 
		$this->db->where_in('order_details.prev_main_updated', $prev_date);		
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	public function get_custo(){
		$this->db->select("customers.id, customers.mobile, customers.email_id, customers.company_name",FALSE);
		$this->db->from('customers'); 
		
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
		return $query->result();
    }
	
	public function customerlist(){
		$this->db->select("id, customer_id, customer_name, customer_type, mobile, email_id, company_name",FALSE);
		$this->db->from('customers'); 
		$this->db->where('flag','');
		 $this->db->order_by('customer_name','asc');
		$query = $this->db->get();
        return $query->result();
    }
	public function service_typelist(){
		$this->db->select("id, prod_service_status",FALSE);
		$this->db->from('service_status'); 
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function list_serialnos(){
		$this->db->select("serial_no, order_id",FALSE);
		$this->db->from('order_details');
		$this->db->where('flag','');
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function service_cnt(){
		$this->db->select("request_id",FALSE);
		$this->db->from('service_request'); 
		$this->db->not_like('request_id', 'P-'); 
		$this->db->order_by('request_id', 'desc'); 
		$this->db->limit(1);	
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
		return $query->result();
    }
	
	public function get_mods(){
		$this->db->select("products.id, products.model",FALSE);
    $this->db->from('products');
	$this->db->order_by('products.id', 'asc'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function preventive_req_list(){
		$this->db->select("orders.id, orders.customer_id, orders.customer_service_loc_id, order_details.order_id, order_details.serial_no, order_details.cat_id, order_details.subcat_id, order_details.brand_id, order_details.model_id, order_details.service_loc_id, order_details.warranty_date, customers.customer_name, customers.mobile, customers.email_id, service_location.service_loc, products.model ,(
		CASE 
			WHEN order_details.warranty_date!='' THEN 'Warranty'
			WHEN order_details.prev_main!='' THEN 'Preventive'
			WHEN order_details.paid!='' THEN 'Paid'
			ELSE 1
			END) AS machine_status, order_details.prenos, order_details.prev_main, order_details.prev_main_updated, order_details.prenos_cnt, order_details.purchase_date, order_details.amc_start_date, order_details.amc_type, order_details.amc_end_date",FALSE);
		$this->db->from('orders');
		$this->db->join('order_details', 'order_details.order_id=orders.id');
		$this->db->join('customers', 'customers.id=orders.customer_id');
		$this->db->join('products', 'products.id = order_details.model_id'); 
		$this->db->join('service_location', 'service_location.id = order_details.service_loc_id'); 
		//$this->db->order_by('service_request.id', 'asc'); 
		$this->db->where('order_details.prenos!=', '0');		
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	public function preventive_reqq_list(){
		$query = $this->db->query("SELECT orders.id, orders.customer_id, orders.customer_service_loc_id, orders.mobile, orders.email_id, order_details.order_id, order_details.serial_no, order_details.cat_id, order_details.subcat_id, order_details.brand_id, order_details.model_id, order_details.service_loc_id, order_details.warranty_date, order_details.prenos, order_details.prev_main, order_details.prev_main_updated, order_details.prenos_cnt, order_details.purchase_date, order_details.amc_start_date, order_details.amc_type, order_details.amc_end_date, order_details.cmc_start_date, order_details.rent_date, preventive_maintenance_alerts.schedule_date, preventive_maintenance_alerts.id as pm_id FROM preventive_maintenance_alerts as preventive_maintenance_alerts 
		
		inner join orders as orders ON orders.id=preventive_maintenance_alerts.order_id
		
		inner join order_details as order_details ON order_details.order_id=orders.id WHERE (preventive_maintenance_alerts.status = '0') and (datediff(preventive_maintenance_alerts.schedule_date, date(now())) <= 15 and datediff(preventive_maintenance_alerts.schedule_date, date(now())) >= 0)");
		//echo $this->db->last_query();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
		
    }
	
	public function update_preventive_main($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('preventive_maintenance_alerts',$data);
    }
	
	public function update_preventive($data,$order_id){ 
        $this->db->where('order_id',$order_id); 
		$this->db->update('order_details',$data);
    }
	public function service_p_cnt(){
		$this->db->select("request_id",FALSE);
		$this->db->from('service_request');
		$this->db->where('active_req', '0');
		$this->db->like('request_id', 'P-', 'after'); 
		$this->db->order_by('request_id', 'desc'); 
		$this->db->limit(1);	
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
		return $query->result();
    }
	public function get_orderdetails($id){
		$this->db->select("prod_category.id As catid, prod_subcategory.id As subcatid, brands.id As brandid, products.id As modelid, prod_category.product_category, prod_subcategory.subcat_name, brands.brand_name, products.model, order_details.warranty_date, order_details.prev_main, order_details.paid,(
		CASE 
			WHEN order_details.warranty_date!='' THEN 'Warranty'
			WHEN order_details.amc_start_date!='' THEN 'AMC'
			WHEN order_details.rent_date!='' THEN 'Rental'
			WHEN order_details.paid!='' THEN 'Chargeable'
			WHEN order_details.cmc_start_date!='' THEN 'CMC'
			ELSE 'Chargeable'
			END) AS machine_status, order_details.amc_start_date, order_details.amc_type, order_details.amc_end_date, order_details.batch_no, service_location.service_loc, service_location.id As locid",FALSE);
    $this->db->from('order_details');
    $this->db->join('prod_category', 'prod_category.id = order_details.cat_id');
	$this->db->join('prod_subcategory', 'prod_subcategory.id = order_details.subcat_id'); 
	$this->db->join('brands', 'brands.id = order_details.brand_id'); 
	$this->db->join('products', 'products.id = order_details.model_id'); 
	$this->db->join('service_location', 'service_location.id = order_details.service_loc_id'); 
	//$this->db->join('service_category', 'service_category.model = products.id'); 
	$this->db->order_by('order_details.order_id', 'asc'); 
	$this->db->where('order_details.serial_no', $id);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function get_servicecatdetails($id){
		$this->db->select("products.id As modelid, products.model, service_category.service_category As service_category, service_category.id As sercat_id",FALSE);
    $this->db->from('order_details');
 //   $this->db->join('prod_category', 'prod_category.id = order_details.cat_id');
	//$this->db->join('prod_subcategory', 'prod_subcategory.id = order_details.subcat_id'); 
	//$this->db->join('brands', 'brands.id = order_details.brand_id'); 
	$this->db->join('products', 'products.id = order_details.model_id'); 
	//$this->db->join('service_location', 'service_location.id = order_details.service_loc_id'); 
	//$this->db->join('service_category', 'service_category.model = products.id');
	
	
	$this->db->join('service_charge', 'service_charge.model = products.id');
	$this->db->join('service_category', 'service_category.id = service_charge.service_cat_id'); 
	
	
	$this->db->order_by('order_details.order_id', 'asc'); 
	$this->db->where('order_details.serial_no', $id);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function get_probcatdetails($id){
		$this->db->select("problem_category.prob_category As prob_category, problem_category.id As prob_catid",FALSE);
    $this->db->from('order_details'); 
	$this->db->join('products', 'products.id = order_details.model_id'); 
	$this->db->join('problem_category', 'problem_category.model = products.id');	
	$this->db->order_by('order_details.order_id', 'asc'); 
	$this->db->where('order_details.serial_no', $id);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	public function get_serialdetails($id){
		$this->db->select("order_details.serial_no, order_details.model_id, order_details.cat_id, order_details.subcat_id, order_details.brand_id, order_details.warranty_date, order_details.prev_main, order_details.paid,(
		CASE 
			WHEN order_details.warranty_date!='' THEN 'Warranty'
			WHEN order_details.prev_main!='' THEN 'Preventive'
			WHEN order_details.paid!='' THEN 'Chargeable'
			ELSE 1
			END) AS machine_status, order_details.amc_start_date, order_details.amc_type, order_details.amc_end_date, order_details.batch_no",FALSE);
		$this->db->from('orders');
		$this->db->join('order_details', 'order_details.order_id = orders.id');
		$this->db->where('orders.customer_service_loc_id', $id);
	 	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	public function get_servicenodetails($id,$cust_id){
		$this->db->select("order_details.serial_no, order_details.warranty_date, order_details.prev_main, order_details.paid,(
		CASE 
			WHEN order_details.warranty_date!='' THEN 'Warranty'
			WHEN order_details.prev_main!='' THEN 'Preventive'
			WHEN order_details.paid!='' THEN 'Chargeable'
			ELSE 1
			END) AS machine_status, order_details.amc_start_date, order_details.amc_type, order_details.amc_end_date, order_details.batch_no, service_location.service_loc, service_location.id As locid",FALSE);
    $this->db->from('orders');
    $this->db->join('order_details', 'order_details.order_id = orders.id');
	$this->db->join('service_location', 'service_location.id = order_details.service_loc_id'); 
	$this->db->where('orders.customer_id', $cust_id);
	$this->db->where('order_details.model_id', $id);
	$this->db->where('orders.flag','');
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function get_modelnos($id){
		$this->db->distinct();
		$this->db->select("order_details.serial_no, products.id, products.model",FALSE);
    $this->db->from('orders');
    $this->db->join('order_details', 'order_details.order_id = orders.id');
	$this->db->join('products', 'products.id = order_details.model_id');
	$this->db->where('orders.customer_service_loc_id', $id);
	$this->db->where('products.status','0');
	$this->db->group_by('products.id'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	public function get_orderdetails1($id){
		$this->db->select("products.id, products.category, products.subcategory, products.brand, products.model, prod_category.product_category, prod_subcategory.subcat_name, brands.brand_name",FALSE);
    $this->db->from('products');
    $this->db->join('prod_category', 'prod_category.id = products.category');
	$this->db->join('prod_subcategory', 'prod_subcategory.id = products.subcategory'); 
	$this->db->join('brands', 'brands.id = products.brand'); 
	$this->db->where('products.id', $id);
	$query = $this->db->get();

        return $query->result();
    }
	
	public function get_servicecatdetails1($id){
		//print_r($id);
		$this->db->select("products.id As modelid, products.model, service_category.service_category As service_category, service_category.id As sercat_id",FALSE);
    $this->db->from('products');
 	$this->db->join('service_charge', 'service_charge.model = products.id');
	$this->db->join('service_category', 'service_category.id = service_charge.service_cat_id'); 
	$this->db->where('service_charge.model', $id);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function check_req($req){
		$this->db->select("*",FALSE);
		$this->db->from('service_request');
		$this->db->where('request_id', $req);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	public function get_probcatdetails1($id){
		$this->db->select("problem_category.prob_category As prob_category, problem_category.id As prob_catid",FALSE);
    $this->db->from('products'); 
	$this->db->join('problem_category', 'problem_category.model = products.id');	
	$this->db->where('products.id', $id);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	public function service_req_list($user_access,$user_type){
		
		if($user_type=="1"){

			$this->db->select("service_request.id, service_request.request_id, service_request.request_date, service_request_details.machine_status, status.status, customers.customer_name, customers.company_name, products.model, customers.company_name, service_location.service_loc",FALSE);
			$this->db->from('service_request');
			$this->db->join('service_request_details', 'service_request_details.request_id=service_request.id');
			$this->db->join('products', 'products.id=service_request_details.model_id');
			$this->db->join('customers', 'customers.id=service_request.cust_name');
			$this->db->join('service_location', 'service_location.id=service_request_details.zone','left');
			//$this->db->join('employee', 'employee.id IN (service_request_details.assign_to)','left');
			$this->db->join('status', 'status.id=service_request.status','left');
			$this->db->order_by('service_request.id', 'asc'); 
			$this->db->not_like('service_request.request_id', 'P-');	
			$query = $this->db->get();
			//echo "<pre>";print_r($query->result());exit;
			return $query->result();
		}else{
			$this->db->select("service_request.id, service_request.request_id, service_request.request_date, service_request_details.machine_status, status.status, customers.customer_name, customers.company_name, products.model, customers.company_name, service_location.service_loc",FALSE);
			$this->db->from('service_request');
			$this->db->join('service_request_details', 'service_request_details.request_id=service_request.id');
			$this->db->join('products', 'products.id=service_request_details.model_id');
			$this->db->join('customers', 'customers.id=service_request.cust_name');
			$this->db->join('service_location', 'service_location.id=service_request_details.zone','left');
			//$this->db->join('employee', 'employee.id IN (service_request_details.assign_to)','left');
			$this->db->join('status', 'status.id=service_request.status','left');
			$this->db->order_by('service_request.id', 'asc'); 
			$this->db->not_like('service_request.request_id', 'P-');	
			$query = $this->db->get();
			//echo "<pre>";print_r($query->result());exit;
			return $query->result();
		}
		
    }
	
	public function preventivee_req_list($user_access,$user_type){
		
		if($user_type=="1"){
			$this->db->select("service_request.id, service_request.request_id, service_request.request_date, service_request.status, customers.customer_name, customers.company_name",FALSE);
			$this->db->from('service_request');
			$this->db->join('customers', 'customers.id=service_request.cust_name');
			$this->db->order_by('service_request.id', 'asc'); 	
			$this->db->like('service_request.request_id', 'P-');
			$query = $this->db->get();
			//echo "<pre>";print_r($query->result());exit;
			return $query->result();
		}else{
			$this->db->select("service_request.id, service_request.request_id, service_request.request_date, service_request.status, customers.customer_name, customers.company_name",FALSE);
			$this->db->from('service_request');
			$this->db->join('customers', 'customers.id=service_request.cust_name');
			$this->db->order_by('service_request.id', 'asc'); 	
			$this->db->like('service_request.request_id', 'P-');
			$query = $this->db->get();
			//echo "<pre>";print_r($query->result());exit;
			return $query->result();
		}
		
    }
	
	
	public function service_req_list1($user_access,$user_type){
		$where = "service_request.active_req!='1'";
		if($user_type=="1"){
			$this->db->select("service_request_details.id, service_request_details.request_id, service_request.id, service_request.active_req, service_request_details.machine_status, products.model, service_location.service_loc,service_request_details.serial_no",FALSE);
			$this->db->from('service_request_details');
			$this->db->join('products', 'products.id = service_request_details.model_id'); 
			$this->db->join('service_location', 'service_location.id = service_request_details.zone'); 
			$this->db->join('service_request', 'service_request.id=service_request_details.request_id');
			$this->db->where($where);
			$query = $this->db->get();
			//echo "<pre>";print_r($query->result());exit;
			return $query->result();
		}else{
			$this->db->select("service_request_details.id, service_request_details.request_id, service_request.id, service_request.active_req, service_request_details.machine_status, products.model, service_location.service_loc,service_request_details.serial_no",FALSE);
			$this->db->from('service_request_details');
			$this->db->join('products', 'products.id = service_request_details.model_id'); 
			$this->db->join('service_location', 'service_location.id = service_request_details.zone'); 
			$this->db->join('service_request', 'service_request.id=service_request_details.request_id');
			$this->db->where($where);
			$query = $this->db->get();
			//echo "<pre>";print_r($query->result());exit;
			return $query->result();
		}
		
    }
	
	public function service_req_listforEmp(){
		$where = "service_request.active_req!='1'";
		$this->db->select("service_request_details.request_id, service_request.id, service_request.active_req, employee.emp_name",FALSE);
    $this->db->from('service_request_details');
    $this->db->join('employee', 'employee.id = service_request_details.assign_to'); 
	$this->db->join('service_request', 'service_request.id=service_request_details.request_id');
	//$this->db->order_by('order_details.order_id', 'asc');
        $this->db->where($where); 	
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
		$where = "service_request.active_req!='1'";
		$this->db->select("service_request.id, service_request.active_req, service_request.status",FALSE);
		$this->db->from('service_request');
		//$this->db->join('quote_review', 'quote_review.req_id=service_request.id');
		//$this->db->where('service_request.id', $id);	
		$this->db->order_by('service_request.id', 'asc');		
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
		
    }
	
	public function get_searchByStatus($id){
		$query=$this->db->query("select service_request.id, service_request.request_id, service_request.request_date, service_request.status, customers.customer_name, customers.company_name from service_request As service_request 
		inner join service_request_details As service_request_details ON service_request_details.request_id = service_request.id
		inner join customers As customers ON customers.id=service_request.cust_name WHERE service_request.status = $id",FALSE);
		//echo $this->db->last_query();exit;
        return $query->result();
    }
	
	public function getservicereqbyid($id){
		
		$this->db->select("service_request.id, service_request.request_id, service_request.request_date, service_request.mobile, service_request.email_id, service_request.address As cust_addr, service_request.address1,  customers.customer_name, customers.mobile, customers.address, customers.address1, customers.company_name, customers.id As cust_id, customers.land_ln, customers.pincode, customers.email_id, customer_service_location.landline, customer_service_location.address as br_address, customer_service_location.address1 as br_address1, customer_service_location.pincode as br_pincode, customer_service_location.area as area, customer_service_location.mobile as br_mobile, customer_service_location.email_id as br_email_id",FALSE);
		$this->db->from('service_request');
		$this->db->join('customers', 'customers.id=service_request.cust_name');
		$this->db->join('customer_service_location', 'customer_service_location.id=service_request.br_name');
		$this->db->where('service_request.id', $id);	
		$this->db->order_by('service_request.id', 'asc');		
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
		
    }
	
	public function zone_pincodes(){
		$query=$this->db->query("select * from service_location",FALSE);
		//echo $this->db->last_query();exit;
        return $query->result();
    }
	
	
	
	public function customer_list($search,$drop)
	{
		$query=$this->db->query("select service_request.id,cust.customer_name,pro.product_name,det.	machine_status,emp.emp_name,det.site,loc.service_loc
		,service_request.created_on,service_request.status from service_request
		left join service_request_details as det on det.request_id=service_request.id
		left join customers as cust on cust.id=service_request.cust_name
		left join products as pro on pro.id=det.model_id
		left join service_location as loc on loc.id=det.zone
		left join status as stat on stat.id=service_request.status
		left join employee as emp on emp.id=det.assign_to 
		where service_request.status='$drop' AND (pro.product_name='$search' OR cust.customer_name='$search' OR det.machine_status='$search' OR det.site='$search' OR emp.emp_name='$search' OR loc.service_loc='$search')");
		
	//	echo "<pre>";print_r($query->result());exit;
		return $query->result();
	}
	
	
	public function getallreq_list($search)
	{
		$query=$this->db->query("select service_request.id,cust.customer_name,pro.product_name,det.	machine_status,emp.emp_name,det.site,loc.service_loc,service_request.status,service_request.created_on from service_request
		left join service_request_details as det on det.request_id=service_request.id
		left join customers as cust on cust.id=service_request.cust_name
		left join products as pro on pro.id=det.model_id
		left join service_location as loc on loc.id=det.zone
		left join status as stat on stat.id=service_request.status
		left join employee as emp on emp.id=det.assign_to where det.site='$search' OR det.machine_status='$search' OR cust.customer_name='$search' OR pro.product_name='$search' OR emp.emp_name='$search' OR service_loc='$search' OR service_request.created_on='$search 23:59:59.993'");
		//echo "<pre>";print_r($query->result());exit;
		return $query->result();
	}
	
	
	
	public function getservicereqDetailsbyid($id){
		
		$this->db->select("service_request_details.id, service_request_details.request_id, service_request_details.serial_no, service_request_details.warranty_date, service_request_details.service_type, service_request_details.service_cat, service_request_details.zone, service_request_details.problem, service_request_details.assign_to, service_request_details.received, service_request_details.machine_status, service_request_details.service_priority,service_request_details.blank_app,service_request_details.notes,service_request_details.service_loc_coverage,service_request_details.batch_no,
		prod_category.id As catid, prod_subcategory.id As subcatid, brands.id As brandid, products.id As modelid, prod_category.product_category, prod_subcategory.subcat_name, brands.brand_name, products.model, service_location.service_loc, service_location.id As locid, service_request.status",FALSE);
		$this->db->from('service_request_details');
		$this->db->join('service_request', 'service_request.id = service_request_details.request_id');
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
	
	public function getservicereqDetailsbyid1($id){
		
		$this->db->select("service_request_details.id, service_request_details.request_id, service_request_details.site, service_request_details.service_type",FALSE);
		$this->db->from('service_request_details');
		
		$this->db->where('service_request_details.request_id', $id);
		$this->db->order_by('service_request_details.id', 'asc'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
		
		
    }
	
	public function get_cancel_reason($id){
		
		$this->db->select("quote_review.notes",FALSE);
		$this->db->from('service_request');
		//$this->db->join('service_request_details', 'service_request_details.request_id = service_request.id'); 
		$this->db->join('quote_review', 'quote_review.req_id = service_request.id'); 
		
		$this->db->where('service_request.id', $id);
		$this->db->where('service_request.status', '10');
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
	public function accessories_list(){
		$this->db->select("id, accessory",FALSE);
		$this->db->from('accessories'); 
		$this->db->order_by('accessory', 'asc');
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
	
	public function print_servicecat_list($id){
       $this->db->select("service_category.service_category",FALSE);
		$this->db->from('service_request_details');
		$this->db->join('service_category', 'service_category.id = service_request_details.service_cat'); 
		$this->db->where('service_request_details.request_id', $id);
		//$this->db->order_by('service_request_details.id', 'asc'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function print_problemlist($id){
       $this->db->select("problem_category.prob_category",FALSE);
		$this->db->from('service_request_details');
		$this->db->join('problem_category', 'problem_category.id = service_request_details.problem'); 
		$this->db->where('service_request_details.request_id', $id);
		//$this->db->order_by('service_request_details.id', 'asc'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function sms_problemlist($id){
        $this->db->select("prob_category",FALSE);
		$this->db->from('problem_category');
		$this->db->where('id', $id);
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function get_emp_email($id){
        $this->db->select("emp_email",FALSE);
		$this->db->from('employee');
		$this->db->where('id', $id);
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	public function problemlist(){
        $this->db->select("id,prob_category",FALSE);
		$this->db->from('problem_category'); 
		$query = $this->db->get();
        return $query->result();
    }
	
	public function getProbByModel($model_id){
        $this->db->select("id,prob_category",FALSE);
		$this->db->from('problem_category'); 
		$this->db->where('model', $model_id);
		$query = $this->db->get();
        return $query->result();
    }
	
	public function employee_list(){
        
		$this->db->select("employee.id, employee.emp_id, employee.emp_name, employee.	emp_mobile",FALSE);
		$this->db->from('employee');
		//$this->db->join('employee_service_skill', 'employee_service_skill.empid=employee.id');
		$this->db->order_by('employee.emp_name', 'asc'); 
		//$this->db->group_by('employee_service_skill.empid'); 
	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function employee_list1(){
        $this->db->select("employee_service_skill.empid, GROUP_CONCAT(employee_service_skill.service_category) as service_category",FALSE);
		$this->db->from('employee_service_skill'); 
		//$this->db->join('employee_service_skill', 'employee_service_skill.empid = employee.id');
		$this->db->group_by('employee_service_skill.empid'); 
		$this->db->order_by('employee_service_skill.empid', 'asc'); 			
		$query = $this->db->get();
		//echo $this->db->last-query();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function stamping_list(){
		$this->db->select("employee.id, GROUP_CONCAT(employee_service_skill.service_category) As serv_category",FALSE);
    $this->db->from('employee');
    $this->db->join('employee_service_skill', 'employee_service_skill.empid=employee.id');
	$this->db->group_by('employee_service_skill.empid'); 
	
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
	
	public function get_branch($id)
	{
		$query = $this->db->get_where('customer_service_location', array('customer_id' => $id));
		return $query->result();
    }
	
	
	
	public function get_brannch($id){
		$this->db->select("order_details.order_id, orders.customer_id, customer_service_location.branch_name ,customer_service_location.id,customer_service_location.service_zone_loc",FALSE);
		$this->db->from('order_details'); 		
		$this->db->join('orders', 'orders.id = order_details.order_id');
		$this->db->join('customers', 'customers.id = orders.customer_id');
		$this->db->join('customer_service_location', 'customer_service_location.customer_id = orders.customer_id');
		$this->db->where('order_details.order_id', $id);
		$query = $this->db->get();
		//$query = $this->db->get_where('customer_service_location', array('customer_id' => $id));
		return $query->result();
    }
	
	
	public function get_customerndorderdetails($id){
		$this->db->select("order_details.order_id, orders.customer_id, orders.customer_service_loc_id,customers.company_name, customer_service_location.service_zone_loc",FALSE);
		$this->db->from('order_details'); 		
		$this->db->join('orders', 'orders.id = order_details.order_id');
		$this->db->join('customers', 'customers.id = orders.customer_id');
		$this->db->join('customer_service_location', 'customer_service_location.customer_id = orders.customer_id');		
		$this->db->where('order_details.order_id', $id);
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
		return $query->result();
    }
	
	
	
	
	
	
	
	public function getBranchservicereqbyid($id){
		
		$this->db->select("service_request.id, service_request.request_id, service_request.request_date, service_request.mobile, service_request.email_id, customer_service_location.id As cslid, customer_service_location.branch_name",FALSE);
		$this->db->from('service_request');
		//$this->db->join('customers', 'customers.id=service_request.cust_name');
		$this->db->join('customer_service_location', 'customer_service_location.id=service_request.br_name');
		$this->db->where('service_request.id', $id);	
		$this->db->order_by('service_request.id', 'asc');		
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
		
    }
	
	
	public function get_branchdetails($id){
		$query = $this->db->get_where('customer_service_location', array('id' => $id));
		return $query->result();
    }
	public function get_servicezone($id){
		$this->db->select("customer_service_location.service_zone_loc, service_location.service_loc, service_location.zone_coverage, GROUP_CONCAT(employee.id,'-',employee.emp_name,'-',employee.emp_mobile) As emp_details",FALSE);
    $this->db->from('customer_service_location');
    $this->db->join('service_location', 'service_location.id = customer_service_location.service_zone_loc');
	$this->db->join('employee', 'find_in_set(service_location.id,employee.service_zone)', 'left');
	$this->db->where('customer_service_location.id', $id);
	$this->db->group_by('customer_service_location.service_zone_loc');
	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
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
	
	public function update_stamping_details($data,$id){ 
        $this->db->where('req_id',$id); 
		$this->db->update('stamping_details',$data);
    }
	
	
	public function update_service_status($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('service_request',$data);
    }
	
	
	/*public function getOld_forothers($idd)
	{
		$this->db->select("*",FALSE);
		$this->db->from('service_request'); 
		$query = $this->db->get();
        return $query->result();
	}*/
	
	
	
	public function update_service_delstatus($data,$idd){ 
        $this->db->where('id',$idd); 
		$this->db->update('service_request',$data);
		return $idd;
    }
	
	
	public function delete_serv_req_details($id){
        $this->db->where('request_id',$id);
        $this->db->delete('service_request_details');
    }
	
	public function delete_orders($id){
        $this->db->where('id',$id);
        $this->db->delete('orders');
    }
	
	public function alert_req_list($user_access,$user_type){
		
		if($user_type=="1"){

			$this->db->select("service_request.id, service_request.request_id, service_request.request_date, service_request_details.machine_status, status.status, customers.customer_name, customers.company_name, products.model, customers.company_name, service_location.service_loc",FALSE);
			$this->db->from('service_request');
			$this->db->join('service_request_details', 'service_request_details.request_id=service_request.id');
			$this->db->join('products', 'products.id=service_request_details.model_id');
			$this->db->join('customers', 'customers.id=service_request.cust_name');
			$this->db->join('service_location', 'service_location.id=service_request_details.zone','left');
			//$this->db->join('employee', 'employee.id IN (service_request_details.assign_to)','left');
			$this->db->join('status', 'status.id=service_request.status','left');
			$this->db->where_in('service_request.status', array('1','9'));
			$this->db->order_by('service_request.id', 'asc'); 
			$this->db->not_like('service_request.request_id', 'P-');	
			$query = $this->db->get();
			//echo "<pre>";print_r($query->result());exit;
			return $query->result();
		}else{
			$this->db->select("service_request.id, service_request.request_id, service_request.request_date, service_request_details.machine_status, status.status, customers.customer_name, customers.company_name, products.model, customers.company_name, service_location.service_loc",FALSE);
			$this->db->from('service_request');
			$this->db->join('service_request_details', 'service_request_details.request_id=service_request.id');
			$this->db->join('products', 'products.id=service_request_details.model_id');
			$this->db->join('customers', 'customers.id=service_request.cust_name');
			$this->db->join('service_location', 'service_location.id=service_request_details.zone','left');
			//$this->db->join('employee', 'employee.id IN (service_request_details.assign_to)','left');
			$this->db->join('status', 'status.id=service_request.status','left');
			$this->db->order_by('service_request.id', 'asc'); 
			$this->db->not_like('service_request.request_id', 'P-');	
			$query = $this->db->get();
			//echo "<pre>";print_r($query->result());exit;
			return $query->result();
		}
		
    }
	public function pending_req_list($user_access,$user_type){
		
		if($user_type=="1"){
			$where = "service_request_details.eng_ack=''";
			$this->db->select("service_request.id, service_request.request_id, service_request.request_date, service_request_details.machine_status, status.status, customers.customer_name, customers.company_name, products.model, customers.company_name, service_location.service_loc,service_request_details.eng_ack",FALSE);
			$this->db->from('service_request');
			$this->db->join('service_request_details', 'service_request_details.request_id=service_request.id');
			$this->db->join('products', 'products.id=service_request_details.model_id');
			$this->db->join('customers', 'customers.id=service_request.cust_name');
			$this->db->join('service_location', 'service_location.id=service_request_details.zone','left');
			//$this->db->join('employee', 'employee.id IN (service_request_details.assign_to)','left');
			$this->db->join('status', 'status.id=service_request.status','left');
			$this->db->where($where);
			$this->db->order_by('service_request.id', 'asc'); 
			$this->db->not_like('service_request.request_id', 'P-');	
			$query = $this->db->get();
			//echo "<pre>";print_r($query->result());exit;
			return $query->result();
		}else{
			$this->db->select("service_request.id, service_request.request_id, service_request.request_date, service_request_details.machine_status, status.status, customers.customer_name, customers.company_name, products.model, customers.company_name, service_location.service_loc",FALSE);
			$this->db->from('service_request');
			$this->db->join('service_request_details', 'service_request_details.request_id=service_request.id');
			$this->db->join('products', 'products.id=service_request_details.model_id');
			$this->db->join('customers', 'customers.id=service_request.cust_name');
			$this->db->join('service_location', 'service_location.id=service_request_details.zone','left');
			//$this->db->join('employee', 'employee.id IN (service_request_details.assign_to)','left');
			$this->db->join('status', 'status.id=service_request.status','left');
			$this->db->order_by('service_request.id', 'asc'); 
			$this->db->not_like('service_request.request_id', 'P-');	
			$query = $this->db->get();
			//echo "<pre>";print_r($query->result());exit;
			return $query->result();
		}
		
    }
	public function get_preventive_id(){
		$this->db->select("request_id",FALSE);
		$this->db->from('service_request'); 
		$this->db->like('service_request.request_id', 'P-');
		$this->db->order_by('id', 'desc'); 
		$this->db->limit(1);
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
		return $query->row();
    }
	
}