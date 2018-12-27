<?php 
class report extends CI_Controller{

    function __construct(){
     parent::__construct();
    $this->load->helper('url');
    $this->load->model('Report_model');
  
	
    }
	
	//service report
	function get_customer_name()
	{
		$a=array();
		
		if($this->input->post('site') <> ''){
      $a[]="req.site= '".$this->input->post('site')."' AND ";
            
   }
   
   if($this->input->post('model') <> ''){
      $a[]="pro.id= '".$this->input->post('model')."' AND ";
            
   }
   
   
   if(($this->input->post('from') <> '') and ($this->input->post('to') <> '')){
       $a[]="service_request.created_on between '".$this->input->post('from')."' and '".$this->input->post('to')."' and ";
   }
   
   
   $wh= 'where '.substr(implode('',$a),0,-5);
    
	//print_r($wh);exit;
		//$from_date = $this->input->post('from');
		//$to_date = $this->input->post('to');
		//$site = $this->input->post('site');
		$data['modellist']=$this->Report_model->modellist();
		//$model = $this->input->post('model');
		
		$data['report'] = $this->Report_model->get_report($wh);
		$data['user_dat'] = $this->session->userdata('login_data');
		
		$this->load->view('templates/header',$data);
		$this->load->view('report_cust_list',$data);
	}
	
	//sparepurchase
	public function getpurchase()
	{
		
		
		
		$a=array();
		
		if($this->input->post('spare') <> ''){
       $a[]="engg.spare_id= ".$this->input->post('spare')." and ";
            
   }
   
         if(($this->input->post('from') <> '') and ($this->input->post('to') <> '')){
       $a[]="engg.purchase_date between '".$this->input->post('from')."' and '".$this->input->post('to')."23:59:59.993' and ";
   }

	//$wh= 'where '.substr(implode('',$a),0,-5);
	$wh= 'where ' .substr(implode('',$a),0,-5);
		
		
		$m_data['purchase'] = $this->Report_model->get_purchase($wh);
		$data['user_dat'] = $this->session->userdata('login_data');
		//print_r($data['report']);exit;
		//print_r($m_data['purchase']);exit;
		$this->load->view('templates/header',$data);
		$this->load->view('sparepurchase',$m_data);
	}
	//spare report
	
	function get_engineer_name()
	{
		$a=array();
		
		if($this->input->post('spare') <> ''){
       $a[]="spares.id= ".$this->input->post('spare')." and ";
            
   }
   
         if(($this->input->post('from') <> '') and ($this->input->post('to') <> '')){
       $a[]="service_request.request_date between '".$this->input->post('from')."' and '".$this->input->post('to')."23:59:59.993' and ";
   }

	//$wh= 'where '.substr(implode('',$a),0,-5);
	$wh= 'where service_request.active_req = '.'0' . ' AND ' .substr(implode('',$a),0,-5);
		
		$m_data['enggname_list']=$this->Report_model->engnamelist();
		$m_data['sparename_list']=$this->Report_model->sparenamelist();
		
		$m_data['sparereport'] = $this->Report_model->get_sparereport($wh);
		$data['user_dat'] = $this->session->userdata('login_data');
		//echo "<pre>";
		//print_r($m_data['sparereport']);exit;
		$this->load->view('templates/header',$data);
		$this->load->view('sparereport_engg_list',$m_data);
	}
	
	
		//sparecharge list
	public function getcharge_list()
	{
	$b=array();
		
		if($this->input->post('spare') <> ''){
       $b[]="spa.id= ".$this->input->post('spare')." and ";
            
   }
   
   /* if($this->input->post('site') <> ''){
       $b[]="service.site= '".$this->input->post('site')."' AND ";
            
   } */
   
   if($this->input->post('sersite') <> ''){
       $b[]="service.machine_status= '".$this->input->post('sersite')."' AND ";
            
   }
   
         if(($this->input->post('from') <> '') and ($this->input->post('to') <> '')){
       $b[]="req.request_date between '".$this->input->post('from')."' and '".$this->input->post('to')."' and ";
   }
   $whxg= 'where '.substr(implode('',$b),0,-5);
   
   //print_r($whxg);
		
		$data['name']=$this->Report_model->getsparecharge_list($whxg);
		$data['user_dat'] = $this->session->userdata('login_data');
		//print_r($data['report']);exit;
		$this->load->view('templates/header',$data);
		$this->load->view('sparechargereport_data',$data);
	
	}
	
	
	
	
	
	//spare engineer
	public function get_engineerdate()
	{
		$b=array();
		
		if($this->input->post('name') <> ''){
			$b[]="emp.id= ".$this->input->post('name')." and ";
        }

		if($this->input->post('sname') <> ''){
			$b[]="engg.spare_id= ".$this->input->post('sname')." and ";
        }
   	
		
        if(($this->input->post('from') <> '') and ($this->input->post('to') <> '')){
			$b[]="engg.engineer_date between '".$this->input->post('from')."' and '".$this->input->post('to')."' and ";
		}
		//$whxg= 'where '.substr(implode('',$b),0,-5);
		$whxg= 'where req.active_req = '.'0' . ' AND ' .substr(implode('',$b),0,-5);
		
		/*$engg_from=$this->input->post('from');
		$engg_to=$this->input->post('to');
		$name=$this->input->post('name');*/
		$data['name']=$this->Report_model->get_engineerreport($whxg);
		$data['user_dat'] = $this->session->userdata('login_data');
		//print_r($data['report']);exit;
		$this->load->view('templates/header',$data);
		$this->load->view('enggreport_data',$data);
	}
	
	
	//Engineer Report
	public function get_engineerreport()
	{
		$b=array();
		
		if($this->input->post('name')!=''){
			$b[]="service_request_details.assign_to= ".$this->input->post('name')." and ";
        }
		
		if($this->input->post('work_status')!=''){
			$b[]="service_request.status= ".$this->input->post('work_status')." and ";
        }
		
		if($this->input->post('from')!="" && $this->input->post('to')!=""){
			$b[]="service_request.request_date between '".$this->input->post('from')."' and '".$this->input->post('to')."' and ";
		}
		
		
       /* if(($this->input->post('from') <> '') and ($this->input->post('to') <> '')){
			$b[]="service_request.request_date between '".$this->input->post('from')."' and '".$this->input->post('to')."' and ";
		}
		if($this->input->post('from')<> '' && $this->input->post('to')<> ''){
			$b[]="service_request.request_date between '".$this->input->post('from')."' and '".$this->input->post('to')."23:59:59.993 ' and ";
		}*/
		
		
		//$whxg= 'where '.substr(implode('',$b),0,-5);
		$whxg= 'where service_request.active_req = '.'0' . ' AND ' .substr(implode('',$b),0,-5);
		
		
		$data['name']=$this->Report_model->get_engineerreport1($whxg);
		$data['user_dat'] = $this->session->userdata('login_data');
		
		$this->load->view('templates/header',$data);
		$this->load->view('enggreport1_data',$data);
	}
	
	
	
	
	
	//stamping report
	function get_stamping()
	{
		
		$from_date = $this->input->post('from');
		
		$to_date = $this->input->post('to');
		
		$employee = $this->input->post('employee');
		//echo $employee;exit;
		
		$data['report'] = $this->Report_model->getstamping_report($from_date,$to_date);
		
		$data['user_dat'] = $this->session->userdata('login_data');
		//print_r($data['report']);exit;
		$this->load->view('templates/header',$data);
		$this->load->view('stampingreport_data',$data);
	}
	
	//stamping Monthly report
		function get_monthreport()
	{
		
		$from_date = $this->input->post('from');
		
		$to_date = $this->input->post('to');
		
		$data['month'] = $this->Report_model->getstampingmonth_report($from_date,$to_date);
		
		$data['user_dat'] = $this->session->userdata('login_data');
		
		$this->load->view('templates/header',$data);
		$this->load->view('monthreport_data',$data);
		
		
	}
	
	function get_customerreport()
	{
		
		$b=array();
		
		if($this->input->post('customer_type') <> ''){
			$b[]="customer_type.id= ".$this->input->post('customer_type')." and ";
        }
   
		if($this->input->post('zone') <> ''){
			$b[]="loc.id= '".$this->input->post('zone')."' and ";
		}
		
		if($this->input->post('cal_ref') <> ''){
			$b[]="customers.cal_ref= '".$this->input->post('cal_ref')."' and ";
		}
		
		if(($this->input->post('from') <> '') and ($this->input->post('to') <> '')){
			$b[]="customers.created_on between '".$this->input->post('from')."' and '".$this->input->post('to')."23:59:59.993 ' and ";
		}
   
		$whxg= 'where '.substr(implode('',$b),0,-5);
		
		
		$data['customerreport'] = $this->Report_model->getcustomer_report($whxg);
		
		$data['user_dat'] = $this->session->userdata('login_data');
		
		$this->load->view('templates/header',$data);
		$this->load->view('customerreport_data',$data);
		
	}
	
	function get_agingreport()
	{
		$from = $this->input->post('from');
		
		$to = $this->input->post('to');
		
		$range = $this->input->post('range');
		
		//$sersite = $this->input->post('sersite');
		
		$r = explode('-',$range);
		 
		$r1 = $r[0];
		
		$r2 = $r[1];
		
		
		$model = $this->input->post('model');
		
		$customer = $this->input->post('customer');
		
		$category = $this->input->post('product');
		
		$emp = $this->input->post('employee');
		
		$zone = $this->input->post('zone');
		  
		  
		/* $date = date('Y-m-d');
		 
		 
		
		$b=array();
		
		if(!empty($this->input->post('sersite'))){
       $b[]="service.site= '".$this->input->post('sersite')."' AND ";
            
   }
		
		
		if(!empty($this->input->post('model'))){
       $b[]="pro.id= ".$this->input->post('model')." AND ";
            
   }
   
   if(!empty($this->input->post('customer'))){
       $b[]="cust.id= ".$this->input->post('customer')." AND ";
            
   }
   
   if(!empty($this->input->post('product'))){
       $b[]="cate.id= ".$this->input->post('product')." AND ";
            
   }
   
   if(!empty($this->input->post('employee'))){
       $b[]="emp.id= ".$this->input->post('employee')." AND ";
            
   }
   
   if(!empty($this->input->post('zone'))){
       $b[]="zone.id= ".$this->input->post('zone')." AND ";
            
   }
   
         $range = $this->input->post('range');
		 
		 $r = explode('-',$range);
		 
		$r1 = $r[0];
		
		$r2 = $r[1];
		 
		 $from = $this->input->post('from');
		 
		// echo $from;exit;
		 
		// $diff34 = dateDiff ($date,$from);
		 
		 //$days = $diff34->d;
		 
		// echo $diff34;exit;
   
		
		//$dat = date('Y-m-d',strtotime($from.'+'.$range.'days'));
		
		if(!empty($this->input->post('from')) and !empty($date)){
			
       $b[]="req.request_date >= '".$this->input->post('from')."' between '".$r1."' and '".$r2."' and ";
   }
		
		
		$whxg= 'where '.substr(implode('',$b),0,-5);
		
		//print_r($whxg);exit;
		//$data['agingreport'] = $this->Report_model->getaging_report($category,$zone,$emp,$customer,$model,$from,$dat);
		
		$data['agingreport'] = $this->Report_model->getaging_report($whxg);*/
		
		$data['agingreport'] = $this->Report_model->getaging_report($from,$r1,$r2,$model,$customer,$category,$emp,$zone);
		
		$data['category'] = $this->Report_model->getprob_category();
		
		$data['user_dat'] = $this->session->userdata('login_data');
		
		$this->load->view('templates/header',$data);
		$this->load->view('chargereport_data',$data);
	}
	
	//revenue report
	
	public function get_revenuereport1()
	{
	
		$b=array();
		
		/* if($this->input->post('sersite')!=""){
			$b[]="service_request_details.machine_status= '".$this->input->post('sersite')."' AND ";
		} */
		
		
		
			$b[]="service_request.status= '3' AND ";
		
		
		 if($this->input->post('spare_status')=="w_spare"){
			$b[]="quote_review_spare_details.spare_id!= '0' AND ";
		}else{
			$b[]="quote_review_spare_details.spare_id = 0 AND ";
		}
		
		if($this->input->post('area_wise')!=""){
			$b[]="customer_service_location.area= '".$this->input->post('area_wise')."' AND ";
		}
		
		if($this->input->post('brand_name')!=""){
			$b[]="service_request_details.brand_id= '".$this->input->post('brand_name')."' AND ";
		}
		
		if($this->input->post('model')!=""){
			$b[]="service_request_details.model_id= '".$this->input->post('model')."' AND ";
		}
		
		if($this->input->post('prod_category')!=""){
			$b[]="service_request_details.cat_id= '".$this->input->post('prod_category')."' AND ";
		}
		
		if($this->input->post('zone')!=""){
			$b[]="service_request_details.zone= '".$this->input->post('zone')."' AND ";
		}
		
		if($this->input->post('problem')!=""){
			$b[]="service_request_details.problem= '".$this->input->post('problem')."' AND ";
		}
		
		
		if($this->input->post('from')!="" && $this->input->post('to')!=""){
			$b[]="service_request.request_date between '".$this->input->post('from')."' and '".$this->input->post('to')."23:59:59.993' and ";
		}
   
		//$whxg= 'where '.substr(implode('',$b),0,-5);
		$whxg= 'where service_request.active_req = '.'0' . ' AND ' .substr(implode('',$b),0,-5);
		
		$data['revenuereport'] = $this->Report_model->getrevenue1_report($whxg);
		//$data1['status']= $this->Report_model->getstatus();
		
		$data['spare_status'] = $this->input->post('spare_status');
		
		$data['user_dat'] = $this->session->userdata('login_data');
		
		$this->load->view('templates/header',$data);
		$this->load->view('revenuereport1_data',$data);
	}
	
	
	//service report updated
	public function get_revenuereport()
	{ 	
		$b=array();
		
		/* if($this->input->post('sersite')!=""){
			$b[]="service_request_details.machine_status= '".$this->input->post('sersite')."' AND ";
		} */
		
		if($this->input->post('work_status')!=""){
			$b[]="service_request.status= '".$this->input->post('work_status')."' AND ";
		}
		
		if($this->input->post('site')!=""){
			$b[]="service_request_details.site= '".$this->input->post('site')."' AND ";
		}
		
		if($this->input->post('area_wise')!=""){
			$b[]="customer_service_location.area= '".$this->input->post('area_wise')."' AND ";
		}
		
		if($this->input->post('brand_name')!=""){
			$b[]="service_request_details.brand_id= '".$this->input->post('brand_name')."' AND ";
		}
		
		if($this->input->post('model')!=""){
			$b[]="service_request_details.model_id= '".$this->input->post('model')."' AND ";
		}
		
		if($this->input->post('prod_category')!=""){
			$b[]="service_request_details.cat_id= '".$this->input->post('prod_category')."' AND ";
		}
		
		if($this->input->post('zone')!=""){
			$b[]="service_request_details.zone= '".$this->input->post('zone')."' AND ";
		}
		
		if($this->input->post('problem')!=""){
			$b[]="service_request_details.problem= '".$this->input->post('problem')."' AND ";
		}
		
		
		if($this->input->post('from')!="" && $this->input->post('to')!=""){
			$b[]="service_request.request_date between '".$this->input->post('from')."' and '".$this->input->post('to')."23:59:59.993' and ";
		}
   
		$whxg= 'where service_request.active_req = '.'0' . ' AND ' .substr(implode('',$b),0,-5);
		//$whxg= 'where service_request.active_req = '.'0';
		
		$data['revenuereport'] = $this->Report_model->getrevenue_report($whxg);
		
		$data['user_dat'] = $this->session->userdata('login_data');
		
		$this->load->view('templates/header',$data);
		$this->load->view('revenuereport_data',$data);
	}
	
	//preventive maintanance Report
	public function get_preventivereport()
	{ 	
		$b=array();
		
		 if($this->input->post('ename')!=""){
			$b[]="service_request_details.accepted_engg_id= '".$this->input->post('ename')."' AND ";
		} 
		
		if($this->input->post('work_status')!=""){
			$b[]="service_request.status= '".$this->input->post('work_status')."' AND ";
		}
		
		if($this->input->post('site')!=""){
			$b[]="service_request_details.site= '".$this->input->post('site')."' AND ";
		}
		
		if($this->input->post('area_wise')!=""){
			$b[]="customer_service_location.area= '".$this->input->post('area_wise')."' AND ";
		}
		
		if($this->input->post('brand_name')!=""){
			$b[]="service_request_details.brand_id= '".$this->input->post('brand_name')."' AND ";
		}
		
		if($this->input->post('model')!=""){
			$b[]="service_request_details.model_id= '".$this->input->post('model')."' AND ";
		}
		
		if($this->input->post('prod_category')!=""){
			$b[]="service_request_details.cat_id= '".$this->input->post('prod_category')."' AND ";
		}
		
		if($this->input->post('zone')!=""){
			$b[]="service_request_details.zone= '".$this->input->post('zone')."' AND ";
		}
		
		if($this->input->post('problem')!=""){
			$b[]="service_request_details.problem= '".$this->input->post('problem')."' AND ";
		}
		
		
		if($this->input->post('from')!="" && $this->input->post('to')!=""){
			$b[]="service_request.request_date between '".$this->input->post('from')."' and '".$this->input->post('to')."23:59:59.993' and ";
		}
		//$b[]="service_request_details.service_type='Preventive'AND";
   
		$whxg= 'where service_request.active_req = '.'0' . ' AND ' .substr(implode('',$b),0,-5);
		//$whxg= 'where service_request.active_req = '.'0';
		
		$data['preventivereport'] = $this->Report_model->getpreventive_report($whxg);
		
		$data['user_dat'] = $this->session->userdata('login_data');
		
		$this->load->view('templates/header',$data);
		$this->load->view('preventive_report_data',$data);
	}




	//Service Machines Report
	public function get_ser_machreport()
	{ 
	
		if($this->input->post('from')!=""){
			$from = $this->input->post('from');
		}else{
			$from = '';
		}
		
		if($this->input->post('to')!=""){
			$to = $this->input->post('to');
		}else{
			$to = '';
		}
		
		if($this->input->post('model')!=""){
			$model = $this->input->post('model');
		}else{
			$model = '';
		}
		
		if($this->input->post('prod_category')!=""){
			$prod_category = $this->input->post('prod_category');
		}else{
			$prod_category = '';
		}
		
		if($this->input->post('sersite')!=""){
			$machine_status = $this->input->post('sersite');
		}else{
			$machine_status = '';
		}
		
		if($this->input->post('cust_type')!=""){
			$cust_type = $this->input->post('cust_type');
		}else{
			$cust_type = '';
		}
		
		if($this->input->post('cust_name')!=""){
			$cust_name = $this->input->post('cust_name');
		}else{
			$cust_name = '';
		}
		
		if($this->input->post('service_zone')!=""){
			$service_zone = $this->input->post('service_zone');
		}else{
			$service_zone = '';
		}
		
		
		$data['get_sermachine_report'] = $this->Report_model->get_sermachine_report($from,$to,$model,$prod_category,$machine_status,$cust_type,$cust_name,$service_zone);
		$data['spare_statusm'] = $this->input->post('sersite');
		$data['user_dat'] = $this->session->userdata('login_data');
		
		$this->load->view('templates/header',$data);
		$this->load->view('sermachinereport_data',$data);
	}
	
	//serial report
	public function get_serialreport()
	{
		$b = array();
		
		  if($this->input->post('serialname') <> '')
		  {
			$b[]="det.serial_no= '".$this->input->post('serialname')."' AND ";
            
		  }
		  
		  if($this->input->post('customer_name') <> '')
		  {
			$b[]="customers.id= ".$this->input->post('customer_name')." AND ";
            
		  }
		  
		  if($this->input->post('model_name') <> '')
		  {
			$b[]="products.id= ".$this->input->post('model_name')." AND ";
            
		  }
   
         if(($this->input->post('from') <> '') and ($this->input->post('to') <> ''))
		 {
			$b[]="order_details.purchase_date between '".$this->input->post('from')."' and '".$this->input->post('to')."23:59:59.993' and ";
		 }
		 
			$whxg= 'where '.substr(implode('',$b),0,-5);
			
			//print_r($whxg);exit;
			
			$data['list'] = $this->Report_model->getserial_report($whxg);
		
			$data['user_dat'] = $this->session->userdata('login_data');
		
			$this->load->view('templates/header',$data);
			$this->load->view('serailreport_data',$data);
	}
	
	public function get_serialByStatus()
	{
			$id=$this->uri->segment(3);
			
			$data['serial'] = $this->Report_model->getpopup_list($id);
			
			$data['user_dat'] = $this->session->userdata('login_data');
			$this->load->view('serailpopup_data',$data);
	}
	
	public function all_spare(){ 
			$from=$this->input->post('from');
			$to=$this->input->post('to');
			
		$data1['engspareqty']=$this->Report_model->engspareqty();
		$data1['sparelist']=$this->Report_model->sparelist();
		$data1['sparelist1']=$this->Report_model->sparelist1($from,$to);
		//$data1['sparelist_engg']=$this->Spare_model->sparelist_engg();
		//$data1['getmodels']=$this->Spare_model->getmodels();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('all_spare_report_list',$data1); 
    }
	
	
	
	
	
	
	}