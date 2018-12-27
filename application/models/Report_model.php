<?php 
class Report_model extends CI_Model{
function __construct(){
parent::__construct();
$this->load->database();
}
//service report
public function modellist()
{
		$this->db->select("id, model",FALSE);
		$this->db->from('products'); 
		$this->db->order_by('model','asc'); 
		$query = $this->db->get();
        return $query->result();
}
public function procatlist()
{
		$this->db->select("id, product_category",FALSE);
		$this->db->from('prod_category'); 
		$this->db->order_by('product_category','asc'); 
		$query = $this->db->get();
        return $query->result();
}
public function custlist()
{
		$this->db->select("*",FALSE);
		$this->db->from('customers'); 
		$this->db->order_by('customer_name','asc'); 
		$query = $this->db->get();
        return $query->result();
}

public function zonelist()
{
		$this->db->select("*",FALSE);
		$this->db->from('service_location'); 
		$this->db->order_by('service_loc','asc'); 
		$query = $this->db->get();
        return $query->result();
}

public function problemlist()
{

	    $this->db->select("*",FALSE);
		$this->db->from('problem_category');
        //$this->db->where('model', $datat);		
		$this->db->order_by('id','asc'); 
		$query = $this->db->get();
		//print_r($query);
        return $query->result();
}

	
function get_report($wh)
{
		
	$query=$this->db->query("select service_request.created_on,service_request.request_id,rew.notes,req.site,pro.model,pro.id,cate.prob_category as problem,customers.customer_name,
	rew.total_amt,service.service_category,emp.emp_name,service_request.request_date ,loc.service_loc,service_request.mobile,stat.status,brand.brand_name,rew.labourcharge,rew.spare_tax,rew.spare_tot,rew.cmr_paid,rew.pending_amt,rew.disc_amt,rew.emp_pts,customers.address1 from service_request 
	left join customers on customers.id=service_request.cust_name
	left join service_request_details as req on req.request_id=service_request.id 
	left join products as pro on pro.id=req.model_id 
	left join problem_category as cate on cate.id=req.problem 
	left join quote_review as rew on rew.req_id=req.request_id 
	left join service_category as service on service.id=req.service_cat 	
	left join employee as emp on emp.id=req.assign_to
	left join service_location as loc on loc.id=req.zone
	left join status as stat on stat.id=service_request.status
	left join brands as brand on brand.id=req.brand_id $wh");

    return $query->result();
}


//spare report


public function engnamelist(){
	$this->db->select('*');
    $this->db->from('employee');
    $this->db->order_by('emp_name', 'asc'); 	
    $query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function sparenamelist()
	{
		$this->db->select('*');
    $this->db->from('spares');
	$this->db->where('spare_name <> ', '');
    $this->db->order_by('spare_name', 'asc'); 	
    $query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
	}
	
	public function get_sparereport($wh)
	{
		$query=$this->db->query("select spares.id,spares.spare_name,group_concat(distinct(emp.emp_name),'//',customers.customer_name,'//',products.model,'//',service_request.id,service_request.active_req) as serv_request,qurew.desc_failure,det.serial_no
		from spares 
		left join quote_review_spare_details as qurew on qurew.spare_id = spares.id
		
		left join service_request_details as det on det.request_id = qurew.request_id
		
		left join service_request on service_request.id=det.request_id
		
		left join employee as emp on emp.id=det.assign_to 
		left join customers on customers.id = service_request.cust_name
		
		left join products on products.id = det.model_id $wh group by spares.id");
		
	//  echo "<pre>";print_r($query->result());exit;
       return $query->result();
	}


public function getsparecharge_list($whxg)
	{
		$query = $this->db->query("select req.request_id,cust.customer_name,spa.spare_name,det.spare_qty,det.amt,req.request_date,service.machine_status,spa.purchase_price from service_request as req 
		left join quote_review_spare_details as det on det.request_id = req.id
		left join spares as spa on spa.id = det.spare_id
		left join customers as cust on cust.id = req.cust_name
		left join service_request_details as service on service.request_id = req.id $whxg");
		
		return $query->result();
	}


//purchase
	
	public function get_purchase($wh)
	{ 
	
		//$whereee = "engg.spare_id=$sname";
		$query=$this->db->query("select spares.spare_name,engg.purchase_qty,engg.purchase_date,engg.invoice_no,engg.return_qty,engg.purchase_price,engg.reason,engg.spare_id from spare_purchase_details as engg 
		inner join spares on spares.id = engg.spare_id $wh"); 
		
	   //echo "<pre>";print_r($query->result());exit;
       return $query->result();
	}


	public function get_engineerreport($whxg)
	{ //echo "<pre>";print_r($whxg);exit;
		$query = $this->db->query("select emp.emp_name,engg.engineer_date,engg.qty_out,spa.spare_name,req.active_req,req.request_id,cust.customer_name,engg.qty_in,engg.reason from spare_to_engineers as engg 
			left join employee as emp on emp.id=engg.emp_id
			left join spares as spa on spa.id=engg.spare_id
			left join service_request as req on req.id=engg.req_id
			left join customers as cust on cust.id=engg.cust_name $whxg"); 
			/*$query=$this->db->query("select emp.emp_name,engg.engineer_date,engg.qty_out,spa.spare_name,req.id,cust.customer_name,SUM(engg.qty_in)as qty_in,engg.reason from spare_to_engineers as engg 
			left join employee as emp on emp.id=engg.emp_id
			left join spares as spa on spa.id=engg.spare_id
			left join service_request as req on req.id=engg.req_id
			left join customers as cust on cust.id=engg.cust_name
			$whxg group by engg.emp_id"); */
			
		   //echo "<pre>";print_r($query->result());exit;
		   return $query->result();
		
	}
	
	
	
	public function get_engineerreport1($whxg)
	{ //echo "<pre>";print_r($whxg);exit;
		$query= $this->db->query("select group_concat(history_cust_solution.cust_solution) as cs, service_request.request_id, service_request.cust_name, service_request.request_date, products.model, prod_category.product_category, customers.company_name, customers.customer_name, customer_service_location.branch_name, customer_service_location.mobile, customer_service_location.address, customer_service_location.address1, customer_service_location.city, customer_service_location.state, service_request_details.machine_status, service_request_details.problem, quote_review.labourcharge, quote_review.concharge, quote_review.spare_tax, quote_review.spare_tot, quote_review.emp_pts, status.status, zone_pincodes.area_name, service_location.service_loc, service_location.zone_coverage, employee.emp_name,service_request_details.serial_no,problem_category.prob_category from service_request as service_request 
	
		left join service_request_details as service_request_details on service_request_details.request_id = service_request.id
		
		left join products as products on products.id= service_request_details.model_id
		
		left join prod_category as prod_category on prod_category.id = service_request_details.cat_id
		
		left join customers as customers on customers.id = service_request.cust_name
		
		left join customer_service_location as customer_service_location on customer_service_location.customer_id = customers.id 
		
		left join zone_pincodes as zone_pincodes on zone_pincodes.id = customer_service_location.area 
		
		left join service_location as service_location on service_location.id = service_request_details.zone
		
		left join employee as employee on employee.id = service_request_details.assign_to
		
		left join status as status on status.id = service_request.status
		
		left join problem_category as problem_category on problem_category.id = service_request_details.problem 
	
		left join history_cust_solution as history_cust_solution on history_cust_solution.req_id = service_request.id
		
		
		left join quote_review as quote_review on quote_review.req_id = service_request.id $whxg group by service_request_details.request_id"); 
		
		//echo "<pre>";print_r($query->result());exit;
		return $query->result();
	}

	
//stamping report
	
public function emp_list()
{
	$this->db->select("id, emp_name",FALSE);
	$this->db->from('employee'); 
	$this->db->order_by('emp_name','asc'); 
	$query = $this->db->get();
		
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
	
	return $query->result();
		
}	

//stamping Monthly Report_model
function getstampingmonth_report($from_date,$to_date)
{
$query=$this->db->query("select serdet.request_id,stamp.stamping_charge, stamp.agn_charge, stamp.penalty, stamp.conveyance,stamp.pending_amt,
				service.created_on, serdet.site , cust.customer_name , pro.model , stamp.cmr_paid , stat.status from stamping_details as stamp
				left join service_request_details as serdet on serdet.request_id=stamp.req_id
				left join service_request as service on service.id=serdet.request_id
				left join  customers as cust on cust.id=service.cust_name
				left join  products as pro on pro.id=serdet.model_id
				left join  status as stat on stat.id=service.status
				where serdet.site='Stamping' AND service.created_on BETWEEN '$from_date' AND '$to_date 23:59:59.993'");
	
				return $query->result();
		
}

//customer Report
public function service_zone_list()
{
		$this->db->select("id,serv_loc_code,service_loc,concharge",FALSE);
		$this->db->from('service_location'); 
		$this->db->order_by('service_loc', 'asc'); 	
		$query = $this->db->get();
        return $query->result();
}

public function cust_type_list()
{
		$this->db->select("id,type",FALSE);
		$this->db->from('customer_type'); 
		$this->db->order_by('type', 'asc'); 	
		$query = $this->db->get();
        return $query->result();
}

public function product_list()
{
		$this->db->select("id,model",FALSE);
		$this->db->from('products'); 
		$this->db->order_by('model', 'asc'); 	
		$query = $this->db->get();
        return $query->result();
}

public function status_list()
{
		$this->db->select("id,status",FALSE);
		$this->db->from('status'); 
		$this->db->order_by('status', 'asc'); 	
		$query = $this->db->get();
        return $query->result();
}

public function engg_status_list()
{
		$query = $this->db->query("Select * from status where id IN (1,9,3,4,2)");
		return $query->result();
}


public function area_list()
{
		$this->db->select("*",FALSE);
		$this->db->from('zone_pincodes'); 
		$this->db->order_by('area_name', 'asc'); 	
		$query = $this->db->get();
        return $query->result();
}

public function brand_list()
{
		$this->db->select("*",FALSE);
		$this->db->from('brands'); 
		$this->db->order_by('brand_name', 'asc'); 	
		$query = $this->db->get();
        return $query->result();
}




public function getcustomer_report($whxg)
{
	/*$query = $this->db->query("select customers.id, customers.customer_name, customers.company_name, customers.cal_ref, customer_service_location.branch_name, customer_service_location.address, customer_service_location.address1, customer_service_location.city, customer_service_location.state, customer_service_location.pincode, customer_service_location.mobile, customer_service_location.email_id, customer_type.type as customertype, loc.service_loc,customers.created_on from customers as customers 
							left join customer_type as customer_type on customer_type.id=customers.customer_type
							left join customer_service_location as customer_service_location on customer_service_location.customer_id=customers.id
							left join service_location as loc on loc.id=customers.service_zone $whxg");*/
							
	//echo "<pre>";print_r($query->result());exit;
	$query = $this->db->query("select customers.id, customers.customer_name, customers.company_name, customers.cal_ref, customer_service_location.branch_name, customers.address, customers.address1, customers.city, customer_service_location.state, customer_service_location.pincode, customers.mobile, customers.email_id, customer_type.type as customertype, loc.service_loc,customers.created_on from customers as customers 
							left join customer_type as customer_type on customer_type.id=customers.customer_type
							left join customer_service_location as customer_service_location on customer_service_location.customer_id=customers.id
							left join service_location as loc on loc.id=customers.service_zone $whxg");
							//echo "<pre>";print_r($query->result());exit;
	 return $query->result();
}

//aging report
public function getaging_report($from,$r1,$r2,$model,$customer,$category,$emp,$zone)
{
	$strquery="";
	$strquery="select group_concat(custsolution.cust_solution)as cs, DATEDIFF(NOW(),req.request_date) AS DaysDiff ,req.request_id,req.request_date,pro.model,cust.customer_name,cust.address,
	service.machine_status,service.problem,stat.status,req.active_req,service.serial_no from service_request as req 
	left join service_request_details as service on service.request_id = req.request_id
	left join products as pro on pro.id= service.model_id
	left join employee as emp on emp.id = service.assign_to
	left join service_location as zone on zone.id = service.zone
	left join prod_category as cate on cate.id = service.cat_id
	left join customers as cust on cust.id = req.cust_name
	left join problem_category as problem on problem.id = service.problem
	left join history_cust_solution as custsolution on custsolution.req_id = service.request_id 
	left join  status as stat on stat.id = req.status ";
	if ($r2<91)
	{
	$strquery=$strquery." where DATEDIFF(NOW(),req.request_date) between $r1 and $r2";
	//$whxg= 'where service_request.active_req = '.'0' . ' AND ' .substr(implode('',$b),0,-5);
	}
	else if($r2>90)
	{
	$strquery=$strquery." where DATEDIFF(NOW(),req.request_date) > 90 ";
	}
	 
	$strquery=$strquery." and req.request_date >= '$from' and req.status!=4 and req.active_req=0 ";
	
	//echo $strquery;
	/* if ($sersite!="")
	{
	$strquery=$strquery." and service.site = '$sersite'";
	} */
	
	if($model!="")
	{
		$strquery=$strquery." and pro.id = '$model'";
	}
	
	if($customer!="")
	{
		$strquery=$strquery." and cust.id = '$customer'";
	}
	
	if($category!="")
	{
		$strquery=$strquery." and problem.id = '$category'";
	}
	
	if($emp!="")
	{
		$strquery=$strquery." and emp.id = '$emp'";
	}
	
	if($zone!="")
	{
		$strquery=$strquery." and zone.id = '$zone'";
	}
	
	$query=$this->db->query($strquery);
	
	
	
	/*$query=$this->db->query("select DATEDIFF(NOW(),req.request_date) AS DaysDiff ,req.request_id,req.cust_name,req.request_date,pro.model,cust.customer_name,
	cust.address,
	service.machine_status,service.problem,stat.status,service.site from service_request as req 
	left join service_request_details as service on service.request_id = req.request_id
	left join products as pro on pro.id= service.model_id
	left join employee as emp on emp.id = service.assign_to
	left join service_location as zone on zone.id = service.zone
	left join prod_category as cate on cate.id = service.cat_id
	left join customers as cust on cust.id = req.cust_name	
	left join problem_category as problem on problem.id = service.problem
	 $whxg ");*/
	
	
	//echo "<pre>";print_r($query->result());exit;
	return $query->result();
}

public function getprob_category()
{
		$this->db->select("id, prob_category",FALSE);
		$this->db->from('problem_category'); 
		$this->db->order_by('prob_category','asc'); 
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
}

//revenue report

public function getrevenue_report($whxg)
{
	
	$query= $this->db->query("select group_concat(DISTINCT history_cust_solution.cust_solution) as  cs, service_request.request_id, service_request.cust_name, service_request.request_date, products.model, prod_category.product_category, customers.company_name, customers.customer_name, customer_service_location.branch_name, customer_service_location.mobile, customer_service_location.address, customer_service_location.address1, customer_service_location.city, customer_service_location.state, service_request_details.machine_status, service_request_details.problem, quote_review.labourcharge, quote_review.concharge, quote_review.spare_tax, quote_review.spare_tot, status.status, zone_pincodes.area_name, service_location.service_loc, service_location.zone_coverage, employee.emp_name, brands.brand_name,service_request_details.serial_no,problem_category.prob_category	from service_request as service_request 
	
	left join service_request_details as service_request_details on service_request_details.request_id = service_request.id
	
	left join products as products on products.id= service_request_details.model_id
	
	left join prod_category as prod_category on prod_category.id = service_request_details.cat_id
	
	left join customers as customers on customers.id = service_request.cust_name
	
	left join customer_service_location as customer_service_location on customer_service_location.customer_id = customers.id 
	
	left join zone_pincodes as zone_pincodes on zone_pincodes.id = customer_service_location.area 
	
	left join service_location as service_location on service_location.id = customer_service_location.service_zone_loc
	
	left join employee as employee on employee.id = service_request_details.accepted_engg_id
	
	left join status as status on status.id = service_request.status
	
	left join brands as brands on brands.id = service_request_details.brand_id
	
	left join problem_category as problem_category on problem_category.id = service_request_details.problem 
	
	left join history_cust_solution as history_cust_solution on history_cust_solution.req_id = service_request_details.request_id 
	
	left join quote_review as quote_review on quote_review.req_id = service_request.id $whxg group by request_id"); 
	
//echo $this->db->last_query();
	//echo "<pre>";print_r($query->result());exit;
	return $query->result();
}
//preventive report
public function getpreventive_report($whxg)
{
	
	$query =$this->db->query("select group_concat(history_cust_solution.cust_solution) as  cs, service_request.request_id, service_request.cust_name, service_request.request_date, products.model, prod_category.product_category, customers.company_name, customers.customer_name, customer_service_location.branch_name, customer_service_location.mobile, customer_service_location.address, customer_service_location.address1, customer_service_location.city, customer_service_location.state, service_request_details.machine_status, service_request_details.problem, quote_review.labourcharge, quote_review.concharge, quote_review.spare_tax, quote_review.spare_tot, status.status, zone_pincodes.area_name, service_location.service_loc, service_location.zone_coverage, employee.emp_name, brands.brand_name,service_request_details.serial_no,problem_category.prob_category,service_request_details.service_type,service_request_details.accepted_engg_id	from service_request as service_request 
	
	left join service_request_details as service_request_details on service_request_details.request_id = service_request.id
	
	left join products as products on products.id= service_request_details.model_id
	
	left join prod_category as prod_category on prod_category.id = service_request_details.cat_id
	
	left join customers as customers on customers.id = service_request.cust_name
	
	left join customer_service_location as customer_service_location on customer_service_location.customer_id = customers.id 
	
	left join zone_pincodes as zone_pincodes on zone_pincodes.id = customer_service_location.area 
	
	left join service_location as service_location on service_location.id = customer_service_location.service_zone_loc
	
	left join employee as employee on employee.id = service_request_details.accepted_engg_id
	
	left join status as status on status.id = service_request.status
	
	left join brands as brands on brands.id = products.id
	
	left join problem_category as problem_category on problem_category.id = service_request_details.problem 
	
	left join history_cust_solution as history_cust_solution on history_cust_solution.req_id = service_request_details.id
	
	left join quote_review as quote_review on quote_review.req_id = service_request.id $whxg AND service_request.request_id LIKE '%P-%'  AND (service_request_details.service_type='Preventive' || service_request_details.service_type='Warranty') group by request_id"); 
	//$this->db->like('service_request.request_id', 'P-');
//$query = $this->db->get();
			//echo "<pre>";print_r($query->result());exit;
	
//echo $this->db->last_query();
	//echo "<pre>";print_r($query->result());exit;
	return $query->result();
}

public function getrevenue1_report($whxg)
{
	$query= $this->db->query("select  group_concat(history_cust_solution.cust_solution ) as  cs, service_request.request_id, service_request.cust_name, service_request.request_date, products.model, prod_category.product_category, customers.company_name, customers.customer_name, customer_service_location.branch_name, customer_service_location.mobile, customer_service_location.address, customer_service_location.address1, customer_service_location.city, customer_service_location.state, service_request_details.machine_status, service_request_details.problem, quote_review.labourcharge, quote_review.concharge, quote_review.spare_tax, quote_review.spare_tot, status.status, zone_pincodes.area_name, service_location.service_loc, service_location.zone_coverage, employee.emp_name,brands.brand_name,service_request_details.serial_no,problem_category.prob_category,quote_review_spare_details.spare_id from service_request as service_request 
	
	left join service_request_details as service_request_details on service_request_details.request_id = service_request.id
	
	left join products as products on products.id= service_request_details.model_id
	
	left join prod_category as prod_category on prod_category.id = service_request_details.cat_id
	
	left join customers as customers on customers.id = service_request.cust_name
	
	left join customer_service_location as customer_service_location on customer_service_location.customer_id = customers.id 
	
	left join zone_pincodes as zone_pincodes on zone_pincodes.id = customer_service_location.area 
	
	left join service_location as service_location on service_location.id = service_request_details.zone
	
	left join employee as employee on employee.id = service_request_details.assign_to
	
	left join status as status on status.id = service_request.status
	left join brands as brands on brands.id = products.id
	
	left join problem_category as problem_category on problem_category.id = service_request_details.problem 
	
	left join history_cust_solution as history_cust_solution on history_cust_solution.req_id = service_request_details.id
	
	left join quote_review_spare_details as quote_review_spare_details on quote_review_spare_details.request_id = service_request.id 
	
	left join quote_review as quote_review on quote_review.req_id = service_request.id $whxg  group by request_id  "); 
	
	//echo "<pre>";print_r($query->result());exit;
	return $query->result();
}


public function get_sermachine_report($from,$to,$model,$prod_category,$machine_status,$cust_type,$cust_name,$service_zone)
{
	//echo $cust_name;exit;
		/* echo $from;
		echo "<br>".$to;
		echo "<br>".$model;
		echo "<br>".$prod_category;
		echo "<br>".$machine_status;
		echo "<br>".$cust_type;
		 */
		$strquery="";
		if($from =='' && $to ==''){
			$strquery_wh="order_details.model_id = $model";
		}else{
			$strquery_wh="order_details.purchase_date between '$from' and '$to'";
		}
		$strquery="select orders.id, order_details.serial_no, products.model, customers.company_name, customers.customer_name, order_details.warranty_date, order_details.amc_end_date, order_details.purchase_date, order_details.paid, orders.order_id, order_details.notes, order_details.rent_type, order_details.amc_start_date, customer_service_location.branch_name, customer_service_location.address, customer_service_location.address1, customer_service_location.mobile,state.state, prod_category.product_category, customer_type.type as cust_type,order_details.cmc_start_date,order_details.cmc_end_date, service_location.service_loc from orders as orders 
		left join order_details as order_details on order_details.order_id = orders.id
		left join customers as customers on customers.id =  orders.customer_id
		left join customer_service_location as customer_service_location on customer_service_location.customer_id = orders.customer_service_loc_id
		left join customer_type as customer_type on customer_type.id =  customers.customer_type
		left join products as products on products.id =  order_details.model_id
		left join prod_category as prod_category on prod_category.id = order_details.cat_id
		inner join state as state on state.id = customers.state
		inner join service_location as service_location on service_location.id = order_details.service_loc_id
		
		where ";
		$strquery=$strquery.$strquery_wh;
		if($machine_status=='all')
		{
			$strquery=$strquery;	
		}
		
		if($machine_status=='paid')
		{
			$strquery=$strquery." and order_details.paid ='paid'";
		}
		
		if($machine_status=='Warranty')
		{
			
			$strquery=$strquery." and order_details.warranty_date!='' and order_details.amc_start_date='' and unix_timestamp(order_details.warranty_date) > unix_timestamp(CURDATE())";
		}
		
		/*if($machine_status=='Preventive')
		{
			$strquery=$strquery." and  order_details.prev_main!='' and order_details.amc_start_date='' and unix_timestamp(order_details.prev_main) > unix_timestamp(CURDATE())";
		}*/
		
		if($machine_status=='amc')
		{
			$strquery=$strquery." and order_details.amc_start_date!='' and unix_timestamp(order_details.amc_end_date) > unix_timestamp(CURDATE())";
		}
		if($machine_status=='cmc')
		{
			$strquery=$strquery." and order_details.cmc_start_date!='' and unix_timestamp(order_details.cmc_end_date) > unix_timestamp(CURDATE())";
		}
		if($machine_status=='syndicate')
		{
			$strquery=$strquery." and order_details.rent_type ='syndicate'";
		}
		if($machine_status=='distributor')
		{
			$strquery=$strquery." and order_details.rent_type ='distributor'";
		}
		if ($cust_type!="")
		{
			$strquery=$strquery." and customers.customer_type = $cust_type";
		}
		if($cust_name!="")
		{
			$strquery=$strquery." and customers.customer_name = '$cust_name'";
		}
		
		if ($model!="" &&$from!=''&&$to!='')
		{
			$strquery=$strquery." and order_details.model_id = $model";
		}
		
		if ($prod_category!="")
		{
			$strquery=$strquery." and order_details.cat_id = $prod_category";
		}
		
		if ($service_zone!="")
		{
			$strquery=$strquery." and customers.service_zone = $service_zone";
		}
		
		$query=$this->db->query($strquery);
		//echo $this->db->last_query();exit;
		//echo "<pre>";print_r($query->result());exit; 
		return $query->result();
}

//serial list

public function get_serial()
{
	$this->db->select('order_details.serial_no,order_details.order_id');
	$this->db->from('orders');
	$this->db->join('order_details','order_details.order_id=orders.id');
	$query=$this->db->get();
	return $query->result();
	
}

public function getserial_report($whxg)
{
	 $query = $this->db->query("select group_concat(distinct(det.request_id),'//',service_request.request_date) as ser,service_request.request_date,products.model,brands.brand_name,service_location.service_loc,customers.customer_name,service_category.service_category as categoryname,det.machine_status,det.service_type,det.problem ,det.serial_no,order_details.purchase_date,problem_category.prob_category,group_concat(history_cust_solution.cust_solution) as cs from order_details 
	left join service_request_details as det on det.serial_no = order_details.serial_no 
	left join service_request on service_request.id = det.request_id
	left join products on products.id = det.model_id 
	left join brands on brands.id = det.brand_id 
	left join customers on customers.id = service_request.cust_name 
	left join service_location on serv_loc_code = det.zone 
	left join service_category on service_category.id = det.service_cat
	left join history_cust_solution as history_cust_solution on history_cust_solution.req_id = det.id
	left join problem_category on problem_category.id = det.problem $whxg group by order_details.serial_no"); 
	
	//echo "<pre>";print_r($query->result());exit;
	
	return $query->result();
}

public function getpopup_list($id)
{
	$query = $this->db->query("select brands.brand_name,service_location.service_loc,service_category.service_category as categoryname,det.machine_status,det.service_type,det.problem,det.serial_no from service_request 
	left join service_request_details as det on det.request_id = service_request.id
	left join products on products.id = det.model_id 
	left join brands on brands.id = det.brand_id 
	left join customers on customers.id = service_request.cust_name 
	left join service_location on serv_loc_code = det.zone 
	left join service_category on service_category.id = det.service_cat
	left join problem_category on problem_category.id = det.problem where det.request_id='".$id."' group by det.request_id");
	
	//echo "<pre>";print_r($query->result());exit;
	
	return $query->result();
}
	public function sparelist(){
		$this->db->select("spare_details.spare_id, prod_category.product_category, prod_subcategory.subcat_name, brands.brand_name, products.model",FALSE);
		$this->db->from('spare_details');
		$this->db->join('prod_category', 'prod_category.id = spare_details.cat_id');
		$this->db->join('prod_subcategory', 'prod_subcategory.id = spare_details.subcat_id'); 
		$this->db->join('brands', 'brands.id = spare_details.brand_id'); 
		$this->db->join('products', 'products.id = spare_details.model_id'); 
		$query = $this->db->get();
		return $query->result();
    }
	public function sparelist1($from,$to){
		$query=$this->db->query("select id, spare_name, spare_qty, used_spare, eng_spare, purchase_price, purchase_qty, purchase_date, sales_price, effective_date, dashboard_show, min_qty, part_no from spares where created_on BETWEEN '$from' AND '$to 23:59:59.993'");
	
		return $query->result();
		/* $this->db->select("id, spare_name, spare_qty, used_spare, eng_spare, purchase_price, purchase_qty, purchase_date, sales_price, effective_date, dashboard_show, min_qty, part_no",FALSE);
		$this->db->from('spares');
		
		$this->db->order_by('id', 'DESC'); 	
     	$query = $this->db->get();
        return $query->result(); */
    }
	public function engspareqty(){
		$this->db->select("spares.id,petty_spare.spare_id",FALSE);
		$this->db->select_sum('petty_spare.qty_plus');
		$this->db->from('spares');
		$this->db->join('petty_spare', 'petty_spare.spare_id = spares.id','left');
		
		$this->db->group_by('petty_spare.spare_id');
     	$query = $this->db->get();
        return $query->result();
    }
	

	
}