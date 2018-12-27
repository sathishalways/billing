<?php 
tcpdf();
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$obj_pdf->SetCreator(PDF_CREATOR);
$title = "\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20 Arihant Maxsell Technologies Pvt Ltd";
$obj_pdf->SetTitle($title);
$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, $title, PDF_HEADER_STRING);
$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$obj_pdf->SetDefaultMonospacedFont('helvetica');
$obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$obj_pdf->SetFont('helvetica', '', 9);
$obj_pdf->setFontSubsetting(false);
$obj_pdf->AddPage();

    // we can have any view part here like HTML, PHP etc
						/* $servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "service";
						
						$con = mysql_connect($servername,$username,$password);
						mysql_select_db($dbname,$con);
					   $date1 = date('Y-m-d');
						//echo "SELECT unix_timestamp(warranty_date) from order_details where id='52'";
						
						$qry = mysql_query("SELECT ord.id,cust.customer_name,cust.customer_id,pro.product_name,pro.model, ordt.purchase_date,ordt.warranty_date,ordt.prev_main,ser_loc.service_loc, (
			CASE 
				WHEN ordt.warranty_date!='' THEN 'Warranty'
				WHEN ordt.prev_main!='' THEN 'Preventive'
				WHEN ordt.paid!='' THEN 'Paid'
				ELSE 1
				END) AS machine_status

	 FROM `order_details` As ordt
							inner join orders As ord ON ord.id = ordt.order_id
							inner join customers As cust ON cust.id = ord.customer_id
							inner join products As pro ON pro.id = ordt.model_id
							inner join service_location As ser_loc ON ser_loc.id = ordt.service_loc_id
							WHERE ord.id ='$orderid'"); */
	
	/* while($res = mysql_fetch_array($qry)){
		$customer_id = $res['customer_id'];
		$customer_name = $res['customer_name'];
		$model = $res['model'];
		$purchase_date = $res['purchase_date'];
		$warranty_date = $res['warranty_date'];
		$service_loc = $res['service_loc'];
		$machine_status = $res['machine_status'];
	} */

	//exit;
	
    $content = '<html>
					<head>
					<title>AMC Quotation</title>
					<style>
					.tablewidth
					{
						width:70%;
						
					}
					
					
					.tablewidth tr td
					{
						line-height:20px;
						border:1px solid gray;
						text-indent:5px;
					}
					
					</style>
					</head>
					<body>
					<h1 style="text-align:center;font-size:12px; ">AMC Quotation</h1>
						<p style="text-align:right;">Date:'.$today_date.'</p>
						
							<b>To:</b>
						
						<p>'.$cust_name.'</p>
						<p>'.$cust_addr.' '.$cust_addr1.'</p>
						<p>'.$city.'</p>
						<p>'.$email_id.'</p>
						
						
						
<p><b>Attention: </b>'.$salutation.''.$cont_name.'</p>
<p><b>Sub:</b> AMC for '.$product_name.' - '.$model.' - '.$serialno.' Warranty / AMC Expiry date '.$fromdate.'</p>


<p class="dear"><b>Dear Sir/Madam:</b></p>
<p>We thank you for purchasing Maxsell Products. We recommend you to renew AMC service which prevents from operation failure and also wear and tear of the spare parts in the machine.</p>
<p>In order to maintain the above instruction prime condition for your use, we hereby extend our AMC services for '.$product_name1.'; </p>
<p>The current service contract expires on '.$todate.'. We recommend that you renew service contract, which will prevent operation failure and also wear & tear of the instrument. Details of the AMC package are as follows:</p>

<table class="tablewidth">
<tr>
<td><label>Service Type</label></td><td class="service">'.$type.'</td>
</tr>
<tr>
<td><label>Service Cost</label></td><td>Rs.'.$Service_Cost.'</td>
</tr>
<tr>
<td><label>AMC Start Date</label></td><td>'.$amc_start_date.'</td>
</tr>
<tr>
<td><label>AMC End Date</label></td><td>'.$amc_end_date.'</td>
</tr>
<tr>
<td><label>No of preventive maintenance</label></td><td>'.$prev_nos.'</td>
</tr>
</table>
<p>Please confirm the AMC Quotation by return email and remit the AMC charges to the bank as follows:</p>

<table class="tablewidth">
<tr>
<td><label>Bank Name</label></td><td>'.$bank_name.'</td>
</tr>
<tr>
<td><label>Bank Address & City</label></td><td class="bank">'.$bank_addr.'</td>
</tr>
<tr>
<td><label>IFSC (RTGS)</label></td><td>'.$ifsc.'</td>
</tr>
<tr>
<td><label>A/C No</label></td><td>'.$acc_no.'</td>
</tr>
</table>

<table></table>


<p class="dear"><b>Terms & Conditions:</b></p>
	<ul>

<li>Work will be carried out during our normal business hours.(10.00AM to 6.00PM).</li>
<li>If Service AMC is undertaken , Spare parts will not be covered under this contract and rest of the terms & conditions is applicable.</li>
<li>Any urgent attention for service may require will be dealt with as promptly as possible upon receipt of service request at our local office or written intimation in the effect.</li>
<li>Preventive maintenance will be provided at the convenience of the company with prior appointment from the party. If for any reason the party is unable to get the service done the party cannot claim back the service as part of contract.</li>
<li>Based on the contract opted for, equipment are covered under maintenance contract but the replacement  of spares will be on charges basis (service contract) if the same is required to be replaced as a result of misuse ,neglect, burglary, fire theft or accidental damage however caused. Our liability shall cease, if the equipment or any part thereof is tampered with or otherwise opened by person other than our duly authorized personnel. Our decision in the matter as to whatever there has been any misuse of instrument of whether replacement of any part has been necessitate as a result of fair wear shall be final.</li>
<li>The premium paid here shall cover all traveling & any other expenses of our technician and supervisory staff, However, if the equipment needs workshop attention, then the transportation expenses of the same will be paid by you. </li>
<li>You will provide unskilled assistance wherever necessary. Customer must cooperate with Service team in order to render quality of services.</li>
<li>Calibration shall be done as and when required for the said instrument. AMC does not cover  accessories or ancillary items like Online UPS, Isolation transformer, battery , PC/laptop except for in-built models, printer, scrapping unit , cables, adaptor etc.</li>
<li>The old parts sub assemblies which are replaced with new or reconditioned parts become our property.</li>
<li>We shall not be responsible for any claims, liabilities in respect of consequential losses of what so ever nature resulting either from malfunctioning of the equipment or whatsoever.</li>
<li>We shall not be liable for any effect of consequence resulting from any act of God or War, riot not Civil commotion or otherwise beyond our power and control.</li>
<li>Any disputes or differences arising between us in the interpretation or implementation of the terms herein or touching any matter connected  therewith will be subject to the jurisdiction of Madras Court.</li>
<li>Only instrument which is in Good Operating condition will enter into contract . Others will be treated as per paid service scheme.</li>
<li>If Customer requires Re-installation of the instrument , the respective charges will be claimed irrespective of the instrument covered under the contract (Applicable only for Laser Marker & Gold Testing Machine). For Equipments under AMC customer must inform when the equipment is moved. If moved without any proper information then Company is not responsible for damages, working limitations or whatever. And AMC will be void in such cases. </li>
<li>Company is only obliged to inspect & service the defective equipment . However , customers wants day extension of engineer in such cases customer must pay – accommodation , conveyance , food , DA as per the company norms.</li>
<li>Service tax & Vat Tax if applicable extra shall be charged.</li>
<li>We use only OEM Parts and service will be provided by skilled & factory trained engineer.</li>
<li>The AMC Contract is non-transferable.</li>
</ul>

<p><b>Products: Cash Counting Machine</b><br>
	Direct No : 044-40470007<br>
	Mobile No : 9094488995<br>
	Email Id : service.maxsell@gmail.com
</p>
<p>Products: Gold Testing Machine<br>
	Direct no : 044-40470005<br>
	Email id : service.maxsell2@gmail.com
</p>
					</body>
				</html>';
ob_end_clean();
$obj_pdf->writeHTML($content, true, false, true, false, '');
//$obj_pdf->Output('"'.$cust_name.'".pdf', 'I');

$obj_pdf->Output('serviceEff_maxsell/assets/pdf/amc_quotation/'.$cust_name.'_'.$ord_id.'.pdf', 'F');
?>