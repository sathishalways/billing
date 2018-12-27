<?php 
class User_model extends CI_Model{
function __construct(){
parent::__construct();
$this->load->database();
}
   
	public function add_user($data){
		$this->db->insert('users',$data);
		return true;        
    }
	
	public function check_username($user_name){
		$this->db->select("*",FALSE);
		$this->db->from('users');
		$this->db->where('user_name', $user_name);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function get_users(){
		$this->db->select("*",FALSE);
		$this->db->from('users'); 
		$this->db->order_by('id', 'desc'); 	
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function get_categories(){
        $this->db->select("id,product_category",FALSE);
		$this->db->from('prod_category'); 
		$this->db->where('status', '0');
		$this->db->order_by('product_category', 'asc'); 	
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function get_categoriesbyid($categories_assigned){
		
		$query = $this->db->query("select id,product_category from prod_category WHERE status='0' and id NOT IN ($categories_assigned)");
		
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function get_assigned_categories($categories_assigned){
		
		$query = $this->db->query("select id,product_category from prod_category WHERE status='0' and id IN ($categories_assigned)");
		
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	
	public function get_usersbyid($id){
        $this->db->select("*",FALSE);
		$this->db->from('users');
		$this->db->where('id', $id);
		$this->db->order_by('id', 'asc'); 	
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function get_employeeDetails(){
        $this->db->select("*",FALSE);
		$this->db->from('employee');
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	public function update_user($data,$user_id){
        $this->db->where('id',$user_id); 
		$this->db->update('users',$data);
    }
	
	
	public function update_user_status($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('users',$data);
    }
	
	public function update_user_status1($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('users',$data);
    }
	public function name_validation($name1)
	{//echo $name1;exit;
		$this->db->where('user_name',$name1);	
		$this->db->from('users');
		$query=$this->db->get();
		
		//echo "<pre>";print_r($query->result());exit;
		return $numrow = $query->num_rows();
	}
	
}