<?php 
class quotereview extends CI_Controller{

    function __construct(){
     parent::__construct();
    $this->load->helper('url');
    $this->load->model('Quotereview_model');
    $this->load->model('workin_prog_model');

    }
    
	public function service_status(){
		$id=$this->uri->segment(3);
		$data1['req_id'] = $id;
		
		$data1['get_status']=$this->Quotereview_model->get_status($id);
		
		$data1['getQuoteReviewDetByID1']=$this->Quotereview_model->getQuoteReviewDetByID1($id);
		//echo "<pre>";
		//print_r($data1['getQuoteReviewDetByID1']);
		//exit;
		if(!empty($data1['getQuoteReviewDetByID1'])){
		$modelid = $data1['getQuoteReviewDetByID1'][0]->model_id; 
		$data1['spareListByModelId1']= $this->Quotereview_model->spareListByModelId($modelid);
		}else{
			$data1['spareListByModelId1']= $this->Quotereview_model->spareList();
		}
		
		$data1['getQuoteReviewSpareDetByID']=$this->Quotereview_model->getQuoteReviewSpareDetByID($id);
		
		if(!empty($data1['getQuoteReviewSpareDetByID'])){
		  foreach($data1['getQuoteReviewSpareDetByID'] as $ReviewDetKey3){
			   $spare_id = $ReviewDetKey3->spare_id;
			   $data1['spareIds'][]= $this->Quotereview_model->getsparedetForEditbyid($spare_id);
			   
			   $data1['spare_amtt'][] = $ReviewDetKey3->amt;
			}
			
		}//echo "<pre>";print_r($data1['spareIds']);exit;
		
		
		$get_request_details = $this->Quotereview_model->get_request_details($id);
		$sr_no = $get_request_details[0]->serial_no; 
		//exit;
		if($sr_no!=""){//echo "<br/>dsssssssss";
			$data1['getQuoteByReqId']=$this->Quotereview_model->getQuoteByReqId($id);
		}else{ 
			$data1['getQuoteByReqId']=$this->Quotereview_model->getQuoteByReqId1($id);
		}
		
		
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
		
		
		$data1['getProbforQuoteByReqId']=$this->Quotereview_model->getProbforQuoteByReqId($id);
		$data1['getServiceCatbyID']=$this->Quotereview_model->getServiceCatbyID($service_service_cat, $service_modelid);
		if(empty($data1['getServiceCatbyID'])){
			$data1['getservicecharge'] = '0';
		}
		
		$data1['status_list']=$this->Quotereview_model->status_list();
		$data1['status_listForquoteInpro']=$this->Quotereview_model->status_listForquoteInpro();
		$data1['status_listForoffsiteworkInpro']=$this->Quotereview_model->status_listForoffsiteworkInpro();
		
		$data1['status_listForEmpLogin']=$this->Quotereview_model->status_listForEmpLogin();
		
		$data1['service_req_listforaddlEmp1']=$this->Quotereview_model->service_req_listforaddlEmp1($id);
		
		$data1['getTaxDefaultInfo']=$this->Quotereview_model->getTaxDefaultInfo();
		
		$data1['problemlist1']=$this->Quotereview_model->problemlist();
		
		$data1['getWarrantyInfo']=$this->Quotereview_model->getWarrantyInfo($id);
		date_default_timezone_set('Asia/Calcutta');
		$data1['del_date'] = date("Y-m-d H:i:s");
		
		$data1['service_req_listforEmp1']=$this->Quotereview_model->service_req_listforEmp1($id);
		
		$data1['get_qc_parameters_details']=$this->Quotereview_model->get_qc_parameters_details($id);
		//$data1['offsite_flag'] = "working";
		
		//$data1['getQuoteReviewDetByID']=$this->Quotereview_model->getQuoteReviewDetByID($id);
		if(!empty($data1['getQuoteReviewDetByID1'])){
			
				$data111['user_dat'] = $this->session->userdata('login_data');
				$data1['user_type'] = $data111['user_dat'][0]->user_type;
				$data1['emp_id'] = $data111['user_dat'][0]->emp_id;
				$this->load->view('templates/header',$data111);
				$this->load->view('service_status',$data1);
			
		}else{
				$data111['user_dat'] = $this->session->userdata('login_data');
				$data1['user_type'] = $data111['user_dat'][0]->user_type;
				$data1['emp_id'] = $data111['user_dat'][0]->emp_id;
				$this->load->view('templates/header',$data111);
				$this->load->view('service_status_new',$data1);		
			}
		
		
    }
    
	public function addrow(){ 
		 $data['count']=$this->input->post('countid');
		 $modelid=$this->input->post('modelid');
		 $data['engidd']=$this->input->post('engidd');
		 //print_r($data['engidd']);exit;
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
		 ini_set('max_execution_time', 900);
		 $reqid = $this->input->post('req_id');
		 
		 date_default_timezone_set('Asia/Calcutta');
		 $updated_on = date("Y-m-d H:i:s");
		
		 $data111['user_dat'] = $this->session->userdata('login_data');
		 $user_id = $data111['user_dat'][0]->id;
		
			date_default_timezone_set('Asia/Calcutta');
			$data['created_on'] = date("Y-m-d H:i:s");
			$data['updated_on'] = date("Y-m-d H:i:s");
		
			$stats=$this->input->post('status');
			$data['req_id']=$this->input->post('req_id');
		
			$data['model_id']=$this->input->post('modelid');
			
			//$stats=$this->input->post('status');
		/* $sms_mob=$this->input->post('sms_mobile');
		
		if($stats=='1' && isset($sms_mob)){
			$sms_mobs=$this->input->post('sms_mobile');
			
			$cust_name = $this->input->post('cust_name');
			$modell = $this->input->post('p_name');
			$brand_name = $this->input->post('brand_name');
			
			$sms= "Req ID: ".$reqid;
			$sms.= " Cust Name: ".$cust_name;
			if ($this->input->post('cust_mobile')!=""){
				$sms.= " Phone: ".$this->input->post('cust_mobile');
			}
			//$sms.= " Brand: ".$brand_name; 
			$sms.= " Model: ".$modell;
			if ($this->input->post('probs')!=""){
				$sms.= " Problem: ".$this->input->post('probs');
			}
			if ($this->input->post('blanket_app')!=""){
				$sms.= " Blanket Appr: ".$this->input->post('blanket_app');
			}
			
			$messages	= strip_tags($sms);
			$messages = str_replace(' ','%20',$messages);
			
			$msg = file_get_contents("http://bhashsms.com/api/sendmsg.php?user=srscales&pass=9841038810&sender=SRSCAL&phone=$sms_mobs&text=$messages&priority=sdnd&stype=normal");
			
			
			
		} */
			
				
			$spare_taxx = $this->input->post('spare_tax');
			if($spare_taxx!=""){
				$data['spare_tax']=$this->input->post('spare_tax');
			}else{
				$data['spare_tax']='0';
			}
			
			$spare_tott = $this->input->post('spare_tot');
			if($spare_tott!=""){
				$data['spare_tot']=$this->input->post('spare_tot');
			}else{
				$data['spare_tot']='0';
			}
			
			$labourchargee = $this->input->post('labourcharge');
			if($labourchargee!=""){
				$data['labourcharge']=$this->input->post('labourcharge');
			}else{
				$data['labourcharge']='0';
			}
			
			$conchargee = $this->input->post('concharge');
			if($conchargee!=""){
				$data['concharge']=$this->input->post('concharge');
			}else{
				$data['concharge']='0';
			}
			
			$total_amtt = $this->input->post('total_amt');
			if($total_amtt!=""){
				$data['total_amt']=$this->input->post('total_amt');
			}else{
				$data['total_amt']='0';
			}
			
			$total_amt = $this->input->post('total_amt');
			//$data['pending_amt']=$this->input->post('total_amt');
			$data['delivery_date']=$this->input->post('delivery_date1');
			$data['comments']=$this->input->post('comment_deliver');
			
			
		/*	if($this->input->post('eng_notes')!=""){
				$data5['eng_notes']=$this->input->post('eng_notes');
				$data5['created_on'] =	date("Y-m-d H:i:s");
				
				$data5['engg_id'] = $this->input->post('eng_name');
				$data5['req_id'] = $this->input->post('reque_id');
				
				$this->Quotereview_model->history_ins($data5);
			}
			*/
			
			
			$ratings = $this->input->post('rating');
			
			if(isset($ratings) && $ratings!=''){
				$data['rating']=$this->input->post('rating');
			}
			
			
			
			
			
			$userty =$this->input->post('usrtyp');
			 $assignn_to = $this->input->post('assign_to_id');
					
			$notes_all = $this->input->post('notes_all');
			/*$data['notes_all']=$this->input->post('notes_all');
			if($notes_all!=''){
				
				
				
				
				if($notes_all=='eng_notes'){
					
					if($this->input->post('eng_notes')!=""){
			$data5['eng_notes']=$this->input->post('eng_notes');
			$data5['created_on'] =	date("Y-m-d H:i:s");
			
			$data5['engg_id'] = $this->input->post('eng_name');
			$data5['req_id'] = $this->input->post('req_id');			
			$this->Quotereview_model->history_ins($data5);
		}
			
					$data['eng_notes']=$this->input->post('eng_notes');
				}
				if($notes_all=='cust_remark'){
					
						if($this->input->post('cust_remark')!=""){
			$data51['cust_remark']=$this->input->post('cust_remark');
			$data51['created_on'] =	date("Y-m-d H:i:s");
			$data51['emp_id'] = $this->input->post('eng_name');
			$data51['given_by'] = $userty;
			$data51['req_id'] = $this->input->post('req_id');			
			$this->Quotereview_model->history_cust_remark($data51);
		}
		$data['cust_remark']=$this->input->post('cust_remark');
				}
				
			} */
			//$total_amt=$this->input->post('total_amt');
			//$service_cmr_paid = $this->input->post('service_cmr_paid');
			//$service_cmr_paid1 = $this->input->post('service_cmr_paid1');
			//$tot_service_cmr_paid = $service_cmr_paid + $service_cmr_paid1;
			//$data['cmr_paid'] = $tot_service_cmr_paid;
			//$data['pending_amt']=$this->input->post('service_pending_amt');
			//$data['payment_mode']=$this->input->post('payment_mode');
			
			
			
			
			$coord_notes=$this->input->post('notes');
			if($coord_notes!="")
			{
				$data['notes']=$this->input->post('notes');
				$data5q1['co_notess']=$this->input->post('notes');
			    $data5q1['created_on'] =	date("Y-m-d H:i:s");			
			    $data5q1['usrr_id'] = $assignn_to;
			    $data5q1['req_id'] = $this->input->post('req_id');			
			    
				
				$this->workin_prog_model->history_notess($data5q1);
			}
			else{
				$data['notes']='';
			}
			
			
			
					//$maijnn = $this->input->post('reporttyt');
		//if($this->input->post('reporttyt')!=''){
	//if($maijnn=="eng_notess"){
		if($this->input->post('eng_notess')!=""){
			$data52['eng_notess']=$this->input->post('eng_notess');
			$data52['created_on'] =	date("Y-m-d H:i:s");			
			$data52['engg_id'] = $assignn_to;
			$data52['req_id'] = $this->input->post('req_id');
			
			$this->workin_prog_model->history_inss($data52);
			
			$data['eng_notess']=$this->input->post('eng_notess');
		}
		
	
	//}
	
	
		//if($maijnn=="cust_solution"){
		if($this->input->post('cust_solution')!=""){
	
			$data5e1['cust_solution']=$this->input->post('cust_solution');
			$data5e1['created_on'] =	date("Y-m-d H:i:s");
			$data5e1['engg_id'] = $assignn_to;
			$data5e1['given_by'] = $userty;
			$data5e1['req_id'] = $this->input->post('req_id');
			$this->workin_prog_model->history_cust_solution($data5e1);
			
			$data['cust_solution']=$this->input->post('cust_solution');
		}
		
		//}
	
	
		//}
		
		if($this->input->post('cust_remarkk')!=null){
	
			$data51['cust_remark']=$this->input->post('cust_remarkk');
			$data51['created_on'] =	date("Y-m-d H:i:s");
			$data51['engg_id'] = $assignn_to;
			$data51['given_by'] = $userty;
			$data51['req_id'] = $this->input->post('req_id');			
			$this->workin_prog_model->history_cust_remark($data51);
			$data['cust_remark']=$this->input->post('cust_remarkk');
			
		}
			
			
			
		
			
			$cust_mobi = $this->input->post('cust_mobile');
			
			if($stats=='7' && isset($cust_mobi)){
			
			$modell = $this->input->post('p_name');
			$brand_name = $this->input->post('brand_name');
			
			$sms= "Req ID: ".$this->input->post('reque_id');;
			$sms.= " Brand: ".str_replace('&',' and ',$brand_name); 
			$sms.= ", Model: ".$modell;
			if ($total_amt!=""){
				$sms.= ", Quotation: ".$total_amt;
			}
			
			$sms.= " We need confirmation, send msg to 9841443300 (OK/Not OK). Thank You";
			
			$messages	= strip_tags($sms);
			$messages = str_replace(' ','%20',$messages);
			
			$msg = file_get_contents("http://bhashsms.com/api/sendmsg.php?user=9840121544&pass=efficiency&sender=SYNDPL&phone=$cust_mobi&text=$messages&priority=ndnd&stype=normal");
		  }
		
			if($stats=='5'){
				$cust_site_mobile = '9962135225';
				$reque_id=$this->input->post('reque_id'); 
				//$cust_site_mobile = '9841443300';
				if(isset($cust_site_mobile) && $cust_site_mobile!=""){
					$sms= "Hi. Please prepare quotation and get customer approval for request ID: ".$reque_id;
					$messages	= strip_tags($sms);
					$messages = str_replace(' ','%20',$messages);
			
					$msg = file_get_contents("http://bhashsms.com/api/sendmsg.php?user=9840121544&pass=efficiency&sender=SYNDPL&phone=$cust_site_mobile&text=$messages&priority=ndnd&stype=normal");
				
				}
			
			}
			
			
			if($stats=='16'){
				$cust_site_mobile = '9962135225';
				$reque_id=$this->input->post('reque_id'); 
				//$cust_site_mobile = '7200669999';
				if(isset($cust_site_mobile) && $cust_site_mobile!=""){
					$sms= "Hi. request ID: ".$reque_id." has been done";
					$messages	= strip_tags($sms);
					$messages = str_replace(' ','%20',$messages);
			
					$msg = file_get_contents("http://bhashsms.com/api/sendmsg.php?user=9840121544&pass=efficiency&sender=SYNDPL&phone=$cust_site_mobile&text=$messages&priority=ndnd&stype=normal");
				
				}
			
			}
			
			
			if($stats=='9'){
				$cust_site_mobile = '9962135225';
				if(isset($cust_site_mobile) && $cust_site_mobile!=""){
					$reque_id=$this->input->post('reque_id'); 
					$onhold_date = $this->input->post('on_hold');
					$onhold_reason = $this->input->post('onhold_reason');
					$sms= "Hi. Request ID: ".$reque_id." is on-hold. Date: ".$onhold_date." Reason: ".$onhold_reason;
					$messages	= strip_tags($sms);
					$messages = str_replace(' ','%20',$messages);
				
					$msg = file_get_contents("http://bhashsms.com/api/sendmsg.php?user=9840121544&pass=efficiency&sender=SYNDPL&phone=$cust_site_mobile&text=$messages&priority=ndnd&stype=normal");
					
				}
			
			}
			
			if($stats=='9'){
				$data['onhold_date']=$this->input->post('on_hold');
				$data['onhold_reason']=$this->input->post('onhold_reason');
				$data7['on_hold'] = $this->input->post('on_hold');
				$data7['onhold_reason']=$this->input->post('onhold_reason');
				$data7['req_id'] = $this->input->post('req_id');
				$data7['emp_id']=$this->input->post('assign_to_id');
				$this->Quotereview_model->log_onhold($data7);
			}
			
			
			$eng_ack = $this->input->post('eng_ack');
			
			if($eng_ack!=""){
				$data_ackupdate['eng_ack']=$this->input->post('eng_ack');
				$data_ackupdate['accepted_engg_id']=$this->input->post('empiid');
			}else{
				$data_ackupdate['eng_ack']='';
			}
			$this->Quotereview_model->update_eng_ack($data_ackupdate,$reqid);
			
			
			
			if($eng_ack!='' && isset($eng_ack)){
				
				$cust_site_mobile1 = '9962135225';
				$reque_id=$this->input->post('reque_id');
				
				if($eng_ack=='accept'){
					$eng_ack_msg = 'accepted';
					$sms= "Hi. Request Id: ".$reque_id." is ".$eng_ack_msg;
					$messages	= strip_tags($sms);
					$messages = str_replace(' ','%20',$messages);
			
					$msg = file_get_contents("http://bhashsms.com/api/sendmsg.php?user=9840121544&pass=efficiency&sender=SYNDPL&phone=$cust_site_mobile1&text=$messages&priority=ndnd&stype=normal");
				}
				
				if($eng_ack=='reject'){
					$eng_ack_msg = 'rejected';
					$sms= "Hi. Request Id: ".$reque_id." is ".$eng_ack_msg;
					$messages	= strip_tags($sms);
					$messages = str_replace(' ','%20',$messages);
			
					$msg = file_get_contents("http://bhashsms.com/api/sendmsg.php?user=9840121544&pass=efficiency&sender=SYNDPL&phone=$cust_site_mobile1&text=$messages&priority=ndnd&stype=normal");
				}
				
				if($eng_ack=='later'){
					$sms= "Hi. Request Id: ".$reque_id." will be serviced later";
					$messages	= strip_tags($sms);
					$messages = str_replace(' ','%20',$messages);
			
					$msg = file_get_contents("http://bhashsms.com/api/sendmsg.php?user=9840121544&pass=efficiency&sender=SYNDPL&phone=$cust_site_mobile1&text=$messages&priority=ndnd&stype=normal");
				}
				
					
				
			}
			
			
			
			
			/* if($service_cmr_paid!='0' && $service_cmr_paid!=''){
				$log_payment_data=array(
			'req_id'=>$reqid,
			'cmr_paid'=>$this->input->post('service_cmr_paid'),
			'payment_mode'=>$this->input->post('payment_mode'),
			'pending_amt'=>$this->input->post('service_pending_amt'),
			'updated_on'=>$updated_on,
			'user_id'=>$user_id
			);
			$this->Quotereview_model->log_service_payment_details($log_payment_data);
			
			} */
			
			/* $disc_amt=$this->input->post('disc_amt');
			$disc_amt1=$this->input->post('disc_amt1');
			$disc_amt2 = $disc_amt + $disc_amt1;
		
			if($disc_amt!=""){
				$data['disc_amt']= $disc_amt2;
				$data['total_amt']=$this->input->post('total_amt');
				$data['pending_amt'] = $this->input->post('service_pending_amt');
			}else{
				$data['total_amt']=$this->input->post('total_amt');
				$data['pending_amt'] = $this->input->post('total_amt');
				$data['total_charge']=$this->input->post('total_amt');
			} */
		
			
			//print_r($data);
		
			$result=$this->Quotereview_model->add_quotereview($data);
			
			$order_row_id=$this->input->post('order_row_id');
		
			$batch_no = $this->input->post('batch_no');
			$serial_no = $this->input->post('serial_no');
		
			if(isset($serial_no) && $serial_no!="" && $serial_no!='update sr no'){
				$data_order_det['batch_no']=$this->input->post('batch_no');
				$data_order_det['serial_no']=$this->input->post('serial_no');
				$this->Quotereview_model->update_order_srno($data_order_det,$order_row_id);
				
				
				$data_service_det['batch_no']=$this->input->post('batch_no');
				$data_service_det['serial_no']=$this->input->post('serial_no');
				$this->Quotereview_model->update_service_srno($data_service_det,$reqid);
			}
			
			
		
			$data4=array(
				'status'=>$this->input->post('status'),
				'updated_on'=>$updated_on,
				'user_id'=>$user_id
			);
			$this->Quotereview_model->update_stats($data4,$reqid);
		
			$spare_name=$data1['spare_name']=$this->input->post('spare_name');
			$spare_qty=$data1['spare_qty']=$this->input->post('spare_qty');
			$spare_qty1=$data1['spare_qty1']=$this->input->post('spare_qty1');
			$used_spares=$data1['used_spare']=$this->input->post('used_spare');
			$warranty_claim_status=$data1['warranty_claim_status']=$this->input->post('warranty_claim_status');
		
			$desc_failure=$data1['desc_failure']=$this->input->post('desc_failure');
			$why_failure=$data1['why_failure']=$this->input->post('why_failure');
			$correct_action=$data1['correct_action']=$this->input->post('correct_action');
			
			/* echo "<pre>";
			print_r($warranty_claim_status);
			
			echo "<pre>";
			print_r($desc_failure);
				
			echo "<pre>";
			print_r($why_failure);

			echo "<pre>";
			print_r($correct_action);	
		exit; */
		
			$amt=$data1['amt']=$this->input->post('amt');
       
			$c=$spare_name;
			$count=count($c); 
		
			if($reqid){
             $data1 =array();
			 for($i=0; $i<$count; $i++) {
				 if($spare_name[$i]!="" && $spare_qty[$i]!=""){
					 if($warranty_claim_status[$i]=='to_claim'){
					 $desc_failure1 = $desc_failure[$i];
					 $why_failure1 = $why_failure[$i];
					 $correct_action1 = $correct_action[$i];
				 }else{
					 $desc_failure1 = '';
					 $why_failure1 = '';
					 $correct_action1 = '';
				 }
				 
				 $data1= array(
					'request_id' => $reqid,
					'spare_id' => $spare_name[$i],
					'spare_qty' => $spare_qty[$i],
					'amt' => $amt[$i],
				   'warranty_claim_status' => $warranty_claim_status[$i],
				   'desc_failure' => $desc_failure1,
				   'why_failure' => $why_failure1,
				   'correct_action' => $correct_action1
				);
				 }
				 if(!empty($data1)){
			$this->Quotereview_model->add_quotereview_spares($data1);
			}
				 
			
			}
			
			
			
		}
		
		
		$res_qc_value = $this->input->post('res_qc_value');
        $qc_param_id = $this->input->post('qc_param_id');
		
		$this->Quotereview_model->delete_qc_param_details($reqid);
		
		if(!empty($res_qc_value)){
            $qc_data = array();
			for($i=0; $i<count($res_qc_value); $i++) {
				 $qc_data = array(
				   'request_id' => $reqid,
				   'qc_master_id' => $qc_param_id[$i],
				   'result_qc_value' => $res_qc_value[$i]
				);
			$this->Quotereview_model->add_qc_param_details($qc_data);
			}	
			
        }
		
		
		$eemail = $this->input->post('email');
		
		if($eemail!=""){
			//email
		
			$config = Array(
           'mailtype' => 'html'   
          );
		  $this->load->library('email', $config);
		  
          $this->email->from('vijaykumarv@yoursefficiently.com', 'Admin');
		  
		 
		  
		 // $text = $this->input->post('eng_notes');
		  
		//echo $text;exit;
		  
		  $this->email->to($eemail); 

          $this->email->subject('Subject');
		 
			 $data_email['sub'] = $this->input->post('eng_notes');
		
			
		 
		//  print_r($data['sub']); exit;
		  $message="<table>
		             <tr><td>". $data_email['sub']."</td></tr>					 
		              <tr><td colspan='2' style='text-align:center;font-size:15px;font-weight:bolder'> Thank you for Contact Us ..! </td></tr>
					  	</table>";
				//	echo $message; exit;
          $this->email->message($message);	

          $this->email->send();	
			
		}
		
		
		
		echo "<script>alert('Work In-progress Updated');window.location.href='".base_url()."pages/workin_prog_list';</script>";
		
    }
	
	
	public function edit_quotereview(){ //echo "<pre>";print_r($_POST);exit;
		 $reqid = $this->input->post('req_id');
		 
		 date_default_timezone_set('Asia/Calcutta');
		 $data['updated_on'] = date("Y-m-d H:i:s");
		 $updated_on = date("Y-m-d H:i:s");
		
		 $data111['user_dat'] = $this->session->userdata('login_data');
		 $data['user_id'] = $data111['user_dat'][0]->id;
		 $user_id = $data111['user_dat'][0]->id;
		
        //$data['req_id']=$this->input->post('req_id');
		$stats=$this->input->post('status');
		
		$sms_mob=$this->input->post('sms_mobile');
		
		if($stats=='1' && isset($sms_mob)){
			$sms_mobs=$this->input->post('sms_mobile');
			
			$cust_name = $this->input->post('cust_name');
			$modell = $this->input->post('p_name');
			$brand_name = $this->input->post('brand_name');
			
			$sms= "Req ID: ".$reqid;
			$sms.= " Cust Name: ".$cust_name;
			if ($this->input->post('cust_mobile')!=""){
				$sms.= " Phone: ".$this->input->post('cust_mobile');
			}
			//$sms.= " Brand: ".$brand_name; 
			$sms.= " Model: ".$modell;
			if ($this->input->post('probs')!=""){
				$sms.= " Problem: ".$this->input->post('probs');
			}
			if ($this->input->post('blanket_app')!=""){
				$sms.= " Blanket Appr: ".$this->input->post('blanket_app');
			}
			
			$messages	= strip_tags($sms);
			$messages = str_replace(' ','%20',$messages);
			
			$msg = file_get_contents("http://bhashsms.com/api/sendmsg.php?user=9840121544&pass=efficiency&sender=SYNDPL&phone=$sms_mobs&text=$messages&priority=ndnd&stype=normal");
			
		}
		
		$data['spare_tax']=$this->input->post('spare_tax');
		//$data['tax_type']=$this->input->post('tax_type');
		$data['spare_tot']=$this->input->post('spare_tot');
		$data['labourcharge']=$this->input->post('labourcharge');
		$data['concharge']=$this->input->post('concharge');
		$data['total_charge']=$this->input->post('total_amt');
		
		$data['total_amt']=$this->input->post('total_amt');
		$total_amt = $this->input->post('total_amt');
		$data['pending_amt']=$this->input->post('total_amt');
		$data['delivery_date']=$this->input->post('delivery_date');
		$data['notes']=$this->input->post('notes');
		
		$this->Quotereview_model->update_quotereview($data,$reqid);
		
		
		$cust_mobi = $this->input->post('cust_mobile');
			
			if($stats=='7' && isset($cust_mobi)){
			
			$modell = $this->input->post('p_name');
			$brand_name = $this->input->post('brand_name');
			
			$sms= "Req ID: ".$this->input->post('reque_id');;
			$sms.= " Brand: ".str_replace('&',' and ',$brand_name); 
			$sms.= ", Model: ".$modell;
			if ($total_amt!=""){
				$sms.= ", Quotation: ".$total_amt;
			}
			
			$sms.= " We need confirmation, send msg to 9841443300 (OK/Not OK). Thank You";
			
			$messages	= strip_tags($sms);
			$messages = str_replace(' ','%20',$messages);
			
			$msg = file_get_contents("http://bhashsms.com/api/sendmsg.php?user=9840121544&pass=efficiency&sender=SYNDPL&phone=$cust_mobi&text=$messages&priority=ndnd&stype=normal");
		}
		
		
		$data4=array(
            'status'=>$this->input->post('status'),
			'updated_on'=>$updated_on,
			'user_id'=>$user_id
        );
		
		foreach ($data4 as $datakey => $datavalue) {
			//echo $datakey.'-'.$datavalue;
		if (!empty($datavalue)){
			$this->Quotereview_model->update_stats($data4,$reqid);
		}
				
		}
		
		
		$spare_name=$data1['spare_name']=$this->input->post('spare_name');
        $spare_qty=$data1['spare_qty']=$this->input->post('spare_qty');
		$spare_qty1=$data1['spare_qty1']=$this->input->post('spare_qty1');
		$used_spares=$data1['used_spare']=$this->input->post('used_spare');
		
		
        $amt=$data1['amt']=$this->input->post('amt');
		
		//$this->Quotereview_model->delete_quote_review($reqid);
		//$used_spares=$data1['spare_tbl_id']=$this->input->post('spare_tbl_id');
		
       
		$c=$spare_name;
		$count=count($c); 
		
		/* if($reqid){
             $data1 = array();
			 for($i=0; $i<$count; $i++) {
				 if($stats=='2'){
					 $bal_spare = $spare_qty1[$i] - $spare_qty[$i];
				 $used_spare = $spare_qty[$i] + $used_spares[$i];
				 
				 $data2[] = array(
			'id' => $spare_name[$i],	
           'spare_qty' => $bal_spare,
		   'used_spare' => $used_spare
			);
				 }
				 
			
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
            
			
		} */
		echo "<script>alert('Quote Review Updated');window.location.href='".base_url()."pages/quote_in_progress_list';</script>";
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