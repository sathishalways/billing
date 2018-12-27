<?php 
class Prodservicestat extends CI_Controller{

    function __construct(){
     parent::__construct();
    $this->load->helper('url');
    $this->load->model('Prodservicestat_model');

    }
    
    
    public function add_prod_service_status(){
		
        $cname=$this->input->post('status_name');
        $c=$cname;
		$count=count($c); 
		
			for($i=0; $i<$count; $i++) {
				if($cname[$i]!=""){ 
					$data1 = array('prod_service_status' => $cname[$i]);
					$result=$this->Prodservicestat_model->add_prod_ser_stat($data1);
				}
				else{
					echo "<script>window.location.href='".base_url()."pages/add_prod_service_stat';alert('Please enter Product Service Status');</script>";
					
				}
			}
		if(isset($result)){
			echo "<script>window.location.href='".base_url()."pages/prod_service_stat_list';alert('Product Service Status added');</script>";
		}
    }
    
	  
    
    
    public function update_prod_service_status(){ 
		 $id=$this->input->post('id');
		 $data=array(
            'prod_service_status'=>$this->input->post('status_name')
        );
		 $s = $this->Prodservicestat_model->update_prod_ser_stat($data,$id);
		
    }
	
	public function del_prod_service_status(){ 
		 $id=$this->input->post('id');
		 $s = $this->Prodservicestat_model->del_prod_ser_stat($id);
    }
    
    
    
    public function update_customerstep2(){
       // $id1=$this->input->post('customer_id');
      /*   $data['full_name']=$this->input->post('fullname');
        $data['short_name']=$this->input->post('shortname');
        $data['nature_of_customer']=$this->input->post('nature_of_customer');
        $data['customer_category']=$this->input->post('customer_category');
        $data['company_name1']=$this->input->post('company_name1');
        $data['designation']=$this->input->post('designation');
        $data['mobile']=$this->input->post('mobile');
        $data['email']=$this->input->post('email');
        $data['qualification']=$this->input->post('qualification');
        $data['dob']=$this->input->post('dob');
        $data['age']=$this->input->post('age');
        $data['marital_status']=$this->input->post('marital_status');
        $data['comments']=$this->input->post('comments');  */
        
        
        $data=array(
            'full_name'=>$this->input->post('fullname'),
            'short_name'=>$this->input->post('shortname'),
            'nature_of_customer'=>$this->input->post('nature_of_customer'),
            'customer_category'=>$this->input->post('customer_category'),
            'company_name1'=>$this->input->post('company_name1'),
            'designation'=>$this->input->post('designation'),
            'mobile'=>$this->input->post('mobile'),
            'email'=>$this->input->post('email'),
            'qualification'=>$this->input->post('qualification'),
            'dob'=>$this->input->post('dob'),
            'age'=>$this->input->post('age'),
            'marital_status'=>$this->input->post('marital_status'),
            'comments'=>$this->input->post('comments'),
        );
        $id=$this->input->post('customer_id');
        
        
        
        
        $cname=$data1['company_name']=$this->input->post('company_name');
        

        $cmobile=$data1['company_mobile']=$this->input->post('company_mobile');
        $cemail=$data1['company_email']=$this->input->post('company_email');
        $caddress=$data1['company_address']=$this->input->post('company_address');
        $ccity=$data1['company_city']=$this->input->post('company_city');
        $cstate=$data1['company_state']=$this->input->post('company_state');
        $cpincode=$data1['company_pincode']=$this->input->post('company_pincode');
        //$count=count($data1['company_name']);
        //$data1="";
        $c=$cname;
 $count=count($c);       
        

        $con_address=$data2['contact_address']=$this->input->post('contact_address');
        $con_city=$data2['contact_city']=$this->input->post('contact_city');
        $con_state=$data2['contact_state']=$this->input->post('contact_state');
        $con_pincode=$data2['contact_pincode']=$this->input->post('contact_pincode');
        
        
        
        
        
        $this->master_model->update_customer($data,$id);
        
        $count1=count($con_address);
        //echo "<script>alert($c);</script>";
       
      
             $data1 =array();
for($i=0; $i<$count; $i++) {
$data1[] = array(
           'company_name' => $cname[$i],
           'company_mobile' => $cmobile[$i],
           'company_email' => $cemail[$i],
           'company_address' => $caddress[$i],
    'company_city' => $ccity[$i],
    'company_state' => $cstate[$i],
    'company_pincode' => $cpincode[$i],
    'customer_id'=>$id,
      );
    
    
    
}
            $data2=array();
            for($i=0; $i<$count1; $i++){
                $data2[]=array(
                    'contact_address'=>$con_address[$i],
                    'contact_city'=>$con_city[$i],
                    'contact_state'=>$con_state[$i],
                    'contact_pincode'=>$con_pincode[$i],
                          'customer_id'=>$id,     
                              );
            }
           //  $this->load->helper('url');
            $this->master_model->delete_customer_corporate($id);
            $this->master_model->add_customer_company($data1);
            $this->master_model->delete_customer_contact($id);
            $result=$this->master_model->add_customer_contact($data2);
            if($result)
              echo "<script>
alert('update success');
window.location.href='".base_url()."pages/customer_list';
</script>";
    
    }
    
    public function delete_customer($id){
    $this->master_model->delete_customer($id);
    $this->master_model->delete_customer_corporate($id);
        $result = $this->master_model->delete_customer_contact($id);
        if($result){
        echo "<script>
alert('Customer deleted');
window.location.href='".base_url()."pages/customer_list';
</script>";
        }
    }
    
    
    
    //company 
    
    public function add_company(){
    $data=array(
    'company_main_id'=>$this->input->post('company_id'),
    'full_name'=>$this->input->post('full_name'),
    'short_name'=>$this->input->post('short_name'),
    'address'=>$this->input->post('address'),
    'city'=>$this->input->post('city'),
    'state'=>$this->input->post('state'),
    'mobile'=>$this->input->post('mobile'),
    'phone'=>$this->input->post('phone'),
    'company_email'=>$this->input->post('company_email'),
    'lead_email'=>$this->input->post('lead_email'),
    'manager_email'=>$this->input->post('manager_email'),
    );
        $result=$this->master_model->add_company($data);
        if($result){
        echo "<script>
        alert('Company added');
        window.location.href='".base_url()."pages/company_list';
        </script>";
        }
        
        
    }
    
    public function update_company(){
    $id=$this->uri->segment(3);
        $data['list']=$this->master_model->getcompanybyid($id);
        $data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
        $this->load->view('master/edit_company',$data);
        $this->load->view('templates/footer');
    }
    
    public function update_companystep2(){
        $data=array(
    'company_main_id'=>$this->input->post('company_main_id'),
    'full_name'=>$this->input->post('full_name'),
    'short_name'=>$this->input->post('short_name'),
    'address'=>$this->input->post('address'),
    'city'=>$this->input->post('city'),
    'state'=>$this->input->post('state'),
    'mobile'=>$this->input->post('mobile'),
    'phone'=>$this->input->post('phone'),
    'company_email'=>$this->input->post('company_email'),
    'lead_email'=>$this->input->post('lead_email'),
    'manager_email'=>$this->input->post('manager_email'),
    );
        $id=$this->input->post('company_id');
        $result=$this->master_model->update_company($data,$id);
        if($result){
            echo "<script>
            alert('company edited success');
            window.location.href='".base_url()."pages/company_list';
            </script>";
            
        }
        
    
    }
   
    
}