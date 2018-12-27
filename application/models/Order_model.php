<?php 
class Order_model extends CI_Model{
function __construct(){
parent::__construct();
$this->load->database();
}
    public function add_orders($data){
		$this->db->insert('orders',$data);
		return $this->db->insert_id();
    }
	
	public function add_order_details($data1){
		$this->db->insert('order_details',$data1); 
    }
	
	public function order_list(){
		$query = $this->db->query('SELECT orders.id, orders.order_id, orders.grand_total, orders.amt_paid, orders.amt_pending, orders.purchase_date, customers.customer_name FROM orders as orders INNER JOIN customers as customers ON customers.id = orders.customer_id'); 
		return $query->result();
    }
	
	public function getorderbyid($id){
		$query = $this->db->query("SELECT * FROM orders WHERE id=$id"); 
		return $query->result();
    }
	
	public function getCustDetails($id){
		$query = $this->db->query("SELECT customer_name FROM customers WHERE id=$id"); 
		return $query->row();
    }
	

	public function getorderDetailsbyid($id){
		$query = $this->db->query("SELECT * FROM order_details WHERE order_id=$id"); 
		return $query->result();
    }	
	
	public function get_customerById($id){
		$query = $this->db->query("SELECT customers.*, state.state as st_name FROM customers as customers INNER JOIN state as state ON state.id = customers.state WHERE customers.id=$id"); 
		return $query->result();
    }
	
	public function update_orders($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('orders',$data);
		return true;
    }
	
	public function update_order_details($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('order_details',$data);
		return true;
    }
	
	public function bill_cnt(){
		$this->db->select("order_id",FALSE);
		$this->db->from('orders'); 
		$this->db->order_by('order_id', 'desc'); 
		$this->db->limit(1);	
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
		return $query->result();
    }
	
	public function state_list(){
		$query = $this->db->query('SELECT * FROM state'); 
		return $query->result();
    }
	
	public function update_stock_in_hand($qty,$pid){ 
        $this->db->query("UPDATE products SET stock_qty = stock_qty - $qty WHERE id = $pid", FALSE);
        //echo $this->db->last_query();
		
    }
	
	public function update_used_qty($qty,$pid){
		$this->db->query("UPDATE products SET used_qty = used_qty + $qty WHERE id = $pid", FALSE); 
       // echo $this->db->last_query();
		
    }
}