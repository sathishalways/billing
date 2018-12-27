<?php 
class labcategory extends CI_Controller{

    function __construct(){
     parent::__construct();
    $this->load->helper('url');
    $this->load->model('Labcategory_model');
	$this->load->helper('array');
	

    }
	    
   public function add_lab_category(){ 
	   $this->load->library('form_validation');
		$user=array('username'=>$this->input->post('lab_name'));

		
				$cat_name=$this->input->post('lab_name');
				$c=$cat_name;
				$count=count($c); 
		
		
				for($i=0; $i<$count; $i++)
					{
						if($cat_name[$i]!="")
						{ 
						$data1 = array('lab_name' => $cat_name[$i]);
						$result=$this->Labcategory_model->add_lab_cat($data1);
						}
						/* else{
						echo "<script>window.location.href='".base_url()."pages/add_prod_cat';alert('Please enter Product Category');</script>";
					
						}	 */
					}
				if(isset($result))
				{
					echo "<script>window.location.href='".base_url()."pages/lab_listsss';alert('Lab Added Successfully!!!');</script>";
				}
			 
   }
		
			//here you can add the data savings into the db.
		
	/*public function username_check($str)
	{
	
	     $this->form_validation->set_rules('lab_name', 'User Name', 'required');
	     $username = $this->input->post('lab_name');
		 $result = $this->Labcategory_model->checkusername($username);
	   if ($this->form_validation->run() == FALSE)
		{
		return FALSE;
        }
	
		else if ($result)
		{
			$this->form_validation->set_message('username_check', 'Sorry Username already exists in the database"');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}*/
		
    /*    $cat_name=$this->input->post('lab_name');
        $c=$cat_name;
		$count=count($c); 
		
		
			for($i=0; $i<$count; $i++) {
				if($cat_name[$i]!=""){ 
					$data1 = array('lab_name' => $cat_name[$i]);
					$result=$this->Labcategory_model->add_lab_cat($data1);
				}
				/* else{
					echo "<script>window.location.href='".base_url()."pages/add_prod_cat';alert('Please enter Product Category');</script>";
					
				} */
			//}
		//if(isset($result)){
			//echo "<script>window.location.href='".base_url()."pages/lab_listsss';alert('Lab added');</script>";
		//}
    //} */-->
	
	public function update_lab_category(){ 
		
		 
			 $id=$this->uri->segment(3);
			 
			 
		 $data['list']=$this->Labcategory_model->getlabbyid($id);
		 $data['user_dat'] = $this->session->userdata('login_data');
		 $this->load->view('templates/header',$data);
		 $this->load->view('edit_lab_list',$data);
    }
	
	
	 public function edit_lab_category(){ 
	 
		 $id=$this->input->post('labid');
		 $data=array('lab_name'=>$this->input->post('lab_name'));
		 $s = $this->Labcategory_model->update_lab($data,$id);
		 echo "<script>window.location.href='".base_url()."pages/lab_listsss';alert('Lab Category Updated Successfully!!!');</script>";
		}
    
	
	public function update_status_prod_category(){ 
		 $id=$this->input->post('id');
		 $data=array(
            'status'=>'1'
        );
		 $s = $this->Labcategory_model->update_status_prod_cat($data,$id);
		 echo "<script>alert('Lab Category made Inactive');window.location.href='".base_url()."pages/lab_listsss';</script>";
    }
	
	public function update_status_prod_category1(){ 
		 $id=$this->input->post('id');
		 $data=array(
            'status'=>'0'
        );
		 $s = $this->Labcategory_model->update_status_prod_cat1($data,$id);
		 echo "<script>alert('Lab Category made active');window.location.href='".base_url()."pages/lab_listsss';</script>";
    }
	
	public function category_validation()
	{
		$product_id = $this->input->post('id');
		//echo $product_id;exit;
        $this->output->set_content_type("application/json")->set_output(json_encode($this->Labcategory_model->category_validation($product_id)));
	}
	public function add_labrow(){
		$data['count']=$this->input->post('countid');
		 //echo($this->input->post('countid')); echo"hiii";exit;
		 $this->load->view('add_row_lab',$data);
    }
	
	}
	
	
	?>