<?php 
class accessories extends CI_Controller{

    function __construct(){
     parent::__construct();
    $this->load->helper('url');
    $this->load->model('Accessories_model');

    }
    
    
    public function add_accessories(){
	
		
        $acc_name=$this->input->post('acc_name');
        $c=$acc_name;
		$count=count($c); 
		
			for($i=0; $i<$count; $i++) {
				if($acc_name[$i]!=""){ 
					$data1 = array('accessory' => $acc_name[$i]);
					$result=$this->Accessories_model->add_accessory($data1);
				}
			
			}
		if(isset($result)){
			echo "<script>window.location.href='".base_url()."pages/accessories_list';alert('Accessories Added Successfully!!!');</script>";
		}
    }
    
	  
   
	public function update_accessories_name(){ 
		  $id=$this->uri->segment(3);
		 
		  $data['list']=$this->Accessories_model->getaccessbyid($id);
		  $data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		  $this->load->view('edit_accessories',$data);
    }
    
    public function update_accessories(){
	
		
		 $id=$this->input->post('accid');
		 //echo $id;
		 $data=array(
            'accessory'=>$this->input->post('acc_name')
        ); //print_r ($data);
		 $s = $this->Accessories_model->update_accessory($data,$id);
		echo "<script>alert('Accessories Updated Successfully!!!');window.location.href='".base_url()."pages/accessories_list';</script>";
    }
	
	
	
	public function del_accessories(){ 
		 $id=$this->input->post('id');
		 $s = $this->Accessories_model->del_accessory($id);
    }
	
	public function acc_validation()
	{
		$product_id = $this->input->post('p_id');
        $this->output->set_content_type("application/json")->set_output(json_encode($this->Accessories_model->acc_validation($product_id)));
	}
	public function add_accsrow(){
		$data['count']=$this->input->post('countid');
		 //echo($this->input->post('countid')); echo"hiii";exit;
		 $this->load->view('add_row_accs',$data);
    }
    
    
    
}