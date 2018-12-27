<?php 
class sparereport extends CI_Controller{

    function __construct(){
     parent::__construct();
    $this->load->helper('url');
    $this->load->model('Sparereport_model');

    }
	
	function get_engineer_name()
	{
		$from_date=$this->input->post('from');
		$to_date=$this->input->post('to');
		$engg_name=$this->input->post('engineer');
		
		$spare_name=$this->input->post('spare');
		
		$m_data['enggname_list']=$this->Sparereport_model->engnamelist();
		$m_data['sparename_list']=$this->Sparereport_model->sparenamelist();
		
		$m_data['sparereport'] = $this->Sparereport_model->get_sparereport($spare_name,$from_date,$to_date);
		$data['user_dat'] = $this->session->userdata('login_data');
		//print_r($data['report']);exit;
		$this->load->view('templates/header',$data);
		$this->load->view('sparereport_engg_list',$m_data);
	}
	
	}
