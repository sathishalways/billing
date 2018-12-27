<?php



  include_once 'MPDF54/mpdf.php';

class PDF extends mPDF
{
	private $ci;
	public function __construct(){
		
		  parent::__construct();
		$this->ci = & get_instance();
		
	}        
	
	
	
	  
	
	
	  
	function genPdfAttachFile($html,$file_name=NULL)
	{

		$this->ci->load->helper('file');
		$dt=$this->WriteHTML($html);
		
		$data = 'Some file data';
		$name=time().".pdf";
	    $this->debug = true;
		$base=str_replace("system/","",BASEPATH); 
		$data=$this->Output('','S');  		
		//exit;
		if (write_file($base.'tmp_upload/'.$name,$data))
		{
			 return $base.'tmp_upload/'.$name;
		}
		else
		{

			 return false;
		}
		

	}
	function downloadPdf($html,$file_name=NULL,$mark=NULL)
	{
		if($mark)
		{
			$this->SetWatermarkImage($mark);
			$this->showWatermarkImage = true;
	
		}
		$this->ci->load->helper('file');
		$dt=$this->WriteHTML($html);
		$data = 'Some file data';
		$name=time();
		if($file_name)
		$name .= $file_name;
		$name .=".pdf";
	    $this->debug = true;
		$base=str_replace("system/","",BASEPATH); 
		
		$data=$this->Output($name,'D');  	
	}
}  