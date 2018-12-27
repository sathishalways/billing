<?php 
class Monthreport extends CI_Controller{

    function __construct(){
     parent::__construct();
    $this->load->helper('url');
    $this->load->model('monthreport_model');

    }
	
	function get_monthreport()
	{
		
		
		$from_date = $this->input->post('from');
		
		//echo $from_date;exit;
		
		$to_date = $this->input->post('to');
		
		
		$data['month'] = $this->monthreport_model->getstampingmonth_report($from_date,$to_date);
		
		$data['user_dat'] = $this->session->userdata('login_data');
		//print_r($data['report']);exit;
		$this->load->view('templates/header',$data);
		$this->load->view('monthreport_data',$data);
	}
	}
	?>