<?php 
class Stampingreport extends CI_Controller{

    function __construct(){
     parent::__construct();
    $this->load->helper('url');
    $this->load->model('stampingreport_model');

    }
	
	function get_stamping()
	{
		
		$from_date = $this->input->post('from');
		
		$to_date = $this->input->post('to');
		
		$employee = $this->input->post('employee');
		//echo $employee;exit;
		
		$data['report'] = $this->stampingreport_model->getstamping_report($from_date,$to_date);
		
		$data['user_dat'] = $this->session->userdata('login_data');
		//print_r($data['report']);exit;
		$this->load->view('templates/header',$data);
		$this->load->view('stampingreport_data',$data);
	}
	
	}
	