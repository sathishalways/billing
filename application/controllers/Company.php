<?php 
class company extends CI_Controller{

    function __construct(){
     parent::__construct();
    $this->load->helper('url');
    $this->load->model('Company_model');

    }
   
	public function edit_company(){
		
		$data=array(
            'name'=>$this->input->post('name'),
            'mobile'=>$this->input->post('mobile'),
            'phone'=>$this->input->post('phone'),
            'comp_email'=>$this->input->post('comp_email'),
            'mgr_email'=>$this->input->post('mgr_email'),
            'addr1'=>$this->input->post('addr1'),
            'addr2'=>$this->input->post('addr2'),
            'city'=>$this->input->post('city'),
            'state'=>$this->input->post('state'),
			'pincode'=>$this->input->post('pincode'),
			'service_tax'=>$this->input->post('service_tax'),
			'pan'=>$this->input->post('pan'),
			'vat_no'=>$this->input->post('vat_no')
			
        );
        $id=$this->input->post('compid');
		
		$data2['city']=$this->input->post('city');
		
		$this->Company_model->add_city($data2);
		$this->Company_model->update_company($data,$id);
	
		echo "<script>alert('Company Updated Successfully!!!');window.location.href='".base_url()."pages/comp_list';</script>";
   
    }
	
}