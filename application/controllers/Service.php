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
	
	public function delete($idd)
	{
		
		 $thisa='1';
		 $data=array(
            'active_req'=>$thisa
          );
		// $sss = $this->Service_model->getOld_forothers($idd);
		 $s = $this->Service_model->update_service_delstatus($data,$idd);
		if($s)
		{
			redirect('pages/service_req_list');
		}
	}
	
	
	
	
	
	public function autocomp($urks)
	{
		
		 $searchTerm = $_GET['term'];
	
		 
        $this->db->select("*",FALSE);
		$this->db->from('problem_category');
        $this->db->like('prob_category', $searchTerm);		
		$this->db->where('model', $urks);
		$query = $this->db->get();
		$ressullt = $query->num_rows();
		
     // print_r($query);
	  //  while ($row = $query->fetch_assoc()) {
      //  $data[] = $row['prob_category'];
       
  //  }
  if($ressullt!=0)
  {
            foreach ($query->result() as $row)
            {
//print_r($row);
              
                $data[] = $row->prob_category;

            }
  }
  else
  {
	 $data[]='No results found!'; 
  }
        
    
    //get matched data from skills table
    /*$query = $db->query("SELECT * FROM problem_category WHERE prob_category LIKE '%".$searchTerm."%' ORDER BY prob_category ASC");
    while ($row = $query->fetch_assoc()) {
        $data[] = $row['prob_category'];
       
    }*/
    
    //return json data
    echo json_encode($data);
	}
	
	
	public function view_claim(){
		$this->load->helper('pdf_helper');
		$id=$this->uri->segment(3);
		$data1['warran_mode'] = $this->uri->segment(4);
		$view_claim=$this->Service_model->view_claim($id);
		
		foreach($view_claim as $claimKey){
			$quote_req_id = $claimKey->quote_req_id;
			$desc_failure = $claimKey->desc_failure;
			$why_failure = $claimKey->why_failure;
			$correct_action = $claimKey->correct_action;
			$spare_qty = $claimKey->spare_qty;
			$request_id = $claimKey->request_id;
			$request_date = $claimKey->request_date;
			
			$serial_no = $claimKey->serial_no;
			$model = $claimKey->model;
			$company_name = $claimKey->company_name;
			
			$address = $claimKey->address;
			$address1 = $claimKey->address1;
			
			$city = $claimKey->city;
			$state = $claimKey->state;
			$pincode = $claimKey->pincode;
			$spare_details = $claimKey->spare_details;
			$purchase_date = $claimKey->purchase_date;
			$emp_name = $claimKey->emp_name;
			
		}
		
				tcpdf();
				$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
				$obj_pdf->SetCreator(PDF_CREATOR);
				
				//$obj_pdf->SetTitle($title);
				//$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH,'', PDF_HEADER_STRING);
				//$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
				//$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
				$obj_pdf->SetDefaultMonospacedFont('helvetica');
				//$obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
				//$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
				$obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
				$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
				$obj_pdf->SetFont('helvetica', '', 9);
				$obj_pdf->setFontSubsetting(false);
				$obj_pdf->AddPage();
				
				$content = '<html>
					<head>
					<title>Warranty Claim</title>
				    <style>

        .tp01
        {
            border-collapse: collapse;
        }

            .tp01 th
            {
                color: #000;
                border: 1px solid #e4e4e4;
            }

            .tp01 td, .myTable th
            {
                padding: 5px;
                border: 1px solid #e4e4e4;
            }

    </style>
	<style>
table {
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid black;
}
table,td{
height:18px;

}

 </style>
 </head>
 <body>
							<table  class="tp01" cellpadding="5" cellspacing="0" border="none">
								<tr>
									<td colspan="1"><img src="assets/images/stagologo.png" alt="materialize logo" style="margin-left:100px;"></td>
									<td colspan="1" style="text-align:center;"><h2>WARRANTY CLAIM</h2><p>Demande de Garantie</p></td>
									<td colspan="1" style="line-height:150%;">SUBMIT TO / renvoyer á :
										<b style="color:red;font-size:8px;">DIAGNOSTICA STAGO - SAVE</b> - B.P.226 
										92602 ASNIERES CEDEX - FRANCE
										FAX : (33)(0) 1 46 88 22 40
										@: save@stago.fr
									</td>
								</tr>

								<tr>
									<td colspan="1"><p><b>TYPE OF INSTRUMENT:</b>'.$model.'</p>
										<p>Type d\'instrument</p>
									</td>
									<td colspan="1"><p><b>SERIAL No:</b> '.$serial_no.'</p>
										<p>N&#176; de série</p>
									</td>
									<td colspan="1"><b>DATE OF INSTALLATION(YY MM DD):</b>
										<p>Date d\'installation (AA MM JJ) '.$purchase_date.'</p></td>
								</tr>
								<tr>
									<td colspan="2">
										<table >
											<tr>
												<td>
													<b>NAME OF LABORATORY:</b> 
													<br>Nom du laboratoire: 
													'.$company_name.'
												</td>
											</tr>
								<tr>
									<td>
										<b>INSTALLATION ADDRESS:</b>
											<br>Address dinstallation
									</td>
									<td>'.$address.' '.$address1.' '.$city.' '.$state.' '.$pincode.'</td>
								</tr>
						</table>
					</td>
					<TD colspan="1" style="border-left: 1px solid #ccc;" ><p><b>STAGO RESERVED :</b><br>Réservé STAGO</p></td>
				</tr>

				<tr>
				<td colspan="3"><p  style="color:red;text-align:center"><b>ACCURATE AND DETAILED DESCRIPTION OF FAILURE</b></p>
				<p style="text-align:center">Description précise et détailée du défaut</p>
				</td>
				</tr>

				<tr>
				<td colspan="3"><b>DATE OF INTERVENTION(YY MM DD) :</b>
				<br>Date d\'intervention (AA MM JJ) '.$request_date.' </td>
				</tr>
				
					<tr>
									<td colspan="1" style="border-right: 1px solid #fff;">
										<table >
											<tr  colspan="1">
												<td >
												<b style="text-decoration: underline; ">DESCRIPTION OF FAILURE:</b><br>Description du Défaut
												</td>
											</tr>
								
						</table>
					</td>
					<TD colspan="2"  >'.$desc_failure.'</td>
				</tr>
					<tr>
									<td colspan="1"  style="border-right: 1px solid #fff;">
										<table >
											<tr  colspan="1">
												<td >
												<b style="text-decoration: underline; ">WHY AND WHEN DID IT OCCUR ?</b><br>Raisons et circonstances
												</td>
											</tr>
								
						</table>
					</td>
					<TD colspan="2" style="border-left: 1px solid #fff;" >'.$why_failure.'</td>
				</tr>				
					<tr>
									<td colspan="1"  style="border-right: 1px solid #fff;">
										<table >
											<tr  colspan="1">
												<td >
												<b style="text-decoration: underline; ">CORRECTIVE ACTION</b><br>Action corrective
												</td>
											</tr>
								
						</table>
					</td>
					<TD colspan="2" style="border-left: 1px solid #fff;" >'.$correct_action.'</td>
				</tr>			
            <tr>
                 <td><b>FIELD SERVICE ENGINEER</b><br>Technicien SAV</td>
                 <td>'.$emp_name.'</td>
                  <td><b>DATE OF INTERVENTION(YY MM DD):</b>
				<br>Date d\'intervention (AA MM JJ) '.$request_date.' </td>
				</tr>
				<tr>
				<td colspan="3" ><p  style="color:red;text-align:center"><b>PARTS CLAIMED FOR THE WARRANTY</b></p>
				<p style="text-align:center">Piéces demandées au titre de la garantie</p>
				</td>
				</tr>
				<table>
						<tr>
						<th><b style="text-align:center">PART NUMBERS</b><br><span style="text-align:center">références</span></th>
						<th style="width:30px;"><b style="text-align:center">QTY</b><br><span style="text-align:center">Qté</span></th>
						<th><b style="text-align:center">DESIGNATION</b><br><span style="text-align:center">Désignation</span></th>
						<th style="width:139px;"><b style="text-align:center;">REPLACEMENT PART SN</b><br><span style="text-align:center">Ns piéce défectueuse</span></th>
						<th><b style="text-align:center">CREDIT*</b><br><span style="text-align:center">crédit*</span></th>
						<th><b style="text-align:center">REPLACEMENT*</b><br><span style="text-align:center">Remplacement*</span></th>
						</tr>';
						$spare_det = explode(',',$spare_details); 
						for($r=0;$r<count($spare_det);$r++){
							$sp_details = explode('-',$spare_det[$r]);

						
						$content .= '<tr>
						<td style="text-align:center;">'.$sp_details[2].'</td>
						<td style="text-align:center;">'.$spare_qty.'</td>
						<td style="text-align:center;">'.$sp_details[1].'</td>
						<td style="text-align:center;"></td>
						<td style="text-align:center;"></td>
						<td style="text-align:center;"></td>
						</tr>';
						}
						
                 $content .= '</table>
					<tr>
									<td colspan="2"  style="border-right:1px solid #fff;">
										<table>
											<tr  colspan="2" >
												<td style="border-right:1px solid #fff;">
												<b>DISTRIBUTOR VISA:</b><br>Visa distributeur
												</td>
											</tr>
								
						</table>
					</td>
					<TD colspan="5" style="border-left: 1px solid #fff;text-align:left;" >Anil Kumar Dwivedi</td>
				</tr>
<tr>
<td colspan="6"><p  style="color:red;text-align:center"><b>COMMENTS</b></p>
<p style="text-align:center"></p>
</td>
</tr>

<tr>
<td colspan="6">
</td>
</tr>

<tr>
<td colspan="2" style="border:1px solid #fff">SN = Serial Number</td> 
<td colspan="1" style="border:1px solid #fff">Ns = N* série</td>
<td colspan="2" style="border:1px solid #fff">* = Cross Your choise / Cocher voter Choix</td>
</tr>

<tr>
<td colspan="1" style="border:1px solid #fff">S-0931046</td>
<td colspan="4" style="border:1px solid #fff"><b>DISTRBUTION</b> : ORIGINAL : DIAGNOSTICA STAGO : 1st COPY : ISSUER<br>original : DIAGNOSTICA STAGO : 1ére : émetteur</td>
<td colspan="1" style="border:1px solid #fff">38786</td>
</tr>
		</table>
		</body>
				</html>';						

				ob_end_clean();
				$obj_pdf->writeHTML($content, true, false, true, false, '');
				$obj_pdf->Output('warranty_claim.pdf', 'I');

				//$obj_pdf->Output('service/assets/testtt.pdf', 'F');
    }
	
	public function topdf($id=NULL,$option=NULL)
	{
		//echo "REquest Id: ".$id;exit;
		//$this->load->model('invoiceModel');
		//$this->load->library('Numbertowords');
		//$this->load->model('settings/Mdl_Settings');
		$idd=$this->uri->segment(3);
		$data1['warran_mode'] = $this->uri->segment(4);
		$data1['view_claim']=$this->Service_model->view_claim($idd);
		
		if(!$id)
		{
			echo "No More Access"; exit;	
		}
		else
		{
                                
				//$ht=$this->view($id,"without_template","module");
               $ht= $this->load->view('view_claim',$data1);
				 
				$html='<html> <head> </head> <body> <style type="text/css">.cncl-bg{display:none} </style>'.$ht.' <link href="'.base_url().'assets/css/invoice_pdf.css" rel="stylesheet" type="text/css" /></body></html>';
			///	echo $html; exit;
				$paper='A4';
        			$this->load->library('pdf'); 
                                 //include('../mpdf.php');
                                
				$base=str_replace("system/","",BASEPATH);   
				//$invoiceinfo = $this->invoiceModel->getInvoiceinfoById($id);
			
			//	if($invoiceinfo->status=='C')
				//$mark=$base."images/canceled.png";
				//else
				$mark=NULL;
                             
				//if($option=="")
                               $this->pdf->downloadPdf($html,NULL,$mark);
                                 
                               
                                			                        
		}
		
	}
	
    public function add_service_req(){//echo "<pre>";print_r($_POST);exit;
		error_reporting(0);
		ini_set('max_execution_time', 900);
		
		$config = array();
        $config['useragent'] = "CodeIgniter";
        $config['mailpath'] = "/usr/bin/sendmail"; // or "/usr/sbin/sendmail"
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "localhost";
        $config['smtp_port'] = "25";
        $config['mailtype'] = 'html';
        $config['charset']  = 'utf-8';
        $config['newline']  = "\r\n";
        $config['wordwrap'] = TRUE;
		$this->load->library('email');
		$this->email->initialize($config);
		
		$req=$this->input->post('req_id');
	
		$check_req=$this->Service_model->check_req($req);
		
		if(empty($check_req)){
		//echo "Hello";
        $data['request_id']=$this->input->post('req_id');
		$data['cust_name']=$this->input->post('customer_id');
		$data['br_name']=$this->input->post('br_name');
		
		$data['mobile']=$this->input->post('mobile');
		$data['email_id']=$this->input->post('email_id');
		$data['address']=$this->input->post('address');
		$data['address1']=$this->input->post('address1');
		$data['request_date']=$this->input->post('datepicker');
		$data['status']=$this->input->post('status');
		//$data['active_req']='1';
		
		date_default_timezone_set('Asia/Calcutta');
		$data['created_on'] = date("Y-m-d H:i:s");
		$data['updated_on'] = date("Y-m-d H:i:s");
		
		$data111['user_dat'] = $this->session->userdata('login_data');
		$data['user_id'] = $data111['user_dat'][0]->id;
		
		$req_autoid=$this->input->post('req_id');
		
		$customer_mobile=$this->input->post('mobile');
		//echo "Hello";
		$result=$this->Service_model->add_services($data);
		//echo "Helloww";
		$res = sprintf("%05d", $result);
		
		if($result){
			
			if(isset($customer_mobile) && $customer_mobile!=""){
				$cname=$this->input->post('customer_name');
					$stype=$this->input->post('service_type');
					 $sms= "Your service request ID ".$req." created for (".$cname.",".$stype.") thank you. <br>Syndicate Diagnostics pvt ltd.<br>";
					 
					 $messages	= strip_tags($sms);
					 $messages = str_replace(' ','%20',$messages);
					$supervisor_mobile='9826938860';
					 $msg = file_get_contents("http://bhashsms.com/api/sendmsg.php?user=9840121544&pass=efficiency&sender=SYNDPL&phone=$customer_mobile&text=$messages&priority=ndnd&stype=normal");
					 
					 $msg1 = file_get_contents("http://bhashsms.com/api/sendmsg.php?user=9840121544&pass=efficiency&sender=SYNDPL&phone=$supervisor_mobile&text=$messages&priority=ndnd&stype=normal");
				
			}
			
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
		//$data1['site']=$this->input->post('site');
		
		//$sitee = $this->input->post('site');
		
		
		$data1['service_type']=$this->input->post('service_type');
		//$data1['service_cat']=$this->input->post('service_cat');
		$ser_det = $this->input->post('service_cat');
		$ser = explode("-",$ser_det);
		$data1['service_cat'] = $ser['0'];
		
		$data1['zone']=$this->input->post('locid');
		$data1['service_loc_coverage']=$this->input->post('service_loc_coverage');
		

		
$get_all = $this->input->post('skills');
$expll = explode(',',$get_all);
$cunt = count($expll);
$user_array = array();
$userr_array = array();
for($i=0;$i<$cunt;$i++)
{
	$model = $this->input->post('modelid');
    $ffffff = $expll[$i];
	$this->db->select("*",FALSE);
    $this->db->from('problem_category');
    $this->db->where('prob_category', $ffffff);
    $this->db->where('model', $model);
     	$ressult = $this->db->get();
	$ressullt = $ressult->num_rows();
	

 if($ressullt>0)
{
	//echo 'elseeee';
foreach($ressult->result() as $empkey)
{
	$getlastt = $empkey->id;
	array_push($userr_array,$getlastt);
}

}
      else  if($ressullt==0)
{
	$datsa=array(
		'prob_category'=>$ffffff,
		'model'=>$model
	); 
     $this->db->insert('problem_category',$datsa);
	 //echo $this->db->last_query();
	  $getlast = $this->db->insert_id();
	 array_push($user_array,$getlast);
}

}
$data1['problem'] = array_merge($userr_array, $user_array);

		

		
		//$data1['problem']=$this->input->post('probi');
		
		if (is_array($data1['problem'])){
					$data1['problem']= implode(",",$data1['problem']);
				}else{
					$data1['problem']="";
				}
		
		//$data1['problem']=$this->input->post('prob');
		//$data1['assign_to']=$this->input->post('assign_to');
		$data1['service_priority']=$this->input->post('service_priority');
		//$data1['blank_app']=$this->input->post('blank_app');
		
		$eng_id=$this->input->post('assign_to');
		
		for($t=0;$t<count($eng_id);$t++){
			  
			if(isset($eng_id[$t]) && $eng_id[$t]!=""){
			
			 $em_id = explode("-", $eng_id[$t]);
		 
			 $e_id[] = $em_id['0'];
		
			 $emp_id = $em_id['0']; 
			 $sms_mob = $em_id['1'];
		}
		//echo "Hsssssi: ".$em_id['0']; exit;
		//$site_customer =  $this->input->post('site');
		
		if($em_id['1']!="" && isset($em_id['1'])){ 
			$sms_mobs=$em_id['1'];
			$cust_name = $this->input->post('customer_name');
			$modell = $this->input->post('model');
			//$brand_name = $this->input->post('brand_name');
			
			$sms= "Request ID:".$req;
			$sms.= " Name:".$cust_name;
			if ($this->input->post('address')!=""){
				$sms.= ", ".$this->input->post('address').' '.$this->input->post('address1');
			}
			if ($this->input->post('mobile')!=""){
				$sms.= ",".$this->input->post('mobile');
			}
			//$sms.= " Brand: ".$brand_name; 
			$sms.= ",Model:".$modell;
			
			
			
			if ($this->input->post('probi')!=""){
				
				foreach($this->input->post('probi') as $val_pro){
					$sms_problemlist=$this->Service_model->sms_problemlist($val_pro);
					$sms.=",".$sms_problemlist[0]->prob_category;
				}
				
			}
			
			/*if ($this->input->post('blank_app')!=""){
				$sms.= ",Blanket Appr: ".$this->input->post('blank_app');
			}*/
			
			$messages	= strip_tags($sms);
			$messages = str_replace(' ','%20',$messages);
			
			//$msg = file_get_contents("http://bhashsms.com/api/sendmsg.php?user=arihantmarketing&pass=123&sender=BHASH&phone=$sms_mobs&text=$messages&priority=dnd&stype=normal");
			
			$msg = file_get_contents("http://bhashsms.com/api/sendmsg.php?user=9840121544&pass=efficiency&sender=SYNDPL&phone=$sms_mobs&text=$messages&priority=ndnd&stype=normal");
			
			$get_emp_email = $this->Service_model->get_emp_email($em_id['0']); 
			
			if($get_emp_email[0]->emp_email!=""){
				
				//echo "Eng email: ".$get_emp_email[0]->emp_email;
				$content = '<tr>
                                <td style="border-radius: 3px;border:1px solid #ccc;padding:5px;text-align:center">Request ID: </td>
								<td style="border-radius: 3px;border:1px solid #ccc;padding:5px;text-align:center">'.$req.'</td>
								
							</tr>
							
							<tr>
                                <td style="border-radius: 3px;border:1px solid #ccc;padding:5px;text-align:center">Customer Name: </td>
								<td style="border-radius: 3px;border:1px solid #ccc;padding:5px;text-align:center">'.$cust_name.'</td>
								
							</tr>
							
							<tr>
                                <td style="border-radius: 3px;border:1px solid #ccc;padding:5px;text-align:center">Address: </td>
								<td style="border-radius: 3px;border:1px solid #ccc;padding:5px;text-align:center">'.$this->input->post('address').' '.$this->input->post('address1').'</td>
								
							</tr>
							
							<tr>
                                <td style="border-radius: 3px;border:1px solid #ccc;padding:5px;text-align:center">Mobile: </td>
								<td style="border-radius: 3px;border:1px solid #ccc;padding:5px;text-align:center">'.$this->input->post('mobile').'</td>
								
							</tr>
							
							<tr>
                                <td style="border-radius: 3px;border:1px solid #ccc;padding:5px;text-align:center">Model: </td>
								<td style="border-radius: 3px;border:1px solid #ccc;padding:5px;text-align:center">'.$this->input->post('model').'</td>
								
							</tr>';
				if ($this->input->post('probi')!=""){
				foreach($this->input->post('probi') as $val_pro){
					$sms_problemlist=$this->Service_model->sms_problemlist($val_pro);
					$content .= '<tr>
                                <td style="border-radius: 3px;border:1px solid #ccc;padding:5px;text-align:center">Problems: </td>
								<td style="border-radius: 3px;border:1px solid #ccc;padding:5px;text-align:center">'.$sms_problemlist[0]->prob_category.'</td>
								
							</tr>';
				}
			 }
				
				$this->email->set_mailtype("html");
				$this->email->from('service@syndicatediagnostics.com', 'Syndicate Diagnostics');
				$this->email->to($get_emp_email[0]->emp_email);
				//$this->email->cc('kanmanip@yoursefficiently.com');

				$this->email->subject('Syndicate Diagnostics - Service Request: '.$req);
				$this->email->message($content);

				if($this->email->send()){
				   //Success email Sent
				   //echo "Success";
				   $this->email->print_debugger();
				}else{
				   //Email Failed To Send
				   //echo "Fail";
				   $this->email->print_debugger();
				}
				
			}
				
			
			
		}
			  
			  
			  
		}
		
		//echo "<pre>";
		//print_r($e_id);
		$data1['assign_to'] = implode(',',$e_id);
		
		//$data1['assign_to'] 
		//$emp_det = $this->input->post('assign_to');
		//$emp = explode(",",$emp_det);
		//$data1['assign_to'] = $emp['0']; 
		
		
		$data1['received']=$this->input->post('received');
		if (is_array($data1['received'])){
					$data1['received']= implode(",",$data1['received']);
				}else{
					$data1['received']="";
				}
				
		
		$data1['notes']=$this->input->post('notes');
		//$countids=$this->input->post('countids');
		
		$result1=$this->Service_model->add_service_details($data1);
		
		$data_log_reassign['engg_id'] = implode(',',$e_id);
		$data_log_reassign['req_id'] = $res;
		$data_log_reassign['updated_on'] = date("Y-m-d H:i:s");
		$this->Service_model->add_log_reassign_engg($data_log_reassign);
		
		}
		
		if($result){
		      echo "<script>alert('Service Request Added. Your Request ID is: '+'".$req_autoid."');window.location.href='".base_url()."pages/service_req_list';window.open('".base_url()."service/print_service/".$res."')</script>";
     }
	 
		}else{
			echo "<script>alert('Service Request ID already exists');window.location.href='".base_url()."pages/add_service_req';</script>";
		}
    
		
		
    
    }
	public function print_service(){ 
		$id=$this->uri->segment(3);
		$data['url_id'] = $this->uri->segment(3);
		
		$data['list']=$this->Service_model->getservicereqbyid($id);
		//$data['list1']=$this->Service_model->getservicereqDetailsbyid($id);
		
		$data['list1']=$this->Service_model->getservicereqDetailsbyid($id);
		   if(!empty($data['list1'])){
			   $data['list7']=$this->Service_model->getservicereqDetailsbyid($id);
		   }else{
			   $data['list7']=$this->Service_model->getservicereqDetailsbyid1($id);
		   }
		$data['getBranchservicereqbyid']=$this->Service_model->getBranchservicereqbyid($id);
		
		$data['list2']=$this->Service_model->getserviceEmpbyid($id);
		$data['list_serialnos']=$this->Service_model->list_serialnos();
		   
		$data['customerlist']=$this->Service_model->customerlist();
		   
		$data['servicecat_list']=$this->Service_model->print_servicecat_list($id);
		$data['problemlist']=$this->Service_model->print_problemlist($id);
		
		$data['problemlist1']=$this->Service_model->problemlist();
		
		$data['employee_list']=$this->Service_model->employee_list();
		$data['accessories_list']=$this->Service_model->accessories_list();
		
		$data['zone_pincodes']=$this->Service_model->zone_pincodes();
		
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('print_preview_request',$data);
    }
	
	
	public function print_preview(){ 
	
		$id=$this->input->post('url_id');
		
		$data['list']=$this->Service_model->getservicereqbyid($id);
		//$data['list1']=$this->Service_model->getservicereqDetailsbyid($id);
		
		$data['list1']=$this->Service_model->getservicereqDetailsbyid($id);
		   if(!empty($data['list1'])){
			   $data['list7']=$this->Service_model->getservicereqDetailsbyid($id);
		   }else{
			   $data['list7']=$this->Service_model->getservicereqDetailsbyid1($id);
		   }
		$data['getBranchservicereqbyid']=$this->Service_model->getBranchservicereqbyid($id);
		
		$data['list2']=$this->Service_model->getserviceEmpbyid($id);
		$data['list_serialnos']=$this->Service_model->list_serialnos();
		   
		$data['customerlist']=$this->Service_model->customerlist();
		   
		$data['servicecat_list']=$this->Service_model->print_servicecat_list($id);
		$data['problemlist']=$this->Service_model->print_problemlist($id);
		
		$data['problemlist1']=$this->Service_model->problemlist();
		
		$data['employee_list']=$this->Service_model->employee_list();
		$data['accessories_list']=$this->Service_model->accessories_list();
		
		$data['zone_pincodes']=$this->Service_model->zone_pincodes();
		
		$data['spare_replaced']=$this->input->post('spare_replaced');
		$data['spare_charge']=$this->input->post('spare_charge');
		$data['service_charge']=$this->input->post('service_charge');
		
		
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('print_preview_request',$data);
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
	
	
	public function get_custbyserialno(){
		$id=$this->input->post('id');//echo $id; exit;
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Service_model->get_customerndorderdetails($id)));
		   
		
		//$query=$this->Product_model->getsub_cat($id);
        //return $query;
    }
	
	
	
	
	public function searchByStatus(){
		$id=$this->input->post('id');
		$data1['user_dat'] = $this->session->userdata('login_data');
		$user_acc = $data1['user_dat'][0]->user_access;
		$user_type = $data1['user_dat'][0]->user_type;
		
		if(isset($user_acc) && $user_acc!=""){
			$user_access = $user_acc;
		}else{
			$user_access = "";
		}
		
		
		if(isset($id) && $id=="all"){
			$data['get_searchByStatus']=$this->Service_model->service_req_list($user_access,$user_type);
		}else{
			$data['get_searchByStatus'] = $this->Service_model->get_searchByStatus($id);
		}
		
		
		$data['service_req_list1']=$this->Service_model->service_req_list1($user_access,$user_type);
		$data['service_req_listforEmp']=$this->Service_model->service_req_listforEmp();
		
		$data['status_list']=$this->Service_model->status_list();
		$data['combine_status_list']=$this->Service_model->combine_status_list();
		   
		//$data1['user_dat'] = $this->session->userdata('login_data');
		//$this->load->view('templates/header',$data1);
		$this->load->view('search_service_req_list',$data);
		
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
		$id=$this->input->post('id');//echo $id; //exit;
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
			error_reporting(0);
		   $id=$this->uri->segment(3);
		   $data['list']=$this->Service_model->getservicereqbyid($id);
		   //$data['list1']=$this->Service_model->getservicereqDetailsbyid($id);
		   $data['getBranchservicereqbyid']=$this->Service_model->getBranchservicereqbyid($id);
		   
		   $data['list1']=$this->Service_model->getservicereqDetailsbyid($id);
		   if(!empty($data['list1'])){
			   $data['list7']=$this->Service_model->getservicereqDetailsbyid($id);
		   }else{
			   $data['list7']=$this->Service_model->getservicereqDetailsbyid1($id);
		   }
		   
		   $data['get_mods']=$this->Service_model->get_mods();
		   
		   $model_id = $data['list7'][0]->modelid;
		   
		   $data['list2']=$this->Service_model->getserviceEmpbyid($id);
		   $data['list_serialnos']=$this->Service_model->list_serialnos();
		   $data['service_typelist']=$this->Service_model->service_typelist();
		   
		   $data['customerlist']=$this->Service_model->customerlist();
		   
		   $data['servicecat_list']=$this->Service_model->servicecat_list();
		   $data['problemlist']=$this->Service_model->problemlist();
		   
		   $data['getProbByModel']=$this->Service_model->getProbByModel($model_id);
		   
		   $data['employee_list']=$this->Service_model->employee_list();
		   $data['accessories_list']=$this->Service_model->accessories_list();
		   
		   $data['stamping_details']=$this->Service_model->stamping_details($id);
		   
		   $data['get_cancel_reason']=$this->Service_model->get_cancel_reason($id);
		   
		   
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
		
		$get_all = $this->input->post('skills');

$expll = explode(',',$get_all);
$cunt = count($expll);
$user_array = array();
$userr_array = array();
for($i=0;$i<$cunt;$i++)
{
	$model = $this->input->post('modelid');
    $ffffff = $expll[$i];
	$this->db->select("*",FALSE);
    $this->db->from('problem_category');
    $this->db->where('prob_category', $ffffff);
    $this->db->where('model', $model);
     	$ressult = $this->db->get();
	$ressullt = $ressult->num_rows();
	

 if($ressullt>0)
{
	//echo 'elseeee';
foreach($ressult->result() as $empkey)
{
	$getlastt = $empkey->id;
	array_push($userr_array,$getlastt);
}

}
      else  if($ressullt==0)
{
	$datsa=array(
		'prob_category'=>$ffffff,
		'model'=>$model
	); 
     $this->db->insert('problem_category',$datsa);
	 //echo $this->db->last_query();
	  $getlast = $this->db->insert_id();
	 array_push($user_array,$getlast);
}

}
$data1['problem'] = array_merge($userr_array, $user_array);
		
		if (is_array($data1['problem'])){
					$data1['problem']= implode(",",$data1['problem']);
				}else{
					$data1['problem']="";
				}
		
		$data=array(
            'request_id'=>$this->input->post('req_id'),
            'cust_name'=>$this->input->post('cust_name'),
			'br_name'=>$this->input->post('br_name'),
            'mobile'=>$this->input->post('mobile'),
			'email_id'=>$this->input->post('email_id'),
			'address'=>$this->input->post('address'),
			'address1'=>$this->input->post('address1'),
			'request_date'=>$this->input->post('datepicker'),
			'updated_on'=>$updated_on,
			'user_id'=>$user_id
        );
        $id=$this->input->post('servicereqid');
		$rowid=$this->input->post('servicereqdetailid');
		//print_r($data);exit;
		$this->Service_model->update_service_request($data,$id);
		
		if($id){
		$data1['request_id']=$id;
		$data1['serial_no']=$this->input->post('serial_no');
		$data1['batch_no']=$this->input->post('batch_no');
       
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
				
		$data1['service_type']=$this->input->post('service_type');
		//$data1['service_cat']=$this->input->post('service_cat');
		$ser_det = $this->input->post('service_cat');
		$ser = explode("-",$ser_det);
		$data1['service_cat'] = $ser['0'];
		
		$data1['zone']=$this->input->post('locid');
		$data1['service_loc_coverage']=$this->input->post('service_loc_coverage');
		
	//	$proble=$this->input->post('probi');
		/* echo "<pre>";
		print_r($data1['problem']);
		exit; */
		
		/*if (is_array($proble)){
					$data1['problem']= implode(",",$proble);
				}else{
					$data1['problem']="";
				}*/
		//$data1['problem']=$this->input->post('prob');
		//$data1['assign_to']=$this->input->post('assign_to');
		$data1['service_priority']=$this->input->post('service_priority');
		//$data1['blank_app']=$this->input->post('blank_app');
		
		 $emp_det = $this->input->post('assign_to');
		 $emp = implode(",",$emp_det);
		 $data1['assign_to'] = $emp; 
		
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
		
		$get_reassigned_ById = $this->Service_model->get_reassigned_ById($id);
		$enggids = $get_reassigned_ById[0]->engg_id;
		$engg_arr = explode(',',$enggids);
		$resulttt = array_diff($emp_det,$engg_arr);
		
		if(!empty($resulttt)){
			//echo "IDS: ";exit;
			$data_log_reassign['engg_id'] = $emp;
			$data_log_reassign['req_id'] = $id;
			$data_log_reassign['updated_on'] = date("Y-m-d H:i:s");
			$this->Service_model->add_log_reassign_engg($data_log_reassign);
		}
		
		}
		echo "<script>alert('Service Request Updated');window.location.href='".base_url()."pages/service_req_list';</script>";
    
    }
	
	public function get_branchbyid(){
		$id=$this->input->post('id');//echo $id; exit;
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Service_model->get_branchdetails($id)));
		   
		
		//$query=$this->Product_model->getsub_cat($id);
        //return $query;
    }
	public function get_cust_servicezone(){
		$id=$this->input->post('id');//echo $id; exit;
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Service_model->get_servicezone($id)));
		   
		
		//$query=$this->Product_model->getsub_cat($id);
        //return $query;
    }
	public function get_branchname(){
		$id=$this->input->post('id');//echo $id; exit;
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Service_model->get_branch($id)));
		   
		
		//$query=$this->Product_model->getsub_cat($id);
        //return $query;
    }
	
	
	
	public function get_branchnamee(){
		$id=$this->input->post('id');//echo $id; exit;
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Service_model->get_brannch($id)));
		   
		    }
	
	
	
	
	
	
	public function searchBycustomer()
	{
		$search=$this->input->post('username');
		//echo $search;exit; 
		$drop=$this->input->post('pwd');
		if($drop && $search)
		{
		
		$data['customer']=$this->Service_model->customer_list($search,$drop);
		$data['stat_list']=$this->Service_model->status_list();
		//$data['get_searchByStatus']=$this->Service_model->service_req_list($search);
		}
		else
		{
			
			$data['customer']=$this->Service_model->getallreq_list($search);
			$data['stat_list']=$this->Service_model->status_list();
		}
		$this->load->view('service_list',$data);
		
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
	
	public function viewclaimup(){ 
		$id = $this->uri->segment(3);
		$datraa['list']=$this->Service_model->updatestsid($id);
		$datraa['ide']=$id;
		
		//$datraa = array('ide'=>$id);
		$this->load->view('viewclaimpop',$datraa);
    }
	
	public function updateclaim()
	{
		$id = $this->input->post('request_id');
		
		if($this->input->post('code_no') && $this->input->post('date'))
		{
		 $data=array(
		'warranty_mode'=>$this->input->post('status_warran'),
		'code_no'=>$this->input->post('code_no'),
		'code_date'=>$this->input->post('date'),
		'status'=>'credit note received'
		); 
	}else if($this->input->post('status_warran')=='credit'){
		
		$data=array(
		'warranty_mode'=>$this->input->post('status_warran'),
		'code_no'=>'',
		'code_date'=>'',
		'status'=>'credit note pending'
		); 
		
	}
	else{
		
		$data=array(
		'warranty_mode'=>$this->input->post('status_warran'),
		'code_no'=>'',
		'code_date'=>'',
		'status'=>'replacement'
		); 
		
	}
	
	$result = $this->Service_model->updateclaim($data,$id);
	
	
	if($result)
	{
		
echo "<script>
parent.jQuery.fancybox.close();
</script>";
	} 
	
	}
	public function get_preventive_id()
	{
		$row=$this->Service_model->get_preventive_id();
		$rid=explode('-',$row->request_id);
		$res = sprintf("%05d", ++$rid[1]);
		$reqid='P-'.$res;
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($reqid));
	}
    
}