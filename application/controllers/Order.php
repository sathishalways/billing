<?php 
class order extends CI_Controller{

    function __construct(){
     parent::__construct();
    $this->load->helper('url');
    $this->load->model('Order_model');
	$this->load->model('Customer_model');
	$this->load->model('Product_model');
    }
    
    
    public function add_bills(){ 
		$this->load->library('email');
		$data['order_id']=$this->input->post('bill_no');
		$data['customer_id']=$this->input->post('cust_name');
		$data['mobile']=$this->input->post('mobile');
		$data['address']=$this->input->post('address');
		$data['city']=$this->input->post('city_name');
		$data['state']=$this->input->post('state_name');
		$data['pincode']=$this->input->post('pincode');
		$data['purchase_date']=$this->input->post('puchase_date');
		$data['email_id']=$this->input->post('email_id');
		$data['sub_total']=$this->input->post('sub_total1');
		$data['disc']=$this->input->post('disc_amt');
		$data['grand_total']=$this->input->post('grand_total');
		$data['amt_pending']=$this->input->post('grand_total');
		
		date_default_timezone_set('Asia/Calcutta');
		$data['created_on'] = date("Y-m-d H:i:s");
		$data['updated_on'] = date("Y-m-d H:i:s");
		
		$result=$this->Order_model->add_orders($data);
		//$res = sprintf("%05d", $result);
		$ep_name = $this->input->post('p_name');
		$email_idd = $this->input->post('email_id');
		
		$content = '<html lang="en">
		<head>
			<title>Parshva Creations</title>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="x-apple-disable-message-reformatting">

			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

			<style>
				body {
					mso-line-height-rule:exactly;
					-ms-text-size-adjust:100%;
					-webkit-text-size-adjust:100%; margin: 1.6cm;}
				table, td {
					mso-table-lspace: 0pt;
					mso-table-rspace: 0pt}
				table {
					border-collapse: collapse;
					border-spacing: 0;margin: 0 auto;}
				img, a img {
					border:0 none;
					height: auto;
					line-height: 100%;
					outline: none;
					-ms-interpolation-mode: bicubic}
				a[x-apple-data-detectors] {
					color: inherit !important;
					text-decoration: none !important;
					font-size: inherit !important;
					font-family: inherit !important;
					font-weight: inherit !important;
					line-height: inherit !important}
				.x-gmail-data-detectors, .x-gmail-data-detectors *, .aBn {
					border-bottom: 0 !important;
					cursor: default !important}
				.a6S {
					display:none !important;
					opacity:0.01 !important}
				img.g-img + div {
					display:none !important}
				.button-link {
					text-decoration: none !important}
					
				#printArea { padding: 20px;}
				#printArea .print-area-cnt { border: 1px solid #999; }
				#printArea .print-tab-top { border-bottom: 1px solid #ccc; background-color: #336499; }
				#printArea .print-tab { margin:0;width:100%;line-height:100%; border: 1px solid #ccc; }
				#printArea .print-tab-head .print-tab-logo { width: 20%; border-top: 0 !important; }
				#printArea .print-tab-head .print-tab-logo img { height:70px;color:#fff;float:left;position:relative;margin-top: 25px; }
				#printArea .print-tab-head .print-tab-title { width: 80%; padding-top: 20px; border-top: 0 !important; }
				#printArea .print-tab-head .print-tab-title h4 { font-size: 18px; color: #ffffff; font-weight: bold; text-align: center;font-size: 24px; }
				#printArea .print-tab-head .print-tab-title p { font-size: 18px; color: #ffffff; text-align: center; }

				#printArea .body-part { padding: 10px;}
				#printArea .body-part table { margin:0;width:100%;line-height:100%; border: 1px solid #ccc; }
				#printArea .body-part h4 {  padding: 10px; text-align: left; }
				#printArea .body-part hr { border-bottom: 1px solid #ccc; width: 15%; margin-left: 0px; margin-top: -10px; }
				#printArea .body-part .print-area-personal tr td { padding: 10px; }
				#printArea .body-part .print-area-product thead tr { color: #444;background-color: #f2f2f2; }
				#printArea .body-part .print-area-product th,#printArea .body-part .print-area-product td { text-align: center;border: 1px solid #ccc; }

				#printArea .btn-print { border-radius: 0;border: 2px solid #ffffff; outline: 1px solid #ccc;}
				#printArea .body-part table tr, #printArea .body-part table th, #printArea .body-part table td {}

				}
				@media print {
				   .btn-print { display: none;}
				}
				@page { margin: 0; }
				@media only screen and (min-width: 375px) and (max-width: 413px) {
					.ios-gm-fix {
						min-width: 375px !important;}
				}

			</style>
		</head>

		<body>

		<div class="container">
			<div class="row" id="printArea" style=" padding: 20px;">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 print-area-cnt" style="border: 1px solid #999;">
					<div class="row">

						<table role="presentation" class="table ios-gm-fix print-tab-top" style="border-bottom: 1px solid #ccc; background-color: #336499;">
							<tbody class="print-tab-head">
								<tr>
									<td class="print-tab-logo" style="width: 20%; border-top: 0 !important;">
										<img src="'.base_url().'assets/images/logo.png" alt="materialize logo" style="height:70px;color:#fff;float:left;position:relative;margin-top: 25px;" class="saturate">
									</td>
									<td class="print-tab-title" style="width: 80%; padding-top: 20px; border-top: 0 !important;">
										<h4 style="font-size: 18px; color: #ffffff; font-weight: bold; text-align: center;font-size: 24px;">Parshva Creations</h4>
										<p style="font-size: 18px; color: #ffffff; text-align: center;">7, Balaji Complex, Elephant Gate Street, (Near Jain Temple Mint Street), Sowcarpet</p>
										<p style="font-size: 18px; color: #ffffff; text-align: center;">Tamil Nadu, Chennai - 600079</p>
									</td>
								</tr>
							</tbody>
						</table>

					</div>
					<div class="row body-part" style="padding: 10px;">

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<h4 style=" padding: 10px; text-align: left;">Billing Details</h4>
							<hr style="border-bottom: 1px solid #ccc; width: 15%; margin-left: 0px; margin-top: -10px;">
							<div class="table-responsive">
								<table role="presentation" class="table ios-gm-fix print-tab" style="margin:0;width:100%;line-height:100%; border: 1px solid #ccc;">
									
									<tbody>
										<tr>
											<td>
												<table role="presentation" style=" width: 100%; border: 1px solid #ccc;" align="left" class="table print-area-personal">
													<tbody>
														<tr><td style="padding: 10px;">Bill No</td><td>:</td><td>'.$this->input->post('bill_no').'</td></tr>
														<tr><td style="padding: 10px;">Customer Name</td><td>:</td><td>'.$this->input->post('cust_name').'</td></tr>
														<tr><td style="padding: 10px;">Mobile</td><td>:</td><td>'.$this->input->post('mobile').'</td></tr>
														<tr><td style="padding: 10px;">Address</td><td>:</td><td>'.$this->input->post('address').'</td></tr>
													</tbody>
												</table>
											</td>
											<td>
												<table role="presentation" style=" width: 100%; border: 1px solid #ccc;" align="right" class="table print-area-personal">
													<tbody>
														<tr><td style="padding: 10px;">City</td><td>:</td><td>'.$this->input->post('city_name').'</td></tr>
														<tr><td style="padding: 10px;">State</td><td>:</td><td>'.$this->input->post('state_name').'</td></tr>
														<tr><td style="padding: 10px;">Pincode</td><td>:</td><td>'.$this->input->post('pincode').'</td></tr>
														<tr><td style="padding: 10px;">Purchase Date</td><td>:</td><td>'.$this->input->post('puchase_date').'</td></tr>
													</tbody>
												</table>
											</td>
										</tr>

									</tbody>
								</table>
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style=" text-align: left;">
									<h4 style="border: 0; padding: 10px;">Product Details</h4>
									<hr style="border-bottom: 1px solid #ccc; width: 13%; margin-left: 0px; margin-top: -10px;">
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="table-responsive">
										<table role="presentation" class="table ios-gm-fix print-tab print-area-product" style=" width: 100%; border: 1px solid #ccc;">
											<thead>
												<tr style=" color: #444;background-color: #f2f2f2;">
													<th style=" text-align: center;border: 1px solid #ccc;">S.No.</th>
													<th style=" text-align: center;border: 1px solid #ccc;">Product Name</th>
													<th style=" text-align: center;border: 1px solid #ccc;">Unit Price</th>
													<th style=" text-align: center;border: 1px solid #ccc;">Qty</th>
													<th style=" text-align: center;border: 1px solid #ccc;">Total Amount</th>
												</tr>
											</thead>
											<tbody>';
											$j=1;
										    for($i=0;$i<count($ep_name);$i++){
												$content.='<tr style=" text-align: center;">
													<td style="border: 1px solid #ccc;">'.$j.'</td>
													<td style="border: 1px solid #ccc;">'.$this->input->post('p_name')[$i].'</td>
													<td style="border: 1px solid #ccc;">'.$this->input->post('qty')[$i].'</td>
													<td style="border: 1px solid #ccc;">'.$this->input->post('price')[$i].'</td>
													<td style="border: 1px solid #ccc;">'.$this->input->post('sub_total')[$i].'</td>
												</tr>';
												$j++;}
										$content.='<tr style=" text-align: center;">
													<td colspan="2" style="border: 1px solid #fff;border-right:1px solid #ccc;"></td>
													<td style="border: 1px solid #ccc;">Sub total</td>
													<td style="border: 1px solid #ccc;">'.$this->input->post('sub_total1').'</td>
												</tr>
												<tr style=" text-align: center;">
													<td colspan="2" style="border: 1px solid #fff;border-right:1px solid #ccc;"></td>
													<td style="border: 1px solid #ccc;">Discount</td>
													<td style="border: 1px solid #ccc;">'.$this->input->post('disc_amt').'</td>
												</tr>
												<tr style=" text-align: center;">
													<td colspan="2" style="border: 1px solid #fff;border-right:1px solid #ccc;"></td>
													<td style="border: 1px solid #ccc;">Grand total</td>
													<td style="border: 1px solid #ccc;">'.$this->input->post('grand_total').'</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>	


		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		</body>
		</html>';
				
				$this->email->set_mailtype("html");
				$this->email->from('vijaysavkaka@yoursefficiently.com', 'vijayakumar');
				$this->email->to($email_idd);
				$this->email->subject('Bill - Parshva Creations');
				$this->email->message($content);
				$this->email->send();
		
		
		if($result){
			$p_name = $this->input->post('p_name');
			for($i=0;$i<count($p_name);$i++){
				$data1['order_id']=$result;
				$data1['p_name']=$this->input->post('p_name')[$i];
				$data1['qty']=$this->input->post('qty')[$i];
				$data1['price']=$this->input->post('price')[$i];	
				$data1['sub_total']=$this->input->post('sub_total')[$i];
				
				$result1=$this->Order_model->add_order_details($data1);
				$this->Order_model->update_stock_in_hand($this->input->post('qty')[$i], $this->input->post('p_name')[$i]);
				$this->Order_model->update_used_qty($this->input->post('qty')[$i], $this->input->post('p_name')[$i]);
			}
			
			echo "<script>alert('Bill Added Successfully!!!');window.location.href='".base_url()."pages/dash';</script>";
		}
		
    }
	
	
	
    public function update_bills(){ 
		   $id=$this->uri->segment(3);
		   $data['customer_list']=$this->Customer_model->customer_list();
		   $data['getorderbyid']=$this->Order_model->getorderbyid($id);
		   $data['getorderDetailsbyid']=$this->Order_model->getorderDetailsbyid($id);
		   $data['prod_list']=$this->Product_model->product_list();
		   
		   $this->load->view('templates/header');
		   $this->load->view('edit_bills',$data);
		
    }
	
	public function print_bills(){ 
		$id=$this->uri->segment(3);
		$data['getorderbyid']=$this->Order_model->getorderbyid($id);
		$data['getCustDetails'] = $this->Order_model->getCustDetails($data['getorderbyid'][0]->customer_id);
		
		$data['getorderDetailsbyid']=$this->Order_model->getorderDetailsbyid($id);
		
		$this->load->view('print_bills',$data);
    }
	
	
	public function edit_bills(){ 
		$id = $this->input->post('bill_id');
		$data['order_id']=$this->input->post('bill_no');
		//$data['customer_id']=$this->input->post('cust_name');
		$data['mobile']=$this->input->post('mobile');
		$data['address']=$this->input->post('address');
		$data['city']=$this->input->post('city_name');
		$data['state']=$this->input->post('state_name');
		$data['pincode']=$this->input->post('pincode');
		$data['purchase_date']=$this->input->post('puchase_date');
		$data['email_id']=$this->input->post('email_id');
		$data['sub_total']=$this->input->post('sub_total1');
		$data['disc']=$this->input->post('disc_amt');
		$data['grand_total']=$this->input->post('grand_total');
		$amt_paid = $this->input->post('amt_paid');
		$amt_paid1 = $this->input->post('amt_paid1');
		$data['amt_paid']= $amt_paid + $amt_paid1;
		$data['amt_pending']=$this->input->post('amt_pending');
		
		date_default_timezone_set('Asia/Calcutta');
		$data['created_on'] = date("Y-m-d H:i:s");
		$data['updated_on'] = date("Y-m-d H:i:s");
		
		$result = $this->Order_model->update_orders($data,$id);
		
		if($result){
			$p_name = $this->input->post('p_name');
			for($i=0;$i<count($p_name);$i++){
				$ord_id = $this->input->post('ord_id')[$i];
				if(isset($ord_id) && $ord_id!=""){
					$data1['p_name']=$this->input->post('p_name')[$i];
					$data1['qty']=$this->input->post('qty')[$i];
					$data1['price']=$this->input->post('price')[$i];	
					$data1['sub_total']=$this->input->post('sub_total')[$i];
					$result1=$this->Order_model->update_order_details($data1,$ord_id);
				}else{
					$data1['order_id']=$id;
					$data1['p_name']=$this->input->post('p_name')[$i];
					$data1['qty']=$this->input->post('qty')[$i];
					$data1['price']=$this->input->post('price')[$i];	
					$data1['sub_total']=$this->input->post('sub_total')[$i];
					$result1=$this->Order_model->add_order_details($data1);
				}
				
			}
			
			echo "<script>alert('Bill Updated Successfully!!!');window.location.href='".base_url()."pages/dash';</script>";
		}
	
    }
	
	public function get_customerById(){
		$id=$this->input->post('id');
		
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Order_model->get_customerById($id)));
    }
	
	public function edit_order(){ 
	
	//echo "<pre>";print_r($_POST);exit;
		date_default_timezone_set('Asia/Calcutta');
		$updated_on = date("Y-m-d H:i:s");
		
		

		$data111['user_dat'] = $this->session->userdata('login_data');
		$user_id = $data111['user_dat'][0]->id;
		 
		 $data=array(
            'order_id'=>$this->input->post('order_no'),
            'customer_id'=>$this->input->post('cust_name'),
            'customer_service_loc_id'=>$this->input->post('br_name'),
			'contact_name'=>$this->input->post('cont_name'),
            'mobile'=>$this->input->post('mobile'),
            'email_id'=>$this->input->post('email'),
			'address'=>$this->input->post('addr'),
			'city'=>$this->input->post('city'),
			'state'=>$this->input->post('state'),
			'pincode'=>$this->input->post('pincode'),
			'zone_coverage'=>$this->input->post('service_loc_coverage'),
			'updated_on'=>$updated_on,
			'user_id'=>$user_id
        );
        $id=$this->input->post('orderid');
		
		$this->Order_model->update_orders($data,$id);
		
		//$this->Order_model->delete_order_details($id);
		
		$rowid=$this->input->post('orderdetailid'); 
		
		
		/* $pm_date = $this->input->post('pm_date');
		$pm_sch_id = $this->input->post('pm_sch_id');
		$pm_sch_status = $this->input->post('pm_sch_status');
				
			for($k=0;$k<count($pm_date);$k++){
				$data_pm['order_id']=$id;
				$data_pm['schedule_date']=$pm_date[$k];
				
				if($pm_sch_status[$k]=='1'){
					$data_pm['status']='1';
				}else{
					$data_pm['status']='0';
				}
				
				if($pm_sch_id[$k]!="" && isset($pm_sch_id[$k])){
					$result=$this->Order_model->update_pm_details($data_pm,$pm_sch_id[$k]);
				}else{
					$this->Order_model->add_pm_details($data_pm);
				}

			} */
		
		
		
		if($id){
			$data1['order_id']=$id;
			$data1['serial_no']=$this->input->post('serial_no');
			$data1['batch_no']=$this->input->post('batch_no');
            $data1['cat_id']=$this->input->post('category');
            $data1['subcat_id']=$this->input->post('subcategory');
            $data1['brand_id']=$this->input->post('brandname');
            $data1['model_id']=$this->input->post('model');
            //$data1['price']=$this->input->post('price');
            $data1['service_loc_id']=$this->input->post('service_loc');
		    $data1['purchase_date']=$this->input->post('purchase');
			
			$colorRadio = $this->input->post('colorRadio');
			
			if($colorRadio=='paid'){
				$data1['paid']=$this->input->post('colorRadio');
				$data1['warranty_date']="";
				$data1['prev_main']="";				
				//$data1['amc_type']="";
				$data1['prev_main_updated']="";
				$data1['amc_start_date']="";
				$data1['cmc_start_date']="";
				$data1['amc_end_date']="";
				$data1['cmc_end_date']="";
				$data1['rent_date']="";
				$data1['rent_type']="";
				
				
				
				if($this->input->post('amc_start_date')!="" && $this->input->post('amc_prenos')!=""){
						$data1['prenos']="";
					}
			}elseif($colorRadio=='warranty'){
				$data1['warranty_date']=$this->input->post('warranty');
				$data1['prenos']=$this->input->post('warrnos');
				$data1['prev_main_updated']=$this->input->post('purchase');
				$data1['paid']="";
				$data1['prev_main']="";				
				$data1['rent_type']="";
				$data1['amc_start_date']="";
				$data1['cmc_start_date']="";
				$data1['amc_end_date']="";
				$data1['cmc_end_date']="";
				$data1['rent_date']="";
								
			}elseif($colorRadio=='prevent'){
				$data1['prev_main']=$this->input->post('preventive_main');
				$data1['prev_main_updated']=$this->input->post('purchase');
				$data1['prenos']=$this->input->post('prenos');
				$data1['paid']="";
				$data1['warranty_date']="";				
				$data1['rent_type']="";
				$data1['amc_start_date']="";
				$data1['cmc_start_date']="";
				$data1['amc_end_date']="";
				$data1['cmc_end_date']="";
				$data1['rent_date']="";
			}
			elseif($colorRadio=='cmc'){
                        $data1['prev_main_updated']=$this->input->post('cmc_start_date');
						$data1['cmc_start_date']=$this->input->post('cmc_start_date');
						$data1['cmc_end_date']=$this->input->post('cmc_end_date');
						$data1['prenos']=$this->input->post('cmc_prenos');
				$data1['paid']="";
				$data1['prev_main']="";				
				$data1['rent_type']="";
				$data1['amc_start_date']="";
				$data1['amc_end_date']="";
				$data1['rent_date']="";
				$data1['warranty_date']="";
				
			}
			elseif($colorRadio=='rent'){
				$data1['paid']="";
					$data1['warranty_date']="";					
					
					$data1['amc_start_date']="";
					$data1['amc_end_date']="";
					$data1['prev_main']="";
					$data1['cmc_end_date']="";
					$data1['cmc_start_date']="";
					
					$data1['rent_date']=$this->input->post('rent');
					$data1['rent_type']=$this->input->post('rent_type');
					$data1['prev_main_updated']=$this->input->post('purchase');
					$data1['prenos']=$this->input->post('rent_nos');
					
			}else{
						//$data1['amc_type']=$this->input->post('amc_type');
						$data1['cmc_start_date']="";
					    $data1['cmc_end_date']="";
						$data1['prev_main_updated']=$this->input->post('amc_start_date');
						$data1['amc_start_date']=$this->input->post('amc_start_date');
						$data1['amc_end_date']=$this->input->post('amc_end_date');
						if($this->input->post('amc_prenos')!=""){
							$data1['prenos']=$this->input->post('amc_prenos');
						}else{
							$data1['prenos']=$this->input->post('prenos');
						}
						
						if($this->input->post('warranty_date_hide')!=""){
							$data1['warranty_date']="";
						}
						
						if($this->input->post('prev_main_hide')!=""){
							$data1['prev_main']="";
						}
						
						if($this->input->post('paid_hide')!=""){
							$data1['paid']="";
						}
				
			}
			
			
			$data1['notes']=$this->input->post('notes');
			$warranty=$this->input->post('warranty');
			//$result1=$this->Order_model->add_order_details($data1);
			$salename1=$this->input->post('salename'); //echo $salename1; exit;
			$where = "id=".$rowid." AND order_id=".$id; 
		    $result1=$this->Order_model->Update_order_details($data1,$where);
		  
			if($salename1=='amc'){
				echo "<script>alert('AMC Order Updated Successfully!!!');window.location.href='".base_url()."pages/amc_list';</script>";
			}else if($salename1=='warranty'){
				echo "<script>alert('Warranty Order Updated Successfully!!!');window.location.href='".base_url()."pages/order_list';</script>";
			}			
			else if($salename1=='cmc'){
				echo "<script>alert('CMC Order Updated Successfully!!!');window.location.href='".base_url()."pages/cmc_list';</script>";
			}			
			else if($salename1=='rent'){
				echo "<script>alert('Rent Order Updated Successfully!!!');window.location.href='".base_url()."pages/rent_list';</script>";
			}
			else 
				
				echo "<script>alert('Chargeable Order Updated Successfully!!!');window.location.href='".base_url()."pages/expiry_closed';</script>";
			}
    }
		
    
}