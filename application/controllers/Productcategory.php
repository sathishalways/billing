<?php 
class Productcategory extends CI_Controller{

    function __construct(){
     parent::__construct();
    $this->load->helper('url');
    $this->load->model('Productcategory_model');
	

    }
    
    
   public function add_prod_category(){
				
        $cat_name=$this->input->post('cat_name');
        $c=$cat_name;
		$count=count($c); 
		
		
			for($i=0; $i<$count; $i++) {
				if($cat_name[$i]!=""){ 
					$data1 = array('product_category' => $cat_name[$i]);
					$result=$this->Productcategory_model->add_prod_cat($data1);
				}
				/* else{
					echo "<script>window.location.href='".base_url()."pages/add_prod_cat';alert('Please enter Product Category');</script>";
					
				} */
			}
		if(isset($result)){
			echo "<script>window.location.href='".base_url()."pages/prod_cat_list';alert('Product Category Added Successfully!!!');</script>";
		}
    } 
	
	
	 
    
    public function update_prod_category(){ 
		 $id=$this->uri->segment(3);
		
		
		 $data['list']=$this->Productcategory_model->getprodcatbyid($id);
		
		 $data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		 $this->load->view('edit_prod_cat',$data);
		 
    }
	
	public function edit_prod_category(){ 
	$user=array('product_category'=>$this->input->post('cat_name'));
		
		 $catid=$this->input->post('catid');
		 $data=array(
            'product_category'=>$this->input->post('cat_name')
        );
		 $s = $this->Productcategory_model->update_prod_cat($data,$catid);
		 echo "<script>alert('Product Category Updated Successfully!!!');window.location.href='".base_url()."pages/prod_cat_list';</script>";
		
    }
	
	public function update_status_prod_category(){ 
		 $id=$this->input->post('id');
		 $data=array(
            'status'=>'1'
        );
		 $s = $this->Productcategory_model->update_status_prod_cat($data,$id);
		 echo "<script>alert('Product Category made Inactive');window.location.href='".base_url()."pages/prod_cat_list';</script>";
    }
	public function update_status_prod_category1(){ 
		 $id=$this->input->post('id');
		 $data=array(
            'status'=>'0'
        );
		 $s = $this->Productcategory_model->update_status_prod_cat1($data,$id);
		 echo "<script>alert('Product Category made active');window.location.href='".base_url()."pages/prod_cat_list';</script>";
    }
	public function category_validation()
	{
		$product_id = $this->input->post('p_id');
		//echo $product_id; exit;
        $this->output->set_content_type("application/json")->set_output(json_encode($this->Productcategory_model->category_validation($product_id)));
	}
	public function add_prodrow(){
		$data['count']=$this->input->post('countid');
		 //echo($this->input->post('countid')); echo"hiii";exit;
		 $this->load->view('add_row_prod',$data);
    }
		
    
}