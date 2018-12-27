<?php 
class Employee extends CI_Controller{

    function __construct(){
     parent::__construct();
    $this->load->helper('url');
    $this->load->model('Employee_model');

    }
    
    
    public function add_employee(){
		
		
		$eid=$this->input->post('emp_id');
		
		$chk_emp=$this->Employee_model->check_emp($eid);
		
		if(empty($chk_emp)){
		$data['emp_id']=$this->input->post('emp_id');
		$data['emp_name']=$this->input->post('emp_name');
		$data['emp_designation']=$this->input->post('emp_designation');
		//echo "Hello: ".$this->input->post('emp_stamping');
		/* if($this->input->post('emp_stamping')=='1'){
			$data['emp_stamping'] = '1';
		}else{
			$data['emp_stamping'] = '0';
		} */
		$data['emp_mobile']=$this->input->post('emp_mobile');
		$data['emp_email']=$this->input->post('emp_email');
		
		$data['emp_edu']=$this->input->post('emp_edu');
		$data['emp_exp']=$this->input->post('emp_exp');
		$data['doj']=$this->input->post('doj');
		
		$data['emp_addr']=$this->input->post('emp_addr');
		$data['emp_addr1']=$this->input->post('emp_addr1');
		$data['emp_city']=$this->input->post('emp_city');
		$data['emp_state']=$this->input->post('emp_state');
		$data['emp_pincode']=$this->input->post('emp_pincode');
			$zone=$this->input->post('zone');
			//print_r($zone);exit;
			for($r=0;$r<count($zone);$r++){
				$zonee[]=$zone[$r];
			}
			$zonename=implode(',',$zonee);
			//echo $zonename;exit;
			//print_r(implode(',',$zonee));exit;
		$data['service_zone']=$zonename;
		
		$data2['city']=$this->input->post('emp_city');
		
		$this->Employee_model->add_city($data2);
		$result=$this->Employee_model->add_emp($data);
		$res = sprintf("%05d", $result);
		
		if($result){ 
				redirect(base_url().'pages/service_skill/'.$res); 
			}
			
		} 
        
   
	}
	public function add_service_skill(){ //echo "<pre>";print_r($_POST);
			 $ids=$this->input->post('ids');
			 
			  $ser_skill_empid=$this->input->post('empid');
        $ser_skill_pcategory=$data['p_category']=$this->input->post('p_category');
		$ser_skill_subcategory=$data['sub_category']=$this->input->post('sub_category');
		$ser_skill_brand=$data['brand']=$this->input->post('brand');
		$ser_skill_pmodel=$data['p_model']=$this->input->post('p_model');
		$data['service_cat']=$this->input->post('service_cat');
		
		$c=$ser_skill_pcategory;
		$count=count($c); 
			 $i=0;
			 foreach($ids as $idd){
				$data['service_cat']['cat'] = $this->input->post('service_cat'.$idd);
				//$service_category = implode(",",$data['service_cat']['cat']);
				if (is_array($data['service_cat']['cat'])){
					$service_category = implode(",",$data['service_cat']['cat']);
				}else{
					$service_category="";
				}
				$data1 =array();
				$data1[] = array(
           'empid' => $ser_skill_empid,
           'p_category' => $ser_skill_pcategory[$i],
           'sub_category' => $ser_skill_subcategory[$i],
		   'brand' => $ser_skill_brand[$i],
           'p_model' => $ser_skill_pmodel[$i],
			'service_category'=>$service_category
      );
		$result=$this->Employee_model->add_service($data1);
		$i++;	
			}
			
		if($result){ 
				redirect(base_url().'pages/emp_list'); 
     }
    }
	
	public function update_employee(){ 
		   $id=$this->uri->segment(3);
		   $data['list']=$this->Employee_model->getemployeebyid($id);
		   $data['empservicelist']=$this->Employee_model->getemployeeserviceskillbyid($id);
		   $data['service_zone_list']=$this->Employee_model->service_zone_list();
		   $data['state_list']=$this->Employee_model->state_list();
		   
		   $data['plist']=$this->Employee_model->product_list();
		   $data['servicecatlist']=$this->Employee_model->service_cat_list();
		
		
		   $data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		   $this->load->view('edit_emp_list',$data);
		
    }
	
	public function edit_employee(){ 
		ini_set('max_input_vars', 3000);
		/*  if($this->input->post('emp_stamping')=='1'){
			$stamps = '1';
		}else{
			$stamps = '0';
		} */
		$zone=$this->input->post('zone');
			//print_r($zone);exit;
			for($r=0;$r<count($zone);$r++){
				$zonee[]=$zone[$r];
			}
			$zonename=implode(',',$zonee);
		 
		 
		 $data=array(
            'emp_id'=>$this->input->post('emp_id'),
            'emp_name'=>$this->input->post('emp_name'),
            'emp_designation'=>$this->input->post('emp_designation'),
            'emp_mobile'=>$this->input->post('emp_mobile'),
            'emp_email'=>$this->input->post('emp_email'),
			'emp_edu'=>$this->input->post('emp_edu'),
			'emp_exp'=>$this->input->post('emp_exp'),
			'doj'=>$this->input->post('doj'),
			'emp_addr'=>$this->input->post('emp_addr'),
            'emp_addr1'=>$this->input->post('emp_addr1'),
            'emp_city'=>$this->input->post('emp_city'),
            'emp_state'=>$this->input->post('emp_state'),
            'emp_pincode'=>$this->input->post('emp_pincode'),
			'service_zone'=>$zonename
        );
        $id=$this->input->post('empid');
		
		$data3['city']=$this->input->post('emp_city');
		$this->Employee_model->add_city($data3);
		
		$this->Employee_model->update_employee($data,$id);
		
		$ser_skill_empid=$this->input->post('empid');
		$ids=$this->input->post('ids');
        $ser_skill_pcategory=$data1['p_category']=$this->input->post('p_category');
		$ser_skill_subcategory=$data1['sub_category']=$this->input->post('sub_category');
		$ser_skill_brand=$data1['brand']=$this->input->post('brand');
		$ser_skill_pmodel=$data1['p_model']=$this->input->post('p_model');
		$data1['service_cat']=$this->input->post('service_cat');
		
		$this->Employee_model->delete_employee_service_skill($ser_skill_empid);
		
		$c=$ser_skill_pcategory;
		$count=count($c); 
			 $i=0;
			 foreach($ids as $idd){ 
				$data1['service_cat']['cat'] = $this->input->post('service_cat'.$idd);
				if (is_array($data1['service_cat']['cat'])){
					$service_category = implode(",",$data1['service_cat']['cat']);
				}else{
					$service_category="";
				}
				$data1 =array();
				$data1[] = array(
           'empid' => $ser_skill_empid,
           'p_category' => $ser_skill_pcategory[$i],
           'sub_category' => $ser_skill_subcategory[$i],
		   'brand' => $ser_skill_brand[$i],
           'p_model' => $ser_skill_pmodel[$i],
			'service_category'=>$service_category
      );
		
		$result=$this->Employee_model->add_service($data1,$idd);
		$i++;	
			}
	
		echo "<script>alert('Employee Updated Successfully!!!');window.location.href='".base_url()."pages/emp_list';</script>";
    
    }
	
	public function get_city(){
		$id=$this->input->post('keyword');//echo $id; exit;
		
		//$data['city_list']=$this->Employee_model->get_cities($id);
		//$this->load->view('city_list',$data);
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Employee_model->get_cities($id)));
		   
		
		//$query=$this->Product_model->getsub_cat($id);
        //return $query;
    }
	
	
	public function del_employee(){ 
		 $id=$this->input->post('id');
		 $s = $this->Employee_model->del_emp($id);
    }
	public function mobile_validation()
	{
		//print_r($_POST); exit;
		$mobile= $this->input->post('id');
        $this->output->set_content_type("application/json")->set_output(json_encode($this->Employee_model->mobile_validation($mobile)));
	}
	
   
}