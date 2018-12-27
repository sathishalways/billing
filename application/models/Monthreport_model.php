<?php 
class Monthreport_model extends CI_Model{
function __construct(){
parent::__construct();
$this->load->database();
}
function getstampingmonth_report($from_date,$to_date)
{
	$query=$this->db->query("select serdet.request_id,stamp.stamping_charge, stamp.agn_charge, stamp.penalty, stamp.conveyance,stamp.pending_amt,
							service.created_on, serdet.site , cust.customer_name , pro.model , stamp.cmr_paid , stat.status from stamping_details as stamp
							left join service_request_details as serdet on serdet.request_id=stamp.req_id
							left join service_request as service on service.id=serdet.request_id
							left join  customers as cust on cust.id=service.cust_name
							left join  products as pro on pro.id=serdet.model_id
							left join  status as stat on stat.id=service.status
							where serdet.site='Stamping' AND service.created_on BETWEEN '$from_date' AND '$to_date 23:59:59.993'
							");
	//echo "<pre>";print_r($query->result());exit;
    return $query->result();
		
}
}
?>