<?php 
class Problemcategory_model extends CI_Model{
function __construct(){
parent::__construct();
$this->load->database();
}
    public function add_problem_category($data1){
     $this->db->insert('problem_category',$data1);
    return true;     
      
    }
	public function modellist(){
		$this->db->select("id,model",FALSE);
		$this->db->from('products'); 
		$this->db->order_by('model', 'asc'); 
		$query = $this->db->get();
        return $query->result();
    }
	public function problem_category_list(){
        $this->db->select("id,prob_category,prob_code,prob_description",FALSE);
		$this->db->from('problem_category'); 
		$this->db->order_by('id','DESC'); 
		$query = $this->db->get();
        return $query->result();
    }
	public function problem_category_list1(){
        $this->db->select("problem_category.id,problem_category.prob_category,problem_category.prob_code,problem_category.prob_description,products.model",FALSE);
		$this->db->from('problem_category'); 
		$this->db->join('products', 'products.id = problem_category.model');
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function getprobcatbyid($id){
        $this->db->select("problem_category.id,problem_category.prob_category,problem_category.prob_code,problem_category.prob_description,products.id As modelid",FALSE);
		$this->db->from('problem_category'); 
		$this->db->join('products', 'products.id = problem_category.model');
		$this->db->where('problem_category.id',$id); 
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	public function update_prob_cat($data1,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('problem_category',$data1);
    }
	public function del_prob_cat($id){
        $this->db->where('id',$id);
        $this->db->delete('problem_category');
    }
	
	public function category_validation($prob_cat_name,$model)	
	{
		$this->db->select('*');
		$this->db->from('problem_category');
		$this->db->where('prob_category',$category);
		$this->db->where('model',$model);
		$query=$this->db->get(); 
		
		
        return $query->result();
		
		//echo "<pre>";print_r($query->result());exit;
		
	}
	
	public function code_validation($code)
	{
		$query = $this->db->get_where('problem_category', array('prob_code' => $code));
        echo  $numrow = $query->num_rows();
		
	}
	public function problem_validation($problem,$model)	
	{
		$this->db->select('*');
		$this->db->from('problem_category');
		$this->db->where('prob_category',$problem);
		$this->db->where('model',$model);
		$query=$this->db->get(); 
		
		
        return $query->num_rows();
		
		//echo "<pre>";print_r($query->result());exit;
		
	}
	
}