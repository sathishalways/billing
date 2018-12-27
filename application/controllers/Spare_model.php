<?php 
class Spare_model extends CI_Model{
function __construct(){
parent::__construct();
$this->load->database();
}

	public function reqlist()
	{
	$this->db->select('*');
	$this->db->from('service_request');
	$query = $this->db->get();	
	return $query->result();
	}
	public function get_productdetbyid($id){
		$this->db->select("products.id, products.category, products.subcategory, products.brand, products.model, prod_category.product_category, prod_subcategory.subcat_name, brands.brand_name",FALSE);
    $this->db->from('products');
    $this->db->join('prod_category', 'prod_category.id = products.category');
	$this->db->join('prod_subcategory', 'prod_subcategory.id = products.subcategory'); 
	$this->db->join('brands', 'brands.id = products.brand'); 
	$this->db->where('products.id', $id);
	$query = $this->db->get();

        return $query->result();
    }
	public function modellist(){
		$this->db->select("id, model",FALSE);
		$this->db->from('products'); 
		$this->db->order_by('model', 'asc'); 
		$query = $this->db->get();
        return $query->result();
    }
	
	public function getcust_name($id)
	{
		$this->db->select('customers.id as cust,customers.customer_name,service_request.id, products.model, products.id as prod_id, employee.id as emp_id, employee.emp_name',FALSE);
		$this->db->from('service_request');
		$this->db->join('service_request_details','service_request_details.request_id=service_request.id');
		$this->db->join('products','products.id=service_request_details.model_id');
		$this->db->join('customers','service_request.cust_name=customers.id');
		$this->db->join('employee','employee.id=service_request_details.assign_to');
		$this->db->where('service_request.id',$id);
		$query = $this->db->get();	
		
		//echo "<pre>";print_r($query->result());exit;
		return $query->result();
	}
	
	public function get_spares_byReqId($id)
	{
		$this->db->select('spares.id, spares.spare_name, quote_review_spare_details.id as quote_review_id',FALSE);
		$this->db->from('quote_review_spare_details');
		$this->db->join('spares','spares.id=quote_review_spare_details.spare_id');
		$this->db->where('quote_review_spare_details.request_id',$id);
		$query = $this->db->get();	
		
		//echo "<pre>";print_r($query->result());exit;
		return $query->result();
	}
	
	
	public function tax_list(){
		$this->db->select("*",FALSE);
		$this->db->from('tax_details'); 
		$this->db->order_by('tax_name', 'asc');
		$query = $this->db->get();
        return $query->result();
    }
	
    public function add_spares($data){
     $this->db->insert('spares',$data);
	 return $this->db->insert_id();
      
    }
	
	public function add_quotereview_spares($data1){
		$this->db->insert_batch('quote_review_spare_details',$data1); 
    }
	
	public function update_quotereview_spares($data12,$quote_review_id){
		//$this->db->insert_batch('quote_review_spare_details',$data1); 
		$this->db->where('id',$quote_review_id); 
		$this->db->update('quote_review_spare_details',$data12);
    }
	
	 public function add_purchase_order($data){
     $this->db->insert('purchase_orders',$data);
	 return $this->db->insert_id();
      
    }
	
	public function add_purchase_details($data1){
		$this->db->insert('spare_purchase_details',$data1); 
    }
	public function customerlist(){
		$this->db->select("id, customer_id, customer_name, customer_type, mobile, email_id, company_name",FALSE);
		$this->db->from('customers'); 
		$query = $this->db->get();
        return $query->result();
    }
	
	public function spareListByModelId($modelid){
		$this->db->select("spares.id, spares.spare_name, spares.spare_qty, spares.used_spare, spares.sales_price, spares.part_no",FALSE);
		$this->db->from('spare_details');
		$this->db->join('spares', 'spares.id = spare_details.spare_id'); 
		
		$this->db->where('spare_details.model_id', $modelid);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	public function add_spares_effective_date_his($data){
     $this->db->insert('spares_effective_date_history',$data);
	}
	
	public function add_spare_enggs($data){
     $this->db->insert_batch('spare_to_engineers',$data);
	}
	
	
	public function add_spare_details($data1){
		$this->db->insert_batch('spare_details',$data1); 
    }
	
	public function add_purchase_order_details($data1){
		$this->db->insert_batch('purchase_order_details',$data1); 
    }
	
	
	
	public function sparelist1(){
		$this->db->select("id, spare_name, spare_qty, used_spare, eng_spare, purchase_price, purchase_qty, purchase_date, sales_price, effective_date, dashboard_show, min_qty, part_no",FALSE);
    $this->db->from('spares');
    $this->db->order_by('id', 'asc'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function get_min_spares(){
		$query = $this->db->query("SELECT * from spare_minimum_level ORDER BY UNIX_TIMESTAMP(alert_on) DESC");
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function add_min_spares($data){
     $this->db->insert('spare_minimum_level',$data);
	  
    }
	
	
	public function get_purchase_orders(){
		$this->db->select("*",FALSE);
    $this->db->from('purchase_orders');
    $this->db->order_by('id', 'asc'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	public function get_purchase_ordersbyid($id){
		$this->db->select("*",FALSE);
		$this->db->from('purchase_orders'); 
		$this->db->where('id', $id);
		$query = $this->db->get();
        return $query->result();
    }
	
	public function get_purchase_orders_sparesbyid($id){
		$this->db->select("*",FALSE);
		$this->db->from('purchase_order_details'); 
		$this->db->where('purchase_order_id', $id);
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	public function update_dash_important($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('spares',$data);
    }
	
	public function update_purchase_order($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('purchase_orders',$data);
    }
	
	public function sparelist_engg(){
	$this->db->select("spares.id",FALSE);
	$this->db->select_sum('spare_to_engineers.qty_out');
	$this->db->select_sum('spare_to_engineers.qty_in');
    $this->db->from('spares');
	$this->db->join('spare_to_engineers', 'spare_to_engineers.spare_id = spares.id');
	//$this->db->order_by('spare_to_engineers.id','asc');
    $this->db->group_by('spare_to_engineers.spare_id'); 
	
     	$query = $this->db->get();
	//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	
	
	public function spare_list_engineers(){
		$this->db->select("id, spare_name, spare_qty, used_spare, purchase_price, purchase_qty, purchase_date, sales_price, effective_date",FALSE);
    $this->db->from('spares');
    $this->db->order_by('spare_name', 'asc'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function engineer_list(){
		$this->db->select("id, emp_name",FALSE);
    $this->db->from('employee');
    $this->db->order_by('emp_name', 'asc'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	
	public function sparelist(){
		$this->db->select("spare_details.spare_id, prod_category.product_category, prod_subcategory.subcat_name, brands.brand_name, products.model",FALSE);
    $this->db->from('spare_details');
    $this->db->join('prod_category', 'prod_category.id = spare_details.cat_id');
	$this->db->join('prod_subcategory', 'prod_subcategory.id = spare_details.subcat_id'); 
	$this->db->join('brands', 'brands.id = spare_details.brand_id'); 
	$this->db->join('products', 'products.id = spare_details.model_id'); 
	//$this->db->order_by('order_details.order_id', 'asc'); 	
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function update_spare_stocks($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('spares',$data);
    }
	
	
	public function prod_cat_dropdownlist(){
        $this->db->select("id,product_category",FALSE);
		$this->db->from('prod_category'); 
		$this->db->where('status', '0');
		$this->db->order_by('product_category', 'asc'); 
		$query = $this->db->get();
        return $query->result();
    }
	
	public function prod_sub_cat_dropdownlist(){
		$this->db->select("id,prod_category_id,subcat_name",FALSE);
		$this->db->from('prod_subcategory'); 
		$this->db->where('status', '0');
		$this->db->order_by('subcat_name', 'asc'); 
		$query = $this->db->get();
        return $query->result();
    }
	
	public function getbrands(){
		$this->db->select("id,brand_name",FALSE);
		$this->db->from('brands'); 
		$this->db->where('status', '0');
		$this->db->order_by('brand_name', 'asc'); 
		$query = $this->db->get();
        return $query->result();
    }
	
	public function getmodels(){
		$this->db->select("id,model",FALSE);
		$this->db->from('products'); 
		$this->db->where('status', '0');
		$this->db->order_by('model', 'asc'); 
		$query = $this->db->get();
        return $query->result();
    }
	public function get_sparenamebycat($id){
		$this->db->select("spares.id, spares.spare_name, spare_details.cat_id",FALSE);
		$this->db->from('spare_details'); 
		$this->db->join('spares', 'spares.id = spare_details.spare_id');
		$this->db->where('spare_details.cat_id', $id);
		$this->db->group_by('spares.id'); 
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	public function get_sparesbysubcat($id){
		$this->db->select("spares.id, spares.spare_name, spare_details.subcat_id",FALSE);
		$this->db->from('spare_details'); 
		$this->db->join('spares', 'spares.id = spare_details.spare_id');
		$this->db->where('spare_details.subcat_id', $id);
		$this->db->group_by('spares.id'); 
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function get_sparesbybrand($id){
		$this->db->select("spares.id, spares.spare_name, spare_details.brand_id",FALSE);
		$this->db->from('spare_details'); 
		$this->db->join('spares', 'spares.id = spare_details.spare_id');
		$this->db->where('spare_details.brand_id', $id);
		$this->db->group_by('spares.id'); 
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function get_sparesbymodel($id){
		$this->db->select("spares.id, spares.spare_name, spare_details.model_id",FALSE);
		$this->db->from('spare_details'); 
		$this->db->join('spares', 'spares.id = spare_details.spare_id');
		$this->db->where('spare_details.model_id', $id);
		$this->db->group_by('spares.id'); 
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	public function update_spare_balance($data,$id){ 
      $this->db->where('id',$id); 
		$this->db->update('spares',$data);
    }
	
	public function update_spare_enggs($data,$id){ 
	   //$this->db->update_batch('spares',$data,'id');
	   
	    $this->db->where('id',$id); 
		$this->db->update('spares',$data);
    }
	
	public function update_spare_status($data,$id){ 
	   //$this->db->update_batch('spares',$data,'id');
	   
	    $this->db->where('id',$id); 
		$this->db->update('spares',$data);
    }
	
	public function spare_to_engg_cnt(){
		$this->db->select("id",FALSE);
		$this->db->from('spare_to_engineers'); 
		$this->db->order_by('id', 'desc'); 
		$this->db->limit(1);	
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
		return $query->result();
    }
	
	public function update_eng_spare($data,$id){ 
	   //$this->db->update('spares',$data,'id');
	  /*  $query = $this->db->get_where('spares', array('id' => $id));
	   return $query->result(); */
	   
	   
	    $this->db->where('id',$id); 
		$this->db->update('spares',$data);
	}
	
	
	public function getsparebyid($id){
		$query = $this->db->get_where('spares', array('id' => $id));
		//echo "<pre>";print_r($query->result());exit;
		return $query->result();
		
    }
	
	public function get_spareinfobyid($id){
		$this->db->select("spares.id, spares.spare_name, spares.spare_qty, spares.used_spare, spares.sales_price, spares.purchase_price, spares.purchase_qty, spares.eng_spare, spares.min_qty",FALSE);
		$this->db->from('spares');
		$this->db->where('spares.id', $id);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function get_compinfo(){
		$this->db->select("*",FALSE);
		$this->db->from('company_details');
		$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	
	
	public function getModels_spareid($id){
		$this->db->select("id, spare_id, cat_id, subcat_id, brand_id, model_id",FALSE);
		$this->db->from('spare_details');
		$this->db->where('spare_id', $id);
     	$query = $this->db->get();
		//echo "<pre>";print_r($query->result());exit;
        return $query->result();
    }
	
	public function getsparedetbyid($id){
		$query = $this->db->get_where('spare_details', array('spare_id' => $id));
		//echo "<pre>";print_r($query->result());exit;
		return $query->result();
		
    }
	public function update_spares($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('spares',$data);
    }
	
	
	public function del_spare_details($id){
        $this->db->where('spare_id',$id);
        $this->db->delete('spare_details');
    }
	
	public function delete_purchase_order($id){
        $this->db->where('purchase_order_id',$id);
        $this->db->delete('purchase_order_details');
    }
	
	
	public function getsub_cat($id){
		$query = $this->db->order_by('subcat_name', 'ASC')->get_where('prod_subcategory', array('prod_category_id' => $id, 'status'=> '0'));
		//echo "<pre>";print_r($query->result());exit;
		return $query->result();
		
		//$this->db->where('prod_category_id',$id);
		//return $this->db->get('prod_subcategory')->row();
    }
	
	public function get_brands(){
		$this->db->select("brand_name, id",FALSE);
		$this->db->from('brands');
		$this->db->where('status','0');
		$query = $this->db->get();
		return $query->result();
		
    }
	
	public function get_models($categoryid,$subcatid,$brandid){
		$query = $this->db->get_where('products', array('category' => $categoryid, 'subcategory' => $subcatid, 'brand' => $brandid));
		return $query->result();
		
    }
	
	
	
	public function update_cat($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('brands',$data);
    }
	
	public function update_subcat($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('brands',$data);
    }
	
	public function update_brandname($data,$id){ 
        $this->db->where('id',$id); 
		$this->db->update('brands',$data);
    }
	
	public function del_brands($id){
        $this->db->where('id',$id);
        $this->db->delete('brands');
    }
	
	public function del_spare_to_enggs($id){
        $this->db->where('id',$id);
        $this->db->delete('spare_to_engineers');
    }
	
	public function del_min_spares($id){
        $this->db->where('spare_id',$id);
        $this->db->delete('spare_minimum_level');
    }
	
	public function del_quote_spares($reqid,$spareid){
        $this->db->where( array('request_id'=>$reqid, 'spare_id'=>$spareid));
        $this->db->delete('quote_review_spare_details');
    }
	
	
    public function getspareengg()
	{
		
		$this->db->select("spare_to_engineers.id,employee.emp_name,service_request.request_id, service_request.id as reqid,customers.customer_name,spares.spare_name,spares.id as spareid, spare_to_engineers.engineer_date,spare_to_engineers.reason,spare_to_engineers.qty_out,spare_to_engineers.auto_cnt",FALSE);
		$this->db->from('spare_to_engineers');
		//$this->db->join('quote_review', 'quote_review.req_id=service_request.id');
		$this->db->join('spares', 'spares.id=spare_to_engineers.spare_id');
		$this->db->join('service_request', 'service_request.id=spare_to_engineers.req_id');
		$this->db->join('customers', 'customers.id=spare_to_engineers.cust_name');
		$this->db->join('employee', 'employee.id=spare_to_engineers.emp_id');
		$this->db->where('spare_to_engineers.spare_receipt!=','without_Service');
			
     	$this->db->get();
		$query1 = $this->db->last_query();
		
		$this->db->select("spare_to_engineers.id,employee.emp_name,'','',customers.customer_name,spares.spare_name,spares.id as spareid,spare_to_engineers.engineer_date,spare_to_engineers.reason,spare_to_engineers.qty_out, spare_to_engineers.auto_cnt",FALSE);
		$this->db->from('spare_to_engineers');
		//$this->db->join('quote_review', 'quote_review.req_id=service_request.id');
		$this->db->join('spares', 'spares.id=spare_to_engineers.spare_id');
		//$this->db->join('service_request', 'service_request.id=spare_to_engineers.req_id');
		$this->db->join('customers', 'customers.id=spare_to_engineers.cust_name');
		$this->db->join('employee', 'employee.id=spare_to_engineers.emp_id');
		$this->db->where('spare_to_engineers.spare_receipt','without_Service');
			
     	$this->db->get();
	    $query2 = $this->db->last_query();
		
		
		$query = $this->db->query($query1." UNION ".$query2);
		//echo $this->db->last_query();exit;
		//echo "<pre>";print_r($query->result());exit;
		return $query->result();
	}

	
	public function get_spare_request()
	{
		
		$query = $this->db->query("SELECT GROUP_CONCAT(spares.id,'//',spares.spare_name) as spare_details, service_request.request_id, service_request.id as reid, service_request.request_date, employee.emp_name, employee.id as empid, customers.company_name, customers.id as cust_id from quote_review_spare_details as quote_review_spare_details 
								 inner join service_request as service_request ON service_request.id = quote_review_spare_details.request_id
								 inner join service_request_details as service_request_details ON service_request_details.request_id = service_request.id
								 inner join employee as employee ON employee.id = service_request_details.assign_to
								 inner join customers as customers ON customers.id = service_request.cust_name
								 inner join customer_service_location as customer_service_location ON customer_service_location.id = service_request.br_name
								 inner join spares as spares ON spares.id = quote_review_spare_details.spare_id GROUP BY service_request.request_id
		");
		//echo "<pre>";print_r($query->result());exit;
		return $query->result();
	}

	public function get_spare_details_reqid($id)
	{	
		$query = $this->db->query("SELECT spares.*, quote_review_spare_details.spare_qty as req_spare_qty, quote_review_spare_details.id as quote_rev_id, quote_review_spare_details.request_id as req_id, quote_review_spare_details.approval_status from quote_review_spare_details as quote_review_spare_details 
								 inner join spares as spares ON spares.id = quote_review_spare_details.spare_id
								 WHERE quote_review_spare_details.request_id = $id
		");
		//echo "<pre>";print_r($query->result());exit;
		return $query->result();
	}
	
	/* public function get_spare_stocks_byreqid($id)
	{	
		$query = $this->db->query("SELECT sum(qty_out) as qty_out, sum(qty_in) as qty_in from spare_to_engineers as spare_to_engineers 
								inner join quote_review_spare_details as quote_review_spare_details ON quote_review_spare_details.request_id=spare_to_engineers.req_id
								
								WHERE quote_review_spare_details.request_id = $id GROUP BY spare_to_engineers.req_id
		");
		return $query->result();
	} */
	
	
	
	
	
	public function getengspid($id)
	{
		$this->db->select("engg.id,service_request.request_id,employee.emp_name,service_request.mobile,customers.customer_name,spares.spare_name,engg.engineer_date,engg.reason,engg.qty_out,spares.sales_price,engg.spare_receipt");
		$this->db->from('spare_to_engineers as engg');
		$this->db->join('spares','spares.id=engg.spare_id');
		$this->db->join('service_request','service_request.id=engg.req_id');
		$this->db->join('customers','customers.id=engg.cust_name');
		$this->db->join('employee','employee.id=engg.emp_id');
		$this->db->where('engg.id',$id);
		$this->db->where('engg.spare_receipt!=','without_Service');
		
		$this->db->get();
		$query1 = $this->db->last_query();
		
		
		$this->db->select("engg.id,'',employee.emp_name,customers.mobile,customers.customer_name,spares.spare_name,engg.engineer_date,engg.reason,engg.qty_out,spares.sales_price,engg.spare_receipt");
		$this->db->from('spare_to_engineers as engg');
		$this->db->join('spares','spares.id=engg.spare_id');
		//$this->db->join('service_request','service_request.id=engg.req_id');
		$this->db->join('customers','customers.id=engg.cust_name');
		$this->db->join('employee','employee.id=engg.emp_id');
		$this->db->where('engg.id',$id);
		$this->db->where('engg.spare_receipt','without_Service');
		
		$this->db->get();
		$query2 = $this->db->last_query();
		
		$query = $this->db->query($query1." UNION ".$query2);
		//echo $this->db->last_query();exit;
		//echo "<pre>";print_r($query->result());exit;
		return $query->result();
		
	}
	
	public function get_tax(){
		$this->db->select("*",FALSE);
		$this->db->from('tax_details');
		$query = $this->db->get();
		return $query->result();
		
    }
	
	
	
}