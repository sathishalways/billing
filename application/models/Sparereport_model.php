<?php 
class Sparereport_model extends CI_Model{
function __construct(){
parent::__construct();
$this->load->database();
}
public function engnamelist(){
	$this->db->select('*');
    $this->db->from('employee');
    $this->db->order_by('emp_name', 'asc'); 	
    $query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function sparenamelist()
	{
		$this->db->select('*');
    $this->db->from('spares');
    $this->db->order_by('spare_name', 'asc'); 	
    $query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
	}
	
	public function get_sparereport($spare_name,$from_date,$to_date)
	{
		
		$query=$this->db->query("select sp.spare_name,sp.spare_qty,sp.purchase_price,sp.sales_price,sp.effective_date,sp.used_spare,emp.emp_name from spares as sp 
		 left join employee as emp on emp.id=emp.emp_id where  sp.id='$spare_name'  OR sp.effective_date BETWEEN '$from_date' AND '$to_date 23:59:59.993' ");
		//echo "<pre>";print_r($query->result());exit;
       return $query->result();
		
	}
}
