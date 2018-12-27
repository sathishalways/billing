<?php 
class QC_Master extends CI_Controller{

    function __construct(){
     parent::__construct();
    $this->load->helper('url');
    $this->load->model('qc_master_model');

    }
    
    
    public function add_qc_parameter(){
		$model=$this->input->post('model');
		if($this->qc_master_model->checkqcmodel($model))
		{
			
			echo "<script>window.location.href='".base_url()."pages/qc_masters';alert(' Model Name already exist');</script>";
		}else{
		
		date_default_timezone_set('Asia/Calcutta');
		$created_on = date("Y-m-d H:i:s");
		$updated_on = date("Y-m-d H:i:s");
		
		$data111['user_dat'] = $this->session->userdata('login_data');
		$user_id = $data111['user_dat'][0]->id;
		
        $model=$this->input->post('model');
		$qc_param=$this->input->post('qc_param');
		$qc_value=$this->input->post('qc_value');
		
		for($i=0; $i<count($qc_param); $i++) {
			$data1 = array('model' => $model, 'qc_param' => $qc_param[$i], 'qc_value' => $qc_value[$i], 'created_on' => $created_on, 'updated_on' => $updated_on, 'user_id' => $user_id);
			$this->qc_master_model->add_qc_master($data1);
		}
		
		echo "<script>window.location.href='".base_url()."pages/qc_masters_list';alert('QC parameters added');</script>";
	}
	}
    public function view_models(){ 
		$id = $this->uri->segment(3);
		//echo $id;
		//$id=$this->uri->segment(3);
		 //$data['modelid']=$this->uri->segment(3);
		 $data1['getqcparametersbyid1']=$this->qc_master_model->getqcparametersbyid($id);
		 $data1['modellist']=$this->qc_master_model->modellist();
		//print_r($data1);
		$this->load->view('view_qc_model',$data1);
    }
	
	public function update_qc_parameter(){ 
		 $id=$this->uri->segment(3);
		 $data['modelid']=$this->uri->segment(3);
		 $data['getqcparametersbyid']=$this->qc_master_model->getqcparametersbyid($id);
		 $data['modellist']=$this->qc_master_model->modellist();
		 $data['user_dat'] = $this->session->userdata('login_data');
		 $this->load->view('templates/header',$data);
		 $this->load->view('edit_qc_master',$data);
    }
	
	
   public function edit_qc_parameter(){ 
		error_reporting(0);
		date_default_timezone_set('Asia/Calcutta');
		$created_on = date("Y-m-d H:i:s");
		$updated_on = date("Y-m-d H:i:s");
		
		$data111['user_dat'] = $this->session->userdata('login_data');
		$user_id = $data111['user_dat'][0]->id;
		
		$modelid=$this->input->post('model');
		
		$model=$this->input->post('model');
		$qc_param=$this->input->post('qc_param');
		$qc_value=$this->input->post('qc_value');
		
		$qc_param_id=$this->input->post('qc_param_id'); 
		$qc_param_id_real=$this->input->post('qc_param_id_real'); 
		
		$diff_arr = array_values(array_diff($qc_param_id_real,$qc_param_id));
		
		if(!empty($diff_arr)){
			for($j=0;$j<count($diff_arr);$j++){
				/* echo "<pre>";
				print_r($dif_arr1); */
				$this->qc_master_model->delete_qc_master($diff_arr[$j]);
			}
		}
		
		for($i=0; $i<count($qc_param); $i++) {
			
			$data1 = array('model' => $model, 'qc_param' => $qc_param[$i], 'qc_value' => $qc_value[$i], 'created_on' => $created_on, 'updated_on' => $updated_on, 'user_id' => $user_id);
			
			if($qc_param_id[$i]!="" && isset($qc_param_id[$i])){
				$where = "model=".$modelid." AND id=".$qc_param_id[$i]; 
				$result=$this->qc_master_model->update_qc_param($data1,$where);
			}else{
				$result=$this->qc_master_model->add_qc_master1($data1);
			}
			
		}
		
		echo "<script>window.location.href='".base_url()."pages/qc_masters_list';alert('QC parameters updated');</script>";
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
			echo "<script>alert('Service Charge added');window.location.href='".base_url()."pages/service_charge_list';</script>";
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
		 
		 
		 $data8 =array();
			 for($i=0; $i<$count; $i++) {
               $data8 = array(
           'model' => $model[$i],
           'service_charge' => $service_charge[$i],
           'updated_on' => $updated_on,
           'user_id' => $user_id
      );
	  
	  if($rowid[$i]!="" && isset($rowid[$i])){
		  $where = "service_cat_id=".$service_cat_id." AND id=".$rowid[$i]; 
		  $result=$this->Servicecategory_model->update_service_charges($data8,$where);
		  
	  }
	  
	  }
		 
		echo "<script>alert('Service Charge Updated');window.location.href='".base_url()."pages/service_charge_list';</script>";
    }
	
	public function del_serv_category(){ 
		 $id=$this->input->post('id');
		 $s = $this->Servicecategory_model->del_serv_cat($id);
    }
	public function addrow2(){ 
		//echo "hello world";exit;
		 $data['count']=$this->input->post('countid');
		 $data['modellist']=$this->qc_master_model->modellist();
		 $this->load->view('add_qc_master_row',$data);
    }
	
	public function service_validation()
	{
		$product_id = $this->input->post('p_id');
        $this->output->set_content_type("application/json")->set_output(json_encode($this->Servicecategory_model->service_validation($product_id)));
	}
	
	
}