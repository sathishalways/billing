<?php 
class Brand extends CI_Controller{

    function __construct(){
     parent::__construct();
    $this->load->helper('url');
    $this->load->model('Brand_model');
	

    }
    
    
    public function add_brand(){ //echo "<pre>";print_r($_POST);exit;
		$user=array('brand_name'=>$this->input->post('brand_name'));
		if($this->Brand_model->checkbrandname($user['brand_name']))
		{
			echo "<script>window.location.href='".base_url()."pages/add_brand';alert(' Brand Name already exist');</script>";
		}else{
		$brand_name=$this->input->post('brand_name');
        $c=$brand_name;
		$count=count($c); 
		
			for($i=0; $i<$count; $i++) {
				if($brand_name[$i]!=""){ 
					$data1 = array('brand_name' => $brand_name[$i]);
					$result=$this->Brand_model->add_brands($data1);
				}
				/* else{
					echo "<script>window.location.href='".base_url()."pages/add_brand';alert('Please enter Brand');</script>";
					
				} */
			}
		if(isset($result)){
			echo "<script>window.location.href='".base_url()."pages/brandList';alert('Brand Added Successfully!!!');</script>";
		}
    }
	}
	
    public function getsub_category(){
		$id=$this->input->post('id');//echo $id; exit;
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Brand_model->getsub_cat($id)));
		   
		
		//$query=$this->Product_model->getsub_cat($id);
        //return $query;
    }
	
	public function getsub_cat(){
		$id=$this->input->post('catid');//echo $id; exit;
		
		$brid=$this->input->post('brid');
		$data=array(
            'cat_id'=>$this->input->post('catid')
        );
		 
		$res = $this->Brand_model->update_cat($data,$brid);
		
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Brand_model->getsub_cat($id)));
		   
		
		//$query=$this->Product_model->getsub_cat($id);
        //return $query;
    }
	  
    public function updatesub_category(){ 
		  $id=$this->input->post('brid');
		 //$this->input->post('procatid');
		 
		 $data=array(
            'subcat_id'=>$this->input->post('subcatid')
        );
		 $s = $this->Brand_model->update_subcat($data,$id);
		
    }
    
	public function update_brand_name(){ 
		  $id=$this->uri->segment(3);
		 
		  $data['list']=$this->Brand_model->getbrandbyid($id);
		  $data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		  $this->load->view('edit_brand',$data);
    }
	
	public function edit_brand(){ 
	$new=$this->input->post('brand_name');
	$old=$this->input->post('brand_name1');
	if($new==$old)
	{
		$id=$this->input->post('brandid');
		  $data=array(
            'brand_name'=>$this->input->post('brand_name')
        );
		 $s = $this->Brand_model->update_brandname($data,$id);
		 echo "<script>alert('Brand Updated Successfully!!!');window.location.href='".base_url()."pages/brandList';</script>";
	}else{
	
	$user=array('brand_name'=>$this->input->post('brand_name'));
		if($this->Brand_model->checkbrandname($user['brand_name']))
		{
			$brandid=$this->input->post('brandid');
			//print_r ($brandid);exit;
			echo "<script>window.location.href='".base_url()."Brand/update_brand_name/'+$brandid;alert(' Brand Name already exist');</script>";
		}
		else{
		  $id=$this->input->post('brandid');
		  $data=array(
            'brand_name'=>$this->input->post('brand_name')
        );
		 $s = $this->Brand_model->update_brandname($data,$id);
		 echo "<script>alert('Brand Updated Successfully!!!');window.location.href='".base_url()."pages/brandList';</script>";
		
    }
	}
	}
	
	
    public function update_product(){ 
		   $id=$this->uri->segment(3);
		   $data['list']=$this->Product_model->getproductbyid($id);
		   $data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		   $data['prodcatlist']=$this->Product_model->prod_cat_dropdownlist();
		   $data['subcatlist']=$this->Product_model->prod_sub_cat_dropdownlist();
		   $this->load->view('edit_prod_list',$data);
		
    }
	
	public function edit_product(){ 
		 $data = $this->input->post('addlinfo');
		
		 $addlnfo= implode(",",$data);
		// echo $addlnfo;exit;
		 $data=array(
            'serial_no'=>$this->input->post('serial_no'),
            'product_name'=>$this->input->post('product_name'),
            'category'=>$this->input->post('category'),
            'subcategory'=>$this->input->post('subcategory'),
            'model'=>$this->input->post('model'),
            'description'=>$this->input->post('description'),
			'addlinfo'=>$addlnfo
        );
        $id=$this->input->post('product_id');
		
		$this->Product_model->edit_products($data,$id);
		
              echo "<script>alert('Product Updated Successfully!!!');window.location.href='".base_url()."pages/prod_list';</script>";
    
    
    }
	
	public function addrow(){ 
		 $data['count']=$this->input->post('countid');
		 //echo "Count: ".$data['count'];
		 $data['prodcatlist']=$this->Brand_model->prod_cat_dropdownlist();
		 $data['subcatlist']=$this->Brand_model->prod_sub_cat_dropdownlist();
		 $this->load->view('addrow',$data);
    }
	
	public function update_status_brand_name(){ 
		 $id=$this->input->post('id');
		 $data=array(
            'status'=>'1'
        );
		 $s = $this->Brand_model->update_status_brand($data,$id);
		 echo "<script>alert('Brand made Inactive');window.location.href='".base_url()."pages/prod_cat_list';</script>";
    }
	public function update_status_brand_name1(){ 
		 $id=$this->input->post('id');
		 $data=array(
            'status'=>'0'
        );
		 $s = $this->Brand_model->update_status_brand1($data,$id);
		 echo "<script>alert('Brand made Active');window.location.href='".base_url()."pages/prod_cat_list';</script>";
    }
	public function brand_validation()
	{
		//print_r($_POST); exit;
		$brand = $this->input->post('brand');
        $this->output->set_content_type("application/json")->set_output(json_encode($this->Brand_model->brand_validation($brand)));
	}
	
}