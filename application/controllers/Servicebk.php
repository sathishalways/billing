<?php 
class service extends CI_Controller{

    function __construct(){
     parent::__construct();
    $this->load->helper('url');
    $this->load->model('Service_model');

    }
    
    public function get_zone_list(){
		$id=$this->input->post('keyword');//echo $id; exit;
		$data['zone_list']=$this->Service_model->get_zons($id);
		$this->load->view('zone_list',$data);
		
    }
	
	
	
    public function add_service_req(){ //echo "<pre>";print_r($_POST);exit;
		
		$req=$this->input->post('req_id');
		$check_req=$this->Service_model->check_req($req);
		
		if(empty($check_req)){
		
        $data['request_id']=$this->input->post('req_id');
		$data['cust_name']=$this->input->post('customer_id');
		$data['mobile']=$this->input->post('mobile');
		$data['email_id']=$this->input->post('email_id');
		$data['request_date']=$this->input->post('datepicker');
		$data['status']=$this->input->post('status');
		
		date_default_timezone_set('Asia/Calcutta');
		$data['created_on'] = date("Y-m-d H:i:s");
		$data['updated_on'] = date("Y-m-d H:i:s");
		
		$data111['user_dat'] = $this->session->userdata('login_data');
		$data['user_id'] = $data111['user_dat'][0]->id;
		
		$req_autoid=$this->input->post('req_id');
		
		$customer_mobile=$this->input->post('mobile');
		
		$result=$this->Service_model->add_services($data);
		$res = sprintf("%05d", $result);
		
		if($result){
			
			/* if(isset($customer_mobile) && $customer_mobile!=""){
			   $sms= "Your service request ID ".$req." created. Pls contact 9841443300 for Quote/status/delivery of your machine. <br>SRScales<br> 64606666";
			   $messages	= strip_tags($sms);
			   $messages = str_replace(' ','%20',$messages);
			
			$msg = file_get_contents("http://bhashsms.com/api/sendmsg.php?user=srscales&pass=9841038810&sender=SRSCAL&phone=$customer_mobile&text=$messages&priority=sdnd&stype=normal");
				
			} */
			
		$data1['request_id']=$res;
		$data1['serial_no']=$this->input->post('serial_no');
       
	    $data1['cat_id']=$this->input->post('categoryid');
        $data1['subcat_id']=$this->input->post('subcategoryid');
        $data1['brand_id']=$this->input->post('brandid');
        $data1['model_id']=$this->input->post('modelid');
        
		if($this->input->post('warranty_date')!=""){
			$data1['warranty_date'] = $this->input->post('warranty_date');
		}else{
			$data1['warranty_date'] = "";
		}
        $data1['machine_status']=$this->input->post('machine_status');
		$data1['site']=$this->input->post('site');
		
		$sitee = $this->input->post('site');
		
		if($sitee == 'Stamping'){
			$stamp_data['req_id'] = $res;
			$stamp_data['year'] = $this->input->post('year');
			$stamp_data['quarter'] = $this->input->post('qtr');
			$stamp_data['kg'] = $this->input->post('kg');
			$stamp_data['stamping_charge'] = $this->input->post('stamping_charge');
			$stamp_data['agn_charge'] = $this->input->post('agn_charge');
			$stamp_data['penalty'] = $this->input->post('penalty');
			$stamp_data['conveyance'] = $this->input->post('conveyance_charge');
			
			$stamp_data['tot_charge'] = $this->input->post('tot_charge');
			
			$stamp_data['stamping_received']=$this->input->post('stamping_received');
			
			date_default_timezone_set('Asia/Calcutta');
			$stamp_data['created_on'] = date("Y-m-d H:i:s");
			$stamp_data['updated_on'] = date("Y-m-d H:i:s");
		
			if (is_array($stamp_data['stamping_received'])){
					$stamp_data['stamping_received']= implode(",",$stamp_data['stamping_received']);
				}else{
					$stamp_data['stamping_received']="";
				}
			
			$this->Service_model->add_stamping_info($stamp_data);
		}
		
		$data1['service_type']=$this->input->post('service_type');
		//$data1['service_cat']=$this->input->post('service_cat');
		$ser_det = $this->input->post('service_cat');
		$ser = explode("-",$ser_det);
		$data1['service_cat'] = $ser['0'];
		
		$data1['zone']=$this->input->post('locid');
		
		$data1['problem']=$this->input->post('probi');
		
		if (is_array($data1['problem'])){
					$data1['problem']= implode(",",$data1['problem']);
				}else{
					$data1['problem']="";
				}
		
		//$data1['problem']=$this->input->post('prob');
		//$data1['assign_to']=$this->input->post('assign_to');
		$data1['service_priority']=$this->input->post('service_priority');
		$data1['blank_app']=$this->input->post('blank_app');
		
		$emp_det = $this->input->post('assign_to');
		$emp = explode(",",$emp_det);
		$data1['assign_to'] = $emp['0']; 
		
		$data1['received']=$this->input->post('received');
		if (is_array($data1['received'])){
					$data1['received']= implode(",",$data1['received']);
				}else{
					$data1['received']="";
				}
				
		
		$data1['notes']=$this->input->post('notes');
		//$countids=$this->input->post('countids');
		
		
		
		$result1=$this->Service_model->add_service_details($data1);
		}
		
		if($result){
		  if($sitee != 'Stamping'){
              echo "<script>alert('Service Request Added. Your Request ID is: '+'".$req_autoid."');window.location.href='".base_url()."pages/service_req_list';window.open('".base_url()."service/print_service/".$res."')</script>";
		  }else{
			  echo "<script>alert('Service Request Added. Your Request ID is: '+'".$req_autoid."');window.location.href='".base_url()."pages/service_req_list';window.open('".base_url()."service/stamping_print_service/".$res."')</script>";
		  }
     }
	 
		}else{
			echo "<script>alert('Service Request ID already exists');window.location.href='".base_url()."pages/add_service_req';</script>";
		}
    
    }
	public function print_service(){ 
		$id=$this->uri->segment(3);
		
		$data['list']=$this->Service_model->getservicereqbyid($id);
		//$data['list1']=$this->Service_model->getservicereqDetailsbyid($id);
		
		$data['list1']=$this->Service_model->getservicereqDetailsbyid($id);
		   if(!empty($data['list1'])){
			   $data['list7']=$this->Service_model->getservicereqDetailsbyid($id);
		   }else{
			   $data['list7']=$this->Service_model->getservicereqDetailsbyid1($id);
		   }
		
		
		$data['list2']=$this->Service_model->getserviceEmpbyid($id);
		$data['list_serialnos']=$this->Service_model->list_serialnos();
		   
		$data['customerlist']=$this->Service_model->customerlist();
		   
		$data['servicecat_list']=$this->Service_model->print_servicecat_list($id);
		$data['problemlist']=$this->Service_model->print_problemlist($id);
		
		$data['problemlist1']=$this->Service_model->problemlist();
		
		$data['employee_list']=$this->Service_model->employee_list();
		$data['accessories_list']=$this->Service_model->accessories_list();
		
		
		
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('print_request',$data);
    }
	
	
	public function stamping_print_service(){ 
		$id=$this->uri->segment(3);
		
		$data['list']=$this->Service_model->getservicereqbyid($id);
		//$data['list1']=$this->Service_model->getservicereqDetailsbyid($id);
		
		$data['list1']=$this->Service_model->getservicereqDetailsbyid($id);
		   if(!empty($data['list1'])){
			   $data['list7']=$this->Service_model->getservicereqDetailsbyid($id);
		   }else{
			   $data['list7']=$this->Service_model->getservicereqDetailsbyid1($id);
		   }
		
		
		$data['list2']=$this->Service_model->getserviceEmpbyid($id);
		$data['list_serialnos']=$this->Service_model->list_serialnos();
		   
		$data['customerlist']=$this->Service_model->customerlist();
		   
		$data['servicecat_list']=$this->Service_model->print_servicecat_list($id);
		$data['problemlist']=$this->Service_model->print_problemlist($id);
		
		$data['stamping_details']=$this->Service_model->stamping_details($id);
		$data['problemlist1']=$this->Service_model->problemlist();
		
		$data['employee_list']=$this->Service_model->employee_list();
		$data['accessories_list']=$this->Service_model->accessories_list();
		
		
		
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('stamping_print_service',$data);
    }
	
	
	public function get_custbyid(){
		$id=$this->input->post('id');//echo $id; exit;
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Service_model->get_customerdetails($id)));
		   
		
		//$query=$this->Product_model->getsub_cat($id);
        //return $query;
    }
	
	public function get_cus(){
		$id=$this->input->post('id');//echo $id; exit;
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Service_model->get_custo()));
		   
		
		//$query=$this->Product_model->getsub_cat($id);
        //return $query;
    }
	
	
	public function get_orderbyid(){
		$id=$this->input->post('serialno');//echo $id; exit;
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Service_model->get_orderdetails($id)));
		   
		
		//$query=$this->Product_model->getsub_cat($id);
        //return $query;
    }
	
	public function get_orderbyid1(){
		$id=$this->input->post('id');//echo $id; exit;
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Service_model->get_orderdetails1($id)));
		   
		
		//$query=$this->Product_model->getsub_cat($id);
        //return $query;
    }
	
	public function get_servicecatbyid1(){
		$id=$this->input->post('id');//echo $id; exit;
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Service_model->get_servicecatdetails1($id)));
		   
		
		//$query=$this->Product_model->getsub_cat($id);
        //return $query;
    }
	
	public function get_probcatbyid1(){
		$id=$this->input->post('id');//echo $id; exit;
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Service_model->get_probcatdetails1($id)));
		   
		
		//$query=$this->Product_model->getsub_cat($id);
        //return $query;
    }
	
	public function get_servicecatbyid(){
		$id=$this->input->post('serialno');//echo $id; exit;
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Service_model->get_servicecatdetails($id)));
		   
		
		//$query=$this->Product_model->getsub_cat($id);
        //return $query;
    }
	
	public function get_probcatbyid(){
		$id=$this->input->post('serialno');//echo $id; exit;
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Service_model->get_probcatdetails($id)));
		   
		
		//$query=$this->Product_model->getsub_cat($id);
        //return $query;
    }
	
	public function addrow(){ 
		 $data['count']=$this->input->post('countid');
		 //echo "Count: ".$data['count'];
		$data['customerlist']=$this->Service_model->customerlist();
		$data['list_serialnos']=$this->Service_model->list_serialnos();
		$data['servicecat_list']=$this->Service_model->servicecat_list();
		$data['problemlist']=$this->Service_model->problemlist();
		$data['employee_list']=$this->Service_model->employee_list();
		
		 $this->load->view('add_service_req_row',$data);
    }
	
	public function update_service_req(){ 
		   $id=$this->uri->segment(3);
		   $data['list']=$this->Service_model->getservicereqbyid($id);
		   //$data['list1']=$this->Service_model->getservicereqDetailsbyid($id);
		   
		   $data['list1']=$this->Service_model->getservicereqDetailsbyid($id);
		   if(!empty($data['list1'])){
			   $data['list7']=$this->Service_model->getservicereqDetailsbyid($id);
		   }else{
			   $data['list7']=$this->Service_model->getservicereqDetailsbyid1($id);
		   }
		   
		   $data['get_mods']=$this->Service_model->get_mods();
		   
		   $data['list2']=$this->Service_model->getserviceEmpbyid($id);
		   $data['list_serialnos']=$this->Service_model->list_serialnos();
		   $data['service_typelist']=$this->Service_model->service_typelist();
		   
		   $data['customerlist']=$this->Service_model->customerlist();
		   
		   $data['servicecat_list']=$this->Service_model->servicecat_list();
		   $data['problemlist']=$this->Service_model->problemlist();
		   $data['employee_list']=$this->Service_model->employee_list();
		   $data['accessories_list']=$this->Service_model->accessories_list();
		   
		   $data['stamping_details']=$this->Service_model->stamping_details($id);
		   
		   $data1['user_dat'] = $this->session->userdata('login_data');
		   $this->load->view('templates/header',$data1);
		   $this->load->view('edit_service_req',$data);
		
    }
	
	public function update_service_status(){ 
		  $reqid=$this->input->post('reqid');
		 //$this->input->post('procatid');
		 
		 $data=array(
            'status'=>$this->input->post('statusid')
        );
		 $s = $this->Service_model->update_service_status($data,$reqid);
		
    }
	
	public function get_serials(){
		$id=$this->input->post('id');//echo $id; exit;
		//$cust_id=$this->input->post('cust_id');
		
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Service_model->get_serialdetails($id)));
		 
    }
	
	public function get_serialnos(){
		$id=$this->input->post('id');//echo $id; exit;
		$cust_id=$this->input->post('cust_id');
		
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Service_model->get_servicenodetails($id,$cust_id)));
		 
    }
	
	public function get_modelnos(){
		$id=$this->input->post('id');//echo $id; exit;
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Service_model->get_modelnos($id)));
		 
    }
	
	
	public function edit_service_req(){ 
		
		date_default_timezone_set('Asia/Calcutta');
		$updated_on = date("Y-m-d H:i:s");
		
		$data111['user_dat'] = $this->session->userdata('login_data');
		$user_id = $data111['user_dat'][0]->id;
		
		
		$data=array(
            'request_id'=>$this->input->post('req_id'),
            'cust_name'=>$this->input->post('cust_name'),
            'mobile'=>$this->input->post('mobile'),
			'email_id'=>$this->input->post('email_id'),
            'request_date'=>$this->input->post('datepicker'),
			'updated_on'=>$updated_on,
			'user_id'=>$user_id
        );
        $id=$this->input->post('servicereqid');
		$rowid=$this->input->post('servicereqdetailid');
		
		$this->Service_model->update_service_request($data,$id);
		
		if($id){
		$data1['request_id']=$id;
		$data1['serial_no']=$this->input->post('serial_no');
       
	    $data1['cat_id']=$this->input->post('categoryid');
        $data1['subcat_id']=$this->input->post('subcategoryid');
        $data1['brand_id']=$this->input->post('brandid');
        $data1['model_id']=$this->input->post('modelid');
        //$data1['warranty_date']=$this->input->post('warranty_date');
		
		if($this->input->post('warranty_date')!=""){
			$data1['warranty_date'] = $this->input->post('warranty_date');
		}else{
			$data1['warranty_date'] = "";
		}
		
        $data1['machine_status']=$this->input->post('machine_status');
		$data1['site']=$this->input->post('site');
		
		
		$sitee = $this->input->post('site');
		
		if($sitee == 'Stamping'){
			//$stamp_data['req_id'] = $res;
			$stamp_data['year'] = $this->input->post('year');
			$stamp_data['quarter'] = $this->input->post('qtr');
			$stamp_data['kg'] = $this->input->post('kg');
			$stamp_data['stamping_charge'] = $this->input->post('stamping_charge');
			$stamp_data['agn_charge'] = $this->input->post('agn_charge');
			$stamp_data['penalty'] = $this->input->post('penalty');
			$stamp_data['conveyance'] = $this->input->post('conveyance_charge');
			
			$stamp_data['tot_charge'] = $this->input->post('tot_charge');
			
			$stamp_data['stamping_received']=$this->input->post('stamping_received');
		
			if (is_array($stamp_data['stamping_received'])){
					$stamping_received= implode(",",$stamp_data['stamping_received']);
				}else{
					$stamping_received="";
				}
			
			
			$data8=array(
            'year'=>$this->input->post('year'),
            'quarter'=>$this->input->post('qtr'),
            'kg'=>$this->input->post('kg'),
			'stamping_charge'=>$this->input->post('stamping_charge'),
            'agn_charge'=>$this->input->post('agn_charge'),
			'penalty'=>$this->input->post('penalty'),
			'conveyance'=>$this->input->post('conveyance_charge'),
			'tot_charge'=>$this->input->post('tot_charge'),
			'stamping_received'=>$stamping_received,
			'updated_on'=>$updated_on,
			'user_id'=>$user_id
        );
			
			$this->Service_model->update_stamping_details($data8,$id);
		}
		
		
		
		$data1['service_type']=$this->input->post('service_type');
		//$data1['service_cat']=$this->input->post('service_cat');
		$ser_det = $this->input->post('service_cat');
		$ser = explode("-",$ser_det);
		$data1['service_cat'] = $ser['0'];
		
		$data1['zone']=$this->input->post('locid');
		
		$proble=$this->input->post('probi');
		/* echo "<pre>";
		print_r($data1['problem']);
		exit; */
		if (is_array($proble)){
					$data1['problem']= implode(",",$proble);
				}else{
					$data1['problem']="";
				}
		//$data1['problem']=$this->input->post('prob');
		//$data1['assign_to']=$this->input->post('assign_to');
		$data1['service_priority']=$this->input->post('service_priority');
		$data1['blank_app']=$this->input->post('blank_app');
		
		 $emp_det = $this->input->post('assign_to');
		$emp = explode(",",$emp_det);
		$data1['assign_to'] = $emp['0']; 
		
		$data1['received']=$this->input->post('received');
		if (is_array($data1['received'])){
					$data1['received']= implode(",",$data1['received']);
				}else{
					$data1['received']="";
				}
		
		$data1['notes']=$this->input->post('notes');
		//$countids=$this->input->post('countids');
		/* echo "<pre>";
		print_r($data1);
		exit; */
		//$this->Service_model->delete_serv_req_details($id);
		//$result1=$this->Service_model->add_service_details($data1);

		$where = "id=".$rowid." AND request_id=".$id; 
		$result1=$this->Service_model->update_service_details($data1,$where);		
		}
		echo "<script>alert('Service Request Updated');window.location.href='".base_url()."pages/service_req_list';</script>";
    
    }
	
	
	
	public function get_branchname(){
		$id=$this->input->post('id');//echo $id; exit;
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Order_model->get_branch($id)));
		   
		
		//$query=$this->Product_model->getsub_cat($id);
        //return $query;
    }
	
	
	
	
	
    public function getsub_category(){
		$id=$this->input->post('id');//echo $id; exit;
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Order_model->getsub_cat($id)));
		   
		
		//$query=$this->Product_model->getsub_cat($id);
        //return $query;
    }
	  
	public function get_brand(){
		$subcatid=$this->input->post('subcatid');//echo $id; exit;
		$categoryid=$this->input->post('categoryid');
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Order_model->get_brands($categoryid,$subcatid)));
		   
		
		//$query=$this->Product_model->getsub_cat($id);
        //return $query;
    }
    
	public function get_model(){
		$subcatid=$this->input->post('subcatid');//echo $id; exit;
		$categoryid=$this->input->post('categoryid');
		$brandid=$this->input->post('brandid');
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Order_model->get_models($categoryid,$subcatid,$brandid)));
		   
		
		//$query=$this->Product_model->getsub_cat($id);
        //return $query;
    }
    
    
	
	public function del_order(){ 
		 $id=$this->input->post('id');
		 $this->Order_model->delete_order_details($id);
		$result = $this->Order_model->delete_orders($id);
    }
    
}