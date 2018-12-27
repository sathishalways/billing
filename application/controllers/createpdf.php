<?php 
class createpdf extends CI_Controller{

    function __construct(){
     parent::__construct();
    $this->load->helper('url');

    }
    
	function pdf()
	{
    $this->load->helper('pdf_helper');
	$data['orderid'] = $this->input->post('orderid');
	$data['charge'] = $this->input->post('charge');
	$data['amc_frmdate'] = $this->input->post('amc_frmdate');
	$data['amc_todate'] = $this->input->post('amc_todate');
	
    
    $this->load->view('pdfreport',$data);
	}
	
	function pdf_view()
	{
	$data['id'] = $this->uri->segment(3);
    $this->load->view('pdf_view',$data);
	}
	
}