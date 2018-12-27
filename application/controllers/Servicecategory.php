<?php 
class Servicecategory extends CI_Controller{

    function __construct(){
     parent::__construct();
    $this->load->helper('url');
    $this->load->model('Servicecategory_model');

    }
    
    
    public function add_service_category(){
	
		
        $service_catname=$this->input->post('service_catname');
		//$service_charge=$this->input->post('service_charge');
		//$model=$this->input->post('model');
		date_default_timezone_set('Asia/Calcutta');
		$created_on = date("Y-m-d H:i:s");
		$updated_on = date("Y-m-d H:i:s");
		
		$data111['user_dat'] = $this->session->userdata('login_data');
		$user_id = $data111['user_dat'][0]->id;
		
        $c=$service_catname;
		$count=count($c); 
		
			for($i=0; $i<$count; $i++) {
				if($service_catname[$i]!=""){ 
					$data1 = array('service_category' => $service_catname[$i], 'created_on' => $created_on, 'updated_on' => $updated_on, 'user_id' => $user_id);
					$result=$this->Servicecategory_model->add_service_category($data1);
				}
				/* else{
					echo "<script>window.location.href='".base_url()."pages/add_service_cat';alert('Please enter Service Category');</script>";
					
				} */
			}
		if(isset($result)){
			echo "<script>window.location.href='".base_url()."pages/service_cat_list';alert('Service Category Added Successfully!!!');</script>";
		}
    }
	
    
	
	public function update_service_cat(){ 
		 $id=$this->uri->segment(3);
		 $data['list']=$this->Servicecategory_model->getservicecatbyid($id);
		 $data['modellist']=$this->Servicecategory_model->modellist();
		 $data['user_dat'] = $this->session->userdata('login_data');
		 $this->load->view('templates/header',$data);
		 $this->load->view('edit_sercat_list',$data);
    }
	
	
	public function view_models(){ 
		$id = $this->uri->segment(3);
		$data1['service_charge']=$this->Servicecategory_model->service_charg($id);
		$data1['service_list']=$this->Servicecategory_model->service_list($id);
		$this->load->view('view_servicecat_models',$data1);
    }
	
   public function edit_service_category(){ 
   
		 $id=$this->input->post('service_catid');
		 
		date_default_timezone_set('Asia/Calcutta');
		$updated_on = date("Y-m-d H:i:s");
		
		$data111['user_dat'] = $this->session->userdata('login_data');
		$user_id = $data111['user_dat'][0]->id;
		 
		 
		 $data=array(
            'service_category'=>$this->input->post('service_catname'),
			'updated_on'=>$updated_on,
			'user_id'=>$user_id
        );
		 $s = $this->Servicecategory_model->update_serv_cat($data,$id);
		echo "<script>window.location.href='".base_url()."pages/service_cat_list';alert('Service Category Updated Successfully!!!');</script>";
    }
  
   public function check(){ echo ("php");
	   $data1=$this->input->post('category1');
		 $data12=$this->input->post('model1');
		print_r($data12);
		 
		 //$this->output->set_content_type("application/json")->set_output(json_encode($this->Servicecategory_model->check_service_charge($data1,$data12)));
		 
	   
   }
   public function check_charge(){
	   $data1=$this->input->post('category1');
	   $data12=$this->input->post('model1');
	  //print_r($data12);exit;
	   $check=$this->Servicecategory_model->check_service_charge($data1,$data12);
	  
	   if($check ==0){
           $this->output->set_content_type("application/json")->set_output(json_encode($check));
        }
        else{
			
			//$data['modellist']=$this->Servicecategory_model->modellist();
			//print_r($data['modellist']);exit;
			$this->output->set_content_type("application/json")->set_output(json_encode($this->Servicecategory_model->modellist()));
         }
	   
	   
   }
   
	
	public function add_service_charge(){
		 
        $service_cat=$this->input->post('service_cat');
		
		date_default_timezone_set('Asia/Calcutta');
		$created_on = date("Y-m-d H:i:s");
		$updated_on = date("Y-m-d H:i:s");
		
		$model=$data1['model']=$this->input->post('model');
		$service_charge=$data1['service_charge']=$this->input->post('service_charge');
		
		$data111['user_dat'] = $this->session->userdata('login_data');
		$user_id = $data111['user_dat'][0]->id;
		
        $c=$model;
		$count=count($c); 
		
		$data2 =array();
		for($i=0; $i<$count; $i++) {
			if($model[$i]!=""){ 
				 $data2 = array(
					'service_cat_id' => $service_cat,
					'model' => $model[$i],
					'service_charge' => $service_charge[$i],
					'created_on' => $created_on,
					'updated_on' => $updated_on,
					'user_id' => $user_id
				);
			$this->Servicecategory_model->add_service_charge($data2);
			echo "<script>alert('Service Charge Added Successfully!!!');window.location.href='".base_url()."pages/service_charge_list';</script>";
			}else{
				echo "<script>window.location.href='".base_url()."pages/add_service_charge';alert('Please select model');</script>";
			}
		}
		
		
    }
	
	public function update_servicecharge(){ 
		 $id=$this->uri->segment(3);
		 $data['list']=$this->Servicecategory_model->getservicecatbyid($id);
		 $data['getservicechargeInfobyid']=$this->Servicecategory_model->getservicechargeInfobyid($id);
		 
		 
		 $data['service_cat_list']=$this->Servicecategory_model->service_cat_list();
		 
		 $data['modellist']=$this->Servicecategory_model->modellist();
		 
		 $data['user_dat'] = $this->session->userdata('login_data');
		 $this->load->view('templates/header',$data);
		 $this->load->view('edit_service_charge',$data);
    }
	public function edit_service_charge(){ 
		 $service_cat_id=$this->input->post('service_cat');
		 $rowid=$data1['service_charge_id']=$this->input->post('service_charge_id');
		 
		 
		 $model=$data1['model']=$this->input->post('model');
	     $service_charge=$data1['service_charge']=$this->input->post('service_charge');
		 
		 date_default_timezone_set('Asia/Calcutta');
		 $updated_on = date("Y-m-d H:i:s");
		
		$data111['user_dat'] = $this->session->userdata('login_data');
		$user_id = $data111['user_dat'][0]->id;
		 
		 $c=$model;
		 $count=count($c); 
		 //print_r ($count);
		 
		 //$data8 =array();
			 for($i=0; $i<$count; $i++) {
               $data8 = array(
			'service_cat_id' => $service_cat_id,   
           'model' => $model[$i],
           'service_charge' => $service_charge[$i],
           'updated_on' => $updated_on,
           'user_id' => $user_id
      );
	  
	  
	  if($rowid[$i]!="" && isset($rowid[$i])){ 
		  $where = "service_cat_id=".$service_cat_id." AND id=".$rowid[$i]; 
		  $result=$this->Servicecategory_model->update_service_charges($data8,$where);
	  }else{
			$this->Servicecategory_model->add_service_charge($data8);
	  }
	  
	  }
		 
		echo "<script>alert('Service Charge Updated Successfully!!!');window.location.href='".base_url()."pages/service_charge_list';</script>";
    }
	
	public function del_serv_category(){ 
		 $id=$this->input->post('id');
		 $s = $this->Servicecategory_model->del_serv_cat($id);
    }
	public function addrow2(){ 
		 $data['count']=$this->input->post('countid');
		 $data['cat_id']=$this->input->post('category');
		// $data1a=$this->input->post('countid');
		// print($data1a);exit;
		 //$data['getservicechargeInfobyid']=$this->Servicecategory_model->getservicechargeInfobyid($id);
		
		 $data['modellist']=$this->Servicecategory_model->modellist();
		 $this->load->view('add_service_charge_row',$data);
    }
	
	public function service_validation()
	{
		$product_id = $this->input->post('p_id');
        $this->output->set_content_type("application/json")->set_output(json_encode($this->Servicecategory_model->service_validation($product_id)));
	}
	public function add_scatrow(){
		$data['count']=$this->input->post('countid');
		 //echo($this->input->post('countid')); echo"hiii";exit;
		 $this->load->view('add_row_scat',$data);
    }
	
	
}