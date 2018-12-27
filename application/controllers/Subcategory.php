<?php 
class subcategory extends CI_Controller{

    function __construct(){
     parent::__construct();
    $this->load->helper('url');
    $this->load->model('Subcategory_model');

    }
    
    
    public function add_sub_category(){
		
		
        $pro_cat=$this->input->post('pro_cat');
		$sub_catname=$this->input->post('sub_catname');
        $c=$pro_cat;
		$count=count($c); 
		
			for($i=0; $i<$count; $i++) {
				if($pro_cat[$i]!=""){ 
					$data1 = array('prod_category_id' => $pro_cat[$i], 'subcat_name' => $sub_catname[$i]);
					$result=$this->Subcategory_model->add_subcategory($data1);
				}
				/* else{
					echo "<script>window.location.href='".base_url()."pages/prod_subcat_list';alert('Please enter Sub Category');</script>";
					
				} */
			}
		if(isset($result)){
			echo "<script>window.location.href='".base_url()."pages/prod_subcat_list';alert('Sub Category Added Successfully!!!');</script>";
		}
    }
    
	
		
    
    
    public function update_sub_category(){ 
		  $id=$this->uri->segment(3);
		  $data1['list']=$this->Subcategory_model->prod_sub_cat_listbyid($id);
		  $data1['droplists']=$this->Subcategory_model->prod_cat_dropdownlist();
		  $data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		  $this->load->view('edit_prod_sub_cat',$data1);
		 
    }
	
	public function edit_sub_category(){ 
		  $id=$this->input->post('subcatid');
		
		 $data=array(
			'prod_category_id'=>$this->input->post('pro_cat'),
            'subcat_name'=>$this->input->post('sub_catname')
        );
		 $s = $this->Subcategory_model->update_sub_cat_name($data,$id);
		 echo "<script>alert('Sub Category Updated Successfully!!!');window.location.href='".base_url()."pages/prod_subcat_list';</script>";
		
    }
	
	public function update_status_sub_category(){ 
		$id=$this->input->post('id');
		 $data=array(
            'status'=>'1'
        );
		 $s = $this->Subcategory_model->update_status_prod_cat($data,$id);
		 
    }
	
	public function update_status_sub_category1(){ 
		$id=$this->input->post('id');
		 $data=array(
            'status'=>'0'
        );
		 $s = $this->Subcategory_model->update_status_prod_cat1($data,$id);
		 
    }
	
	public function subcategory_validation()
	{
		
		$category = $this->input->post('category');
		$sub_category = $this->input->post('sub_category');
		
	
        $res = $this->Subcategory_model->subcategory_validation($category,$sub_category);
		
		print_r($res);
	}
	public function add_subcatrow(){
		$data['count']=$this->input->post('countid');
		$data['droplist']=$this->Subcategory_model->prod_cat_dropdownlist();
		 //echo($this->input->post('countid')); echo"hiii";exit;
		 $this->load->view('add_row_subcat',$data);
    }
    
}