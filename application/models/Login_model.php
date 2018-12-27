<?php 
class login_model extends CI_Model{
function __construct(){
parent::__construct();
}
    public function validate($uname,$pwd){
        $this->db->select("id,name,user_name,password,user_type,emp_id,user_access,status");
        $this->db->where("user_name",$uname);
        $this->db->where("password",$pwd);
        $query = $this->db->get("users");
		
		//$sql = $this->db->get_compiled_select('admin');		
		//echo $sql;
        if($query->num_rows() == 1 )
        {
          foreach($query->result() as $rows)
          {    
            $user_data[] = $rows;
          }  
		  
            $this->session->set_userdata('login_data',$user_data);
          return 1;
        }
        else
        {
          return 0;
        }
    }
	
	
	public function update_password($data,$pwd){ 
        $this->db->where('id',$pwd); 
		$this->db->update('users',$data);
		return $data;
    }
	    
}