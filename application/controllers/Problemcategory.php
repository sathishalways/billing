<?php 
class problemcategory extends CI_Controller{

    function __construct(){
     parent::__construct();
    $this->load->helper('url');
    $this->load->model('Problemcategory_model');

    }
    
	

    
   public function add_prob_category(){
		
        $prob_cat_name=$this->input->post('prob_cat_name');
        $prob_code=$this->input->post('prob_code');
		$model=$this->input->post('model');
		$p_description=$this->input->post('p_description');
		
		
		
        $c=$prob_cat_name;
		$count=count($c); 
		
		
			for($i=0; $i<$count; $i++) {
				if($prob_cat_name[$i]!=""){ 
					$data1 = array('prob_category' => $prob_cat_name[$i], 'model' => $model[$i], 'prob_code'=>$prob_code[$i], 'prob_description'=>$p_description[$i]);
					$result=$this->Problemcategory_model->add_problem_category($data1);
				}
				/* else{
					echo "<script>window.location.href='".base_url()."pages/add_prob_cat';alert('Please enter Problem Category');</script>";
					
				} */
			}
		
		
			
		if(isset($result)){
			echo "<script>window.location.href='".base_url()."pages/prob_cat_list';alert('Problem Category Added Successfully!!!');</script>";
		}
    }
    
	
	
	  public function update_prob_cat(){ 
		 $id=$this->uri->segment(3);
		 $data['list']=$this->Problemcategory_model->getprobcatbyid($id);
		 $data['modellist']=$this->Problemcategory_model->modellist();
		 $data['user_dat'] = $this->session->userdata('login_data');
		 $this->load->view('templates/header',$data);
		 $this->load->view('edit_probcat_list',$data);
    }
    
    
    public function update_prob_category(){ 
		 $id=$this->input->post('prob_catid');
		 $c = $this->input->post('prob_code');
		 $model = $this->input->post('model');
		 $p_description = $this->input->post('p_description');
		 
		 $cname = $this->input->post('prob_cat_name');
		 $count=count($c); 		 
		 for($i=0; $i<$count; $i++) {
				if($c[$i]!=""){ 				
				$this->db->select("*",FALSE);
		$this->db->from('problem_category'); 
		$this->db->where('prob_code', $c[$i]);
		$query = $this->db->get();
	    $totnum =  $query->num_rows();



if($totnum>0)
{
$data1 = array('prob_category' => $cname[$i], 'model' => $model[$i], 'prob_description'=>$p_description[$i]);
$s = $this->Problemcategory_model->update_prob_cat($data1,$id);
}
else
{
$data1 = array('prob_category' => $cname[$i], 'model' => $model[$i], 'prob_code'=>$c[$i], 'prob_description'=>$p_description[$i]);
$result=$this->Problemcategory_model->add_problem_category($data1);
				}
				
				
				
					//$data1 = array('prob_category' => $prob_cat_name[$i], 'model' => $model[$i], 'prob_code'=>$prob_code[$i], 'prob_description'=>$p_description[$i]);
					//$result=$this->Problemcategory_model->add_problem_category($data1);
				}
		 }
		 
		// $data=array('prob_category'=>$this->input->post('prob_cat_name'), 'model'=>$this->input->post('model'));
		// $s = $this->Problemcategory_model->update_prob_cat($data,$id);
		 echo "<script>window.location.href='".base_url()."pages/prob_cat_list';alert('Problem Category Updated Successfully!!!');</script>";
		
    }
	
	public function del_prob_category(){ 
		 $id=$this->input->post('id');
		 $s = $this->Problemcategory_model->del_prob_cat($id);
    }
	
	public function addrow(){ 
		 $data['count']=$this->input->post('countid');
		 $data['modellist']=$this->Problemcategory_model->modellist();
		 $this->load->view('problemaddrow',$data);
    }
	
	 public function category_validation()
	{
		$category=$this->input->post('category');
		$model=$this->input->post('model');
		
		$this->Problemcategory_model->category_validation($category,$model);
	}
	
	
	public function checkCode()
	{
		$code=$this->input->post('code');
		$this->Problemcategory_model->code_validation($code);
	}
	public function checkproblem()
	{
		$model= $this->input->post('code');
		$problem= $this->input->post('problem');
		//echo $model; echo $problem; exit;
        $this->output->set_content_type("application/json")->set_output(json_encode($this->Problemcategory_model->problem_validation($problem,$model)));
	}
    
}