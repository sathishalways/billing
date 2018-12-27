<?php 
class Customer_model extends CI_Model{
function __construct(){
parent::__construct();
$this->load->database();
}
    public function add_customer($data){
		$this->db->insert('customers',$data);
		return $this->db->insert_id();        
    }
	
	public function add_city($data){
		$this->db->insert('city',$data);
		return true;        
    }
	
	public function add_labtech1($data8){
		$this->db->insert_batch('customer_labtech',$data8);
		       
    }
	
	public function add_labtech($data8){
		$this->db->insert('customer_labtech',$data8);
		       
    }
	
	 public function add_service_location($data1){ 
		$this->db->insert_batch('customer_service_location',$data1); 
    }
	public function add_service_location1($data1){
		$this->db->insert('customer_service_location',$data1); 
    }
	
	public function add_quick_service_location($data1){
		$this->db->insert('customer_service_location',$data1); 
    }
	 public function update_service_location($data1,$where){
		/*  echo "<pre>";
	  print_r($data1);
	  echo "Where: ".$where;
	  exit; */
		$qry = $this->db->update_string('customer_service_location', $data1, $where); 
		$this->db->query($qry);
		/* echo $this->db->last_query();
		exit; */
		//exit; 
    }
	
	public function updaterelationship($e_id,$p_data)
	{
		 $this->db->update('customer_labtech',$p_data,array('id'=>$e_id));
		
	}
	
	
	public function customer_list(){
		$this->db->select("customers.id,customers.customer_name,customers.mobile,customers.city",FALSE);
		$this->db->from('customers'); 
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function check_cust($id){ 
		$this->db->select('mobile');
		$this->db->from('customers');
		$this->db->where_in('mobile',$id);
		//$this->db->order_by('id','desc');
		$query=$this->db->get();
		return $query->result();		
    }
	
	public function get_zonearea($id){
		$this->db->select("service_location.id, service_location.serv_loc_code, service_location.service_loc, service_location.concharge, service_location.zone_coverage, zone_pincodes.area_name, zone_pincodes.id as area_id",FALSE);
		$this->db->from('zone_pincodes');
		$this->db->join('service_location', 'service_location.id = zone_pincodes.zone_code');
		$this->db->where('zone_pincodes.pincode', $id);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function check_custbylandln($land_ln){
		$this->db->select("*",FALSE);
		$this->db->from('customers');
		$this->db->where('land_ln', $land_ln);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	 public function add_cust_type($data){
		$this->db->insert('customer_type',$data);
		return true;
    }
	public function checktypename($user)
 {
   $this->db->select('type');
		$this->db->from('customer_type');
		$this->db->where_in('type',$user);
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
	public function cust_type_list(){
		$this->db->select("id,type,status",FALSE);
		$this->db->from('customer_type'); 
		$this->db->order_by('id', 'DESC'); 	
		$query = $this->db->get();
        return $query->result();
    }
	
	public function service_zone_list(){
		$this->db->select("id,serv_loc_code,service_loc,concharge,zone_coverage",FALSE);
		$this->db->from('service_location'); 
		$this->db->order_by('service_loc', 'asc'); 	
		$query = $this->db->get();
        return $query->result();
    }
	
	public function pincode_list(){
		$this->db->select("id,zone_code,area_name,pincode",FALSE);
		$this->db->from('zone_pincodes'); 
		$this->db->order_by('zone_code', 'asc'); 	
		$query = $this->db->get();
        return $query->result();
    }
	
	public function cust_cnt(){
		$this->db->select("id",FALSE);
		$this->db->from('customers'); 
		$this->db->order_by('id', 'desc'); 
		$this->db->limit(1);	
		$query = $this->db->get();
		return $query->result();
    }
	public function cust_service_loc_cnt(){
		$this->db->select("id",FALSE);
		$this->db->from('customer_service_location'); 
		$this->db->order_by('id', 'desc'); 
		$this->db->limit(1);	
		$query = $this->db->get();
		return $query->result();
    }
	
	public function state_list(){
		$this->db->select("id,state",FALSE);
		$this->db->from('state'); 
		$this->db->order_by('state', 'asc'); 
		//$this->db->limit(1);	
		$query = $this->db->get();
		return $query->result();
    }
	public function get_cities($id){
		$this->db->distinct();
		$this->db->select("city",FALSE);
		$this->db->from('city'); 
		$this->db->like('city', $id, 'after'); 
		//$this->db->limit(1);	
		$query = $this->db->get();
		return $query->result();		
    }
	
	public function getcustomerbyid($id){
		$query=$this->db->get_where('customers',array('id'=>$id));
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	public function get_states($id){
		$query=$this->db->get_where('state',array('id'=>$id));
        return $query->result();
	}
	
	public function getcustomertypebyid($id){
		$query=$this->db->get_where('customer_type',array('id'=>$id));
        return $query->result();
	}
		public function getcustomertypebyid1($id)
		{
		$query=$this->db->get_where('tax_details',array('id'=>$id));
        return $query->result();
	}
	
	
	/*public function getlablistbyid($id){
		$this->db->select('lab_tech.lab_name,lab_tech.id,customer_labtech.customer_id,customer_labtech.lab_value,customer_labtech.id as cutslab,customer_labtech.lab_name as custlabname');
		$this->db->from('customer_labtech');

		$this->db->join('lab_tech','lab_tech.id=customer_labtech.lab_name');
		$query=$this->db->get();
        return $query->result();
    }*/
	public function getlablistbyid($id){
		$this->db->select('lab_tech.lab_name,lab_tech.id,customer_labtech.customer_id,customer_labtech.lab_value,customer_labtech.id as cutslab');
		$this->db->from('customer_labtech');
		
		$this->db->join('lab_tech','lab_tech.id=customer_labtech.lab_name');
		$this->db->where('customer_labtech.customer_id',$id);
		$query=$this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	public function getlabbyid($id){ //echo $id;
		//$this->db->select('lab_tech.lab_name,lab_tech.id,customer_labtech.customer_id,customer_labtech.lab_value as lvalue,customer_labtech.id as cutslab,customer_labtech.lab_name as custlabname');
		$this->db->select('*');
		$this->db->from('customer_labtech');
		$this->db->where('customer_id',$id);
		//$this->db->join('lab_tech','lab_tech.id=customer_labtech.lab_name');
		$query=$this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	function delete_brand_status($currentElemID)
{
	 $this->db->where_in('id',$currentElemID);
     return $this->db->delete('customer_labtech');
}
	
	public function labss_list()
	{
		$this->db->select('*');
		$this->db->from('lab_tech');
		$this->db->order_by('id','desc');
		$query=$this->db->get();
		return $query->result();
	}
	
	
	public function getcustservicelocationbyid($id){
		$query1=$this->db->get_where('customer_service_location',array('customer_id'=>$id));
        return $query1->result();
    }
	
	public function update_customer($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('customers',$data);
    }
	
	public function update_customer_service_loc($data,$id,$ser_loc_id){ //echo $ids;echo "<pre>";print_r($data);exit;
        $this->db->where('id',$ser_loc_id); 
		$this->db->where('customer_id',$id);
		$this->db->update('customer_service_location',$data);
    }
	public function update_customer_type($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('customer_type',$data);
    }
	
	public function delete_customer_service_loc($id,$data){
       
    $this->db->where('customer_id',$id);
        //$this->db->delete('customer_service_location');
		$this->db->update('customer_service_location',$data);
    }
	
	public function del_customers($id,$data){
        $this->db->where('id',$id);
        //$this->db->delete('customers');
		$this->db->update('customers',$data);
    }
	public function del_customer_type($id){
        $this->db->where('id',$id);
        $this->db->delete('customer_type');
    }
	
	public function custtype_validation($product_id)
	{ //echo $product_id; echo("aaaaaaaa"); exit;
		$query = $this->db->get_where('customer_type', array('type' => $product_id));
        return $numrow = $query->num_rows();
	}
	public function custtype_validation1($product_id)
	{ //echo $product_id; echo("aaaaaaaa"); exit;
		$query = $this->db->get_where('customer_type', array('type' => $product_id));
        return $numrow = $query->num_rows();
	}
	public function update_status_customer($data,$id){ print_r($data); print_r($id);
        $this->db->where('id',$id); 
		$this->db->update('customer_type',$data);
    }
	public function update_status_customer1($data,$id){
		//print_r($data);
		
        $this->db->where('id',$id); 
		$this->db->update('customer_type',$data);
    }
	
	public function getcustomersalesbyid($idd)
{
$this->db->select('orders.order_id,orders.customer_id,order_details.order_id as cutsorder ,order_details.amc_start_date,order_details.cmc_start_date,order_details.rent_type,order_details.warranty_date,order_details.serial_no,order_details.model_id,order_details.purchase_date,products
.model');
		$this->db->from('orders');
		$this->db->join('order_details','order_details.order_id =orders.id');
                $this->db->join('products','products.id =order_details.model_id');
                $this->db->where('orders.customer_id',$idd);
		$query=$this->db->get();
//echo $this->db->last_query();
//exit;
        return $query->result();
}
public function category_validation1($prob_cat_name,$model)	
	{
		$query = $this->db->get_where('customer_type', array('type' => $product_id));
        return $numrow = $query->num_rows();
		//echo "<pre>";print_r($query->result());exit;1
		
	}
	public function delete_custlocation_details($result){
        $this->db->where_in('id',$result);
        $this->db->delete('customer_service_location');
    }
	 public function add_noperday_history($datas){
		$this->db->insert('customer_noperday_history',$datas);
		return true;
    }
	
}