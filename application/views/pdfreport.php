<?php 
tcpdf();
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$obj_pdf->SetCreator(PDF_CREATOR);
$title = "AMC Quotation";
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
ob_start();
    // we can have any view part here like HTML, PHP etc
						$servername = "localhost";
						$username = "srscales_srscalesuser";
						$password = "srscales@2016";
						$dbname = "srscales_serviceEff";
						
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
							WHERE ord.id ='$orderid'");
	
	while($res = mysql_fetch_array($qry)){
		$customer_id = $res['customer_id'];
		$customer_name = $res['customer_name'];
		$model = $res['model'];
		$purchase_date = $res['purchase_date'];
		$warranty_date = $res['warranty_date'];
		$service_loc = $res['service_loc'];
		$machine_status = $res['machine_status'];
	}
	//exit;
	
    $content = '<html>
					<head>
					<title>AMC Quotation</title>
					</head>
					<body>
						<table>
							<tr>
								<td><b>Customer ID:   </b>'.$customer_id.'</td>
								<td><b>Customer Name:</b>'.$customer_name.'</td>
							</tr>
							<tr>
								<td><b>Model:</b>'.$model.'</td>
								<td><b>Purchase Date:</b>'.$purchase_date.'</td>
							</tr>
							<tr>
								<td><b>Warranty Date:</b>'.$warranty_date.'</td>
								<td><b>Service Zone:</b>'.$service_loc.'</td>
							</tr>
							<tr>
								<td><b>Machine Status:</b>'.$machine_status.'</td>
								<td><b>Charge:</b>'.$charge.'</td>
							</tr>
							<tr>
								<td><b>AMC From Date:</b>'.$amc_frmdate.'</td>
								<td><b>AMC To Date:</b>'.$amc_todate.'</td>
							</tr>
							
						</table>
					</body>
				</html>';
ob_end_clean();
$obj_pdf->writeHTML($content, true, false, true, false, '');
$obj_pdf->Output('AMC_Quotation.pdf', 'I');
?>