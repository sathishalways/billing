<?php 
class Stampingreport_model extends CI_Model{
function __construct(){
parent::__construct();
$this->load->database();
}

public function emp_list(){
		$this->db->select("id, emp_name",FALSE);
		$this->db->from('employee'); 
		$this->db->order_by('emp_name','asc'); 
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	function getstamping_report($from_date,$to_date)
	{
		
		$query=$this->db->query("select stamp.req_id,cust.customer_name,cust.mobile,cust.land_ln,cust.state,cust.city,service.created_on,stamp.agn_charge,stamp.conveyance,stamp.cmr_paid,det.site,stat.state
		from stamping_details as stamp 
								left join service_request as service on service.id=stamp.req_id
								left join service_request_details as det on det.request_id=service.id
								left join customers as cust on cust.id=service.cust_name
								left join state as stat on stat.id=cust.state where
								det.site='Stamping' AND service.created_on BETWEEN '$from_date' AND '$to_date 23:59:59.993'
		");
		//echo "<pre>";print_r($query->result());exit;
	
		return $query->result();
		
	}	
	
	function request_count()
	{
		$this->db->select('req_id',false);
		$this->db->from('stamping_details');
		//$this->db->where('employee_id',$emp_id);
		$query=$this->db->get();
		return $query->num_rows();
	}
	
}