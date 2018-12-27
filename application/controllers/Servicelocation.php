<?php 
class Servicelocation extends CI_Controller{

    function __construct(){
     parent::__construct();
    $this->load->helper('url');
    $this->load->model('Servicelocation_model');

    }
    
    
    public function add_service_location(){
		
		
		$data['serv_loc_code']=$this->input->post('serv_loc_code');
        $data['service_loc']=$this->input->post('serv_loc_name');
		$data['concharge']=$this->input->post('concharge');
		$data['zone_coverage']=$this->input->post('zone_coverage');
		
		$result=$this->Servicelocation_model->add_service_location($data);
		
		$area_name = $data1['area_name']=$this->input->post('area_name');
		$pincode = $data1['pincode']=$this->input->post('pincode');
		
		 $c=$area_name;
		 $count=count($c); 
		
        if(isset($result)){
			 $data1 =array();
			 for($i=0; $i<$count; $i++) {
               $data1[] = array(
           'zone_code' => $result,
           'area_name' => $area_name[$i],
           'pincode' => $pincode[$i]
			);
			}
			
			$this->Servicelocation_model->add_zone_pincode($data1);
			
			if(isset($result)){
			echo "<script>window.location.href='".base_url()."pages/service_loc_list';alert('Service Location Added  Successfully!!!');</script>";
		}
		
			
		}
		
    }
    
	  
    
    
    public function update_ser_location(){

		$id=$this->uri->segment(3);
		
		$data['getserviceLocbyid']=$this->Servicelocation_model->getserviceLocbyid($id);
		$data['getZonePincodebyid']=$this->Servicelocation_model->getZonePincodebyid($id);
		$idd=$this->uri->segment(3);
		$data['editid']=$idd;
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('edit_service_zone',$data);
		
    }
	
	public function del_ser_location(){ 
		 $id=$this->input->post('id');
		 $s = $this->Servicelocation_model->del_serv_loc($id);
    }
	public function del_zone_pincode(){ 
		 $id=$this->input->post('id');
		 $s = $this->Servicelocation_model->del_zone_pincode($id);
    }
	
	public function addrow2(){ 
		 $data['count']=$this->input->post('countid');
		 //$data['spare_list']=$this->Spare_model->spare_list_engineers();
		 //$data['engg_list']=$this->Spare_model->engineer_list();
		// $modelid=$this->input->post('modelid');
		 //$data['spareListByModelId']=$this->Spare_model->spareListByModelId($modelid);
		 $this->load->view('add_zone_pin_row',$data);
    }
	
	
	public function edit_service_location(){ 

	    error_reporting(0);
		$data=array(
			'serv_loc_code'=>$this->input->post('serv_loc_code'),
            'service_loc'=>$this->input->post('serv_loc_name'),
			'concharge'=>$this->input->post('concharge'),
			'zone_coverage'=>$this->input->post('zone_coverage')
        );
        $serv_loc_id=$this->input->post('serv_loc_id');
		
	   $area_name=$data1['area_name']=$this->input->post('area_name');
       $pincode=$data1['pincode']=$this->input->post('pincode');
	   
	   $serv_zone_pin_rowid=$data1['serv_zone_pin_rowid']=$this->input->post('serv_zone_pin_rowid');
	   
        $c=$area_name;
		$count=count($c); 
		
		$this->Servicelocation_model->update_serv_loc($data,$serv_loc_id);
		
		
             $data1 =array();
			 for($i=0; $i<$count; $i++) {
               $data1 = array(
				'area_name' => $area_name[$i],
				'pincode' => $pincode[$i],
				'zone_code' => $serv_loc_id
			);
			  //echo "RowId: ".$ser_loc_id[$i];
			  if($serv_zone_pin_rowid[$i]!="" && isset($serv_zone_pin_rowid[$i])){
				  $where = "zone_code=".$serv_loc_id." AND id=".$serv_zone_pin_rowid[$i]; 
				  $result=$this->Servicelocation_model->update_zone_pincodes($data1,$where);
				  
			  }else{
				  $result=$this->Servicelocation_model->add_zone_pincode1($data1);
			  }
	  
	  }
	
		echo "<script>alert('Service Zone Updated Successfully!!!');window.location.href='".base_url()."pages/service_loc_list';</script>";
}
public function checkpin(){
		$id=$this->input->post('id');
		$zone=$this->input->post('zone');//echo $zone; exit;
		
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Servicelocation_model->checkpin($id,$zone)));

    }
	public function checkname(){
		$id=$this->input->post('p_id');
		//$zone=$this->input->post('zone');//echo $zone; exit;
		
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Servicelocation_model->checkname($id)));

    }
	public function checkcode(){
		$id=$this->input->post('p_id');//echo $id;exit;
		//$zone=$this->input->post('zone');//echo $zone; exit;
		
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Servicelocation_model->checkcode($id)));

    }
	}	
    
