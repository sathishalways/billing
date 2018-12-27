<?php 
class Servicecategory_model extends CI_Model{
function __construct(){
parent::__construct();
$this->load->database();
}
    public function add_service_category($data){
     $this->db->insert('service_category',$data);
    return true;     
      
    }
	public function checkservicename($user)
 {
   $this->db->select('service_category');
		$this->db->from('service_category');
		$this->db->where_in('service_category',$user);
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
	public function add_service_charge($data){
     $this->db->insert('service_charge',$data);
    return true;     
      
    }
	public function check_service_charge($data1,$data12)
 { //echo("hii");
	//print_r($data1); print_r($data12);exit;
   $this->db->select('service_cat_id,model');
		$this->db->from('service_charge');
		$this->db->where('model', $data12);
		$this->db->where('service_cat_id',$data1);
		
		$query=$this->db->get();
		//return $query->result();
		//echo "<pre>";print_r($query->result());exit;
		
		if($query->num_rows()>0)
		{
			return 1;
		}
		else{
			//return $query->result();
			return 0;
		}
		
		
   
 }
	
	public function add_service_chargeadd($data8){
     $this->db->insert('service_charge',$data8);
    return true;     
      
    }
	public function service_cat_list(){
        $this->db->select("id,service_category",FALSE);
		$this->db->from('service_category'); 
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	public function service_cat_list1(){
        $this->db->select("service_category.id,service_category.service_category,service_category.service_charge,products.model",FALSE);
		$this->db->from('service_category'); 
		$this->db->join('products', 'products.id = service_category.model');
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	public function service_charge_list(){
        $this->db->select("service_charge.id, service_charge.service_charge, service_charge.service_cat_id, service_category.service_category, products.id As Modelid, products.model",FALSE);
		$this->db->from('service_charge'); 
		$this->db->join('service_category', 'service_category.id = service_charge.service_cat_id');
		$this->db->join('products', 'products.id = service_charge.model');
		//$this->db->group_by('service_category.id ');
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function service_charge_ByGrp(){
		$this->db->distinct();
        $this->db->select("service_charge.service_cat_id",FALSE);
		$this->db->from('service_charge'); 
		//$this->db->group_by('service_category.id ');
		$query = $this->db->get();
	//echo "<pre>";print_r($query->result());exit;
        return $query->result();
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
	public function service_cat_charge_list(){
        $this->db->select("service_category.id,service_category.service_category",FALSE);
		$this->db->from('service_category'); 
		$this->db->join('service_charge', 'service_charge.service_cat_id = service_category.id');
		$this->db->group_by('service_category.id'); 
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	public function service_list($id){
        $this->db->select("service_category.id,service_category.service_category",FALSE);
		$this->db->from('service_category'); 
		$this->db->join('service_charge', 'service_charge.service_cat_id = service_category.id');
		$this->db->where('service_category.id',$id);
		$this->db->group_by('service_category.id'); 
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function service_charg($id){
        $this->db->select("service_charge.id, service_charge.service_charge, service_charge.service_cat_id, service_category.service_category, products.id As Modelid, products.model",FALSE);
		$this->db->from('service_charge'); 
		$this->db->join('service_category', 'service_category.id = service_charge.service_cat_id');
		$this->db->join('products', 'products.id = service_charge.model');
		$this->db->where('service_charge.service_cat_id',$id);
		//$this->db->group_by('service_category.id ');
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	public function modellist(){
		$this->db->select("id, model",FALSE);
		$this->db->from('products'); 
		$this->db->order_by('model', 'asc'); 
		$query = $this->db->get();
        return $query->result();
    }
	public function getservicecatbyid($id){
        $this->db->select("id,service_category",FALSE);
		$this->db->from('service_category'); 
		//$this->db->join('products', 'products.id = service_category.model');
		$this->db->where('id',$id); 
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
	public function del_serv_cat($id){
        $this->db->where('id',$id);
        $this->db->delete('service_category');
    }
	
	public function service_validation($product_id)
	{
		$query = $this->db->get_where('service_category', array('service_category' => $product_id));
        return $numrow = $query->num_rows();
	}
	
}