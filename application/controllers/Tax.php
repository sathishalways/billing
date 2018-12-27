<?php 
class tax extends CI_Controller{

    function __construct(){
     parent::__construct();
    $this->load->helper('url');
    $this->load->model('Tax_model');

    }
    
    
    public function add_tax(){
		
		
		
        $tax_name=$this->input->post('tax_name');
		$percentage=$this->input->post('percentage');
        $c=$tax_name;
		$count=count($c); 
		
			for($i=0; $i<$count; $i++) {
				if($tax_name[$i]!=""){ 
					$data1 = array('tax_name' => $tax_name[$i], 'tax_percentage' => $percentage[$i]);
					$result=$this->Tax_model->add_tax($data1);
				}
				else{
					echo "<script>alert('Please Enter Tax');window.location.href='".base_url()."pages/tax_list';</script>";
					
				}
			}
		if(isset($result)){
			echo "<script>alert('Tax Added Successfully!!!');window.location.href='".base_url()."pages/tax_list';</script>";
		}
    
	}
    
	public function update_tax(){ 
	
		  $id=$this->input->post('id');
		  
		 $data=array(
            'tax_name'=>$this->input->post('tax_name'),
			'tax_percentage'=>$this->input->post('tax_percent')
        );
		 $s = $this->Tax_model->update_tax_info($data,$id);
		
    }
	
	public function update_default(){ 
		  $id=$this->input->post('id');
		
		 $data=array(
            'tax_default'=>$this->input->post('tax_default')
        );
		 $s = $this->Tax_model->update_tax_default($data,$id);
		
    }
	  
   
	public function del_tax(){ 
		 $id=$this->input->post('id');
		 $s = $this->Tax_model->del_tax_info($id);
    }
	public function check_tax()
	{
		$data = $this->input->post('tax');
		//echo $data;exit;
        $this->output->set_content_type("application/json")->set_output(json_encode($this->Tax_model->checktaxname($data)));
	}
	public function Inactive_tax_list(){ 
		 //$id=$this->input->post('id');
		 //$this->Customer_model->del_customer_type($id);
		  $id=$this->input->post('id');
		 $data=array(
            'status'=>'1'
        );
		 $s = $this->Tax_model->update_tax_list($data,$id);
		// echo "<script>alert('Customer Type Inactive');window.location.href='".base_url()."';</script>";
		 //redirect('pages/tax_list');
    }
    public function active_cust_type(){ 
		 //$id=$this->input->post('id');
		 //$this->Customer_model->del_customer_type($id);
		  $id=$this->input->post('id');
		 $data=array(
            'status'=>'0'
        );
		 $s = $this->Tax_model->update_status_customer1($data,$id);
		// echo "<script>alert('Customer Type Inactive');window.location.href='".base_url()."';</script>";
    }
	public function add_taxrow(){
		$data['count']=$this->input->post('countid');
		 //echo($this->input->post('countid')); echo"hiii";exit;
		 $this->load->view('add_row_tax',$data);
    }
	
}