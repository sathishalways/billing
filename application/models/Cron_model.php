<?php 
class Cron_model extends CI_Model{
function __construct(){
parent::__construct();
$this->load->database();
}

public function get_report($y,$m)
{
	$query = $this->db->query("select customers.customer_name, customers.company_name,customer_service_location.address, customer_service_location.address1, customer_service_location.city,customer_service_location.mobile, customer_service_location.email_id, customer_type.type as customertype,loc.service_loc from customers as customers 
    left join customer_type as customer_type on customer_type.id=customers.customer_type
	left join customer_service_location as customer_service_location on customer_service_location.customer_id=customers.id
	left join service_location as loc on loc.id=customers.service_zone WHERE YEAR(customers.created_on) = $y AND MONTH(customers.created_on) = $m");
	
	return $query->result_array();
}

public function get_servicereport($y1,$m1)
{
$query= $this->db->query("select service_request.request_id, service_request.request_date,products.model,customers.company_name,customer_service_location.branch_name,customer_service_location.address, customer_service_location.mobile, quote_review.labourcharge,quote_review.concharge,employee.emp_name,status.status, zone_pincodes.area_name, service_location.service_loc, service_location.zone_coverage  from service_request as service_request 
	
	left join service_request_details as service_request_details on service_request_details.request_id = service_request.id
	
	left join products as products on products.id= service_request_details.model_id
	
	left join prod_category as prod_category on prod_category.id = service_request_details.cat_id
	
	left join customers as customers on customers.id = service_request.cust_name
	
	left join customer_service_location as customer_service_location on customer_service_location.customer_id = customers.id 
	
	left join zone_pincodes as zone_pincodes on zone_pincodes.id = customer_service_location.area 
	
	left join service_location as service_location on service_location.id = service_request_details.zone
	
	left join employee as employee on employee.id = service_request_details.assign_to
	
	left join status as status on status.id = service_request.status
	
	left join quote_review as quote_review on quote_review.req_id = service_request.id WHERE YEAR(service_request.request_date) = $y1 AND MONTH(service_request.request_date) = $m1"); 
	
	//echo "<pre>";print_r($query->result());exit;
	return $query->result_array();
}

public function get_revenuereport($y,$m)
{
	$query= $this->db->query("select service_request.request_id,service_request.request_date,products.model,customers.company_name, customer_service_location.branch_name,customer_service_location.address, customer_service_location.mobile, quote_review.labourcharge, quote_review.concharge,employee.emp_name,status.status, zone_pincodes.area_name, service_location.service_loc, service_location.zone_coverage,quote_review.spare_tax, quote_review.spare_tot  from service_request as service_request 
	
	left join service_request_details as service_request_details on service_request_details.request_id = service_request.id
	
	left join products as products on products.id= service_request_details.model_id
	
	left join prod_category as prod_category on prod_category.id = service_request_details.cat_id
	
	left join customers as customers on customers.id = service_request.cust_name
	
	left join customer_service_location as customer_service_location on customer_service_location.customer_id = customers.id 
	
	left join zone_pincodes as zone_pincodes on zone_pincodes.id = customer_service_location.area 
	
	left join service_location as service_location on service_location.id = service_request_details.zone
	
	left join employee as employee on employee.id = service_request_details.assign_to
	
	left join status as status on status.id = service_request.status
	
	left join quote_review as quote_review on quote_review.req_id = service_request.id WHERE YEAR(service_request.request_date) = $y AND MONTH(service_request.request_date) = $m"); 
	
	//echo "<pre>";print_r($query->result());exit;
	return $query->result_array();
}

public function get_serialreport($y,$m)
{
	$query = $this->db->query("select group_concat(distinct(det.request_id),'//',service_request.request_date) as ser,order_details.purchase_date,products.model,customers.customer_name,det.serial_no from order_details 
	left join service_request_details as det on det.serial_no = order_details.serial_no 
	left join service_request on service_request.id = det.request_id
	left join products on products.id = det.model_id 
	left join brands on brands.id = det.brand_id 
	left join customers on customers.id = service_request.cust_name 
	left join service_location on serv_loc_code = det.zone 
	left join service_category on service_category.id = det.service_cat
	left join problem_category on problem_category.id = det.problem WHERE YEAR(order_details.purchase_date) = $y AND MONTH(order_details.purchase_date) = $m group by order_details.serial_no"); 
	
	//echo "<pre>";print_r($query->result());exit;
	
	return $query->result_array();
}

public function get_sparereport($y,$m)
{
		$query=$this->db->query("select spares.spare_name,group_concat(distinct(emp.emp_name),'//',customers.customer_name,'//',products.model,'//',
		service_request.id) as serv_request,qurew.desc_failure
		from spares 
		left join quote_review_spare_details as qurew on qurew.spare_id = spares.id
		
		left join service_request_details as det on det.request_id = qurew.request_id
		
		left join service_request on service_request.id=det.request_id
		
		left join employee as emp on emp.id=det.assign_to 
		left join customers on customers.id = service_request.cust_name
		left join products on products.id = det.model_id WHERE YEAR(service_request.request_date) = $y AND MONTH(service_request.request_date) = $m group by spares.id");
		
	 // echo "<pre>";print_r($query->result());exit;
       return $query->result_array();
}



}
?>