<?php 
class cronreport extends CI_Controller{

    function __construct(){
     parent::__construct();
    $this->load->helper('url');
    $this->load->model('Cron_model');
	$this->load->library('excel');
    }
	
	//customer report
	
	public function viewcron()
	{
	  $month = date('m');
	  $year = date('Y');
	  $last_month = $month-1%12;
	  $s = ($last_month==0?($year-1):$year)."-".($last_month==0?'12':$last_month);
	  
	  $year1 = explode('-',$s);
	  
	  $y = $year1[0];
	  
	  $m = $year1[1];
	  
	  $users = $this->Cron_model->get_report($y,$m);
	  
//activate worksheet number 1
$this->excel->setActiveSheetIndex(0);
//name the worksheet
$this->excel->getActiveSheet()->setTitle('Customers list');

$this->excel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);


$this->excel->getActiveSheet()->getStyle("A1:I1")->applyFromArray(array("font" => array("bold" => true)));

$this->excel->setActiveSheetIndex(0)->setCellValue('A1', 'Customer Name');
$this->excel->setActiveSheetIndex(0)->setCellValue('B1', 'Company Name');
$this->excel->setActiveSheetIndex(0)->setCellValue('C1', 'Address');
$this->excel->setActiveSheetIndex(0)->setCellValue('D1', 'Address1');
$this->excel->setActiveSheetIndex(0)->setCellValue('E1', 'City');
$this->excel->setActiveSheetIndex(0)->setCellValue('F1', 'Mobile');
$this->excel->setActiveSheetIndex(0)->setCellValue('G1', 'Email');
$this->excel->setActiveSheetIndex(0)->setCellValue('H1', 'Customer Type');
$this->excel->setActiveSheetIndex(0)->setCellValue('I1', 'Customer Location');

// get all users in array formate
$this->excel->getActiveSheet()->fromArray($users, null, 'A2');

// read data to active sheet
$this->excel->getActiveSheet()->fromArray($users);


$objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel2007');

//force user to download the Excel file without writing it to server's HD
        ob_end_clean();
$objWriter->save('uploads/Customer.xls');
$this->load->view('cron');	

	}
	
	
	//Service report
	
	public function viewservice()
	{
	
	  $month = date('m');
	  $year = date('Y');
	  $last_month = $month-1%12;
	  $s = ($last_month==0?($year-1):$year)."-".($last_month==0?'12':$last_month);
	  
	  $year1 = explode('-',$s);
	  
	  $y1 = $year1[0];
	  
	  $m1 = $year1[1];
	  
	  $users1 = $this->Cron_model->get_servicereport($y1,$m1);
	  
	//echo "<pre>";
	//print_r($users1);exit;
	  
//activate worksheet number 1
$this->excel->setActiveSheetIndex(0);
//name the worksheet
$this->excel->getActiveSheet()->setTitle('Service list');

$this->excel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);


$this->excel->getActiveSheet()->getStyle("A1:N1")->applyFromArray(array("font" => array("bold" => true)));

$this->excel->setActiveSheetIndex(0)->setCellValue('A1', 'RequestID');
$this->excel->setActiveSheetIndex(0)->setCellValue('B1', 'RequestDate');
$this->excel->setActiveSheetIndex(0)->setCellValue('C1', 'Model Name');
$this->excel->setActiveSheetIndex(0)->setCellValue('D1', 'Customer Name');
$this->excel->setActiveSheetIndex(0)->setCellValue('E1', 'Branch Name');
$this->excel->setActiveSheetIndex(0)->setCellValue('F1', 'Customer Address');
$this->excel->setActiveSheetIndex(0)->setCellValue('G1', 'Mobile');
$this->excel->setActiveSheetIndex(0)->setCellValue('H1', 'Service Charge');
$this->excel->setActiveSheetIndex(0)->setCellValue('I1', 'Spare Charge'); 
$this->excel->setActiveSheetIndex(0)->setCellValue('J1', 'Engineer Name'); 
$this->excel->setActiveSheetIndex(0)->setCellValue('K1', 'Status'); 
$this->excel->setActiveSheetIndex(0)->setCellValue('L1', 'Area'); 
$this->excel->setActiveSheetIndex(0)->setCellValue('M1', 'Zone'); 
$this->excel->setActiveSheetIndex(0)->setCellValue('N1', 'Zone Coverage'); 

// get all users in array formate
//$this->excel->getActiveSheet()->fromArray($users1, null, 'A2');

// read data to active sheet
$this->excel->getActiveSheet()->fromArray($users1, null, 'A2');

/* $filename='Customer.xlsx'; //save our workbook as this file name

header('Content-Type: application/vnd.ms-excel'); //mime type

header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name

header('Cache-Control: max-age=0'); */ //no cache

//save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
//if you want to save it as .XLSX Excel 2007 format

$objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel2007');

//force user to download the Excel file without writing it to server's HD
        ob_end_clean();
$objWriter->save('uploads/Service.xls');

$this->load->view('servicecron');
	  
	}  
	
	//revenue report
	
	public function revenueview()
	{
		$resp = 0;
	  $month = date('m');
	  $year = date('Y');
	  $last_month = $month-1%12;
	  $s = ($last_month==0?($year-1):$year)."-".($last_month==0?'12':$last_month);
	  
	  $year1 = explode('-',$s);
	  
	  $y = $year1[0];
	  
	  $m = $year1[1];
	  
	  $users = $this->Cron_model->get_revenuereport($y,$m);
	  
	$a = count($users);
	
	$c = $a+3;
	
	$serv = $c+1;
	
	  $labourcharge=0;
	  
	 foreach($users as $row)
{
	$profit=$row['spare_tax']+$row['spare_tot'];
						
	$resp+=$profit;	

	$stot+=$row['labourcharge'];
	
	$ctot+=$row['concharge'];
	
	$total = $stot+$ctot;
	
	$tot = $total+$resp;
	
	
}	
$this->excel->setActiveSheetIndex(0);
//name the worksheet
$this->excel->getActiveSheet()->setTitle('Revenue list');

$this->excel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);



$this->excel->getActiveSheet()->getStyle("A1:N1")->applyFromArray(array("font" => array("bold" => true)));

$this->excel->setActiveSheetIndex(0)->setCellValue('A1', 'RequestID');
$this->excel->setActiveSheetIndex(0)->setCellValue('B1', 'RequestDate');
$this->excel->setActiveSheetIndex(0)->setCellValue('C1', 'Model Name');
$this->excel->setActiveSheetIndex(0)->setCellValue('D1', 'Customer Name');
$this->excel->setActiveSheetIndex(0)->setCellValue('E1', 'Branch Name');
$this->excel->setActiveSheetIndex(0)->setCellValue('F1', 'Customer Address');
$this->excel->setActiveSheetIndex(0)->setCellValue('G1', 'Mobile');
$this->excel->setActiveSheetIndex(0)->setCellValue('H1', 'Service Charge');
$this->excel->setActiveSheetIndex(0)->setCellValue('I1', 'Spare Charge'); 
$this->excel->setActiveSheetIndex(0)->setCellValue('J1', 'Engineer Name'); 
$this->excel->setActiveSheetIndex(0)->setCellValue('K1', 'Status'); 
$this->excel->setActiveSheetIndex(0)->setCellValue('L1', 'Area'); 
$this->excel->setActiveSheetIndex(0)->setCellValue('M1', 'Zone'); 
$this->excel->setActiveSheetIndex(0)->setCellValue('N1', 'Zone Coverage');


// get all users in array formate
//$this->excel->getActiveSheet()->fromArray($users, null, 'A2');

// read data to active sheet
$this->excel->getActiveSheet()->fromArray($users,null,'A2');

$this->excel->getActiveSheet()->getStyle("D".($c).":E".($c))->applyFromArray(array("font" => array("bold" => true)));
$this->excel->getActiveSheet()->getStyle("D".($serv).":E".($serv))->applyFromArray(array("font" => array("bold" => true)));
$this->excel->getActiveSheet()->getStyle("D".($serv+1).":E".($serv+1))->applyFromArray(array("font" => array("bold" => true)));
$this->excel->getActiveSheet()->getStyle("D".($serv+2).":E".($serv+2))->applyFromArray(array("font" => array("bold" => true)));

$this->excel->setActiveSheetIndex(0)->setCellValue('D'.$c, 'Total Spare Charge  :  '.$resp);
$this->excel->setActiveSheetIndex(0)->setCellValue('D'.$serv, 'Total Service Charge  :  '.$stot);
$this->excel->setActiveSheetIndex(0)->setCellValue('D'.($serv+1), 'Total Conveyance Charges  :  '.$ctot);
$this->excel->setActiveSheetIndex(0)->setCellValue('D'.($serv+2), 'Total Charges  :  '.$tot);



$this->excel->getActiveSheet()->mergeCells("D".($c).":E".($c));
$this->excel->getActiveSheet()->mergeCells("D".($serv).":E".($serv));
$this->excel->getActiveSheet()->mergeCells("D".($serv+1).":E".($serv+1));
$this->excel->getActiveSheet()->mergeCells("D".($serv+2).":E".($serv+2));

 
					
$this->excel->getActiveSheet()->getStyle("D".($c).":E".($c))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$this->excel->getActiveSheet()->getStyle("D".($serv).":E".($serv))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$this->excel->getActiveSheet()->getStyle("D".($serv+1).":E".($serv+1))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$this->excel->getActiveSheet()->getStyle("D".($serv+2).":E".($serv+2))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel2007');

//force user to download the Excel file without writing it to server's HD
        ob_end_clean();

$objWriter->save('uploads/Revenue.xls');
$this->load->view('revenuecron');	
	}
	
	//serialwise report
	
public function serialcron()
{
	  $month = date('m');
	  $year = date('Y');
	  $last_month = $month-1%12;
	  $s = ($last_month==0?($year-1):$year)."-".($last_month==0?'12':$last_month);
	  
	  $year1 = explode('-',$s);
	  
	  $y = $year1[0];
	  
	  $m = $year1[1];
	  
	 // print_r($m);exit;
	  
	  $serial = $this->Cron_model->get_serialreport($y,$m);
	  
	
$this->excel->setActiveSheetIndex(0);
//name the worksheet
$this->excel->getActiveSheet()->setTitle('Serial list');
$this->excel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);


$this->excel->getActiveSheet()->getStyle("A1:E1")->applyFromArray(array("font" => array("bold" => true)));

$this->excel->setActiveSheetIndex(0)->setCellValue('A1', 'RequestID');
$this->excel->setActiveSheetIndex(0)->setCellValue('B1', 'RequestDate');
$this->excel->setActiveSheetIndex(0)->setCellValue('C1', 'PurchaseDate');
$this->excel->setActiveSheetIndex(0)->setCellValue('D1', 'Model');
$this->excel->setActiveSheetIndex(0)->setCellValue('E1', 'Customer Name');

$rownumber=2;

foreach($serial as $row)
					{
						 $requ = $row['ser'];
						// echo "<pre>";
						// print_r($requ);
						 
						 $serial_no = $row['serial_no'];
				
						$ser_req = explode(',',$requ);
					
$this->excel->setActiveSheetIndex(0)->setCellValue('A'.($rownumber),'Serial No: '.$row['serial_no']);
		
	$this->excel->getActiveSheet()->mergeCells("A".($rownumber).":E".($rownumber));

	$this->excel->getActiveSheet()->getStyle("A".($rownumber).":E".($rownumber))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);


	$this->excel->getActiveSheet()->getStyle("A".($rownumber).":E".($rownumber))->applyFromArray(array("font" => array("bold" => true)));

					$rownumber++;	
						//echo $scnt;
						for($i=0;$i<count($ser_req);$i++)
					{
					$r1 = explode('//',$ser_req[$i]);
					
					$r11 = isset($r1[0]) ? $r1[0] : '';
					$r12 = isset($r1[1]) ? $r1[1] : '';
					
			$this->excel->setActiveSheetIndex(0)->setCellValue('A'.$rownumber, $r11);
			$this->excel->setActiveSheetIndex(0)->setCellValue('B'.$rownumber, $r12);
			$this->excel->setActiveSheetIndex(0)->setCellValue('C'.$rownumber, $row['purchase_date']);
			$this->excel->setActiveSheetIndex(0)->setCellValue('D'.$rownumber, $row['model']);
			$this->excel->setActiveSheetIndex(0)->setCellValue('E'.$rownumber, $row['customer_name']);

					
				$rownumber++; 
					
					}
					
					
					}


$objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel2007');

//force user to download the Excel file without writing it to server's HD
        ob_end_clean();
$objWriter->save('uploads/Serialreport.xls');
$this->load->view('serialcron');
}	


//Spare report

public function spareview()
{
	  $month = date('m');
	  $year = date('Y');
	  $last_month = $month-1%12;
	  $s = ($last_month==0?($year-1):$year)."-".($last_month==0?'12':$last_month);
	  
	  $year1 = explode('-',$s);
	  
	  $y = $year1[0];
	  
	  $m = $year1[1];
	  
	 // print_r($m);exit;
	  
	  $spare = $this->Cron_model->get_sparereport($y,$m);
	  
		$spcnt = count($spare);
	  
	  $this->excel->setActiveSheetIndex(0);
//name the worksheet
$this->excel->getActiveSheet()->setTitle('Spare list');



$this->excel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);


$this->excel->getActiveSheet()->getStyle("A1:E1")->applyFromArray(array("font" => array("bold" => true)));


$this->excel->setActiveSheetIndex(0)->setCellValue('A1', 'RequestId');
$this->excel->setActiveSheetIndex(0)->setCellValue('B1', 'Customer Name');
$this->excel->setActiveSheetIndex(0)->setCellValue('C1', 'Model');
$this->excel->setActiveSheetIndex(0)->setCellValue('D1', 'Engineer Name');
$this->excel->setActiveSheetIndex(0)->setCellValue('E1', 'Problem');


	  $rownumber=2;
	  foreach($spare as $roww)
					{
						
					$srequest =	$roww['serv_request'];
					
					$sp = $roww['spare_name'];
					
					//print_r($roww);
					
					$spareser = explode(',',$srequest);
					
					$cnt = count($spareser);
					
	$this->excel->setActiveSheetIndex(0)->setCellValue('A'.($rownumber),'SpareName: '.$roww['spare_name']);
	
	 $this->excel->getActiveSheet()->mergeCells("A".($rownumber).":E".($rownumber));

$this->excel->getActiveSheet()->getStyle("A".($rownumber).":E".($rownumber))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);


$this->excel->getActiveSheet()->getStyle("A".($rownumber).":E".($rownumber))->applyFromArray(array("font" => array("bold" => true)));

					$rownumber++;
					
					for($i=0;$i<count($spareser);$i++)
					{
					$r1 = explode('//',$spareser[$i]);
					$r11 = isset($r1[0]) ? $r1[0] : '';
					$r12 = isset($r1[1]) ? $r1[1] : '';
					$r13 = isset($r1[2]) ? $r1[2] : '';
					$r14 = isset($r1[3]) ? $r1[3] : '';
			
			$this->excel->setActiveSheetIndex(0)->setCellValue('A'.$rownumber, $r14);
			$this->excel->setActiveSheetIndex(0)->setCellValue('B'.$rownumber, $r12);
			$this->excel->setActiveSheetIndex(0)->setCellValue('C'.$rownumber, $r13);
			$this->excel->setActiveSheetIndex(0)->setCellValue('D'.$rownumber, $r11);
			$this->excel->setActiveSheetIndex(0)->setCellValue('E'.$rownumber, $roww['desc_failure']);

					
				$rownumber++; }	
				
			
			 }    
					
				  $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel2007');

//force user to download the Excel file without writing it to server's HD
        ob_end_clean();
$objWriter->save('uploads/Sparereport.xls');  

$this->load->view('sparecron'); 
	 
}

}

	
?>