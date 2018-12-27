<?php 
class ready_delivery extends CI_Controller{

    function __construct(){
     parent::__construct();
    $this->load->helper('url');
    $this->load->model('ready_delivery_model');

    }
    
	public function ready_delivery_status(){
		$id=$this->uri->segment(3);
		$data1['req_id'] = $id;
		
		$data1['get_status']=$this->ready_delivery_model->get_status($id);
		
		$data1['getQuoteReviewDetByID1']=$this->ready_delivery_model->getQuoteReviewDetByID1($id);
		
		if(!empty($data1['getQuoteReviewDetByID1'])){
		$modelid = $data1['getQuoteReviewDetByID1'][0]->model_id; 
		$data1['spareListByModelId1']= $this->ready_delivery_model->spareListByModelId($modelid);
		}
		
		$data1['getQuoteReviewSpareDetByID']=$this->ready_delivery_model->getQuoteReviewSpareDetByID($id);
		
		if(!empty($data1['getQuoteReviewSpareDetByID'])){
		  foreach($data1['getQuoteReviewSpareDetByID'] as $ReviewDetKey3){
			   $spare_id = $ReviewDetKey3->spare_id;
			   $data1['spareIds'][]= $this->ready_delivery_model->getsparedetForEditbyid($spare_id);
			   
			   $data1['spare_amtt'][] = $ReviewDetKey3->amt;
			}
			
		}//echo "<pre>";print_r($data1['spareIds']);exit;
		
		$data1['getQuoteByReqId']=$this->ready_delivery_model->getQuoteByReqId($id);
		
		
		if(!empty($data1['getQuoteByReqId'])){
			
			
			if($data1['getQuoteByReqId'][0]->modelid!=""){
				$service_modelid = $data1['getQuoteByReqId'][0]->modelid; 
			}else{
				$service_modelid = ""; 
			}
			
			
			if($data1['getQuoteByReqId'][0]->service_cat!=""){
					$service_service_cat = $data1['getQuoteByReqId'][0]->service_cat; 
			}else{
					$service_service_cat = ""; 
			}
			
		}
		
		
		$data1['getProbforQuoteByReqId']=$this->ready_delivery_model->getProbforQuoteByReqId($id);
		$data1['getServiceCatbyID']=$this->ready_delivery_model->getServiceCatbyID($service_service_cat, $service_modelid);
		if(empty($data1['getServiceCatbyID'])){
			$data1['getservicecharge'] = '0';
		}
		
		$data1['status_list']=$this->ready_delivery_model->status_list();
		$data1['status_listForquoteInpro']=$this->ready_delivery_model->status_listForquoteInpro();
		$data1['status_listForreadydel']=$this->ready_delivery_model->status_listForreadydel();
		
		$data1['service_req_listforEmp1']=$this->ready_delivery_model->service_req_listforEmp1($id);
		
		$data1['getTaxDefaultInfo']=$this->ready_delivery_model->getTaxDefaultInfo();
		
		$data1['problemlist1']=$this->ready_delivery_model->problemlist();
		
		$data1['getWarrantyInfo']=$this->ready_delivery_model->getWarrantyInfo($id);
		
		$data1['stamping_details']=$this->ready_delivery_model->stamping_details($id);
		
		$data1['status_listForStampingworkInpro']=$this->ready_delivery_model->status_listForStampingworkInpro();
		
		$data1['log_stamping_details']=$this->ready_delivery_model->log_stampings($id);
		
		//$data1['getQuoteReviewDetByID']=$this->Quotereview_model->getQuoteReviewDetByID($id);
		if(!empty($data1['getQuoteReviewDetByID1'])){
			
				$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
				$this->load->view('ready_delivery_view',$data1);
			
		}else{
				$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
				$this->load->view('service_status_new',$data1);		
			}
		
		
    }
	
    public function print_request(){ 
		$id=$this->uri->segment(3);
		$data1['spare_charge_status'] = $this->uri->segment(4);
		$data1['req_id'] = $id;
		
		$data1['get_status']=$this->ready_delivery_model->get_status($id);
		
		$data1['getQuoteReviewDetByID1']=$this->ready_delivery_model->getQuoteReviewDetByID1($id);
		
		if(!empty($data1['getQuoteReviewDetByID1'])){
		$modelid = $data1['getQuoteReviewDetByID1'][0]->model_id; 
		$data1['spareListByModelId1']= $this->ready_delivery_model->spareListByModelId($modelid);
		}
		
		$data1['getQuoteReviewSpareDetByID']=$this->ready_delivery_model->getQuoteReviewSpareDetByID($id);
		
		if(!empty($data1['getQuoteReviewSpareDetByID'])){
		  foreach($data1['getQuoteReviewSpareDetByID'] as $ReviewDetKey3){
			   $spare_id = $ReviewDetKey3->spare_id;
			   $data1['spareIds'][]= $this->ready_delivery_model->getsparedetForEditbyid($spare_id);
			}
			
		}//echo "<pre>";print_r($data1['spareIds']);exit;
		
		$data1['getQuoteByReqId']=$this->ready_delivery_model->getQuoteByReqId($id);
		
		if(!empty($data1['getQuoteByReqId'])){
			
			
			if($data1['getQuoteByReqId'][0]->modelid!=""){
				$service_modelid = $data1['getQuoteByReqId'][0]->modelid; 
			}else{
				$service_modelid = ""; 
			}
			
			
			if($data1['getQuoteByReqId'][0]->service_cat!=""){
					$service_service_cat = $data1['getQuoteByReqId'][0]->service_cat; 
			}else{
					$service_service_cat = ""; 
			}
			
		}
		
		
		$data1['getProbforQuoteByReqId']=$this->ready_delivery_model->getProbforQuoteByReqId($id);
		$data1['getServiceCatbyID']=$this->ready_delivery_model->getServiceCatbyID($service_service_cat, $service_modelid);
		if(empty($data1['getServiceCatbyID'])){
			$data1['getservicecharge'] = '0';
		}
		
		$data1['status_list']=$this->ready_delivery_model->status_list();
		$data1['status_listForquoteInpro']=$this->ready_delivery_model->status_listForquoteInpro();
		$data1['status_listForreadydel']=$this->ready_delivery_model->status_listForreadydel();
		
		$data1['service_req_listforEmp1']=$this->ready_delivery_model->service_req_listforEmp1($id);
		
		$data1['getTaxDefaultInfo']=$this->ready_delivery_model->getTaxDefaultInfo();
		
		$data1['problemlist1']=$this->ready_delivery_model->problemlist();
		
		$data1['getWarrantyInfo']=$this->ready_delivery_model->getWarrantyInfo($id);
		
		$data1['list2']=$this->ready_delivery_model->getserviceEmpbyid($id);
		//$data1['status_listForStampingworkInpro']=$this->workin_prog_model->status_listForStampingworkInpro();
		
		//$data1['stamping_details']=$this->ready_delivery_model->stamping_details($id);
		
		//$data1['getQuoteReviewDetByID']=$this->Quotereview_model->getQuoteReviewDetByID($id);
		if(!empty($data1['getQuoteReviewDetByID1'])){
			
				$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
				$this->load->view('invoice_print',$data1);
			
		}else{
				$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
				$this->load->view('service_status_new',$data1);		
			}
	
    }
	
	
	
	
	    public function stamping_print_request(){ 
		$id=$this->uri->segment(3);
		$data1['req_id'] = $id;
		
		$data1['get_status']=$this->ready_delivery_model->get_status($id);
		
		$data1['getQuoteReviewDetByID1']=$this->ready_delivery_model->getQuoteReviewDetByID1($id);
		
		if(!empty($data1['getQuoteReviewDetByID1'])){
		$modelid = $data1['getQuoteReviewDetByID1'][0]->model_id; 
		$data1['spareListByModelId1']= $this->ready_delivery_model->spareListByModelId($modelid);
		}
		
		$data1['getQuoteReviewSpareDetByID']=$this->ready_delivery_model->getQuoteReviewSpareDetByID($id);
		
		if(!empty($data1['getQuoteReviewSpareDetByID'])){
		  foreach($data1['getQuoteReviewSpareDetByID'] as $ReviewDetKey3){
			   $spare_id = $ReviewDetKey3->spare_id;
			   $data1['spareIds'][]= $this->ready_delivery_model->getsparedetForEditbyid($spare_id);
			}
			
		}//echo "<pre>";print_r($data1['spareIds']);exit;
		
		$data1['getQuoteByReqId']=$this->ready_delivery_model->getQuoteByReqId($id);
		
		if(!empty($data1['getQuoteByReqId'])){
			
			
			if($data1['getQuoteByReqId'][0]->modelid!=""){
				$service_modelid = $data1['getQuoteByReqId'][0]->modelid; 
			}else{
				$service_modelid = ""; 
			}
			
			
			if($data1['getQuoteByReqId'][0]->service_cat!=""){
					$service_service_cat = $data1['getQuoteByReqId'][0]->service_cat; 
			}else{
					$service_service_cat = ""; 
			}
			
		}
		
		
		$data1['getProbforQuoteByReqId']=$this->ready_delivery_model->getProbforQuoteByReqId($id);
		$data1['getServiceCatbyID']=$this->ready_delivery_model->getServiceCatbyID($service_service_cat, $service_modelid);
		if(empty($data1['getServiceCatbyID'])){
			$data1['getservicecharge'] = '0';
		}
		
		$data1['status_list']=$this->ready_delivery_model->status_list();
		$data1['status_listForquoteInpro']=$this->ready_delivery_model->status_listForquoteInpro();
		$data1['status_listForreadydel']=$this->ready_delivery_model->status_listForreadydel();
		
		$data1['service_req_listforEmp1']=$this->ready_delivery_model->service_req_listforEmp1($id);
		
		$data1['getTaxDefaultInfo']=$this->ready_delivery_model->getTaxDefaultInfo();
		
		$data1['getWarrantyInfo']=$this->ready_delivery_model->getWarrantyInfo($id);
		
		$data1['stamping_details']=$this->ready_delivery_model->stamping_details($id);
		$stamping_charge = $data1['stamping_details'][0]->stamping_charge;
		$penalty = $data1['stamping_details'][0]->penalty;
		$data1['tot_charge'] = $stamping_charge + $penalty;
		
		$data1['list2']=$this->ready_delivery_model->getserviceEmpbyid($id);
		//$data1['status_listForStampingworkInpro']=$this->workin_prog_model->status_listForStampingworkInpro();
		
		//$data1['stamping_details']=$this->ready_delivery_model->stamping_details($id);
		
		//$data1['getQuoteReviewDetByID']=$this->Quotereview_model->getQuoteReviewDetByID($id);
		if(!empty($data1['getQuoteReviewDetByID1'])){
			
				$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
				$this->load->view('stamping_print_request',$data1);
			
		}else{
				$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
				$this->load->view('service_status_new',$data1);		
			}
	
    }
	
	
	
	
	
	public function addrow(){ 
		 $data['count']=$this->input->post('countid');
		 $modelid=$this->input->post('modelid');
		 $data['spareListByModelId']=$this->Quotereview_model->spareListByModelId($modelid);
		 $this->load->view('add_spares_row',$data);
    }
	public function getsparedet(){ 
		 $id=$this->input->post('id');
		 $this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Quotereview_model->getsparedetbyid($id)));
    }
	
	
	public function add_quotereview(){ //echo "<pre>";print_r($_POST);exit;
		 $reqid = $this->input->post('req_id');
		 
		
        $data['req_id']=$this->input->post('req_id');
		
		$data['model_id']=$this->input->post('modelid');
		
		$data['spare_tax']=$this->input->post('spare_tax');
		//$data['tax_type']=$this->input->post('tax_type');
		$data['spare_tot']=$this->input->post('spare_tot');
		$data['labourcharge']=$this->input->post('labourcharge');
		$data['concharge']=$this->input->post('concharge');
		$data['total_amt']=$this->input->post('total_amt');
		$data['delivery_date']=$this->input->post('delivery_date');
		
		$result=$this->Quotereview_model->add_quotereview($data);
		
		 $data4=array(
            'status'=>$this->input->post('status')
        );
		$this->Quotereview_model->update_stats($data4,$reqid);
		
		$spare_name=$data1['spare_name']=$this->input->post('spare_name');
        $spare_qty=$data1['spare_qty']=$this->input->post('spare_qty');
		$spare_qty1=$data1['spare_qty1']=$this->input->post('spare_qty1');
		$used_spares=$data1['used_spare']=$this->input->post('used_spare');
		
		
        $amt=$data1['amt']=$this->input->post('amt');
       
		$c=$spare_name;
		$count=count($c); 
		
		if($reqid){
             $data1 =array();
			 for($i=0; $i<$count; $i++) {
				 $bal_spare = $spare_qty1[$i] - $spare_qty[$i];
				 $used_spare = $spare_qty[$i] + $used_spares[$i];
				 
				 $data2[] = array(
			'id' => $spare_name[$i],	
           'spare_qty' => $bal_spare,
		   'used_spare' => $used_spare
			);
			
				 $data1[] = array(
           'request_id' => $reqid,
           'spare_id' => $spare_name[$i],
           'spare_qty' => $spare_qty[$i],
           'amt' => $amt[$i]
			);
			
			}
			
			if(!empty($data2)){
			$this->Quotereview_model->update_spare_balance($data2);
			}
			
			if(!empty($data1)){
			$this->Quotereview_model->add_quotereview_spares($data1);
			}
			
            echo "<script>alert('Quote Review Added');window.location.href='".base_url()."pages/quote_in_progress_list';</script>";
			
		}
		
    }
	
	
	public function edit_quotereview(){ //echo "<pre>";print_r($_POST);exit;
		 $reqid = $this->input->post('req_id');
		
        //$data['req_id']=$this->input->post('req_id');
		
		date_default_timezone_set('Asia/Calcutta');
		$data['updated_on'] = date("Y-m-d H:i:s");
		$updated_on = date("Y-m-d H:i:s");
		
		$data111['user_dat'] = $this->session->userdata('login_data');
		$data['user_id'] = $data111['user_dat'][0]->id;
		$user_id = $data111['user_dat'][0]->id;
		
		 if($this->input->post('site')=='Stamping'){
			 $cmr_paid = $this->input->post('cmr_paid');
			$cmr_paid1 = $this->input->post('cmr_paid1');
			$tot_cmr_paid = $cmr_paid+$cmr_paid1;
			
			 $stamp_data=array(
            'year'=>$this->input->post('year'),
            'quarter'=>$this->input->post('qtr'),
            'kg'=>$this->input->post('kg'),
			'stamping_charge'=>$this->input->post('stamping_charge'),
            'agn_charge'=>$this->input->post('agn_charge'),
			'penalty'=>$this->input->post('penalty'),
			'conveyance'=>$this->input->post('conveyance_charge'),
			'tot_charge'=>$this->input->post('tot_charge'),
			'cmr_paid'=>$tot_cmr_paid,
			'payment_mode'=>$this->input->post('payment_mode'),
			'pending_amt'=>$this->input->post('pending_amt'),
			'updated_on'=>$updated_on,
			'user_id'=>$user_id
			);
			$this->ready_delivery_model->update_stamping_details($stamp_data,$reqid);
			$data10['get_stamping_details']= $this->ready_delivery_model->get_stamping_details($reqid);
			 $stamp_id = $data10['get_stamping_details'][0]->id;
			
			if($cmr_paid!='0' && $cmr_paid!=''){
				$log_stamp_data=array(
			'req_id'=>$reqid,
			'stamping_id'=>$stamp_id,
			'cmr_paid'=>$this->input->post('cmr_paid'),
			'payment_mode'=>$this->input->post('payment_mode'),
			'pending_amt'=>$this->input->post('pending_amt'),
			'updated_on'=>$updated_on,
			'user_id'=>$user_id
			);
			$this->ready_delivery_model->log_stamping_details($log_stamp_data);
			
			}
			
			
			
			$data['delivery_date']=$this->input->post('delivery_date');
			
			$stats=$this->input->post('status');
			if($stats=='4'){
				$data['comments']=$this->input->post('comment_deliver');
				$data['assign_to']=$this->input->post('assign_to_id');
			}
			if($stats=='9'){
				$data['onhold_date']=$this->input->post('on_hold');
				$data['on_hold_reason']=$this->input->post('on_hold_reason');
			}
			
			
			$customer_mobile = $this->input->post('cust_mobile');
			
			if($stats=='4'){
				if(isset($customer_mobile) && $customer_mobile!=""){
			   $sms= "Your machine was delivered. Thank you. <br>Syndicate Diagnostics<br>";
			   $messages	= strip_tags($sms);
			   $messages = str_replace(' ','%20',$messages);
			
			$msg = file_get_contents("http://bhashsms.com/api/sendmsg.php?user=9840121544&pass=efficiency&sender=SYNDPL&phone=$customer_mobile&text=$messages&priority=ndnd&stype=normal");
				
			}
			}
			
		
			$result=$this->ready_delivery_model->update_quotereview1($data,$reqid);
			
			$data4=array(
				'status'=>$this->input->post('status')
			);
			$this->ready_delivery_model->update_stats($data4,$reqid);
			
			echo "<script>alert('Stamping Updated');window.location.href='".base_url()."pages/ready_delivery_list';</script>";
			
		 }else{
			 
			 $stats=$this->input->post('status');
		
		$data['spare_tax']=$this->input->post('spare_tax');
		//$data['tax_type']=$this->input->post('tax_type');
		$data['spare_tot']=$this->input->post('spare_tot');
		$data['labourcharge']=$this->input->post('labourcharge');
		$data['concharge']=$this->input->post('concharge');
		//$data['total_amt']=$this->input->post('total_amt');
		$data['notes']=$this->input->post('notes');
		$data['comments']=$this->input->post('comment_ready');
		
		/* $data4=array(
            'status'=>$this->input->post('status'),
			'updated_on'=>$updated_on,
			'user_id'=>$user_id
        ); */
		
		/* foreach ($data4 as $datakey => $datavalue) {
			//echo $datakey.'-'.$datavalue;
		if (!empty($datavalue)){ 
			$this->ready_delivery_model->update_stats($data4,$reqid);
			if($datavalue=='3'){
				$data['delivery_date']=$this->input->post('delivery_date');
				$data['comments']=$this->input->post('comment_ready');
			}
			if($datavalue=='4'){
				$data['delivery_date']=$this->input->post('delivery_date1');
				$data['comments']=$this->input->post('comment_deliver');
				$data['assign_to']=$this->input->post('assign_to_id');
			}
		}	
		} */
		//$this->ready_delivery_model->update_quotereview($data,$reqid);
		
		
		
		
		
		
		$total_amt=$this->input->post('total_amt');
			$service_cmr_paid = $this->input->post('service_cmr_paid');
			$service_cmr_paid1 = $this->input->post('service_cmr_paid1');
			$tot_service_cmr_paid = $service_cmr_paid + $service_cmr_paid1;
			$data['cmr_paid'] = $tot_service_cmr_paid;
			//$data['pending_amt']=$this->input->post('service_pending_amt');
			$data['payment_mode']=$this->input->post('payment_mode');
			
			if($service_cmr_paid!='0' && $service_cmr_paid!=''){
				$log_payment_data=array(
			'req_id'=>$reqid,
			'cmr_paid'=>$this->input->post('service_cmr_paid'),
			'payment_mode'=>$this->input->post('payment_mode'),
			'pending_amt'=>$this->input->post('service_pending_amt'),
			'updated_on'=>$updated_on,
			'user_id'=>$user_id
			);
			$this->ready_delivery_model->log_service_payment_details($log_payment_data);
			
			}
			
			$disc_amt=$this->input->post('disc_amt');
			
			if($disc_amt!=""){
				$disc_amt1=$this->input->post('disc_amt1');
				$disc_amt2 = $disc_amt + $disc_amt1;
				$data['disc_amt']= $disc_amt2;
				$data['total_amt']=$this->input->post('total_amt');
				$data['pending_amt'] = $this->input->post('service_pending_amt');
			}else{
				$data['total_amt']=$this->input->post('total_amt');
				$data['pending_amt'] = $this->input->post('service_pending_amt');
			}
			
			
			
			$plus_amt=$this->input->post('plus_amt');
			
			if($plus_amt!=""){
				$plus_amt1=$this->input->post('plus_amt1');
				$plus_amt2 = $plus_amt + $plus_amt1;
				$data['plus_amt']= $plus_amt2;
				$data['total_amt']=$this->input->post('total_amt');
				$data['pending_amt'] = $this->input->post('service_pending_amt');
			}else{
				$data['total_amt']=$this->input->post('total_amt');
				$data['pending_amt'] = $this->input->post('service_pending_amt');
			}
			
			$data['emp_pts'] = $this->input->post('emp_pts'); 
		
			$this->ready_delivery_model->update_quotereview($data,$reqid);
		
		
		
		
		$spare_name=$data1['spare_name']=$this->input->post('spare_name');
        $spare_qty=$data1['spare_qty']=$this->input->post('spare_qty');
		/* $spare_qty1=$data1['spare_qty1']=$this->input->post('spare_qty1');
		$used_spares=$data1['used_spare']=$this->input->post('used_spare'); */
		
		
        //$amt=$data1['amt']=$this->input->post('amt');
		
		//$this->ready_delivery_model->delete_quote_review($reqid);
		//$used_spares=$data1['spare_tbl_id']=$this->input->post('spare_tbl_id');
		
       
		$c=$spare_name;
		$count=count($c); 
		
		// if($reqid){
             // $data1 = array();
			 // for($i=0; $i<$count; $i++) {
				 // if($stats=='4'){
					 // $getsparebyid = $this->ready_delivery_model->getsparebyid($spare_name[$i]);
					 
					 // $spare_qtt = $getsparebyid[0]->spare_qty;
					 // $used_sparr = $getsparebyid[0]->used_spare;
					 // $eng_sparr = $getsparebyid[0]->eng_spare;
					 
					 // $bal_spare = $spare_qtt - $spare_qty[$i];
				     // $used_spare = $spare_qty[$i] + $used_sparr;
					 // $enggs_spare = $spare_qty[$i] + $eng_sparr;
				 
				 // $data2[] = array(
			// 'id' => $spare_name[$i],	
           // 'used_spare' => $used_spare,
		   // 'eng_spare' => $enggs_spare
			// );
			
			// $eng_idd = $this->input->post('eng_idd');
			
			// $where = "spare_id=".$spare_name[$i]." AND employee=".$eng_idd;
			// $engg_spare_cnt = $this->ready_delivery_model->getupspare($where);
			// $engg_sp_count = $engg_spare_cnt[0]->qty_plus;
			
			
					// if($engg_sp_count!="" && $engg_sp_count!="0"){
						// $p_qty = $engg_sp_count - $spare_qty[$i];
						// $n_data=array(
							// 'qty_plus'=>$p_qty
						// );
						// $this->ready_delivery_model->updatepspare($n_data,$where);   
					// }
				 // }
				 
			// }
			
			// if(!empty($data2)){
			// $this->ready_delivery_model->update_spare_balance($data2);
			// }
			
            // echo "<script>alert('Ready for delivery updated');window.location.href='".base_url()."pages/ready_delivery_list';</script>";
			
		// }
			 
			 
		 }
		  echo "<script>alert('Call updated');window.location.href='".base_url()."pages/ready_delivery_list';</script>";
		
    }
	
	
    public function add_service_req(){ //echo "<pre>";print_r($_POST);exit;
		
        $data['request_id']=$this->input->post('req_id');
		$data['cust_name']=$this->input->post('cust_name');
		$data['mobile']=$this->input->post('mobile');
		$data['email_id']=$this->input->post('email_id');
		$data['request_date']=$this->input->post('datepicker');
		
		$result=$this->Service_model->add_services($data);
		
		if($result){
		$data1['request_id']=$result;
		$data1['serial_no']=$this->input->post('serial_no');
       
	    $data1['cat_id']=$this->input->post('categoryid');
        $data1['subcat_id']=$this->input->post('subcategoryid');
        $data1['brand_id']=$this->input->post('brandid');
        $data1['model_id']=$this->input->post('modelid');
        $data1['warranty_date']=$this->input->post('warranty_date');
        $data1['machine_status']=$this->input->post('machine_status');
		$data1['site']=$this->input->post('site');
		
		$data1['service_type']=$this->input->post('service_type');
		$data1['service_cat']=$this->input->post('service_cat');
		$data1['zone']=$this->input->post('locid');
		$data1['problem']=$this->input->post('prob');
		$data1['assign_to']=$this->input->post('assign_to');
		$data1['received']=$this->input->post('received');
		if (is_array($data1['received'])){
					$data1['received']= implode(",",$data1['received']);
				}else{
					$data1['received']="";
				}
		
		//$countids=$this->input->post('countids');
		
		
		
		$result1=$this->Service_model->add_service_details($data1);
		}
		
		if($result){
              echo "<script>alert('Service Request Added');window.location.href='".base_url()."pages/service_req_list';</script>";
     }
    
    }
	
	public function get_custbyid(){
		$id=$this->input->post('id');//echo $id; exit;
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Service_model->get_customerdetails($id)));
		   
		
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
	
	
	
	public function update_service_req(){ 
		   $id=$this->uri->segment(3);
		   $data['list']=$this->Service_model->getservicereqbyid($id);
		   $data['list1']=$this->Service_model->getservicereqDetailsbyid($id);
		   $data['list2']=$this->Service_model->getserviceEmpbyid($id);
		   $data['list_serialnos']=$this->Service_model->list_serialnos();
		   
		   $data['customerlist']=$this->Service_model->customerlist();
		   
		   $data['servicecat_list']=$this->Service_model->servicecat_list();
		   $data['problemlist']=$this->Service_model->problemlist();
		   $data['employee_list']=$this->Service_model->employee_list();
		   
		   $data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		   $this->load->view('edit_service_req',$data);
		
    }
	
	public function edit_service_req(){ 
		
		$data=array(
            'request_id'=>$this->input->post('req_id'),
            'cust_name'=>$this->input->post('cust_name'),
            'mobile'=>$this->input->post('mobile'),
			'email_id'=>$this->input->post('email_id'),
            'request_date'=>$this->input->post('datepicker')
        );
        $id=$this->input->post('servicereqid');
		
		$this->Service_model->update_service_request($data,$id);
		
		if($id){
		$data1['request_id']=$id;
		$data1['serial_no']=$this->input->post('serial_no');
       
	    $data1['cat_id']=$this->input->post('categoryid');
        $data1['subcat_id']=$this->input->post('subcategoryid');
        $data1['brand_id']=$this->input->post('brandid');
        $data1['model_id']=$this->input->post('modelid');
        $data1['warranty_date']=$this->input->post('warranty_date');
        $data1['machine_status']=$this->input->post('machine_status');
		$data1['site']=$this->input->post('site');
		
		$data1['service_type']=$this->input->post('service_type');
		$data1['service_cat']=$this->input->post('service_cat');
		$data1['zone']=$this->input->post('locid');
		$data1['problem']=$this->input->post('prob');
		$data1['assign_to']=$this->input->post('assign_to');
		$data1['received']=$this->input->post('received');
		if (is_array($data1['received'])){
					$data1['received']= implode(",",$data1['received']);
				}else{
					$data1['received']="";
				}
				
		//$countids=$this->input->post('countids');
		//echo "<pre>";
		//print_r($data1);
		$this->Service_model->delete_serv_req_details($id);
		$result1=$this->Service_model->add_service_details($data1);	
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