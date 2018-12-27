<?php 
class Spare extends CI_Controller{

    function __construct(){
     parent::__construct();
    $this->load->helper('url');
    $this->load->model('Spare_model');

    }
    
    public function getcust_name(){
		$id=$this->input->post('id');//echo $id; exit;
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Spare_model->getcust_name($id)));
	
    }
	
	public function get_spares_byReqId(){
		$id=$this->input->post('id');//echo $id; exit;
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Spare_model->get_spares_byReqId($id)));
	
    }
	
	
	public function get_productinfobyid(){
		$id=$this->input->post('modelno');//echo $id; exit;
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Spare_model->get_productdetbyid($id)));
		
    }
	 public function spareListByModelId(){
		$id=$this->input->post('id');//echo $id; exit;
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Spare_model->spareListByModelId($id)));
	
    }
	
    public function add_spare(){ //echo "<pre>";print_r($_POST);exit;
		$user=$this->input->post('spare_name');
		if($this->Spare_model->checksparename($user))
		{
			echo "<script>window.location.href='".base_url()."pages/add_new_stock';alert(' Spare Name already exist');</script>";
		}else{
		if($this->input->post('Save') == "saveit") { 
		
			$data['spare_name']=$this->input->post('spare_name');
		//$data['spare_qty']=$this->input->post('spare_qty');
		//$data['stock_spare']=$this->input->post('spare_qty');
		//$data['purchase_price']=$this->input->post('purchase_price');
		$data['sales_price']=$this->input->post('sales_price');
		$data['effective_date']=$this->input->post('datepicker');
		$data['part_no']=$this->input->post('part_no');
		$data['min_qty']=$this->input->post('reorder');
		
        $pro_cat=$this->input->post('category');
		$sub_catname=$this->input->post('subcategory');
		$brand_name=$this->input->post('brandname');
		$model=$this->input->post('model');
		
		$ids=$this->input->post('countidss');
		date_default_timezone_set('Asia/Calcutta');
		$data['created_on'] = date("Y-m-d");
        $c=$pro_cat;
		$count=count($c); 
		
		$result=$this->Spare_model->add_spares($data);
		$resu=$this->Spare_model->add_spares_effective_date_his($data);
		
		
		if($result){
			 $i=0;
             $data1 =array();
			  for($i=0; $i<$count; $i++) {
				
				 /* $data7['model']['cnt'] = $this->input->post('model'.$idd);
				 if (is_array($data7['model']['cnt'])){
					$modelss = implode(",",$data7['model']['cnt']);
				}else{
					$modelss="";
				} */
               $data1[] = array(
           'spare_id' => $result,
		   'cat_id' => $pro_cat[$i],
           'subcat_id' => $sub_catname[$i],
           'brand_id' => $brand_name[$i],
           'model_id' => $model[$i]
      );
	  }
	  /* echo "<pre>";
	  print_r($data1);
	  exit; */
		$result1=$this->Spare_model->add_spare_details($data1);
		
		
		if($result){
              echo "<script>alert('Spare Added Successfully!!!');window.location.href='".base_url()."pages/add_spare';</script>";
     }
    }
		} else {
			$data['spare_name']=$this->input->post('spare_name');
		//$data['spare_qty']=$this->input->post('spare_qty');
		//$data['stock_spare']=$this->input->post('spare_qty');
		//$data['purchase_price']=$this->input->post('purchase_price');
		$data['sales_price']=$this->input->post('sales_price');
		$data['effective_date']=$this->input->post('datepicker');
		
		
        $pro_cat=$this->input->post('category');
		$sub_catname=$this->input->post('subcategory');
		$brand_name=$this->input->post('brandname');
		$model=$this->input->post('model');
		date_default_timezone_set('Asia/Calcutta');
		$data['created_on'] = date("Y-m-d");
        $c=$pro_cat;
		$count=count($c); 
		
		$result=$this->Spare_model->add_spares($data);
		$resu=$this->Spare_model->add_spares_effective_date_his($data);
		
		
		if($result){
             $data1 =array();
			 for($i=0; $i<$count; $i++) {
               $data1[] = array(
           'spare_id' => $result,
		   'cat_id' => $pro_cat[$i],
           'subcat_id' => $sub_catname[$i],
           'brand_id' => $brand_name[$i],
           'model_id' => $model[$i]
      );
	  }
		$result1=$this->Spare_model->add_spare_details($data1);
		
		
		if($result){
              echo "<script>alert('Spare Added Successfully!!!');window.location.href='".base_url()."pages/add_new_stock';</script>";
     }
    }
		}
		
		
		
    }
	}
	
	
	
	 public function add_purchase_order(){ //echo "<pre>";print_r($_POST);exit;
		
		$data['to_name']=$this->input->post('to_name');
		$data['to_addr']=$this->input->post('to_addr');
		$data['to_cont_name']=$this->input->post('to_cont_name');
		$data['to_cont_no']=$this->input->post('to_cont_no');
		$data['to_cont_mail']=$this->input->post('to_cont_mail');
		
		$data['todaydate']=$this->input->post('todaydate');
		$data['refno']=$this->input->post('refno');
		$data['cst_no']=$this->input->post('cst_no');
		
		$cst1 = $this->input->post('cst1');
		$cst1_arr = explode('-',$cst1);
		$data['tax_id'] = $cst1_arr['0'];
		
        $sr_no=$this->input->post('sr_no');
		$spare_name=$this->input->post('spare_name');
		$spare_qty=$this->input->post('spare_qty');
		$rate=$this->input->post('rate');
		$spare_tot=$this->input->post('spare_tot');
		
		
		$data['basicamount']=$this->input->post('basicamount');
		$data['cst']=$this->input->post('cst');
		$data['freight']=$this->input->post('freight');
		$data['totalamount']=$this->input->post('totalamount');
		
		$data['spec_addr']=$this->input->post('spec_addr');
		$data['spec_ins']=$this->input->post('spec_ins');
		
		
        $c=$spare_name;
		$count=count($c); 
		
		$result=$this->Spare_model->add_purchase_order($data);
		
		
		if($result){
			 $i=0;
             $data1 =array();
			 for($i=0; $i<$count; $i++){
				if($sr_no[$i] !=''){
               $data1[] = array(
           'purchase_order_id' => $result,
		   'sr_no' => $sr_no[$i],
           'spare_name' => $spare_name[$i],
           'spare_qty' => $spare_qty[$i],
           'rate' => $rate[$i],
		   'spare_tot' => $spare_tot[$i]
      );
				}
	 
	  }
	  /* echo "<pre>";
	  print_r($data1);
	  exit; */
		$result1=$this->Spare_model->add_purchase_order_details($data1);
		
		
		if($result){
              echo "<script>alert('Purchase order Added Successfully!!!');window.location.href='".base_url()."pages/purchase_orders';window.open('".base_url()."Spare/print_purchase_order/".$result."')</script>";
     }
    }
		
    }
	
	
	
	public function addrow1(){ 
		 $data['count']=$this->input->post('countid');
		 $prod_cat = $this->input->post('prod_cat');
		 
		 if($prod_cat!=""){
			$data['spare_catId'] = $this->Spare_model->get_sparenamebycat($prod_cat);
		 }
		 
		// $modelid=$this->input->post('modelid');
		 //$data['spareListByModelId']=$this->Spare_model->spareListByModelId($modelid);
		 $this->load->view('add_spares_pop',$data);
    }
	public function addrowminus(){ 
		 $data['count']=$this->input->post('countid');
		 $prod_cat = $this->input->post('prod_cat');
		 
		 if($prod_cat!=""){
			$data['spare_catId'] = $this->Spare_model->get_sparenamebycat($prod_cat);
		 }
		 
		// $modelid=$this->input->post('modelid');
		 //$data['spareListByModelId']=$this->Spare_model->spareListByModelId($modelid);
		 $this->load->view('minus_spares_pop',$data);
    }
	
	public function update_important(){ 
		  $id=$this->input->post('id');
		
		 $data=array(
            'dashboard_show'=>$this->input->post('dashboard_show')
        );
		 $s = $this->Spare_model->update_dash_important($data,$id);
		
    }
	
	
	public function edit_purchase_order(){ 
		$id = $this->uri->segment(3);
		$data1['comp_info'] = $this->Spare_model->get_compinfo();
		$data1['get_purchase_ordersbyid'] = $this->Spare_model->get_purchase_ordersbyid($id);
		$data1['get_purchase_orders_sparesbyid'] = $this->Spare_model->get_purchase_orders_sparesbyid($id);
		$data1['spare_list']=$this->Spare_model->spare_list_engineers();
		$data1['tax_list']=$this->Spare_model->tax_list();
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('edit_spare_purchase_order',$data1);
    }
	
	public function print_purchase_order(){ 
		$id = $this->uri->segment(3);
		$data1['comp_info'] = $this->Spare_model->get_compinfo();
		
		$data1['get_purchase_ordersbyid'] = $this->Spare_model->get_purchase_ordersbyid($id);
		$data1['get_purchase_orders_sparesbyid'] = $this->Spare_model->get_purchase_orders_sparesbyid($id);
		$data1['spare_list']=$this->Spare_model->spare_list_engineers();
		$data1['tax_list']=$this->Spare_model->tax_list();
		
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('spare_purchase_print',$data1);
    }
	
	
	
	
	public function update_purchase_order(){ //echo "<pre>";print_r($_POST);exit;
		
		$po_id=$this->input->post('po_id');
		
		$data['to_name']=$this->input->post('to_name');
		$data['to_addr']=$this->input->post('to_addr');
		$data['to_cont_name']=$this->input->post('to_cont_name');
		$data['to_cont_no']=$this->input->post('to_cont_no');
		$data['to_cont_mail']=$this->input->post('to_cont_mail');
		
		$data['todaydate']=$this->input->post('todaydate');
		$data['refno']=$this->input->post('refno');
		$data['cst_no']=$this->input->post('cst_no');
		
		
        $sr_no=$this->input->post('sr_no');
		$spare_name=$this->input->post('spare_name');
		$spare_qty=$this->input->post('spare_qty');
		$rate=$this->input->post('rate');
		$spare_tot=$this->input->post('spare_tot');
		
		
		$data['basicamount']=$this->input->post('basicamount');
		$data['cst']=$this->input->post('cst');
		$data['freight']=$this->input->post('freight');
		$data['totalamount']=$this->input->post('totalamount');
		
		$data['spec_addr']=$this->input->post('spec_addr');
		$data['spec_ins']=$this->input->post('spec_ins');
		
		
        $c=$spare_name;
		$count=count($c); 
		
		$this->Spare_model->update_purchase_order($data,$po_id);
		$this->Spare_model->delete_purchase_order($po_id);
		//$check=$this->input->post('$sr_no');
             $data1 =array();
			 for($i=0; $i<$count; $i++){
				if($sr_no[$i] !=''){
               $data1[] = array(
           'purchase_order_id' => $po_id,
		   'sr_no' => $sr_no[$i],
           'spare_name' => $spare_name[$i],
           'spare_qty' => $spare_qty[$i],
           'rate' => $rate[$i],
		   'spare_tot' => $spare_tot[$i]
				);
				}
	 
	  }
	 
		$result1=$this->Spare_model->add_purchase_order_details($data1);
	
              echo "<script>alert('Purchase order updated Successfully!!!');window.location.href='".base_url()."pages/purchase_orders';</script>";
     
		
    }
	
	public function addrow2(){ 
		 $data['count']=$this->input->post('countid');
		 $data['customerlist']=$this->Spare_model->customerlist();
		 $data['spare_list']=$this->Spare_model->spare_list_engineers();
		 $data['engg_list']=$this->Spare_model->engineer_list();
		 $data['reqview']=$this->Spare_model->reqlist();
		// $modelid=$this->input->post('modelid');
		 //$data['spareListByModelId']=$this->Spare_model->spareListByModelId($modelid);
		 $this->load->view('add_spares_engg_row',$data);
    }
	
	public function addrow_purchase_order(){ 
		 $data['count']=$this->input->post('countid');
		 $data['spare_list']=$this->Spare_model->spare_list_engineers();
		 $data['engg_list']=$this->Spare_model->engineer_list();
		 $data['reqview']=$this->Spare_model->reqlist();
		// $modelid=$this->input->post('modelid');
		 //$data['spareListByModelId']=$this->Spare_model->spareListByModelId($modelid);
		 $this->load->view('add_purchase_order_row',$data);
    }
	
	public function edit_spare(){ //echo "<pre>";print_r($_POST);exit;
	$new=$this->input->post('spare_name');
	$old=$this->input->post('spare_name1');
	if($new==$old)
	{
		$id=$this->input->post('spareid');
		$data=array(
            'spare_name'=>$this->input->post('spare_name'),
			'part_no'=>$this->input->post('part_no'),
            'sales_price'=>$this->input->post('sales_price'),
            'effective_date'=>$this->input->post('datepicker'),
			'min_qty'=>$this->input->post('reorder')
        );
		
		$this->Spare_model->update_spares($data,$id);
		
		$data2['spare_name']=$this->input->post('spare_name');
		$data2['sales_price']=$this->input->post('sales_price');
		$data2['effective_date']=$this->input->post('datepicker');
		$data2['min_qty']=$this->input->post('reorder');
		
		$resu=$this->Spare_model->add_spares_effective_date_his($data2);
		
        $pro_cat=$this->input->post('category');
		$sub_catname=$this->input->post('subcategory');
		$brand_name=$this->input->post('brandname');
		$model=$this->input->post('model');
		
		$ids=$this->input->post('countidss');
		
        $c=$pro_cat;
		$count=count($c); 
		
		$this->Spare_model->del_spare_details($id);
		
			 
             $data1 =array();
			for($i=0;$i<$count;$i++){
				
				 //$data7['model']['cnt'] = $this->input->post('model'.$idd);
				 //echo "<pre>";
	 // print_r($data7);
				/*  if(is_array($data7['model']['cnt'])){
					$modelss = implode(",",$data7['model']['cnt']);
				}else{
					$modelss="";
				} */
               $data1[] = array(
           'spare_id' => $id,
		   'cat_id' => $pro_cat[$i],
           'subcat_id' => $sub_catname[$i],
           'brand_id' => $brand_name[$i],
           'model_id' => $model[$i]
      );
	  
	  }
	  
	 // exit;
		$result1=$this->Spare_model->add_spare_details($data1);
              echo "<script>alert('Spare Updated Successfully!!!');window.location.href='".base_url()."pages/add_spare';</script>";
     
	}else{
	
	$user=$this->input->post('spare_name');
		if($this->Spare_model->checksparename($user))
		{
			$spareid=$this->input->post('spareid');
			//print_r ($brandid);exit;
			echo "<script>window.location.href='".base_url()."Spare/update_spare/'+$spareid;alert(' Spare Name already exist');</script>";
		}
		else{
		
		$id=$this->input->post('spareid');
		$data=array(
            'spare_name'=>$this->input->post('spare_name'),
			'part_no'=>$this->input->post('part_no'),
            'sales_price'=>$this->input->post('sales_price'),
            'effective_date'=>$this->input->post('datepicker'),
			'min_qty'=>$this->input->post('reorder')
        );
		
		$this->Spare_model->update_spares($data,$id);
		
		$data2['spare_name']=$this->input->post('spare_name');
		$data2['sales_price']=$this->input->post('sales_price');
		$data2['effective_date']=$this->input->post('datepicker');
		$data2['min_qty']=$this->input->post('reorder');
		$resu=$this->Spare_model->add_spares_effective_date_his($data2);
		
        $pro_cat=$this->input->post('category');
		$sub_catname=$this->input->post('subcategory');
		$brand_name=$this->input->post('brandname');
		$model=$this->input->post('model');
		
		$ids=$this->input->post('countidss');
		
        $c=$pro_cat;
		$count=count($c); 
		
		$this->Spare_model->del_spare_details($id);
		
			 
             $data1 =array();
			for($i=0;$i<$count;$i++){
				
				 //$data7['model']['cnt'] = $this->input->post('model'.$idd);
				 //echo "<pre>";
	 // print_r($data7);
				/*  if(is_array($data7['model']['cnt'])){
					$modelss = implode(",",$data7['model']['cnt']);
				}else{
					$modelss="";
				} */
               $data1[] = array(
           'spare_id' => $id,
		   'cat_id' => $pro_cat[$i],
           'subcat_id' => $sub_catname[$i],
           'brand_id' => $brand_name[$i],
           'model_id' => $model[$i]
      );
	  
	  }
	  
	 // exit;
		$result1=$this->Spare_model->add_spare_details($data1);
              echo "<script>alert('Spare Updated Successfully!!!');window.location.href='".base_url()."pages/add_spare';</script>";
     
    }
	}
	}
	public function add_spare_engineers(){
		$data['eng_name']=$this->input->post('eng_name');
		$data['spare_name']=$this->input->post('spare_name');
		$data['qty']=$this->input->post('qty');
		$result=$this->Spare_model->add_spares_engineers($data);
	}
	
	/* public function add_spare_engg(){ 
	 
		 $eng_name=$data1['emp_id']=$this->input->post('eng_name');
		 $eng_spare_name=$data1['spare_id']=$this->input->post('eng_spare_name');
		 $plus=$data1['qty_out']=$this->input->post('plus');
		 $minus=$data1['qty_in']=$this->input->post('minus');
		 $engg_date=$data1['engineer_date']=$this->input->post('engg_date');
		 $engg_reason=$data1['reason']=$this->input->post('engg_reason');
		 
		 
		 $spare_qty=$data1['spare_qty']=$this->input->post('spare_qty');
		 $used_spare=$data1['used_spare']=$this->input->post('used_spare');
		
		 
		 $c=$eng_name;
		 $count=count($c);
		 
		 $data1 =array();
			 for($i=0; $i<$count; $i++) {
				  
				 if($plus[$i]!="" || $minus[$i]!=""){
					 if($plus[$i]!=""){
						 $stock_qty = $spare_qty[$i]- $plus[$i];
						$used_spare1 = $used_spare[$i] + $plus[$i];
					 }
					
					if($minus[$i]!=""){
						$stock_qty = $spare_qty[$i] + $minus[$i];
						$used_spare1 = $used_spare[$i] - $minus[$i];
					}
					
					
					$data3[] = array(	
					'id'=>$eng_spare_name[$i],
					'spare_qty'=>$stock_qty,
					'used_spare'=>$used_spare1
				);
				
				$this->Spare_model->update_spare_enggs($data3);
				}
				
				 $data1[] = array(	
				 'emp_id'=>$eng_name[$i],
				 'spare_id'=>$eng_spare_name[$i],
				 'qty_out'=>$plus[$i],
				 'qty_in'=>$minus[$i],
				 'engineer_date'=>$engg_date[$i],
			     'reason'=>$engg_reason[$i]
				);
			}
		$this->Spare_model->add_spare_enggs($data1);
		
		echo "<script>alert('Spares For Engineers Added');window.location.href='".base_url()."pages/spare_stock';</script>";
		
    } */
	
	
	public function update_spare_req(){ 
		 $id = $this->uri->segment(3);
		 $data['eng_name'] = $this->uri->segment(4);
		 $data['cust'] = $this->uri->segment(5);
		 $data['get_spare_details_reqid']=$this->Spare_model->get_spare_details_reqid($id);
		 $data['get_spare_to_enggByReqid']=$this->Spare_model->get_spare_to_enggByReqid($id);
		 //$data['get_spare_stocks_byreqid']=$this->Spare_model->get_spare_stocks_byreqid($id);
		 $this->load->view('update_spare_req',$data);
    }
	
	public function addsparedetails()
	{
		$spare_id = $data['spare_id'] = $this->input->post('spare');
		
		$emp_id = $data['employee'] = $this->input->post('employee');
		
		date_default_timezone_set('Asia/Calcutta');
		$data['todaydate'] = date("d-m-Y H:i:s");
		
		if($this->input->post('plus'))
		{
			$plus = $data['qty_plus'] = $this->input->post('plus');
			$m_data['qty_plus'] = $this->input->post('plus');
			$m_data['status']='1';
			
		}else{
			
			$minus = $data['qty_plus'] = $this->input->post('minus');
			$m_data['qty_plus'] = $this->input->post('minus');
			$m_data['status']='2';
		}
		
		$m_data['spare_id'] = $this->input->post('spare');
		
		 $m_data['employee'] = $this->input->post('employee');
		 
		$m_data['todaydate'] = date("d-m-Y H:i:s");
		
		
		
		$this->Spare_model->addpettylog($m_data);
		
		$list = $this->Spare_model->getpetsparelist($spare_id,$emp_id);
		
		if($list > 0)
		{
			$result = $this->Spare_model->getpettyspare($spare_id,$emp_id);
		
			extract($result);
			
			$g = $this->Spare_model->getsparelist($spare_id);
			
			extract($g);
			
			if($this->input->post('plus')!=""){
				
				$s = $plus + $qty_plus;
				
			$p_data=array(
			'qty_plus'=>$s,
			
			);
			
						$tot_qty = $spare_qty - $plus;
						
						$totusdspare = $used_spare + $plus;
						
						$totengspare = $eng_spare + $plus;
						
						$t_data=array(
						'spare_qty'=>$tot_qty
						);
			
			
			}
			if($this->input->post('minus')!=""){
				
				$p =  $qty_plus - $minus;
					
				$p_data=array(
				'qty_plus'=>$p,
				
			);
			
					$tot_qty = $spare_qty + $minus;
		
					$totusdspare = $used_spare - $minus;
		
					$totengspare = $eng_spare - $minus;
		
					$t_data=array(
					'spare_qty'=>$tot_qty
					);
				
			}
					
			$where = "spare_id=".$spare_id." AND employee=".$emp_id; 
					
			$this->Spare_model->updatepspare($p_data,$where); 
			
			$this->Spare_model->updatepettyspare($spare_id,$t_data);
			
			
		}else{
			
			$this->Spare_model->addpettyspare($data);
			
			$g = $this->Spare_model->getsparelist($spare_id);
			
			extract($g);
			
					if($this->input->post('plus')!=""){
						 
						$tot_qty = $spare_qty - $plus;
						
						$totusdspare = $used_spare + $plus;
						
						$totengspare = $eng_spare + $plus;
						
						$t_data=array(
						'spare_qty'=>$tot_qty
						);
					 }
					 
					 if($this->input->post('minus')!=""){
						
						$tot_qty = $spare_qty + $minus;
		
					$totusdspare = $used_spare - $minus;
		
					$totengspare = $eng_spare - $minus;
		
					$t_data=array(
					'spare_qty'=>$tot_qty
					);
					}
					
					$this->Spare_model->updatepettyspare($spare_id,$t_data);
		}
		
		
	echo "<script>alert('Petty Spare Updated Successfully!!!');window.location.href='".base_url()."pages/petty_spare';</script>"; 
		
	}
	
	public function add_spare_engg(){ 
		
		/* $data5['spare_to_engg_cnt']=$this->Spare_model->spare_to_engg_cnt();
		
						if(empty($data5['spare_to_engg_cnt'])){
							$sp_id='1';
						}else{
							$cusid = $data5['spare_to_engg_cnt'][0]->id; 
							$sp_id = $cusid + 1;
							
						} */
		 $eng_name=$data1['emp_id']=$this->input->post('eng_name');
		 
		 $eng_spare_name=$data1['spare_id']=$this->input->post('eng_spare_name');
		 $eng_plus=$data1['qty_out']=$this->input->post('plus');
		 $eng_minus=$data1['qty_in']=$this->input->post('minus');
		 $engg_date=$data1['engineer_date']=$this->input->post('engg_date');
		 $engg_reason=$data1['reason']=$this->input->post('engg_reason');
		 
		 $spare_amt = $this->input->post('amt1');
		 
		// $this->Spare_model->add_spare_enggs($data1);
		 
		//$spare_receipt=$this->input->post('spare_receipt');
		$spare_qty = $this->input->post('spare_qty');
		$used_spare = $this->input->post('used_spare');
		$eng_spare = $this->input->post('eng_spare');
		
		//$eng_spare = $this->input->post('eng_spare');
		 
		 
		 
		 $plus = $this->input->post('plus');
		 $minus = $this->input->post('minus');
		 
		 $req_id = $this->input->post('req_id');
		 $cust_name = $this->input->post('cust');
		 
		 $quote_rev_id = $this->input->post('quote_rev_id');
		  
		 $c=$eng_spare_name;
		 $count=count($c);
		 
		 //$this->Quotereview_model->delete_quote_review($reqid);
		 //$j = $sp_id;
		 $data2 =array();
			 for($i=0; $i<$count; $i++) {
				 
				 //$spare_arr = explode('-',);$eng_spare_name[$i]
				 $quote_review_id = $quote_rev_id[$i];
				 
				 
				 $getsparebyid = $this->Spare_model->getsparebyid($eng_spare_name[$i]);
				 $spare_qt = $getsparebyid[0]->spare_qty;
				 $used_spar = $getsparebyid[0]->used_spare;
				 $eng_spar = $getsparebyid[0]->eng_spare;
				 
				  $where = "spare_id=".$eng_spare_name[$i]." AND employee=".$eng_name[$i]; 
				  $res = $this->Spare_model->getupspare($where);
				  $qty = $res[0]->qty_plus;
				  
				  if($plus[$i]!=""){
					   if($qty!="" && $qty!="0"){
							$p_qty = $qty + $eng_plus[$i];
							$n_data=array(
								'qty_plus'=>$p_qty
							);
							$this->Spare_model->updatepspare($n_data,$where);   
					   }else{
						   $p_qty = 0 + $eng_plus[$i];
						   $n_data=array(
								'qty_plus'=>$p_qty,
								'spare_id'=>$eng_spare_name[$i],
								'employee'=>$eng_name[$i],
								'todaydate'=>$engg_date[$i],
							);
							$this->Spare_model->addpettyspare($n_data,$where);   
					   }
						 	 
					 }
				 
				/*  echo "<pre>";
				 print_r($getsparebyid);
				 exit; */
				 if(isset($req_id[$i]) && $req_id[$i]!="" && $eng_plus[$i]!="" && $eng_plus[$i]!="0"){
					 $data12 = array(
						'spare_engg_id' => '1',
						'approval_status' => $this->input->post('approval_status')
					);
					$this->Spare_model->update_quotereview_spares($data12,$quote_review_id);
					 
				 }else if($this->input->post('approval_status')=='rejected'){
					  $data12 = array(
						'spare_engg_id' => '0',
						'approval_status' => $this->input->post('approval_status')
					);
					$this->Spare_model->update_quotereview_spares($data12,$quote_review_id);
				 }
				 
				 
				 /* if(isset($req_id[$i]) && $req_id[$i]!="" && $eng_minus[$i]){
					 $this->Spare_model->del_eng_spare($req_id[$i],$eng_spare_name[$i]);
					 
					 
				 } */
				 
				if($req_id[$i]!=""){
					$service_status = 'with_service';
				}else{
					$service_status = 'without_Service';
				}
				 
				 
				 
				 $data2[] = array(
					'emp_id' => $eng_name[$i],
					'spare_id' => $eng_spare_name[$i],
					'qty_out' => $eng_plus[$i],
					//'qty_in' => $eng_minus[$i],
					'engineer_date' => $engg_date[$i],
					'req_id' => $req_id[$i],
					'cust_name' => $cust_name[$i],
					'reason' => $engg_reason[$i],
					'spare_receipt' => $service_status,
					'auto_cnt' => '0'
				);
				
				
				if($plus[$i]!="" || $minus[$i]!=""){
					 if($plus[$i]!=""){
						 $eng_spares = $eng_spar + $plus[$i];
					 }
					
					if($minus[$i]!=""){
						$eng_spares = $eng_spar - $minus[$i];
					}
					
					
					$data5 = array(	
					'eng_spare'=>$eng_spares
				);
					//$this->Spare_model->update_eng_spare($data5,$eng_spare_name[$i]);
				}
				
				
				
				if($plus[$i]!=""){
					 if($plus[$i]!=""){
						 $stock_qty = $spare_qt - $plus[$i];
					 }
					
					$data3 = array(	
					'spare_qty'=>$stock_qty
				);
				$this->Spare_model->update_spare_enggs($data3,$eng_spare_name[$i]);
				
				}
				//$j++;
			 }
				
			/* if(!empty($data3)){
				$this->Spare_model->update_spare_enggs($data3);
			} */
			
			/* if(!empty($data5)){
				echo "<pre>";
				print_r($data5);exit;
				$this->Spare_model->update_eng_spare($data5);
			} */
			
		
			
		 $this->Spare_model->add_spare_enggs($data2);
		 
		echo "<script>parent.$.fancybox.close();</script>";	
		
		//echo "<script>alert('Spares For Engineers Added');window.location.href='".base_url()."pages/spare_stock';</script>";
		
    }
	
	
	public function del_spare_to_enggs(){
		$id = $this->input->post('id');
		//print_r($id);
		$spareid = $this->input->post('spareid');
		$reqid = $this->input->post('reqid');
		$qty = $this->input->post('qty');
		$auto_cnt = $this->input->post('auto_cnt');
		//print_r("hiii");
		//exit;
		
		
		
		
		if($qty!="" && $qty!="0"){
			
			$this->Spare_model->del_spare_to_enggs($id);
		
			$getsparebyid = $this->Spare_model->getsparebyid($spareid);
			$spare_qt = $getsparebyid[0]->spare_qty;
			$used_spar = $getsparebyid[0]->used_spare;
			$eng_spar = $getsparebyid[0]->eng_spare;
			
			$this->Spare_model->del_quote_spares($reqid,$spareid);
			
			$stock_qty = $spare_qt + $qty;
			$used_spare = $used_spar - $qty;
			$eng_spare = $eng_spar - $qty;
			
			$data3 = array(	
					'spare_qty'=>$stock_qty,
					'used_spare'=>$used_spare,
					'eng_spare'=>$eng_spare,
		);
		$this->Spare_model->update_spare_status($data3,$spareid);
		}
		
		
	
	}
	
	
	 public function update_spare_stock(){ 
	 
		 $spare_name=$data1['spare_name']=$this->input->post('spare_name');
		 $qty=$data1['qty']=$this->input->post('qty');
		 $purchase_date=$data1['purchase_date']=$this->input->post('purchase_date');
		 $purchase_price=$data1['purchase_price']=$this->input->post('purchase_price');
		 $invoice_no=$data1['invoice_no']=$this->input->post('invoice_no');
		 $reason=$data1['reason']=$this->input->post('reason');
		 
		 
		 $spare_qty1=$data1['spare_qty1']=$this->input->post('spare_qty1');
		 $used_spare1=$data1['used_spare1']=$this->input->post('used_spare1');
		 $purchase_price1=$data1['purchase_price1']=$this->input->post('purchase_price1');
		 $purchase_qty1=$data1['purchase_qty1']=$this->input->post('purchase_qty1');
		 
		 $c=$spare_name;
		 $count=count($c);
		 
		 $data1 =array();
			 for($i=0; $i<$count; $i++) {
				// if($stats=='2'){
				// $bal_spare = $spare_qty1[$i] - $spare_qty[$i];
				 //$used_spare = $spare_qty[$i] + $used_spares[$i];
				 
				 $getsparebyid = $this->Spare_model->getsparebyid($spare_name[$i]);
				 $spare_qt = $getsparebyid[0]->spare_qty;
				 $used_spar = $getsparebyid[0]->used_spare;
				 $purchase_qt = $getsparebyid[0]->purchase_qty;
				 $purchase_pric = $getsparebyid[0]->purchase_price;
				 
				 
				 
				 $purchase_qty = $purchase_qt + $qty[$i];
				 $spare_qty= $purchase_qty - $used_spar;
				
				 /* if($purchase_date[$i]!=""){
					 $purchase_date = $purchase_date[$i];
				 }
				 if($purchase_price[$i]!=""){
					 $purchase_price = $purchase_price[$i];
				 }
				  */
				 $data2 = array(	
				 'purchase_qty'=>$purchase_qty,
				 'spare_qty'=>$spare_qty,
				 'used_spare'=>$used_spar,
				 'purchase_date'=>$purchase_date[$i],
			     'purchase_price'=>$purchase_price[$i],
			     'invoice_no'=>$invoice_no[$i],
				 'reason'=>$reason[$i]
				);
				
				
				$data_pur_add = array(	
				 'spare_id'=>$spare_name[$i],
				 'purchase_qty'=>$qty[$i],
				 'purchase_date'=>$purchase_date[$i],
			     'purchase_price'=>$purchase_price[$i],
			     'invoice_no'=>$invoice_no[$i],
				 'reason'=>$reason[$i]
				);
				
				$this->Spare_model->update_spare_balance($data2,$spare_name[$i]);
		
			    $this->Spare_model->add_purchase_details($data_pur_add);
				
				
			}
			
		
		
		
		
		echo "<script> parent.jQuery.fancybox.close();</script>";
		//redirect('pages/spare_stock', 'refresh');
		
    }
	
	public function update_spare_stockminus(){ 
	 
		 $spare_name=$data1['spare_name']=$this->input->post('spare_name');
		 $qty=$data1['qty']=$this->input->post('qty');
		 $purchase_date=$data1['purchase_date']=$this->input->post('purchase_date');
		 //$purchase_price=$data1['purchase_price']=$this->input->post('purchase_price');
		 //$invoice_no=$data1['invoice_no']=$this->input->post('invoice_no');
		 $reason=$data1['reason']=$this->input->post('reason');
		 
		 
		 $spare_qty1=$data1['spare_qty1']=$this->input->post('spare_qty1');
		 $used_spare1=$data1['used_spare1']=$this->input->post('used_spare1');
		 $purchase_price1=$data1['purchase_price1']=$this->input->post('purchase_price1');
		 $purchase_qty1=$data1['purchase_qty1']=$this->input->post('purchase_qty1');
		 
		 $c=$spare_name;
		 $count=count($c);
		 
		 $data1 =array();
			 for($i=0; $i<$count; $i++) {
				// if($stats=='2'){
				// $bal_spare = $spare_qty1[$i] - $spare_qty[$i];
				 //$used_spare = $spare_qty[$i] + $used_spares[$i];
				 
				 $getsparebyid = $this->Spare_model->getsparebyid($spare_name[$i]);
				 $spare_qt = $getsparebyid[0]->spare_qty;
				 $used_spar = $getsparebyid[0]->used_spare;
				 $purchase_qt = $getsparebyid[0]->purchase_qty;
				 //$purchase_pric = $getsparebyid[0]->purchase_price;
				 
				 
				 $purchase_qty = $purchase_qt - $qty[$i];
				 $spare_qty= $purchase_qty - $used_spar;
				
				 /* if($purchase_date[$i]!=""){
					 $purchase_date = $purchase_date[$i];
				 }
				 if($purchase_price[$i]!=""){
					 $purchase_price = $purchase_price[$i];
				 }
				  */
				 $data2 = array(	
				 'purchase_qty'=>$purchase_qty,
				 'spare_qty'=>$spare_qty,
				 'used_spare'=>$used_spar,
				 'purchase_date'=>$purchase_date[$i],
			     //'purchase_price'=>$purchase_price[$i],
			     //'invoice_no'=>$invoice_no[$i],
				 'reason'=>$reason[$i]
				);
				
				$data_pur_add = array(	
				 'spare_id'=>$spare_name[$i],
				 'return_qty'=>$qty[$i],
				 'purchase_date'=>$purchase_date[$i],
			     //'purchase_price'=>$purchase_price[$i],
			     //'invoice_no'=>$invoice_no[$i],
				 'reason'=>$reason[$i]
				);
				
				$this->Spare_model->update_spare_balance($data2,$spare_name[$i]);
		
				$this->Spare_model->add_purchase_details($data_pur_add);
				
			}
			echo "<script>parent.jQuery.fancybox.close();</script>";
		
		
		
    }
	
	public function getsparedet(){ 
		 $id=$this->input->post('id');
		 $this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Spare_model->get_spareinfobyid($id)));
    }
	
	public function purchase_popup(){ 
		//$id = $this->uri->segment(3);
		$data1['prodcatlist']=$this->Spare_model->prod_cat_dropdownlist();
		$data1['subcatlist']=$this->Spare_model->prod_sub_cat_dropdownlist();
		$data1['getbrands']=$this->Spare_model->getbrands();
		$data1['getmodels']=$this->Spare_model->getmodels();
		
		
		
		
		//$data1['user_dat'] = $this->session->userdata('login_data');
		//$this->load->view('templates/header',$data1);
		$this->load->view('purchase_spare',$data1);
    }
	
	public function purchase_popupminus(){ 
		//$id = $this->uri->segment(3);
		$data1['prodcatlist']=$this->Spare_model->prod_cat_dropdownlist();
		$data1['subcatlist']=$this->Spare_model->prod_sub_cat_dropdownlist();
		$data1['getbrands']=$this->Spare_model->getbrands();
		$data1['getmodels']=$this->Spare_model->getmodels();
		
		
		
		
		//$data1['user_dat'] = $this->session->userdata('login_data');
		//$this->load->view('templates/header',$data1);
		$this->load->view('purchase_spareminus',$data1);
    }
	
	
	public function engineer_stockin(){ 
		//$id = $this->uri->segment(3);
		//$data1['prodcatlist']=$this->Spare_model->prod_cat_dropdownlist();
		//$data1['subcatlist']=$this->Spare_model->prod_sub_cat_dropdownlist();
		//$data1['getbrands']=$this->Spare_model->getbrands();
		//$data1['getmodels']=$this->Spare_model->getmodels();
		
		
		
		
		//$data1['user_dat'] = $this->session->userdata('login_data');
		//$this->load->view('templates/header',$data1);
		$this->load->view('engineer_stockin');
    }
	
	
	public function get_spares(){
		$id=$this->input->post('id');//echo $id; exit;
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Spare_model->get_sparenamebycat($id)));
		   
		
		//$query=$this->Product_model->getsub_cat($id);
        //return $query;
    }
	public function get_sparesbysubcat(){
		$id=$this->input->post('id');//echo $id; exit;
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Spare_model->get_sparesbysubcat($id)));
		   
		
		//$query=$this->Product_model->getsub_cat($id);
        //return $query;
    }
	
	public function get_sparesbybrand(){
		$id=$this->input->post('id');//echo $id; exit;
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Spare_model->get_sparesbybrand($id)));
		   
		
		//$query=$this->Product_model->getsub_cat($id);
        //return $query;
    }
	
	public function get_sparesbymodel(){
		$id=$this->input->post('id');//echo $id; exit;
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Spare_model->get_sparesbymodel($id)));
		   
		
		//$query=$this->Product_model->getsub_cat($id);
        //return $query;
    }
	
	
    public function getsub_category(){
		$id=$this->input->post('id');//echo $id; exit;
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Spare_model->getsub_cat($id)));
		   
		
		//$query=$this->Product_model->getsub_cat($id);
        //return $query;
    }
	
	public function get_brand(){
		$subcatid=$this->input->post('subcatid');//echo $id; exit;
		$categoryid=$this->input->post('categoryid');
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Spare_model->get_brands()));
		   
		
		//$query=$this->Product_model->getsub_cat($id);
        //return $query;
    }
	
	public function get_model(){
		$subcatid=$this->input->post('subcatid');//echo $id; exit;
		$categoryid=$this->input->post('categoryid');
		$brandid=$this->input->post('brandid');
		$this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Spare_model->get_models($categoryid,$subcatid,$brandid)));
		   
		
		//$query=$this->Product_model->getsub_cat($id);
        //return $query;
    }
	
	public function addrow(){ 
		 $data['count']=$this->input->post('countid');
		 //echo "Count: ".$data['count'];
		 $data['prodcatlist']=$this->Spare_model->prod_cat_dropdownlist();
		 $data['subcatlist']=$this->Spare_model->prod_sub_cat_dropdownlist();
		 $data['modellist']=$this->Spare_model->modellist();
		 $this->load->view('add_spare_row',$data);
    }
	
	public function update_spare(){ 
		   $id=$this->uri->segment(3);
		   $data['list']=$this->Spare_model->getsparebyid($id);
		   $data['getsparedetbyid']=$this->Spare_model->getsparedetbyid($id);
		   $data['getModels_spareid']=$this->Spare_model->getModels_spareid($id);
		   
		   $data['prodcatlist']=$this->Spare_model->prod_cat_dropdownlist();
		   $data['subcatlist']=$this->Spare_model->prod_sub_cat_dropdownlist();
		   $data['getbrands']=$this->Spare_model->getbrands();
		   $data['getmodels']=$this->Spare_model->getmodels();
		   $data1['user_dat'] = $this->session->userdata('login_data');
		   $this->load->view('templates/header',$data1);
		   $this->load->view('edit_spares',$data);
		
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
		  $id=$this->input->post('id');
		
		 $data=array(
            'brand_name'=>$this->input->post('brand_name')
        );
		 $s = $this->Brand_model->update_brandname($data,$id);
		
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
		
              echo "<script>alert('Product Updated');window.location.href='".base_url()."pages/prod_list';</script>";
    
    
    }
	
	
	
	public function del_brand(){ 
		 $id=$this->input->post('id');
		 $s = $this->Brand_model->del_brands($id);
    }
    public function sparereceipt_service()
	{
		$id=$this->uri->segment(3);
		$data1['servicereceipt']=$this->Spare_model->getengspid($id);
		$data1['get_tax']=$this->Spare_model->get_tax();
		
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('spareprint_request',$data1);
	}
	public function sparereceipt_req(){

		  // $id=$this->uri->segment(3);
		  // echo $id;
		  $data1['spatax'] = $this->input->post('taxxx');
		  $data1['tot_amt'] = $this->input->post('tot_amt');
		  
		  $data1['datepick'] = $this->input->post('returndate');
		 
		$data1['para'] = $this->input->post('textarea-input');
		  
		  $id=$this->input->post('spareenggis');
		 // echo $id;
		   //echo "hi".$spatax;exit;
			$data1['receikd']=$this->Spare_model->getengspid($id);	
			//$data1['editreceispare']=$this->Spare_model->getspareengg();
		   $data1['user_dat'] = $this->session->userdata('login_data');
		   $this->load->view('templates/header',$data1);
		   $this->load->view('sparereceipt_request',$data1);
		
    }
	public function view_purchase(){ 
	     $id = $this->uri->segment(3);
		 //echo $id; 
		$data1['spare_view']=$this->Spare_model->sparepurchase_view($id);
		//$data1['sparelist_engg']=$this->Spare_model->sparelist_engg();
		//$data1['user_dat'] = $this->session->userdata('login_data');
		//$this->load->view('templates/header',$data1);
		$this->load->view('spare_purchaseview',$data1);
    }
    
}