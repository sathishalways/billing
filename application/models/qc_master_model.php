<?php 
class Qc_master_model extends CI_Model{
function __construct(){
parent::__construct();
$this->load->database();
}
    public function add_qc_master($data){
		$this->db->insert('qc_masters',$data);
		return true;     
    }
	
	public function add_qc_master1($data){
		$this->db->insert('qc_masters',$data);
		return true;     
    }
	public function checkqcmodel($model)
 {
   $this->db->select('model');
		$this->db->from('qc_masters');
		$this->db->where_in('model',$model);
		//$this->db->order_by('id','desc');
		$query=$this->db->get();
		//return $query->result();
		if($query->num_rows()>0)
		{
			return $query->result();
		}
		else{
			return $query->result();
			return false;
		}
		
		
   
 }
	
	
	public function update_service_charges($data1,$where){
		/*  echo "<pre>";
	  print_r($data1);
	  echo "Where: ".$where;
	  exit; */
		$qry = $this->db->update_string('service_charge', $data1, $where); 
		$this->db->query($qry);
		/* echo $this->db->last_query();
		exit; */
		//exit; 
    }
	public function qc_masters_list(){
        $this->db->select("qc_masters.id, qc_masters.model as qc_master_model_id, products.model",FALSE);
		$this->db->from('qc_masters'); 
		$this->db->join('products', 'products.id = qc_masters.model');
		$this->db->group_by('qc_masters.model'); 
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	public function modellist(){
		$this->db->select("id, model",FALSE);
		$this->db->from('products'); 
		$this->db->order_by('model', 'asc'); 
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	public function getqcparametersbyid($id){
        $this->db->select("*",FALSE);
		$this->db->from('qc_masters'); 
		$this->db->where('model',$id); 
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	public function getservicechargeInfobyid($id){
		$query = $this->db->get_where('service_charge', array('service_cat_id' => $id));
		//echo "<pre>";print_r($query->result());exit;
		return $query->result();
		
    }
	
	public function update_serv_cat($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('service_category',$data);
    }
	
	public function update_qc_param($data1,$where){
		/*  echo "<pre>";
	  print_r($data1);
	  echo "Where: ".$where;
	  exit; */
		$qry = $this->db->update_string('qc_masters', $data1, $where); 
		$this->db->query($qry);
		/* echo $this->db->last_query();
		exit; */
		//exit; 
    }
	
	public function delete_qc_master($id){
        $this->db->where('id',$id);
        $this->db->delete('qc_masters');
    }
	
}