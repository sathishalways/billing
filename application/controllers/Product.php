<?php 
class Product extends CI_Controller{

    function __construct(){
     parent::__construct();
    $this->load->helper('url');
    $this->load->model('Product_model');

    }
    
    
    public function add_product(){ //echo "<pre>";print_r($_POST);exit;
		
       // $data['serial_no']=$this->input->post('serial_no');
		$data['category']=$this->input->post('category');
		$data['subcategory']=$this->input->post('subcategory');
		$data['model']=$this->input->post('model');
		$data['stock_qty']=$this->input->post('stock_qty');
		$data['description']=$this->input->post('description');
		
		$result=$this->Product_model->add_prod($data);
		if($result){
              echo "<script>alert(' Product Added Successfully!!!');window.location.href='".base_url()."pages/prod_list';</script>";
     }
    }
	 public function add_product_quick(){ //echo "<pre>";print_r($_POST);exit;
		
       // $data['serial_no']=$this->input->post('serial_no');
		$data['product_name']=$this->input->post('product_name');
		$data['category']=$this->input->post('category');
		$data['subcategory']=$this->input->post('subcategory');
		$data['brand']=$this->input->post('brand');
		$data['model']=$this->input->post('model');
		$data['description']=$this->input->post('description');
		$data['addlinfo']=$this->input->post('addlinfo');
		//print_r($data['addlinfo']);
		if (is_array($data['addlinfo'])){
					$data['addlinfo']= implode(",",$data['addlinfo']);
				}else{
					$data['addlinfo']="";
				}
		//$data['addlinfo']= implode(",",$data['addlinfo']);
		
		$result=$this->Product_model->add_prod($data);
		if($result){
              echo "<script>parent.$.fancybox.close();</script>";
     }
    }
	
    public function getsub_category(){
		$id=$this->input->post('id');//echo $id; exit;
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Product_model->getsub_cat($id)));
		   
		
		//$query=$this->Product_model->getsub_cat($id);
        //return $query;
    }
	  
	public function get_brand(){
		$subcatid=$this->input->post('subcatid');//echo $id; exit;
		$categoryid=$this->input->post('categoryid');
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Product_model->get_brands($categoryid,$subcatid)));
		   
		
		//$query=$this->Product_model->getsub_cat($id);
        //return $query;
    }
    
    
    public function update_product(){ 
		   $id=$this->uri->segment(3);
		   $data['list']=$this->Product_model->getproductbyid($id);
		   $data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		   $data['prodcatlist']=$this->Product_model->prod_cat_dropdownlist();
		   $data['subcatlist']=$this->Product_model->prod_sub_cat_dropdownlist();
		   $data['brandlist']=$this->Product_model->brandlist();
		   $data['accessories_list']=$this->Product_model->accessories_list();
		   $this->load->view('edit_prod_list',$data);
		
    }
	
	public function edit_product(){ 
		 
		 $data=array(
            'category'=>$this->input->post('category'),
            'subcategory'=>$this->input->post('subcategory'),
			'model'=>$this->input->post('model'),
			'stock_qty'=>$this->input->post('stock_qty'),
            'description'=>$this->input->post('description')
        );
        $id=$this->input->post('product_id');
		
		$this->Product_model->edit_products($data,$id);
		
		$stock_qty = $this->input->post('stock_qty1');
		
		if(isset($stock_qty) && $stock_qty!=""){
			$this->Product_model->update_stock_in_hand($stock_qty, $id);
				
		}
		
              echo "<script>alert('Product Updated Successfully!!!');window.location.href='".base_url()."pages/prod_list';</script>";
    
    
    }
	
	public function update_status_product(){ 
		 $id=$this->input->post('id');
		 $data=array(
            'status'=>'1'
        );
		 $s = $this->Product_model->update_status_prod($data,$id);
		 echo "<script>alert('Product Category made Inactive');window.location.href='".base_url()."pages/prod_cat_list';</script>";
    }
	
	public function update_status_product1(){ 
		 $id=$this->input->post('id');
		 $data=array(
            'status'=>'0'
        );
		 $s = $this->Product_model->update_status_prod1($data,$id);
		 echo "<script>alert('Product Category made Active');window.location.href='".base_url()."pages/prod_cat_list';</script>";
    }
    
}