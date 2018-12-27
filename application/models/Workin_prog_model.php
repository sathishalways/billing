<?php 
class workin_prog_model extends CI_Model{
function __construct(){
parent::__construct();
$this->load->database();
}

	public function workin_prog_list($user_access,$user_type){
		
		if($user_type=="1"){
			
			$where = "service_request_details.assign_to!='' AND service_request.status IN(1,9) AND service_request.active_req!='1'";
			
			$this->db->select("service_request.id,service_request_details.assign_to, service_request.status, service_request.active_req, service_request.request_id, service_request.request_date, customers.customer_name, customers.company_name,customers.email_id, products.model",FALSE);
			$this->db->from('service_request');
			$this->db->join('customers', 'customers.id=service_request.cust_name');
			$this->db->join('service_request_details', 'service_request_details.request_id=service_request.id');
			$this->db->join('products', 'products.id=service_request_details.model_id');
			$this->db->where($where);
			
			$query = $this->db->get();
			//echo $this->db->last_query();exit;
			//echo "<pre>";print_r($query->result());exit;
			return $query->result();
			
		}
    }
	
	public function getsparebyid($id){
		$query = $this->db->get_where('spares', array('id' => $id));
		//echo "<pre>";print_r($query->result());exit;
		return $query->result();
		
    }
	
	public function updatepspare($n_data,$where)
	{
		/* $this->db->where('spare_id',$id);
		return $this->db->update('petty_spare',$p_data); */
		
		$qry = $this->db->update_string('petty_spare', $n_data, $where); 
		$this->db->query($qry);
		
	}
	
	public function getupspare($where){
		$query = $this->db->get_where('petty_spare', $where);
		//echo "<pre>";print_r($query->result());exit;
		return $query->result();
		
    }
	
	public function view_history_sol($id)    //engg solution
	{
		/*$this->db->select('*');
		$this->db->from('history_cust_solution');
		$this->db->where('req_id',$id);
		$this->db->where('engg_id',$user_id);
		$query = $this->db->get();
		return $query->result(); */
		
		$where = "history_cust_solution.req_id=$id";
		//$wherre = "history_cust_solution.engg_id=$sassign";
		$this->db->select("history_cust_solution.*,service_request.request_id,employee.emp_name",FALSE);
			$this->db->from('history_cust_solution');
			$this->db->join('service_request', 'service_request.id=history_cust_solution.req_id');
			$this->db->join('employee', 'employee.id=history_cust_solution.engg_id');
			$this->db->where($where);			
			//$this->db->where($wherre);			
			$query = $this->db->get();
			//echo "<pre>";print_r($query->result());exit;
			return $query->result();
		
		
	}
	
	public function view_history_notess($id) //engg notes
	{
		$this->db->select('eng_notess.*,service_request.request_id,employee.emp_name');
		$this->db->from('eng_notess');
		$this->db->join('service_request', 'service_request.id=eng_notess.req_id');
		$this->db->join('employee', 'employee.id=eng_notess.engg_id');
		$this->db->where('eng_notess.req_id',$id);
		//$this->db->where('eng_notess.engg_id',$sassign);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function view_history_notes($id)  //co notes
	{
		$this->db->select('co_notess.*,service_request.request_id');
		$this->db->from('co_notess');
		$this->db->join('service_request', 'service_request.id=co_notess.req_id');
		$this->db->where('co_notess.req_id',$id);
		//$this->db->where('co_notess.usrr_id',$sassign);
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
		return $query->result();
	}
	
	
	
	
	
		public function view_history_all($id)
	{
		$this->db->select('history_review.*,service_request.request_id');
		$this->db->from('history_review');
		$this->db->join('service_request', 'service_request.id=history_review.req_id');
		$this->db->where('history_review.req_id',$id);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function view_remark($id)
	{ //echo $id; exit;
		$this->db->select('history_cust_remark.*,service_request.request_id,employee.emp_name');
		$this->db->from('history_cust_remark');
		$this->db->join('service_request', 'service_request.id=history_cust_remark.req_id');
		$this->db->join('employee', 'employee.id=history_cust_remark.engg_id');
		$this->db->where('history_cust_remark.req_id',$id);
		//$this->db->where('history_cust_remark.engg_id',$sassign);
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
		return $query->result();
	}
	public function view_remark1($id)
	{ //echo $id; exit;
		$this->db->select('history_cust_remark.*,service_request.req_id');
		$this->db->from('history_cust_remark');
		$this->db->join('service_request', 'service_request.req_id=history_cust_remark.req_id');
		//$this->db->join('employee', 'employee.id=history_cust_remark.engg_id');
		$this->db->where('history_cust_remark.req_id',$id);
		//$this->db->where('history_cust_remark.engg_id',$sassign);
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
		return $query->result();
	}
	
	
	public function get_logonholds($id){ //echo $id;
		$this->db->select('log_onhold.*,service_request.request_id');
		$this->db->from('log_onhold');
		$this->db->join('service_request', 'service_request.id=log_onhold.req_id');
		$this->db->where('log_onhold.req_id', $id);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	
	public function workin_prog_listbyempid($empid){
		
		$where = "(service_request.status IN(0,1,9) AND FIND_IN_SET('$empid',service_request_details.assign_to) AND service_request.active_req!='1')";
		
		$this->db->select("service_request.id, service_request.status, service_request_details.assign_to, service_request.request_id, service_request.request_date, service_request.active_req, customers.customer_name, customers.company_name, products.model",FALSE);
		$this->db->from('service_request');
		//$this->db->join('quote_review', 'quote_review.req_id=service_request.id');
		$this->db->join('customers', 'customers.id=service_request.cust_name');
		$this->db->join('service_request_details', 'service_request_details.request_id=service_request.id');
		$this->db->join('products', 'products.id=service_request_details.model_id');
		//$this->db->join('status', 'status.id=service_request.status');
		
		//$this->db->where_in('service_request.status', array('0'));
		$this->db->where($where);
		//$this->db->order_by('service_request.id', 'asc'); 	
     	$query = $this->db->get();
		//echo $this->db->last_query();exit;
		//echo "<pre>";print_r($query->result());exit;
		return $query->result();
      
    }
	
	public function job_done_list($empid){
		
		$where = "(service_request.status IN(16,3) AND FIND_IN_SET('$empid',service_request_details.assign_to) AND service_request.active_req!='1')";
		
		$this->db->select("service_request.id, service_request.status, service_request_details.assign_to, service_request.request_id, service_request.request_date, service_request.active_req, customers.customer_name, customers.company_name, products.model",FALSE);
		$this->db->from('service_request');
		//$this->db->join('quote_review', 'quote_review.req_id=service_request.id');
		$this->db->join('customers', 'customers.id=service_request.cust_name');
		$this->db->join('service_request_details', 'service_request_details.request_id=service_request.id');
		$this->db->join('products', 'products.id=service_request_details.model_id');
		//$this->db->join('status', 'status.id=service_request.status');
		
		//$this->db->where_in('service_request.status', array('0'));
		$this->db->where($where);
		//$this->db->order_by('service_request.id', 'asc'); 	
     	$query = $this->db->get();
		//echo $this->db->last_query();exit;
		//echo "<pre>";print_r($query->result());exit;
		return $query->result();
      
    }
	
	
	
	
	public function comp_engg_byempid($empid){
		
		$where = "(service_request.status IN(16) AND service_request_details.assign_to IN($empid) AND service_request.active_req!='1')";
		
		$this->db->select("service_request.id, service_request.request_id, service_request.request_date, service_request.active_req, customers.customer_name, customers.company_name, products.model",FALSE);
		$this->db->from('service_request');
		//$this->db->join('quote_review', 'quote_review.req_id=service_request.id');
		$this->db->join('customers', 'customers.id=service_request.cust_name');
		$this->db->join('service_request_details', 'service_request_details.request_id=service_request.id');
		$this->db->join('products', 'products.id=service_request_details.model_id');
		//$this->db->where_in('service_request.status', array('0'));
		$this->db->where($where);
		//$this->db->order_by('service_request.id', 'asc'); 	
     	$query = $this->db->get();
		//echo $this->db->last_query();exit;
		//echo "<pre>";print_r($query->result());exit;
		return $query->result();
      
    }
	
	public function comp_engg_list($user_access,$user_type){
		
		if($user_type=="1"){
			$where = "service_request.status='16' AND service_request.active_req!='1'";
			
			$this->db->select("service_request.id, service_request.request_id, service_request.request_date, service_request.active_req, customers.customer_name, customers.company_name, products.model",FALSE);
			$this->db->from('service_request');
			$this->db->join('customers', 'customers.id=service_request.cust_name');
			$this->db->join('service_request_details', 'service_request_details.request_id=service_request.id');
			$this->db->join('products', 'products.id=service_request_details.model_id');
			$this->db->where($where);
			$query = $this->db->get();
			//echo "<pre>";print_r($query->result());exit;
			return $query->result();
		}else{
			$where = "service_request.status='16' AND service_request.active_req!='1'";
			
			$this->db->select("service_request.id, service_request.request_id, service_request.request_date, service_request.active_req, customers.customer_name, customers.company_name, products.model",FALSE);
			$this->db->from('service_request');
			$this->db->join('customers', 'customers.id=service_request.cust_name');
			$this->db->join('service_request_details', 'service_request_details.request_id=service_request.id');
			$this->db->join('products', 'products.id=service_request_details.model_id');
			$this->db->where($where);
			$query = $this->db->get();
			//echo "<pre>";print_r($query->result());exit;
			return $query->result();
		}
    }
	
	
	
	public function spareList(){
		$this->db->select("spares.id, spares.spare_name, spares.spare_qty, spares.used_spare, spares.sales_price",FALSE);
		$this->db->from('spares');
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	public function service_req_list1(){
		$where = "service_request.active_req!='1'";
		$this->db->select("service_request_details.id, service_request.id, service_request.active_req, service_request_details.request_id, service_request_details.machine_status, products.model, service_location.service_loc",FALSE);
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
	
	public function service_req_listforEmp1($id){
		$where = "service_request.active_req!='1'";
		$this->db->select("service_request_details.request_id, service_request.id, service_request.active_req, employee.emp_name, employee.id, employee.emp_mobile",FALSE);
    $this->db->from('service_request_details');
    $this->db->join('employee', 'employee.id = service_request_details.assign_to');
    $this->db->join('service_request', 'service_request.id=service_request_details.request_id');	
	$this->db->where('service_request_details.request_id', $id);
	$this->db->where($where);
    $query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function get_emp_by_id($id){
		$this->db->select("id,emp_name",FALSE);
    $this->db->from('employee');
    $this->db->where('employee.id', $id);
	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	
	public function service_req_listforaddlEmp1($id){
		$where = "service_request.active_req!='1'";
		$this->db->select("service_request_details.request_id, service_request.id, service_request.active_req, employee.emp_name, employee.id, employee.emp_mobile",FALSE);
    $this->db->from('service_request_details');
    $this->db->join('employee', 'employee.id = service_request_details.addl_engg_name'); 
	$this->db->join('service_request', 'service_request.id=service_request_details.request_id');
	$this->db->where('service_request_details.request_id', $id);
	$this->db->where($where);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	
	public function service_req_listforProb(){
		$where = "service_request.active_req!='1'";
		$this->db->select("service_request_details.request_id, service_request.id, service_request.active_req, problem_category.prob_category",FALSE);
    $this->db->from('service_request_details');
    $this->db->join('problem_category', 'problem_category.id = service_request_details.problem'); 
	$this->db->join('service_request', 'service_request.id=service_request_details.request_id');
	//$this->db->order_by('order_details.order_id', 'asc'); 	
	$this->db->where($where);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function service_req_listforserviceCat(){
		$where = "service_request.active_req!='1'";
		$this->db->select("service_request_details.request_id, service_request.id, service_request.active_req, service_category.service_category",FALSE);
    $this->db->from('service_request_details');
    $this->db->join('service_category', 'service_category.id = service_request_details.service_cat'); 
	$this->db->join('service_request', 'service_request.id=service_request_details.request_id');
	//$this->db->order_by('order_details.order_id', 'asc'); 
    $this->db->where($where);	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function stamping_details($id){
		$this->db->select("*",FALSE);
		$this->db->from('stamping_details'); 
		$this->db->where('req_id', $id);
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
		return $query->result();
    }
	public function get_stamping_details($reqid){
		$this->db->select("*",FALSE);
		$this->db->from('stamping_details'); 
		$this->db->where('req_id', $reqid);
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	public function status_listForquoteInpro(){
		$this->db->select("id, status",FALSE);
		$this->db->from('status'); 
		$this->db->where_in('id', array('1'));
		$query = $this->db->get();
        return $query->result();
    }
	public function log_stamping_details($data){
     $this->db->insert('log_stamping',$data);
	}
	
	public function log_service_payment_details($data){
     $this->db->insert('log_service_payment_details',$data);
	}
	
	public function add_qc_param_details($data){
     $this->db->insert('qc_parameters_details',$data);
	}
	
	
	public function status_listForworkInpro(){
		$this->db->select("id, status",FALSE);
		$this->db->from('status'); 
		$this->db->where_in('id', array('2','3','5','8','9','10'));
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
		public function status_all(){
		$this->db->select('*');
		$this->db->from('status'); 
		$query = $this->db->get();
		return $query->result();
    }
	
	public function status_listForoffsiteworkInpro(){
		$this->db->select("id, status",FALSE);
		$this->db->from('status'); 
		$this->db->where_in('id', array('2','5','3','9'));
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function status_listForStampingworkInpro(){
		$this->db->select("id, status",FALSE);
		$this->db->from('status'); 
		$this->db->where_in('id', array('3','9','4'));
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function status_listForEmpLogin(){
		$this->db->select("id, status",FALSE);
		$this->db->from('status'); 
		$this->db->where_in('id', array('9','16'));
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
	
	public function log_stampings($id){
		$this->db->select("*",FALSE);
		$this->db->from('log_onhold_stamping');
		//$this->db->join('order_details', 'order_details.serial_no = service_request_details.serial_no'); 
		$this->db->where('req_id', $id);
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
	
	public function log_onhold($data){
     $this->db->insert('log_onhold',$data);
	}
	
	public function log_onhold_stamping($data){
     $this->db->insert('log_onhold_stamping',$data);
	}
	
	
	public function add_quotereview_spares($data1){
		$this->db->insert('quote_review_spare_details',$data1); 
    }
	
	
	public function update_quotereview_spares($data1,$where){
		/*  echo "<pre>";
	  print_r($data1);
	  echo "Where: ".$where;
	  exit; */
		$qry = $this->db->update_string('quote_review_spare_details', $data1, $where); 
		$this->db->query($qry);
		/* echo $this->db->last_query();
		exit; */
		//exit; 
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
		$this->db->select("quote_review.spare_tax, quote_review.spare_tot, quote_review.labourcharge, quote_review.concharge, quote_review.total_amt, quote_review.delivery_date, quote_review.model_id, quote_review.notes, quote_review.comments, quote_review.total_charge, quote_review.disc_amt, quote_review.pending_amt, quote_review.cmr_paid, quote_review.payment_mode, quote_review.rating, quote_review.onhold_date, quote_review.onhold_reason, quote_review.eng_notes, quote_review.cust_remark, quote_review.cust_solution, quote_review.notes_all, quote_review.eng_notess, quote_review.req_id, service_request_details.assign_to",FALSE);
    $this->db->from('quote_review');
    $this->db->join('service_request_details', 'service_request_details.request_id = quote_review.req_id'); 
	$this->db->where('quote_review.req_id', $id);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());
        return $query->result();
    }
	public function delete_spare_details($result){
        $this->db->where_in('id',$result);
        $this->db->delete('quote_review_spare_details');
    }
	
	
	public function getQuoteReviewSpareDetByID($id){
		$this->db->select("quote_review_spare_details.id, quote_review_spare_details.spare_id, quote_review_spare_details.spare_qty, quote_review_spare_details.amt, quote_review_spare_details.approval_status, quote_review_spare_details.warranty_claim_status, quote_review_spare_details.desc_failure, quote_review_spare_details.why_failure, quote_review_spare_details.correct_action",FALSE);
    $this->db->from('quote_review_spare_details');
    //$this->db->join('quote_review_spare_details', 'quote_review_spare_details.request_id = quote_review.req_id'); 
	$this->db->where('quote_review_spare_details.request_id', $id);
		
     	$query = $this->db->get();
		//echo "Query: ".$this->db->last_query();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function get_qc_parameters_details($id){
		$this->db->select("*",FALSE);
		$this->db->from('qc_parameters_details');
		$this->db->where('qc_parameters_details.request_id', $id);
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function get_qc_params_det($id,$req_id){
		$this->db->select("*",FALSE);
		$this->db->from('qc_parameters_details');
		$this->db->where('qc_parameters_details.qc_master_id', $id);
		$this->db->where('qc_parameters_details.request_id', $req_id);
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	public function get_qc_params($id){
		$this->db->select("qc_masters.*",FALSE);
		$this->db->from('qc_masters');
		$this->db->where('qc_masters.model', $id);
		$query = $this->db->get();
		//echo "Query: ".$this->db->last_query();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	public function get_request_details($id){
		$this->db->select("*",FALSE);
    $this->db->from('service_request_details');
    //$this->db->join('quote_review_spare_details', 'quote_review_spare_details.request_id = quote_review.req_id'); 
	$this->db->where('service_request_details.request_id', $id);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function getQuoteByReqId1($id){
		$this->db->select("customers.customer_name, customers.mobile, customers.company_name, customer_service_location.branch_name, customer_service_location.mobile As cust_mobile, customer_service_location.landline, customer_service_location.address, customer_service_location.address1, 	customer_service_location.contact_name, customer_service_location.pincode, products.model, products.id As modelid, service_request_details.warranty_date, service_request.request_id, service_request.request_date, service_request.status, service_request_details.site, service_request_details.machine_status, service_request_details.notes, service_request_details.blank_app, service_request_details.service_cat, service_request_details.problem, service_request_details.assign_to, service_request_details.addl_engg_name,service_request_details.service_type, service_location.service_loc, service_location.concharge, 'order_row_id' as order_row_id, 'purchase_date' as purchase_date, 'serial_no' as serial_no, 'batch_no' as batch_no, brands.brand_name, zone_pincodes.area_name, service_request.id",FALSE);
    $this->db->from('service_request_details');
    $this->db->join('service_request', 'service_request.id = service_request_details.request_id'); 
	$this->db->join('customers', 'customers.id = service_request.cust_name'); 
	$this->db->join('customer_service_location', 'customer_service_location.id = service_request.br_name');
	$this->db->join('products', 'products.id = service_request_details.model_id');
	$this->db->join('brands', 'brands.id = service_request_details.brand_id'); 	
	$this->db->join('service_location', 'service_location.id = service_request_details.zone'); 
	$this->db->join('zone_pincodes', 'zone_pincodes.id = customer_service_location.area','left'); 
	//$this->db->join('order_details', 'order_details.serial_no = service_request_details.serial_no'); 
	$this->db->where('service_request_details.request_id', $id);
	$this->db->group_by('service_request_details.request_id');
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->row());exit;
        return $query->result();
    }
	
	
	public function getQuoteByReqId($id){
		$this->db->select("customers.customer_name,customers.email_id,customers.mobile, customers.company_name, customer_service_location.branch_name, customer_service_location.mobile As cust_mobile, customer_service_location.landline, customer_service_location.address, customer_service_location.address1, customer_service_location.contact_name, customer_service_location.pincode, products.model, products.id As modelid, service_request_details.warranty_date, service_request.request_id, service_request.request_date, service_request.status, service_request_details.machine_status, service_request_details.notes, service_request_details.blank_app, service_request_details.service_cat, service_request_details.problem, service_request_details.assign_to, service_request_details.addl_engg_name, service_request_details.eng_ack, service_request_details.accepted_engg_id,service_request_details.service_type, service_location.service_loc, service_location.concharge, order_details.id as order_row_id, order_details.purchase_date, order_details.serial_no, order_details.batch_no, brands.brand_name, zone_pincodes.area_name,employee.emp_name",FALSE);
    $this->db->from('service_request_details');
    $this->db->join('service_request', 'service_request.id = service_request_details.request_id'); 
	$this->db->join('customers', 'customers.id = service_request.cust_name'); 
	$this->db->join('customer_service_location', 'customer_service_location.id = service_request.br_name', 'left');
	$this->db->join('products', 'products.id = service_request_details.model_id');
	$this->db->join('brands', 'brands.id = service_request_details.brand_id'); 	
	$this->db->join('service_location', 'service_location.id = service_request_details.zone'); 
	$this->db->join('zone_pincodes', 'zone_pincodes.id = customer_service_location.area','left'); 
	$this->db->join('order_details', 'order_details.serial_no = service_request_details.serial_no'); 
	$this->db->join('employee', 'employee.id = service_request_details.assign_to');
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
	
	public function update_eng_ack($data,$id){ 
        $this->db->where('request_id',$id); 
		$this->db->update('service_request_details',$data);
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
	public function update_stamping_details($data,$id){ 
        $this->db->where('req_id',$id); 
		$this->db->update('stamping_details',$data);
    }
	
	public function update_quotereview($data,$id){ 
        $this->db->where('req_id',$id); 
		$this->db->update('quote_review',$data);
    }
	
	public function history_ins($data5){ 
	return  $this->db->insert('history_review',$data5);
    }
	public function history_cust_remark($data51){ 
	return  $this->db->insert('history_cust_remark',$data51);
    }
	public function history_cust_solution($data5e1){ 
	return  $this->db->insert('history_cust_solution',$data5e1);
    }
	
	public function history_notess($data5q1){ 
	return  $this->db->insert('co_notess',$data5q1);
    }
	
	
	public function history_insr($data5r,$id){ 
	$this->db->where('req_id',$id); 
	$this->db->update('quote_review',$data5r);
    }
	
	
	
	
	
	
	
	
	public function history_insrr($data25r,$id){ 
	$this->db->where('req_id',$id); 
	$this->db->update('quote_review',$data25r);
    }
	
	public function history_inss($data52){ 
	//echo "<pre>";print_r($data52);exit;
	return  $this->db->insert('eng_notess',$data52);
    }
	
	
	
	
	
	
	public function history_cust_remarkr($data51r,$id){ 
	$this->db->where('req_id',$id); 
	$this->db->update('quote_review',$data51r);
    }
	
	
	public function history_cust_solutionr($data5e1r,$id){ 
	$this->db->where('req_id',$id); 
	$this->db->update('quote_review',$data5e1r);
    }
	
	
	public function update_order_srno($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('order_details',$data);
    }
	
	public function update_service_srno($data,$id){ 
        $this->db->where('request_id',$id); 
		$this->db->update('service_request_details',$data);
    }
	
	
	public function update_quotereview1($data,$id){ 
        $this->db->where('req_id',$id); 
		$this->db->update('quote_review',$data);
    }
	
	public function delete_quote_review($id){
        $this->db->where('request_id',$id);
        $this->db->delete('quote_review_spare_details');
    }
	
	public function delete_qc_param_details($id){
        $this->db->where('request_id',$id);
        $this->db->delete('qc_parameters_details');
    }
	
	
	public function status_list(){
		$this->db->select("id, status",FALSE);
		$this->db->from('status'); 
		$query = $this->db->get();
        return $query->result();
    }
	
	
	public function get_log_onholds($id){ //echo $id;
		$this->db->select("*",FALSE);
		$this->db->from('log_onhold');
		$this->db->where('req_id', $id);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function get_log_onholds1($val){ 
		$this->db->select("*",FALSE);
		$this->db->from('log_onhold');
		$this->db->where('req_id', $val);
     	$query = $this->db->get();
		//echo $this->db->last_query();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	public function spareListByModelId($modelid){
		$this->db->select("spares.id, spares.spare_name, spares.spare_qty, spares.used_spare, spares.sales_price, spares.part_no",FALSE);
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
	public function pending_list($empid){
			$where = "service_request_details.eng_ack='' and service_request.status!='3' and service_request.status!='4' and service_request.status!='10' and service_request.request_date>='2018-07-01'";
			$this->db->select("service_request.id,service_request_details.assign_to, service_request.status, service_request.active_req, service_request.request_id, service_request.request_date, customers.customer_name, customers.company_name,customers.email_id, products.model,service_request_details.eng_ack",FALSE);
			$this->db->from('service_request');
			$this->db->join('customers', 'customers.id=service_request.cust_name');
			$this->db->join('service_request_details', 'service_request_details.request_id=service_request.id');
			$this->db->join('products', 'products.id=service_request_details.model_id');
			$this->db->where($where);
			//$this->db->not_like('service_request.request_id', 'P-');
			$query = $this->db->get();
			//echo $this->db->last_query();exit;
			//echo "<pre>";print_r($query->result());exit;
			return $query->result();
    }
	public function get_sp($id,$spareid){ //echo $spareid; exit;
		$this->db->select("id, spare_id, qty_plus, employee",FALSE);
		$this->db->from('petty_spare');
		//$this->db->join('spares', 'spares.id = spare_details.spare_id'); 
		$this->db->where('spare_id', $spareid);
		$this->db->where('employee',$id);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result(); 
    }
	
	
}