<?php 
class customer extends CI_Controller{

    function __construct(){
     parent::__construct();
    $this->load->helper('url');
    $this->load->model('Customer_model');
	$this->load->model('Order_model');

    }
	
	
	
       public function view_sales($idd)
{

$data['list']=$this->Customer_model->getcustomersalesbyid($idd);
$this->load->view('view_sales',$data);
}
    
    
    public function add_customer(){
		$mobile = $this->input->post('mobile');
		$check_cust = $this->Customer_model->check_cust($mobile);
		if(empty($check_cust)){
			$data['customer_name']=$this->input->post('company_name');
			$data['state']=$this->input->post('state');
			$data['mobile']=$this->input->post('mobile');
			$data['email_id']=$this->input->post('email_id');
			$data['address']=$this->input->post('address');
			$data['city']=$this->input->post('city');
			$data['pincode']=$this->input->post('pincode');
			
			date_default_timezone_set('Asia/Calcutta');
			$data['created_on'] = date("Y-m-d H:i:s");
			$data['updated_on'] = date("Y-m-d H:i:s");
			
			$result=$this->Customer_model->add_customer($data);
			
			echo "<script>alert('Customer Added Successfully!!!');window.location.href='".base_url()."pages/cust_list';</script>";
		}else{
			echo "<script>alert('Customer already exists!!!');window.location.href='".base_url()."pages/add_cust';</script>";
		}

		
	
	}
	
	public function edit_customer(){
		$id = $this->input->post('cust_id');
		$data['customer_name']=$this->input->post('company_name');
		$data['state']=$this->input->post('state');
		$data['mobile']=$this->input->post('mobile');
		$data['email_id']=$this->input->post('email_id');
		$data['address']=$this->input->post('address');
		$data['city']=$this->input->post('city');
		$data['pincode']=$this->input->post('pincode');
		
		date_default_timezone_set('Asia/Calcutta');
		$data['updated_on'] = date("Y-m-d H:i:s");
		
		$this->Customer_model->update_customer($data,$id);
		
		echo "<script>alert('Customer Updated Successfully!!!');window.location.href='".base_url()."pages/cust_list';</script>";
	
	}
	

    public function update_customer(){ 
		   $id=$this->uri->segment(3);
		   $data['state_list']=$this->Order_model->state_list();
		   $data['list']=$this->Customer_model->getcustomerbyid($id);
		   
		   $this->load->view('templates/header');
		   $this->load->view('edit_cust',$data);
		
    }
	
	public function update_cust_list(){ 
	
		   $id=$this->uri->segment(3);
		   
		  
		   $data['list']=$this->Customer_model->getcustomertypebyid($id);
		   $data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		   $this->load->view('edit_cust_type',$data);
		
    }
	public function update_cust_list1(){ 
	
		   $id=$this->uri->segment(3);
		   
		  
		   $data['list']=$this->Customer_model->getcustomertypebyid1($id);
		   $data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data);
		   $$this->load->view('tax_list',$data);
		
    }
	public function edit_customer_type(){ 
	
		$cust_typeid = $this->input->post('cust_typeid');
		$data=array(
            'type'=>$this->input->post('cust_type')
        );
		$this->Customer_model->update_customer_type($data,$cust_typeid);
		echo "<script>alert('Customer Type Updated Successfully!!!');window.location.href='".base_url()."pages/cust_type_list';</script>";
	
	}
	
	
	function delete_status()
	{
		$currentElemID = $this->input->post('currentElemID');
		$this->Customer_model->delete_brand_status($currentElemID);
	}
	
	
	
	//view
	public function view_customer()
	{
		   $id=$this->uri->segment(3);
		   $data['list']=$this->Customer_model->getcustomerbyid($id);
		   $data['list1']=$this->Customer_model->getcustservicelocationbyid($id);
		    $data['lablist']=$this->Customer_model->getlablistbyid($id);
		   $data['customer_type']=$this->Customer_model->cust_type_list();
		   $data['service_zone']=$this->Customer_model->service_zone_list();
		   $data['pincode_list']=$this->Customer_model->pincode_list();
		   $data['state_list']=$this->Customer_model->state_list();
		   //echo "<pre>";print_r($data);exit;
		   $data1['user_dat'] = $this->session->userdata('login_data');
		   $this->load->view('templates/header',$data1);
		   $this->load->view('view_customer',$data);
	}
	
	
	public function addrow(){ 
		 $data['count']=$this->input->post('countid');
		 $data['zoneid']=$this->input->post('zoneid');
		 $data['zone_coverage'] = $this->input->post('zone_coverage');
		 $data['state_list']=$this->Customer_model->state_list();
		 
		 $data['service_zone']=$this->Customer_model->service_zone_list();
		 //echo "Count: ".$data['count'];
		//$data['customerlist']=$this->Service_model->customerlist();
		//$data['list_serialnos']=$this->Service_model->list_serialnos();
		//$data['servicecat_list']=$this->Service_model->servicecat_list();
		//$data['problemlist']=$this->Service_model->problemlist();
		//$data['employee_list']=$this->Service_model->employee_list();
		
		 $this->load->view('add_cust_row',$data);
    }
	
	public function del_customer(){ 
		 $id=$this->input->post('id');
		  $data['flag']="Deleted";
		  //print_r($data);exit;
		 $this->Customer_model->delete_customer_service_loc($id,$data);
		$result = $this->Customer_model->del_customers($id,$data);
    }
	
	public function Inactive_cust_type(){ 
		 //$id=$this->input->post('id');
		 //$this->Customer_model->del_customer_type($id);
		  $id=$this->input->post('id');
		  echo $id;
		 $data=array(
            'status'=>'1'
        );
		 $s = $this->Customer_model->update_status_customer($data,$id);
		 //echo "<script>alert('Customer Type Inactive');window.location.href='".base_url()."';</script>";
    }
	public function active_cust_type(){ 
		 //$id=$this->input->post('id');
		 //$this->Customer_model->del_customer_type($id);
		  $id=$this->input->post('id');
		 // echo $id;
		 $data=array(
            'status'=>'0'
        );
		//print($data);
		 $s = $this->Customer_model->update_status_customer1($data,$id);
		 //echo "<script>alert('Customer Type Inactive');window.location.href='".base_url()."';</script>";
    }
	
	public function custtype_validation()
	{
		$product_id = $this->input->post('id');
		//echo $product_id; exit;
        $this->output->set_content_type("application/json")->set_output(json_encode($this->Customer_model->custtype_validation($product_id)));
	}
	public function custtype_validation1()
	{
		$product_id = $this->input->post('id');
		//echo $product_id; exit;
        $this->output->set_content_type("application/json")->set_output(json_encode($this->Customer_model->custtype_validation1($product_id)));
	}
   
	public function category_validation1()
	{
		$product_id = $this->input->post('id');
		//echo $product_id; exit;
        $this->output->set_content_type("application/json")->set_output(json_encode($this->Customer_model->custtype_validation($product_id)));
	}
	public function add_custtyperow(){
		$data['count']=$this->input->post('countid');
		 //echo($this->input->post('countid')); echo"hiii";exit;
		 $this->load->view('add_row_custtype',$data);
    }
}