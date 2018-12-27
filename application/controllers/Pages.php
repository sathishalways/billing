<?php
class Pages extends CI_Controller{
function __construct(){
parent::__construct();
    $this->load->helper('url');
	$this->load->model('Order_model');
	$this->load->model('Customer_model');
	$this->load->model('Product_model');
	$this->load->model('Dash_model');
	$this->load->model('Productcategory_model');
	$this->load->model('Subcategory_model');
}
    
    public function bills(){
		$data['order_list']=$this->Order_model->order_list();
		$this->load->view('templates/header');
		$this->load->view('bills',$data);
    }
	
	public function dash(){
		
		/*$data1['stamping_cnt']=$this->Dash_model->stamping_cnt();
		$data1['readyfordelivery_cnt']=$this->Dash_model->readyfordelivery_cnt();
		*/
		
		$this->load->view('templates/header');
		$this->load->view('dash');
    }
	
	
	
	public function add_bills(){
		$data['bill_cnt']=$this->Order_model->bill_cnt();
		
		if(empty($data['bill_cnt'])){
			$data['cnt']='00001';
		}else{
			$cusid = $data['bill_cnt'][0]->order_id; 
			$dat= $cusid + 1;
			$data['cnt']=sprintf("%06d", $dat);
		}
		$data['customer_list']=$this->Customer_model->customer_list();
		$data['prod_list']=$this->Product_model->product_list();
		$this->load->view('templates/header');
		$this->load->view('add_bills',$data);
    }
	
	public function add_cust(){
		$data['state_list']=$this->Order_model->state_list();
		$this->load->view('templates/header');
		$this->load->view('add_cust',$data);
    }
	
	public function cust_list(){
		$data['list']=$this->Customer_model->customer_list();
		$this->load->view('templates/header');
		$this->load->view('cust_list',$data);
    }
	
	public function prod_list(){ 
		$data1['list']=$this->Product_model->product_list();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('prod_list',$data1);
    }
	
	public function add_prod(){ 
		$data1['prodcatlist']=$this->Product_model->prod_cat_dropdownlist();
		$data1['subcatlist']=$this->Product_model->prod_sub_cat_dropdownlist();
		$data1['brandlists']=$this->Product_model->brandlists();
		$data1['accessories_list']=$this->Product_model->accessories_list();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('add_prod',$data1);
    }
	public function prod_cat_list(){ 
		$data1['list']=$this->Productcategory_model->prod_cat_list();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('prod_cat_list',$data1);
    }
	
	public function prod_subcat_list(){ 
		$data1['list']=$this->Subcategory_model->prod_sub_cat_list();
		$data1['droplists']=$this->Subcategory_model->prod_cat_dropdownlist();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('prod_subcat_list',$data1);
    }
	
	public function add_prod_cat(){ 
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('add_prod_cat');
    }
	
	public function add_prod_subcat(){ 
		$data1['droplist']=$this->Subcategory_model->prod_cat_dropdownlist();
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('add_prod_subcat',$data1);
    }
	
	
}