<?php
class Pages extends CI_Controller{
function __construct(){
parent::__construct();
    $this->load->helper('url');
	//$this->load->library('session');
    $this->load->model('Prodservicestat_model');
	$this->load->model('Productcategory_model');
	$this->load->model('Servicecategory_model');
	$this->load->model('Servicelocation_model');
	$this->load->model('Problemcategory_model');
	$this->load->model('Accessories_model');
	$this->load->model('Subcategory_model');
	$this->load->model('Product_model');
	$this->load->model('Customer_model');
	$this->load->model('Company_model');
	$this->load->model('Employee_model');
	$this->load->model('Brand_model');
	$this->load->model('Order_model');
	$this->load->model('Spare_model');
	$this->load->model('Service_model');
	$this->load->model('Tax_model');
	$this->load->model('quote_review_model');
	$this->load->model('quote_in_progress_model');
	$this->load->model('quote_approved_model');
	$this->load->model('workin_prog_model');
	$this->load->model('quality_check_model');
	$this->load->model('ready_delivery_model');
	$this->load->model('delivery_model');
	$this->load->model('Dash_model');
	$this->load->model('User_model');
	$this->load->model('Report_model');
	$this->load->model('Sparereport_model');
	$this->load->model('stampingreport_model');
	$this->load->model('monthreport_model');
	$this->load->model('qc_master_model');
	$this->load->model('Labcategory_model');
	
}
    
    public function dash(){
		ini_set('max_execution_time', 900);
		$data1['user_dat'] = $this->session->userdata('login_data');
		$data1['user_acc'] = $data1['user_dat'][0]->user_access;
		$data1['user_type'] = $data1['user_dat'][0]->user_type;
		/* if(isset($user_acc) && $user_acc!=""){
			$user_access = $user_acc;
		}else{
			$user_access = "";
		} */
		
		$data1['list']=$this->Dash_model->areawise_count();
		$data1['spare_stock_cnt']=$this->Dash_model->spare_stock_cnt();
		//$data1['offsite_cnt']=$this->Dash_model->offsite_cnt();
		$data1['amc_cnt']=$this->Dash_model->amc_cnt();
		
		//$data1['onsite_cnt']=$this->Dash_model->onsite_cnt();
		//$data1['stamping_cnt']=$this->Dash_model->stamping_cnt();
		$data1['readyfordelivery_cnt']=$this->Dash_model->readyfordelivery_cnt();
		$data1['req_alert_cnt']=$this->Dash_model->req_alert_cnt();
		$data1['request_list']=$this->Dash_model->request_list();
		$data1['engineer_status']=$this->Dash_model->engineer_status();
		$data1['engineer_work_inpro']=$this->Dash_model->engineer_work_inpro();
		$data1['engineer_quote_awaiting_approval']=$this->Dash_model->engineer_quote_awaiting_approval();
		$data1['engineer_on_hold']=$this->Dash_model->engineer_on_hold();
		$data1['engineer_ready_delivery']=$this->Dash_model->engineer_ready_delivery();
		$data1['spare_min_alerts']=$this->Dash_model->spare_min_alerts();
		
		$data1['sparelist1'] = $this->Spare_model->sparelist1();
		/* $data1['get_min_spares'] = $this->Spare_model->get_min_spares();
		foreach($data1['get_min_spares'] as $get_min_spares){
				$min_spares[] = $get_min_spares->spare_id;
		}
	
		foreach($data1['sparelist1'] as $sparelist){
			if($sparelist->spare_qty <= $sparelist->min_qty){
				//echo "<br>".$sparelist->id.'-'.$sparelist->spare_name;
				if(!empty($min_spares) && in_array($sparelist->id,$min_spares)){
					$this->Spare_model->del_min_spares($sparelist->id);
				}
				
				$data_min['spare_id'] = $sparelist->id;
				$data_min['spare_name'] = $sparelist->spare_name;
				$data_min['spare_qty'] = $sparelist->spare_qty;
				$data_min['min_qty'] = $sparelist->min_qty;
				
				date_default_timezone_set('Asia/Calcutta');
				$data_min['alert_on'] = date("Y-m-d H:i:s");
				$this->Spare_model->add_min_spares($data_min);
			
			}else{
				$this->Spare_model->del_min_spares($sparelist->id);
			}
		} */
		//$data1['user_dat'] = $this->session->userdata('login_data');
		
		//echo "user_type: ". $data1['user_dat'][0]->user_type; 
		//exit;
		
		$this->load->view('templates/header',$data1);
		$this->load->view('dash',$data1);
    }
	
	public function engg_individual_workinpro_list(){ 
		$id=$this->uri->segment(3);
		$data1['engg_workinpro_list']=$this->Dash_model->engg_workinpro_list($id);
		$data1['engg_workinpro_list1']=$this->Dash_model->engg_workinpro_list1($id);
		//$data1['offsite_listforEmp']=$this->Dash_model->engg_listforEmp();
		$data1['status_list']=$this->Service_model->status_list();
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('engg_individual_workinpro_list',$data1);
    }
	
	public function engg_individual_onhold_list(){ 
		$id=$this->uri->segment(3);
		$data1['engg_onhold_list']=$this->Dash_model->engg_onhold_list($id);
		$data1['engg_onhold_list1']=$this->Dash_model->engg_onhold_list1($id);
		//$data1['offsite_listforEmp']=$this->Dash_model->engg_listforEmp();
		$data1['status_list']=$this->Service_model->status_list();
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('engg_individual_onhold_list',$data1);
    }
	
	public function engg_individual_awaiting_list(){ 
		$id=$this->uri->segment(3);
		$data1['engg_awaiting_list']=$this->Dash_model->engg_awaiting_list($id);
		$data1['engg_awaiting_list1']=$this->Dash_model->engg_awaiting_list1($id);
		//$data1['offsite_listforEmp']=$this->Dash_model->engg_listforEmp();
		$data1['status_list']=$this->Service_model->status_list();
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('engg_individual_awaiting_list',$data1);
    }
	
	public function engg_individual_ready_list(){ 
		$id=$this->uri->segment(3);
		$data1['engg_ready_list']=$this->Dash_model->engg_ready_list($id);
		$data1['engg_ready_list1']=$this->Dash_model->engg_ready_list1($id);
		//$data1['offsite_listforEmp']=$this->Dash_model->engg_listforEmp();
		$data1['status_list']=$this->Service_model->status_list();
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('engg_individual_ready_list',$data1);
    }
	
	public function onsite_list(){ 
		$data1['onsite_list']=$this->Dash_model->onsite_list();
		$data1['onsite_list1']=$this->Dash_model->onsite_list1();
		$data1['service_req_listforEmp']=$this->Dash_model->service_req_listforEmp();
		$data1['status_list']=$this->Service_model->status_list();
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('onsite_list',$data1);
    }
	public function offsite_list(){ 
		$data1['offsite_list']=$this->Dash_model->offsite_list();
		$data1['offsite_list1']=$this->Dash_model->offsite_list1();
		$data1['offsite_listforEmp']=$this->Dash_model->offsite_listforEmp();
		$data1['status_list']=$this->Service_model->status_list();
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('offsite_list',$data1);
    }
	
	public function engg_individual_list(){ 
		$id=$this->uri->segment(3);
		$data1['engg_list']=$this->Dash_model->engg_list($id);
		$data1['engg_list1']=$this->Dash_model->engg_list1($id);
		//$data1['offsite_listforEmp']=$this->Dash_model->engg_listforEmp();
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('engg_list',$data1);
    }
	
	
	
	
	public function stamping_list(){ 
		$data1['stamping_list']=$this->Dash_model->stamping_list();
		$data1['stamping_list1']=$this->Dash_model->stamping_list1();
		$data1['stamping_listforEmp']=$this->Dash_model->stamping_listforEmp();
		$data1['status_list']=$this->Service_model->status_list();
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('stamping_list',$data1);
    }
	
	public function Areawise_list(){ 
		$id=$this->uri->segment(3);
		$data1['Areawise_view']=$this->Dash_model->Areawise_list($id);
		$data1['Areawise_list1']=$this->Dash_model->Areawise_list1($id);
		$data1['Areawise_listforEmp']=$this->Dash_model->Areawise_listforEmp($id);
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('areawise_list',$data1);
    }
	
	public function lab_listsss(){ 
		$data1['listss'] = $this->Labcategory_model->labss_list();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('lab_list',$data1);
    }
	
	public function add_lab(){ 
		//$data1['list']=$this->Customer_model->customer_list();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('add_lab');
    }
	
	public function cust_list(){ 
		$data1['list']=$this->Customer_model->customer_list();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('cust_list',$data1);
    }
	public function add_cust(){
		$data1['customer_type']=$this->Customer_model->cust_type_list();
		$data1['service_zone']=$this->Customer_model->service_zone_list();
		$data1['state_list']=$this->Customer_model->state_list();
		$data1['cust_cnt']=$this->Customer_model->cust_cnt();
		$data1['lab']=$this->Labcategory_model->labss_list();
		
		
		if(empty($data1['cust_cnt'])){
			$data1['cnt']='00001';
		}else{
			$cusid = $data1['cust_cnt'][0]->id; 
			$dat= $cusid + 1;
			$data1['cnt']=sprintf("%05d", $dat);
		}
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('add_cust',$data1);
    }
	
	public function prod_list(){ 
		$data1['list']=$this->Product_model->product_list();
		$data1['accessories_list']=$this->Product_model->accessories_list();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('prod_list',$data1);
    }
	public function add_prod(){ 
		$data1['prodcatlist']=$this->Product_model->prod_cat_dropdownlist();
		$data1['subcatlist']=$this->Product_model->prod_sub_cat_dropdownlist();
		$data1['brandlists']=$this->Product_model->brandlists();
		$data1['accessories_list']=$this->Product_model->accessories_list();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('add_prod',$data1);
    }
	public function emp_list(){ 
		$data1['list']=$this->Employee_model->employee_list();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('emp_list',$data1);
    }
	public function add_emp(){ 
		$data1['state_list']=$this->Employee_model->state_list();
		$data1['emp_cnt']=$this->Employee_model->emp_cnt();
		
		if(empty($data1['emp_cnt'])){
			$data1['cnt']='00001';
		}else{
			$cusid = $data1['emp_cnt'][0]->id; 
			$dat= $cusid + 1;
			$data1['cnt']=sprintf("%05d", $dat);
		}
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('add_emp',$data1);
    }
	public function service_skill(){ 
		$data1['id']=$this->uri->segment(3);
		$data1['list']=$this->Employee_model->product_list();
		$data1['servicecatlist']=$this->Employee_model->service_cat_list();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('service_skill',$data1);
    }
	
	public function comp_list(){ 
		$data1['list']=$this->Company_model->company_list();
		$data1['state_list']=$this->Company_model->state_list();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('comp_list',$data1);
    }
	public function prod_service_stat_list(){ 
		$data1['list']=$this->Prodservicestat_model->prod_service_status_list();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('prod_service_stat_list',$data1);
    }
	public function add_prod_service_stat(){ 
		//$data1['list']=$this->prodServiceStat_model->customer_list();
		
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('add_prod_service_stat');
    }
	public function prod_cat_list(){ 
		$data1['list']=$this->Productcategory_model->prod_cat_list();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('prod_cat_list',$data1);
    }
	public function add_prod_cat(){ 
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('add_prod_cat');
    }
	public function prod_subcat_list(){ 
		$data1['list']=$this->Subcategory_model->prod_sub_cat_list();
		$data1['droplists']=$this->Subcategory_model->prod_cat_dropdownlist();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('prod_subcat_list',$data1);
    }
	public function add_prod_subcat(){ 
		$data1['droplist']=$this->Subcategory_model->prod_cat_dropdownlist();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('add_prod_subcat',$data1);
    }
	public function service_cat_list(){ 
		$data1['list']=$this->Servicecategory_model->service_cat_list();
		//$data1['list1']=$this->Servicecategory_model->service_cat_list1();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('service_cat_list',$data1);
    }
	public function add_service_cat(){ 
		$data1['modellist']=$this->Servicecategory_model->modellist();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('add_service_cat',$data1);
    }
	public function add_service_charge(){ 
		$data1['modellist']=$this->Servicecategory_model->modellist();
		$data1['list']=$this->Servicecategory_model->service_cat_list();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('add_service_charge',$data1);
    }
	
	public function service_charge_list(){ 
		$data1['service_charge_list']=$this->Servicecategory_model->service_charge_list();
		$data1['service_cat_list']=$this->Servicecategory_model->service_cat_charge_list();
		
		$data1['modellist']=$this->Servicecategory_model->modellist();
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('service_charges_list',$data1);
    }
	
	public function service_loc_list(){ 
		$data1['list']=$this->Servicelocation_model->service_location_list();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('service_loc_list',$data1);
    }
	public function add_service_loc(){ 
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('add_service_loc');
    }
	
	public function qc_masters(){ 
		$data1['modellist']=$this->qc_master_model->modellist();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('add_qc_master',$data1);
    }
	
	public function qc_masters_list(){ 
		$data1['qc_masters_list']=$this->qc_master_model->qc_masters_list();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('qc_masters_list',$data1);
    }
	
	public function prob_cat_list(){ 
		$data1['list']=$this->Problemcategory_model->problem_category_list();
		$data1['list1']=$this->Problemcategory_model->problem_category_list1();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('prob_cat_list',$data1);
    }
	public function add_prob_cat(){ 
		$data1['modellist']=$this->Problemcategory_model->modellist();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('add_prob_cat',$data1);
    }
	public function accessories_list(){ 
		$data1['list']=$this->Accessories_model->accessories_list();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('accessories_list',$data1);
    }
	public function add_accessories(){ 
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('add_accessories');
    }
	public function order_list(){ 
		$data1['orderlist']=$this->Order_model->orderlist();
		$data1['orderlist1']=$this->Order_model->orderlist1();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('order_list',$data1);
    }
	
	public function warranty_pending_claims(){
		$data1['warranty_pending_claims']=$this->Service_model->warranty_pending_claims();	
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('warranty_pending_claims',$data1);
    }
	
	public function amc_list(){
		$data1['amclist']=$this->Order_model->amclist();
		$data1['amclist1']=$this->Order_model->amclist1();
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('amc_list',$data1);
    }


       public function cmc_list()
		{
		$data1['cmclist']=$this->Order_model->cmclist();
		$data1['cmclist1']=$this->Order_model->cmclist1();
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('cmc_list',$data1);
       }





	
	public function rent_list(){
		$data1['rentlist']=$this->Order_model->rentlist();
		$data1['rentlist1']=$this->Order_model->rentlist1();
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('rent_list',$data1);
    }
	
	
	public function add_order(){ 
		$data1['customerlist']=$this->Order_model->customerlist();
		$data1['prodcatlist']=$this->Order_model->prod_cat_dropdownlist();
		//$data1['subcatlist']=$this->Order_model->prod_sub_cat_dropdownlist();
		///$data1['brandlist']=$this->Order_model->brandlist();
		$data1['modellist']=$this->Order_model->modellist();
		
		$data1['serviceLocList']=$this->Order_model->serviceLocList();
		date_default_timezone_set('Asia/Calcutta');
		$data1['saledate'] = date("Y-m-d");
		
		$warranty_date = new DateTime("+12 months");
		$dd = $warranty_date->format('Y-m-d') . "\n";
		$newdate = strtotime ('-1 day' , strtotime ($dd));
		$data1['warranty_date'] =  date('Y-m-d' , $newdate); 
		
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('add_order',$data1);
    }
	public function add_service_req(){ 
		$data1['customerlist']=$this->Service_model->customerlist();
		$data1['list_serialnos']=$this->Service_model->list_serialnos();
		$data1['servicecat_list']=$this->Service_model->servicecat_list();
		$data1['problemlist']=$this->Service_model->problemlist();
		$data1['employee_list']=$this->Service_model->employee_list();
		$data1['stamping_list']=$this->Service_model->stamping_list();
		//$data1['get_categorys']=$this->Service_model->get_categorys();
		
		//$data1['employee_list1']=$this->Service_model->employee_list1();
		
		$data1['accessories_list']=$this->Service_model->accessories_list();
		
		/* $data1['prod_cat_dropdownlist1']=$this->Service_model->prod_cat_dropdownlist1();
		$data1['prod_sub_cat_dropdownlist1']=$this->Service_model->prod_sub_cat_dropdownlist1();
		$data1['brandlist1']=$this->Service_model->brandlist1(); */
		
		date_default_timezone_set('Asia/Calcutta');
		$data1['req_date'] = date("Y-m-d H:i");
		$data1['service_cnt']=$this->Service_model->service_cnt();
		
		if(empty($data1['service_cnt'])){
			$data1['cnt']='00001';
		}else{
			$cusid = $data1['service_cnt'][0]->request_id; 
			$dat= $cusid + 1;
			$data1['cnt']=sprintf("%05d", $dat);
		}
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('add_service_req',$data1);
    }
	public function service_req_list(){ 
		error_reporting(0);
		$data1['user_dat'] = $this->session->userdata('login_data');
		$user_acc = $data1['user_dat'][0]->user_access;
		$user_type = $data1['user_dat'][0]->user_type;
		
		if(isset($user_acc) && $user_acc!=""){
			$user_access = $user_acc;
		}else{
			$user_access = "";
		}
		
		$data1['service_req_list']=$this->Service_model->service_req_list($user_access,$user_type);
		$data1['service_req_list1']=$this->Service_model->service_req_list1($user_access,$user_type);
		$data1['service_req_listforEmp']=$this->Service_model->service_req_listforEmp();
		$data1['status_list']=$this->Service_model->status_list();
		$data1['combine_status_list']=$this->Service_model->combine_status_list();
		
		$data1['preventive_req_lis']=$this->Service_model->preventive_req_list();
		
		
		foreach($data1['preventive_req_lis'] As $prev_list){
			
			$prenos = $prev_list->prenos;
			$prenos_cnt = $prev_list->prenos_cnt; 
			//$prev_main = $prev_list->prev_main; 
			
			if($prev_list->amc_type!=""){
				$machine_status = $prev_list->amc_type;
			}else{
				$machine_status = $prev_list->machine_status;
			}
			
			if($prev_list->amc_start_date!=""){
				$prev_main_updated = $prev_list->prev_main_updated;
			}else{
				$prev_main_updated = $prev_list->prev_main_updated;
			}
			
			$order_id = $prev_list->order_id;
			$today = date("Y-m-d");
			
			
			// Preventive Alerts for 1 Nos
			if($prenos=='1'){
				//echo "IN";
					if($prenos_cnt=="0"){
						$prev_date = date('Y-m-d', strtotime("+1 months", strtotime($prev_main_updated)));// To alert in 1st month.
					}
					
					
					if($today == $prev_date){ //echo "DUMMMMMMYY";
						if($prenos>$prenos_cnt){
						//$data1['preventive_req_list']=$this->Service_model->preventive_req_list1($prev_main_updated);
						$count = $prenos_cnt+1;
						$data=array(
							'prev_main_updated'=>$prev_date,
							'prenos_cnt'=>$count
						);
						$this->Service_model->update_preventive($data,$order_id);
						
						/* echo "<pre>";
						print_r($prev_list); */
						$data5['service_p_cnt']=$this->Service_model->service_p_cnt();
		
						if(empty($data5['service_p_cnt'])){
							$reqid='00001';
							
						}else{ 
							$cusid = $data5['service_p_cnt'][0]->request_id; 
							$cusid1 = explode("-",$cusid);
							$dat= $cusid1['1'] + 1;
							$reqid=sprintf("%05d", $dat);
						}
						
						
						$data2['request_id'] = "P-".$reqid;
						$customer_id = $prev_list->customer_id;
						$data2['cust_name'] = sprintf("%05d", $customer_id);
						$data2['br_name'] = $prev_list->customer_service_loc_id;
						
						$data2['mobile'] = $prev_list->mobile;
						$data2['email_id'] = $prev_list->email_id;
						$data2['request_date'] =  date('Y-m-d H:i:s', strtotime($prev_date));
						$data2['status'] = "0";
			
						$result=$this->Service_model->add_services($data2);
						$res = sprintf("%05d", $result);
						
						if($result){
							$data3['request_id']=$res;
							$data3['serial_no'] = $prev_list->serial_no;
							$data3['cat_id'] = $prev_list->cat_id;
							$data3['subcat_id'] = $prev_list->subcat_id;
							$data3['brand_id'] = $prev_list->brand_id;
							$data3['model_id'] = $prev_list->model_id;
							$data3['warranty_date'] = $prev_list->warranty_date;
							$data3['amc_end_date'] = $prev_list->amc_end_date;
							$data3['machine_status'] = $machine_status;
							$data3['service_type'] = $prev_list->machine_status;
							$data3['zone'] = $prev_list->service_loc_id;
							
							$this->Service_model->add_service_details($data3);
						}
						
						
					}
				}/* else{
					echo "Dummy";
				} */
				
				if($today == $prev_main_updated){
					$data1['preventive_req_list']=$this->Service_model->preventive_req_list1($prev_main_updated);
				}
				
			}
			
			
			// Preventive Alerts for 3 Nos
			if($prenos=='3'){
				
					if($prenos_cnt=="0"){
						$prev_date = date('Y-m-d', strtotime("+3 months", strtotime($prev_main_updated)));// To alert in 3rd month.
					}else if($prenos_cnt=="1"){
						$prev_date = date('Y-m-d', strtotime("+3 months", strtotime($prev_main_updated)));// To alert in 6th month.
					}else{
						$prev_date = date('Y-m-d', strtotime("+3 months", strtotime($prev_main_updated)));// To alert in 9th month.
					}
					
					if($today == $prev_date){ //echo "DUMMMMMMYY";
						if($prenos>$prenos_cnt){
						//$data1['preventive_req_list']=$this->Service_model->preventive_req_list1($prev_main_updated);
						$count = $prenos_cnt+1;
						$data=array(
							'prev_main_updated'=>$prev_date,
							'prenos_cnt'=>$count
						);
						$this->Service_model->update_preventive($data,$order_id);
						
						$data5['service_p_cnt']=$this->Service_model->service_p_cnt();
		
						if(empty($data5['service_p_cnt'])){
							$reqid='00001';
						}else{
							$cusid = $data5['service_p_cnt'][0]->request_id; 
							$cusid1 = explode("-",$cusid);
							$dat= $cusid1['1'] + 1;
							$reqid=sprintf("%05d", $dat);
						}
						
						
						$data2['request_id'] = "P-".$reqid;
						$customer_id = $prev_list->customer_id;
						$data2['cust_name'] = sprintf("%05d", $customer_id);
						$data2['br_name'] = $prev_list->customer_service_loc_id;
						
						$data2['mobile'] = $prev_list->mobile;
						$data2['email_id'] = $prev_list->email_id;
						$data2['request_date'] = date('Y-m-d H:i:s', strtotime($prev_date));
						$data2['status'] = "0";
			
						$result=$this->Service_model->add_services($data2);
						$res = sprintf("%05d", $result);
						
						if($result){
							$data3['request_id']=$res;
							$data3['serial_no'] = $prev_list->serial_no;
							$data3['cat_id'] = $prev_list->cat_id;
							$data3['subcat_id'] = $prev_list->subcat_id;
							$data3['brand_id'] = $prev_list->brand_id;
							$data3['model_id'] = $prev_list->model_id;
							$data3['warranty_date'] = $prev_list->warranty_date;
							$data3['amc_end_date'] = $prev_list->amc_end_date;
							$data3['machine_status'] = $machine_status;
							$data3['service_type'] = $prev_list->machine_status;
							$data3['zone'] = $prev_list->service_loc_id;
							
							$this->Service_model->add_service_details($data3);
						}
					}
				}/* else{
					echo "Dummy";
				} */
				
				if($today == $prev_main_updated){
					$data1['preventive_req_list']=$this->Service_model->preventive_req_list1($prev_main_updated);
				}
				
			}
			
			
			// Preventive Alerts for 6 Nos
			if($prenos=='6'){
				
					if($prenos_cnt=="0"){
						$prev_date = date('Y-m-d', strtotime("+1 months", strtotime($prev_main_updated)));// To alert in 1st month.
					}else if($prenos_cnt=="1"){
						$prev_date = date('Y-m-d', strtotime("+1 months", strtotime($prev_main_updated)));// To alert in 2nd month.
					}else if($prenos_cnt=="2"){
						$prev_date = date('Y-m-d', strtotime("+1 months", strtotime($prev_main_updated)));// To alert in 3rd month.
					}else if($prenos_cnt=="3"){
						$prev_date = date('Y-m-d', strtotime("+2 months", strtotime($prev_main_updated)));// To alert in 5th month.
					}else if($prenos_cnt=="4"){
						$prev_date = date('Y-m-d', strtotime("+2 months", strtotime($prev_main_updated)));// To alert in 7th month.
					}else{
						$prev_date = date('Y-m-d', strtotime("+2 months", strtotime($prev_main_updated)));// To alert in 9th month.
					}
					
					
					
					
					if($today == $prev_date){ //echo "DUMMMMMMYY";
						if($prenos>$prenos_cnt){
						//$data1['preventive_req_list']=$this->Service_model->preventive_req_list1($prev_main_updated);
						$count = $prenos_cnt+1;
						$data=array(
							'prev_main_updated'=>$prev_date,
							'prenos_cnt'=>$count
						);
						$this->Service_model->update_preventive($data,$order_id);
						
						$data5['service_p_cnt']=$this->Service_model->service_p_cnt();
		
						if(empty($data5['service_p_cnt'])){
							$reqid='00001';
						}else{
							$cusid = $data5['service_p_cnt'][0]->request_id; 
							$cusid1 = explode("-",$cusid);
							$dat= $cusid1['1'] + 1;
							$reqid=sprintf("%05d", $dat);
						}
						
						
						$data2['request_id'] = "P-".$reqid;
						$customer_id = $prev_list->customer_id;
						$data2['cust_name'] = sprintf("%05d", $customer_id);
						$data2['br_name'] = $prev_list->customer_service_loc_id;
						
						$data2['mobile'] = $prev_list->mobile;
						$data2['email_id'] = $prev_list->email_id;
						$data2['request_date'] =  date('Y-m-d H:i:s', strtotime($prev_date));
						$data2['status'] = "0";
			
						$result=$this->Service_model->add_services($data2);
						$res = sprintf("%05d", $result);
						
						if($result){
							$data3['request_id']=$res;
							$data3['serial_no'] = $prev_list->serial_no;
							$data3['cat_id'] = $prev_list->cat_id;
							$data3['subcat_id'] = $prev_list->subcat_id;
							$data3['brand_id'] = $prev_list->brand_id;
							$data3['model_id'] = $prev_list->model_id;
							$data3['warranty_date'] = $prev_list->warranty_date;
							$data3['amc_end_date'] = $prev_list->amc_end_date;
							$data3['machine_status'] = $machine_status;
							$data3['service_type'] = $prev_list->machine_status;
							$data3['zone'] = $prev_list->service_loc_id;
							
							$this->Service_model->add_service_details($data3);
						}
					}
				}/* else{
					echo "Dummy";
				} */
				
				if($today == $prev_main_updated){
					$data1['preventive_req_list']=$this->Service_model->preventive_req_list1($prev_main_updated);
				}
				
			}
			
			
			// Preventive Alerts for 12 Nos
			if($prenos=='12'){
				
					if($prenos_cnt=="0"){ //echo "IINNN";exit;
						$prev_date = date('Y-m-d', strtotime("+1 months", strtotime($prev_main_updated)));// To alert in 1st month.
					}else if($prenos_cnt=="1"){
						$prev_date = date('Y-m-d', strtotime("+1 months", strtotime($prev_main_updated)));// To alert in 2nd month.
					}else if($prenos_cnt=="2"){
						$prev_date = date('Y-m-d', strtotime("+1 months", strtotime($prev_main_updated)));// To alert in 3rd month.
					}else if($prenos_cnt=="3"){
						$prev_date = date('Y-m-d', strtotime("+1 months", strtotime($prev_main_updated)));// To alert in 4th month.
					}else if($prenos_cnt=="4"){
						$prev_date = date('Y-m-d', strtotime("+1 months", strtotime($prev_main_updated)));// To alert in 5th month.
					}else if($prenos_cnt=="5"){
						$prev_date = date('Y-m-d', strtotime("+1 months", strtotime($prev_main_updated)));// To alert in 6th month.
					}else if($prenos_cnt=="6"){
						$prev_date = date('Y-m-d', strtotime("+1 months", strtotime($prev_main_updated)));// To alert in 7th month.
					}else if($prenos_cnt=="7"){
						$prev_date = date('Y-m-d', strtotime("+1 months", strtotime($prev_main_updated)));// To alert in 8th month.
					}else if($prenos_cnt=="8"){
						$prev_date = date('Y-m-d', strtotime("+1 months", strtotime($prev_main_updated)));// To alert in 9th month.
					}else if($prenos_cnt=="9"){
						$prev_date = date('Y-m-d', strtotime("+1 months", strtotime($prev_main_updated)));// To alert in 10th month.
					}else{
						$prev_date = date('Y-m-d', strtotime("+1 months", strtotime($prev_main_updated)));// To alert in 11th month.
					}
					
					
					if($today == $prev_date){ //echo "DUMMMMMMYY";
						if($prenos>$prenos_cnt){
						//$data1['preventive_req_list']=$this->Service_model->preventive_req_list1($prev_main_updated);
						$count = $prenos_cnt+1;
						$data=array(
							'prev_main_updated'=>$prev_date,
							'prenos_cnt'=>$count
						);
						$this->Service_model->update_preventive($data,$order_id);
						
						$data5['service_p_cnt']=$this->Service_model->service_p_cnt();
		
						if(empty($data5['service_p_cnt'])){
							$reqid='00001';
						}else{
							$cusid = $data5['service_p_cnt'][0]->request_id; 
							$cusid1 = explode("-",$cusid);
							$dat= $cusid1['1'] + 1;
							$reqid=sprintf("%05d", $dat);
						}
						
						
						$data2['request_id'] = "P-".$reqid;
						$customer_id = $prev_list->customer_id;
						$data2['cust_name'] = sprintf("%05d", $customer_id);
						$data2['br_name'] = $prev_list->customer_service_loc_id;
						
						$data2['mobile'] = $prev_list->mobile;
						$data2['email_id'] = $prev_list->email_id;
						$data2['request_date'] = $prev_date;
						$data2['status'] = "0";
			
						$result=$this->Service_model->add_services($data2);
						$res = sprintf("%05d", $result);
						
						if($result){
							$data3['request_id']=$res;
							$data3['serial_no'] = $prev_list->serial_no;
							$data3['cat_id'] = $prev_list->cat_id;
							$data3['subcat_id'] = $prev_list->subcat_id;
							$data3['brand_id'] = $prev_list->brand_id;
							$data3['model_id'] = $prev_list->model_id;
							$data3['warranty_date'] = $prev_list->warranty_date;
							$data3['amc_end_date'] = $prev_list->amc_end_date;
							$data3['machine_status'] = $machine_status;
							$data3['service_type'] = $prev_list->machine_status;
							$data3['zone'] = $prev_list->service_loc_id;
							
							$this->Service_model->add_service_details($data3);
						}
					}
				}/* else{
					echo "Dummy";
				} */
				
				if($today == $prev_main_updated){
					$data1['preventive_req_list']=$this->Service_model->preventive_req_list1($prev_main_updated);
				}
				
			}
			
			
			// Preventive Alerts for 5 Nos
			if($prenos=='5'){
				
					if($prenos_cnt=="0"){
						$prev_date = date('Y-m-d', strtotime("+1 months", strtotime($prev_main_updated)));// To alert in 1st month.
					}else if($prenos_cnt=="1"){
						$prev_date = date('Y-m-d', strtotime("+2 months", strtotime($prev_main_updated)));// To alert in 3rd month.
					}else if($prenos_cnt=="2"){
						$prev_date = date('Y-m-d', strtotime("+3 months", strtotime($prev_main_updated)));// To alert in 6th month.
					}else if($prenos_cnt=="3"){
						$prev_date = date('Y-m-d', strtotime("+3 months", strtotime($prev_main_updated)));// To alert in 9th month.
					}else{
						$prev_date = date('Y-m-d', strtotime("+2 months", strtotime($prev_main_updated)));// To alert in 11th month.
					}
					
					
					if($today == $prev_date){ //echo "DUMMMMMMYY";
						if($prenos>$prenos_cnt){
						//$data1['preventive_req_list']=$this->Service_model->preventive_req_list1($prev_main_updated);
						$count = $prenos_cnt+1;
						$data=array(
							'prev_main_updated'=>$prev_date,
							'prenos_cnt'=>$count
						);
						$this->Service_model->update_preventive($data,$order_id);
						
						$data5['service_p_cnt']=$this->Service_model->service_p_cnt();
		
						if(empty($data5['service_p_cnt'])){
							$reqid='00001';
						}else{
							$cusid = $data5['service_p_cnt'][0]->request_id; 
							$cusid1 = explode("-",$cusid);
							$dat= $cusid1['1'] + 1;
							$reqid=sprintf("%05d", $dat);
						}
						
						
						$data2['request_id'] = "P-".$reqid;
						$customer_id = $prev_list->customer_id;
						$data2['cust_name'] = sprintf("%05d", $customer_id);
						$data2['br_name'] = $prev_list->customer_service_loc_id;
						
						$data2['mobile'] = $prev_list->mobile;
						$data2['email_id'] = $prev_list->email_id;
						$data2['request_date'] = $prev_date;
						$data2['status'] = "0";
			
						$result=$this->Service_model->add_services($data2);
						$res = sprintf("%05d", $result);
						
						if($result){
							$data3['request_id']=$res;
							$data3['serial_no'] = $prev_list->serial_no;
							$data3['cat_id'] = $prev_list->cat_id;
							$data3['subcat_id'] = $prev_list->subcat_id;
							$data3['brand_id'] = $prev_list->brand_id;
							$data3['model_id'] = $prev_list->model_id;
							$data3['warranty_date'] = $prev_list->warranty_date;
							$data3['amc_end_date'] = $prev_list->amc_end_date;
							$data3['machine_status'] = $machine_status;
							$data3['service_type'] = $prev_list->machine_status;
							$data3['zone'] = $prev_list->service_loc_id;
							
							$this->Service_model->add_service_details($data3);
						}
					}
				}/* else{
					echo "Dummy";
				} */
				
				if($today == $prev_main_updated){
					$data1['preventive_req_list']=$this->Service_model->preventive_req_list1($prev_main_updated);
				}
				
			}
			
			
			
		}
		
		
		
		
		
		
		
		$this->load->view('templates/header',$data1);
		$this->load->view('service_req_list',$data1);
    }
	
	public function quote_in_progress_list(){ 
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$user_acc = $data1['user_dat'][0]->user_access;
		$user_type = $data1['user_dat'][0]->user_type;
		
		if(isset($user_acc) && $user_acc!=""){
			$user_access = $user_acc;
		}else{
			$user_access = "";
		}
		
		$data1['service_req_list']=$this->quote_in_progress_model->service_req_list($user_access,$user_type);
		$data1['service_req_list1']=$this->quote_in_progress_model->service_req_list1();
		$data1['service_req_listforEmp']=$this->quote_in_progress_model->service_req_listforEmp();
		$data1['status_list']=$this->quote_in_progress_model->status_list();
		$data1['combine_status_list']=$this->quote_in_progress_model->combine_status_list();
		
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('quote_in_progress_list',$data1);
    }
	
	
	
	
	public function quote_review(){ 
		
		$data1['quote_review_req_list']=$this->quote_review_model->quote_review_req_list();
		$data1['service_req_list1']=$this->quote_review_model->service_req_list1();
		$data1['service_req_listforEmp']=$this->quote_review_model->service_req_listforEmp();
		$data1['service_req_listforProb']=$this->quote_review_model->service_req_listforProb();
		//$data1['combine_status_list']=$this->Service_model->combine_status_list();
	
	
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('quote_review',$data1);
    }
	
	public function quote_approved(){

		$data1['user_dat'] = $this->session->userdata('login_data');
		$user_acc = $data1['user_dat'][0]->user_access;
		$user_type = $data1['user_dat'][0]->user_type;
		
		if(isset($user_acc) && $user_acc!=""){
			$user_access = $user_acc;
		}else{
			$user_access = "";
		}
		
		$data1['quote_approved_list']=$this->quote_approved_model->quote_approved_list($user_access,$user_type);
		$data1['service_req_list1']=$this->quote_approved_model->service_req_list1();
		$data1['service_req_listforEmp']=$this->quote_approved_model->service_req_listforEmp();
		$data1['service_req_listforProb']=$this->quote_approved_model->service_req_listforProb();
		//$data1['combine_status_list']=$this->Service_model->combine_status_list();
	
	
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('quote_approved_list',$data1);
    }
	
	
	public function quote_review_view(){ 
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('quote_review_view');
    }
	public function workin_prog_list(){
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$user_acc = $data1['user_dat'][0]->user_access;
		$user_type = $data1['user_dat'][0]->user_type;
		$emp_id = $data1['user_dat'][0]->emp_id;
		
		if(isset($user_acc) && $user_acc!=""){
			$user_access = $user_acc;
		}else{
			$user_access = "";
		}
	
		if(isset($user_type) && $user_type=='7' && isset($emp_id) && $emp_id!="0"){
			$data1['workin_prog_list']=$this->workin_prog_model->workin_prog_listbyempid($emp_id);
		}else{
			$data1['workin_prog_list']=$this->workin_prog_model->workin_prog_list($user_access,$user_type);
		}
		
		//$data1['workin_prog_list']=$this->workin_prog_model->workin_prog_list($user_access,$user_type);
		$data1['service_req_list1']=$this->workin_prog_model->service_req_list1();
		$data1['service_req_listforEmp']=$this->workin_prog_model->service_req_listforEmp();
		$data1['service_req_listforProb']=$this->workin_prog_model->service_req_listforProb();
		$data1['service_req_listforserviceCat']=$this->workin_prog_model->service_req_listforserviceCat();
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('workin_prog_list',$data1);
    }
	
	
	public function comp_engg_list(){
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$user_acc = $data1['user_dat'][0]->user_access;
		$user_type = $data1['user_dat'][0]->user_type;
		$emp_id = $data1['user_dat'][0]->emp_id;
		
		if(isset($user_acc) && $user_acc!=""){
			$user_access = $user_acc;
		}else{
			$user_access = "";
		}
		
		if(isset($user_type) && $user_type=='7' && isset($emp_id) && $emp_id!="0"){
			$data1['workin_prog_list']=$this->workin_prog_model->comp_engg_byempid($emp_id);
		}else{
			$data1['workin_prog_list']=$this->workin_prog_model->comp_engg_list($user_access,$user_type);
		}
	
		
		$data1['service_req_list1']=$this->workin_prog_model->service_req_list1();
		$data1['service_req_listforEmp']=$this->workin_prog_model->service_req_listforEmp();
		$data1['service_req_listforProb']=$this->workin_prog_model->service_req_listforProb();
		$data1['service_req_listforserviceCat']=$this->workin_prog_model->service_req_listforserviceCat();
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('comp_engg_list',$data1);
    }
	
	
	
	public function quality_check_list(){ 
	
		$data1['user_dat'] = $this->session->userdata('login_data');
		$user_acc = $data1['user_dat'][0]->user_access;
		$user_type = $data1['user_dat'][0]->user_type;
		
		if(isset($user_acc) && $user_acc!=""){
			$user_access = $user_acc;
		}else{
			$user_access = "";
		}
		
		$data1['workin_prog_list']=$this->quality_check_model->quality_check_list($user_access,$user_type);
		$data1['service_req_list1']=$this->quality_check_model->service_req_list1();
		$data1['service_req_listforEmp']=$this->quality_check_model->service_req_listforEmp();
		$data1['service_req_listforProb']=$this->quality_check_model->service_req_listforProb();
		$data1['service_req_listforserviceCat']=$this->quality_check_model->service_req_listforserviceCat();
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('quality_check_list',$data1);
    }
	
	public function ready_delivery_list(){ 
	
		$data1['user_dat'] = $this->session->userdata('login_data');
		$user_acc = $data1['user_dat'][0]->user_access;
		$user_type = $data1['user_dat'][0]->user_type;
		
		if(isset($user_acc) && $user_acc!=""){
			$user_access = $user_acc;
		}else{
			$user_access = "";
		}
		
		$data1['ready_delivery_list']=$this->ready_delivery_model->ready_delivery_list($user_access,$user_type);
		$data1['service_req_list1']=$this->ready_delivery_model->service_req_list1();
		$data1['service_req_listforEmp']=$this->ready_delivery_model->service_req_listforEmp();
		$data1['service_req_listforProb']=$this->ready_delivery_model->service_req_listforProb();
		$data1['service_req_listforserviceCat']=$this->ready_delivery_model->service_req_listforserviceCat();
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('ready_delivery_list',$data1);
    }
	
	public function sparerequest(){
		$data1['get_spare_request'] = $this->Spare_model->get_spare_request();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('sparerequest',$data1);
    }
	public function workin_prog_view(){ 
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('workin_prog_view');
    }
	public function delivered_list(){ 
	
		$data1['user_dat'] = $this->session->userdata('login_data');
		$user_acc = $data1['user_dat'][0]->user_access;
		$user_type = $data1['user_dat'][0]->user_type;
		
		if(isset($user_acc) && $user_acc!=""){
			$user_access = $user_acc;
		}else{
			$user_access = "";
		}
		
		$data1['delivery_list']=$this->delivery_model->delivery_list($user_access,$user_type);
		$data1['service_req_list1']=$this->delivery_model->service_req_list1();
		$data1['service_req_listforEmp']=$this->delivery_model->service_req_listforEmp();
		$data1['service_req_listforProb']=$this->delivery_model->service_req_listforProb();
		$data1['service_req_listforserviceCat']=$this->delivery_model->service_req_listforserviceCat();
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('delivered_list',$data1);
    }
	public function delivered_view(){ 
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('delivered_view');
    }
	public function add_spare(){ 
		$data1['sparelist']=$this->Spare_model->sparelist();
		$data1['sparelist1']=$this->Spare_model->sparelist1();
		$data1['getmodels']=$this->Spare_model->getmodels();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('add_spare',$data1);
    }
	public function spare_stock(){ 
		$data1['spare_stock']=$this->Spare_model->sparelist1();
		$data1['sparelist_engg']=$this->Spare_model->sparelist_engg();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('spare_stock',$data1);
    }
	public function add_new_stock(){ 
		$data1['modellist']=$this->Spare_model->modellist();
		$data1['prodcatlist']=$this->Spare_model->prod_cat_dropdownlist();
		$data1['subcatlist']=$this->Spare_model->prod_sub_cat_dropdownlist();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('add_new_stock',$data1);
    }
	public function expiry_list(){ 
		//$date1 = date('Y-m-d');
		//$data1['expiry_list']=$this->Order_model->expiry_list($date1);
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('expiry_list');
    }
	public function expiry_closed(){ 
		$data1['expiry_closed']=$this->Order_model->expiry_closed();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('expiry_closed',$data1);
    }
	public function add_brand(){ 
		$data1['prodcatlist']=$this->Brand_model->prod_cat_dropdownlist();
		$data1['subcatlist']=$this->Brand_model->prod_sub_cat_dropdownlist();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('add_brand',$data1);
    }
	public function brandList(){
		$data1['brand_list']=$this->Brand_model->brand_list();
		$data1['catlist']=$this->Brand_model->prod_cat_dropdownlist();
		$data1['subcatlist']=$this->Brand_model->prod_sub_cat_dropdownlist();
		//$data1['droplists']=$this->Brand_model->prod_cat_dropdownlist();
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('brandList',$data1);
    }
	public function add_tax(){ 
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('add_tax');
    }
	public function tax_list(){ 
		$data1['tax_list']=$this->Tax_model->tax_list();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('tax_list',$data1);
    }
	public function add_spare_engineers(){ 
		$data1['customerlist']=$this->Spare_model->customerlist();
		$data1['spare_list']=$this->Spare_model->spare_list_engineers();
		$data1['engg_list']=$this->Spare_model->engineer_list();
		$data1['reqview']=$this->Spare_model->reqlist();
		
		$data1['cust_cnt']=$this->Customer_model->cust_cnt();
		
		if(empty($data1['cust_cnt'])){
			$data1['cnt']='00001';
		}else{
			$cusid = $data1['cust_cnt'][0]->id; 
			$dat= $cusid + 1;
			$data1['cnt']=sprintf("%05d", $dat);
		}
		
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('spare_engineers',$data1);
    }
	
	 public function sparereceipt(){
		$data1['receipt'] = $this->Spare_model->getspareengg();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('spareengreceipt',$data1);
    }
	
	public function spare_purchase_order(){
		date_default_timezone_set('Asia/Calcutta');
		$data1['todaydate'] = date("d-m-Y H:i:s");
		$data1['comp_info'] = $this->Spare_model->get_compinfo();
		$data1['spare_list']=$this->Spare_model->spare_list_engineers();
		$data1['tax_list']=$this->Spare_model->tax_list();
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('spare_purchase_order',$data1);
    }
	
	public function purchase_orders(){
		$data1['get_purchase_orders'] = $this->Spare_model->get_purchase_orders();
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('purchase_orders',$data1);
    }
	
	public function min_spare_alerts(){
		
		$data1['get_min_spares'] = $this->Spare_model->get_min_spares();
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('min_spare_alerts',$data1);
    }
	
	
	public function cust_type(){ 
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('add_cust_type');
    }
	public function cust_type_list(){ 
		$data1['cust_type_list']=$this->Customer_model->cust_type_list();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('cust_type_list',$data1);
    }
	
	
	
	
	public function report_list(){ 
		$m_data['model']=$this->Report_model->modellist();
		$m_data['product']=$this->Report_model->procatlist();
		//$m_data['custom']=$this->Report_model->custlist();
		$m_data['engineer']=$this->Report_model->engnamelist();
		$m_data['status_list']=$this->Report_model->status_list();
		$m_data['area_list']=$this->Report_model->area_list();
		$m_data['brand_list']=$this->Report_model->brand_list();
		$m_data['service_zone']=$this->Report_model->zonelist();
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('report_view',$m_data);
    }
	
	public function sparereport_list(){ 
		$m_data['enggname_list']=$this->Report_model->engnamelist();
		$m_data['sparename_list']=$this->Report_model->sparenamelist();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('sparereport_list',$m_data);
    }
	
	public function sparepurchase_list(){ 
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('sparepurchase_list');
    }
	
	
	public function agingreport(){ 
		$m_data['model']=$this->Report_model->modellist();
		$m_data['product']=$this->Report_model->procatlist();
		$m_data['custom']=$this->Report_model->custlist();
		$m_data['engineer']=$this->Report_model->engnamelist();
		$m_data['zone']=$this->Report_model->zonelist();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('agingreport_list',$m_data);
    }
	
	public function revenuereport()
	{
		$m_data['model']=$this->Report_model->modellist();
		$m_data['product']=$this->Report_model->procatlist();
		//$m_data['custom']=$this->Report_model->custlist();
		$m_data['engineer']=$this->Report_model->engnamelist();
		$m_data['status_list']=$this->Report_model->status_list();
		$m_data['area_list']=$this->Report_model->area_list();
		$m_data['brand_list']=$this->Report_model->brand_list();
		$m_data['service_zone']=$this->Report_model->zonelist();
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('revenuereport_list',$m_data);
	}
	
	
	public function purchase_report()
	{
		$m_data['model']=$this->Report_model->modellist();
		$m_data['product']=$this->Report_model->procatlist();
		//$m_data['custom']=$this->Report_model->custlist();
		$m_data['location_list']=$this->Report_model->location_list();
		$m_data['service_zone']=$this->Report_model->zonelist();
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('purchase_report',$m_data);
	}
	
	
	public function service_mach_report()
	{
		$m_data['model']=$this->Report_model->modellist();
		$m_data['product']=$this->Report_model->procatlist();
		
		$m_data['cust_type_list']=$this->Report_model->cust_type_list();
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('service_mach_report',$m_data);
	}
	
	
	public function expiry_list1(){ 
		//$date1 = date('Y-m-d');
		//$data1['expiry_list']=$this->Order_model->expiry_list($date1);
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('expiry_list1');
    }
	
	public function sparecharge_list(){ 
		//$m_data['enggname_list']=$this->Report_model->engnamelist();
		$m_data['sparename_list']=$this->Report_model->sparenamelist();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('sparecharge_list',$m_data);
    }
	
	public function engineerreport_list(){ 
		$m_data['enggname_list']=$this->Report_model->engnamelist();
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('engineerreport_list',$m_data);
    }
	
	public function engineer_servicereport_list(){ 
		$m_data['enggname_list']=$this->Report_model->engnamelist();
		$m_data['status_list']=$this->Report_model->engg_status_list();
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('engineer_servicereport_list',$m_data);
    }
	
	public function stampingreport_list(){
		
		$m_data['employee']=$this->Report_model->emp_list();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('stampingreport',$m_data);
    }
	
	public function monthlyreport_list(){
		
		//$m_data['employee']=$this->stampingreport_model->emp_list();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('monthlyreport_list');
    }
	
	public function serial_list()
	{
		$data1['serial_list']=$this->Report_model->get_serial();
		$data1['model']=$this->Report_model->modellist();
		$data1['customer']=$this->Report_model->custlist();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('serialreport_list');
	}
	
	public function customerreport_list(){
		$data1['zone']=$this->Report_model->service_zone_list();
		$data1['customer_type']=$this->Report_model->cust_type_list();
		$data1['product']=$this->Report_model->product_list();
		//$m_data['employee']=$this->stampingreport_model->emp_list();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('customerreport_list',$data1);
    }
	
	public function add_user_cate(){
		$data1['get_categories']=$this->User_model->get_categories();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('add_user_cate',$data1);
    }
	
	public function user_cate_list(){ 
		$data1['get_users']=$this->User_model->get_users();
		$data1['get_categories']=$this->User_model->get_categories();
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header', $data1);
		$this->load->view('user_cate_list', $data1);
    }
	
	
}

