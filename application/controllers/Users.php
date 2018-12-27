<?php 
class Users extends CI_Controller{

    function __construct(){
     parent::__construct();
    $this->load->helper('url');
    $this->load->model('User_model');

    }
    
    
    public function add_users(){ //echo "<pre>";print_r($_POST);exit;
		
		
		$user_name = $this->input->post('user_name');
		$chk_user = $this->User_model->check_username($user_name);
		
		if(empty($chk_user)){
		 $data['name'] = $this->input->post('first_name');
		 $data['user_name'] = $this->input->post('user_name');
		 $data['password'] = $this->input->post('pass');
		 $data['user_type'] = $this->input->post('user_type');
		 //$data['user_access'] = $this->input->post('user_access');
		 $data['emp_id'] = $this->input->post('engg_name');
		 
		 $this->User_model->add_user($data);
		 echo "<script>alert('User Added Successfully!');window.location.href='".base_url()."pages/user_cate_list';</script>"; /* Worked on 07-06-2017 */
		 
		}else{
			echo "<script>alert('User already exists');window.location.href='".base_url()."pages/add_user_cate';</script>";
		}
		
	}
	
	public function edit_user_cate(){
		$id=$this->uri->segment(3);
		$data1['get_usersbyid']=$this->User_model->get_usersbyid($id);
		
		//$categories_assigned = $data1['get_usersbyid'][0]->categories_assigned;
		
		//$data1['get_categories']=$this->User_model->get_categoriesbyid($categories_assigned);
		//$data1['get_assigned_categories']=$this->User_model->get_assigned_categories($categories_assigned);
		
		$data1['get_employees']=$this->User_model->get_employeeDetails();
		
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		//$this->load->view('templates/header',$data1);
		$this->load->view('edit_user_cate',$data1);
    }
	
	
	
	public function update_users(){ //echo "<pre>";print_r($_POST);exit;
		//$categories_assigned = $this->input->post('select2');
		 //echo "<pre>";print_r($categories_assigned);exit;
		 $user_id = $this->input->post('user_id');		
		 $data['name'] = $this->input->post('first_name');
		 $data['user_name'] = $this->input->post('user_name');
		 $data['password'] = $this->input->post('pass');
		 $data['user_type'] = $this->input->post('user_type');
		 //$data['user_access'] = $this->input->post('user_access');
		 $data['emp_id'] = $this->input->post('engg_name');
		 
		 
		 /* if(!empty($categories_assigned )){
			 $data['categories_assigned'] = implode(',',$categories_assigned);
		 }else{
			 $data['categories_assigned'] = '0';
		 } */
		 
		 
		 $this->User_model->update_user($data,$user_id);
		 
		echo"<script>parent.$.fancybox.close();</script>";
		
	}
	
	public function update_status(){ 
		 $id=$this->input->post('id');
		 $data=array(
            'status'=>'1'
        );
		 $s = $this->User_model->update_user_status($data,$id);
		
    }
	
	public function update_status1(){ 
		 $id=$this->input->post('id');
		 $data=array(
            'status'=>'0'
        );
		 $s = $this->User_model->update_user_status1($data,$id);
		
    }
	
	public function get_employees(){ 
		 $id=$this->input->post('id');
		 $this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->User_model->get_employeeDetails()));
		
    }
	
	
	
	
	
	
	
	
	 public function add_customer_quick(){

		 $mob=$this->input->post('mobile');
		$chk_cust=$this->Customer_model->check_cust($mob);
		
		if(empty($chk_cust)){
		
        $data['customer_id']=$this->input->post('customer_id');
		$data['customer_name']=$this->input->post('customer_name');
		$data['customer_type']=$this->input->post('cust_type');
		$zone=$this->input->post('service_zone');
		$zone_id = explode("-",$zone);
		$data['service_zone'] = $zone_id['0'];
		
		$data['company_name']=$this->input->post('company_name');
		$data['mobile']=$this->input->post('mobile');
		$data['email_id']=$this->input->post('email');
		$data['address']=$this->input->post('address');
		$data['address1']=$this->input->post('address1');
		$data['city']=$this->input->post('city');
		$data['state']=$this->input->post('state');
		$data['pincode']=$this->input->post('pincode');
		
		$data2['city']=$this->input->post('city');
		
		$brname=$data1['branch_name']=$this->input->post('branch_name');
       
	    $ser_loc_phone=$data1['landline']=$this->input->post('phone');
        $ser_loc_re_address=$data1['address']=$this->input->post('re_address');
        $ser_loc_re_address1=$data1['address1']=$this->input->post('re_address1');
        $ser_loc_re_city=$data1['city']=$this->input->post('re_city');
        $ser_loc_re_state=$data1['state']=$this->input->post('re_state');
        $ser_loc_re_pincode=$data1['pincode']=$this->input->post('re_pincode');
		$service_zone_loc=$data1['service_zone_loc']=$this->input->post('service_zone_loc');
		$ser_loc_contact_name=$data1['contact_name']=$this->input->post('contact_name');
		$ser_loc_designation=$data1['designation']=$this->input->post('designation');
		$ser_loc_mobiles=$data1['mobile']=$this->input->post('mobiles');
		$ser_loc_emails=$data1['email_id']=$this->input->post('emails');
        //$count=count($data1['company_name']);
        //$data1="";
        $c=$brname;
		$count=count($c); 
		
		
		$this->Customer_model->add_city($data2);
		$result=$this->Customer_model->add_customer($data);
		
		if($result){
             $data1 =array();
			 for($i=0; $i<$count; $i++) {
               $data1[] = array(
           'branch_name' => $brname[$i],
           'landline' => $ser_loc_phone[$i],
           'address' => $ser_loc_re_address[$i],
           'address1' => $ser_loc_re_address1[$i],
    'city' => $ser_loc_re_city[$i],
    'state' => $ser_loc_re_state[$i],
    'pincode' => $ser_loc_re_pincode[$i],
	'service_zone_loc' => $service_zone_loc[$i],
	'contact_name' => $ser_loc_contact_name[$i],
	'designation' => $ser_loc_designation[$i],
	'mobile' => $ser_loc_mobiles[$i],
	'email_id' => $ser_loc_emails[$i],
    'customer_id'=>$result
      );
	  }
		$result1=$this->Customer_model->add_service_location($data1);
		
		
		if($result){
              echo "<script>parent.$.fancybox.close();</script>";
			 //redirect(base_url().'pages/add_service_req/'.$result); 
     }
    }
		}else{
			echo "<script>alert('Customer already exists');window.location.href='".base_url()."pages/add_quick';</script>";
		}
		 
	 }
	

		public function add_quick(){
		$data1['customer_type']=$this->Customer_model->cust_type_list();
		$data1['service_zone']=$this->Customer_model->service_zone_list();
		$data1['state_list']=$this->Customer_model->state_list();
		$data1['cust_cnt']=$this->Customer_model->cust_cnt();
		
		if(empty($data1['cust_cnt'])){
			$data1['cnt']='00001';
		}else{
			$cusid = $data1['cust_cnt'][0]->id; 
			$dat= $cusid + 1;
			$data1['cnt']=sprintf("%05d", $dat);
		}
		$this->load->view('add_quick',$data1);
    }
	
	
	public function add_sales_quick(){
		$data1['customer_type']=$this->Customer_model->cust_type_list();
		$data1['service_zone']=$this->Customer_model->service_zone_list();
		$data1['state_list']=$this->Customer_model->state_list();
		$data1['cust_cnt']=$this->Customer_model->cust_cnt();
		
		if(empty($data1['cust_cnt'])){
			$data1['cnt']='00001';
		}else{
			$cusid = $data1['cust_cnt'][0]->id; 
			$dat= $cusid + 1;
			$data1['cnt']=sprintf("%05d", $dat);
		}
		$this->load->view('add_sales_quick',$data1);
    }
	
	
	public function branch_quick_view(){
		$id=$this->uri->segment(3);
		$data1['quick_branch']=$this->Customer_model->getQuickcustservicelocationbyid($id);
		//echo "<pre>";
		//print_r($data1['customer_type']);
		$this->load->view('quick_branch',$data1);
    }
	
		
	public function get_city(){
		$id=$this->input->post('keyword');//echo $id; exit;
		$data['city_list']=$this->Customer_model->get_cities($id);
		$this->load->view('city_list',$data);
		//$this->output
           //->set_content_type("application/json")
           //->set_output(json_encode($this->Customer_model->get_cities($id)));
		   
		
		//$query=$this->Product_model->getsub_cat($id);
        //return $query;
    }
	public function get_state(){
		$id=$this->input->post('stateid');//echo $id; exit;
		
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Customer_model->get_states($id)));
		   
		
		//$query=$this->Product_model->getsub_cat($id);
        //return $query;
    }
	
	public function checkMob(){
		$id=$this->input->post('id');//echo $id; exit;
		$chk_cust=$this->Customer_model->check_cust($id);
		if(!empty($chk_cust)){
			echo "Customer Already Exists";
		}
		/* $this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Customer_model->get_states($id))); */
		
    }
	
	public function checkLand(){
		$id=$this->input->post('id');//echo $id; exit;
		$chk_cust=$this->Customer_model->check_landline($id);
		if(!empty($chk_cust)){
			echo "Customer Already Exists";
		}
		/* $this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Customer_model->get_states($id))); */
		
    }
	
	
	public function add_customer_type(){
		
		$cust_type=$this->input->post('cust_type');
		$c=$cust_type;
		$count=count($c); 
		
			for($i=0; $i<$count; $i++) {
				if($cust_type[$i]!=""){ 
					$data1 = array('type' => $cust_type[$i]);
					$result=$this->Customer_model->add_cust_type($data1);
				}
				else{
					echo "<script>window.location.href='".base_url()."pages/cust_type';alert('Please enter Customer Type');</script>";
					
				}
			}
		if(isset($result)){
			echo "<script>window.location.href='".base_url()."pages/cust_type_list';alert('Customer Type added');</script>";
		}
		
	}
	
    
    public function update_customer(){ 
		   $id=$this->uri->segment(3);
		   $data['list']=$this->Customer_model->getcustomerbyid($id);
		   $data['list1']=$this->Customer_model->getcustservicelocationbyid($id);
		   
		   $data['customer_type']=$this->Customer_model->cust_type_list();
		   $data['service_zone']=$this->Customer_model->service_zone_list();
		   $data['state_list']=$this->Customer_model->state_list();
		   
		   $data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		   $this->load->view('edit_cust_list',$data);
		
    }
	
	public function update_cust_list(){ 
		   $id=$this->uri->segment(3);
		   $data['list']=$this->Customer_model->getcustomertypebyid($id);
		   $data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		   $this->load->view('edit_cust_type',$data);
		
    }
	public function edit_customer_type(){ 
		$cust_typeid = $this->input->post('cust_typeid');
		$data=array(
            'type'=>$this->input->post('cust_type')
        );
		$this->Customer_model->update_customer_type($data,$cust_typeid);
		echo "<script>alert('Customer Type Updated');window.location.href='".base_url()."pages/cust_type_list';</script>";
	}
	
	
	
	public function edit_customer(){
		error_reporting(0);
		$zone=$this->input->post('service_zone');
		$zone_id = explode("-",$zone);
		
		date_default_timezone_set('Asia/Calcutta');
		$updated_on = date("Y-m-d H:i:s");
		
		$data111['user_dat'] = $this->session->userdata('login_data');
		$user_id = $data111['user_dat'][0]->id;
		
		if($this->input->post('mobile')!=""){
				$data=array(
            'customer_name'=>$this->input->post('customer_name'),
            'company_name'=>$this->input->post('company_name'),
            'mobile'=>$this->input->post('mobile'),
			'landline'=>"",
            'email_id'=>$this->input->post('email'),
            'address'=>$this->input->post('address'),
            'address1'=>$this->input->post('address1'),
            'city'=>$this->input->post('city'),
            'state'=>$this->input->post('state'),
            'pincode'=>$this->input->post('pincode'),
			'updated_on'=>$updated_on,
			'user_id'=>$user_id
			);
		}else{
			$data=array(
            'customer_name'=>$this->input->post('customer_name'),
            'company_name'=>$this->input->post('company_name'),
			'mobile'=>"",
            'landline'=>$this->input->post('landlineno'),
            'email_id'=>$this->input->post('email'),
            'address'=>$this->input->post('address'),
            'address1'=>$this->input->post('address1'),
            'city'=>$this->input->post('city'),
            'state'=>$this->input->post('state'),
            'pincode'=>$this->input->post('pincode'),
			'updated_on'=>$updated_on,
			'user_id'=>$user_id
            
			);
		}
		
        $id=$this->input->post('cus_id');
		
		$brname=$data1['branch_name']=$this->input->post('branch_name');
       
	   $ser_loc_id=$data1['id']=$this->input->post('cust_id');
	   $ser_loc_phone=$data1['landline']=$this->input->post('phone');
        $ser_loc_re_address=$data1['address']=$this->input->post('re_address');
        $ser_loc_re_address1=$data1['address1']=$this->input->post('re_address1');
        $ser_loc_re_city=$data1['city']=$this->input->post('re_city');
        $ser_loc_re_state=$data1['state']=$this->input->post('re_state');
        $ser_loc_re_pincode=$data1['pincode']=$this->input->post('re_pincode');
		$service_zone_loc=$data1['service_zone_loc']=$this->input->post('service_zone_loc');
		$ser_loc_contact_name=$data1['contact_name']=$this->input->post('contact_name');
		$ser_loc_designation=$data1['designation']=$this->input->post('designation');
		$ser_loc_mobiles=$data1['mobile']=$this->input->post('mobiles');
		$ser_loc_emails=$data1['email_id']=$this->input->post('emails');
        //$count=count($data1['company_name']);
        //$data1="";
        $c=$brname;
		$count=count($c); 
		
		
		
		$this->Customer_model->update_customer($data,$id);
		
		
             $data1 =array();
			 for($i=0; $i<$count; $i++) {
               $data1 = array(
           'branch_name' => $brname[$i],
           'landline' => $ser_loc_phone[$i],
           'address' => $ser_loc_re_address[$i],
           'address1' => $ser_loc_re_address1[$i],
    'city' => $ser_loc_re_city[$i],
    'state' => $ser_loc_re_state[$i],
    'pincode' => $ser_loc_re_pincode[$i],
	'service_zone_loc' => $service_zone_loc[$i],
	'contact_name' => $ser_loc_contact_name[$i],
	'designation' => $ser_loc_designation[$i],
	'mobile' => $ser_loc_mobiles[$i],
	'email_id' => $ser_loc_emails[$i],
	'customer_id' => $id,
	'updated_on'=>$updated_on,
	'user_id'=>$user_id
	
      );
	  
	  if($ser_loc_id[$i]!="" && isset($ser_loc_id[$i])){
		  $where = "customer_id=".$id." AND id=".$ser_loc_id[$i]; 
		  $result=$this->Customer_model->update_service_location($data1,$where);
		  
	  }else{
		  $result=$this->Customer_model->add_service_location1($data1);
	  }
	  
	  }
		
		
		/* if(!empty($data1)){
			$this->Customer_model->delete_customer_service_loc($id);
			$result=$this->Customer_model->add_service_location($data1);
		}
		 */
	
		echo "<script>alert('Customer Updated');window.location.href='".base_url()."pages/cust_list';</script>";
   
    }
	
	public function addrow(){ 
		 $data['count']=$this->input->post('countid');
		 $data['zoneid']=$this->input->post('zoneid');
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
		 $this->Customer_model->delete_customer_service_loc($id);
		$result = $this->Customer_model->del_customers($id);
    }
	
	public function del_cust_type(){ 
		 $id=$this->input->post('id');
		 $this->Customer_model->del_customer_type($id);
    }
	public function checkname()
	{
		//print_r($_POST); exit;
		$name1= $this->input->post('id');
	//echo "name:";	echo $name; exit;
        $this->output->set_content_type("application/json")->set_output(json_encode($this->User_model->name_validation($name1)));
	}
	
	
    
}