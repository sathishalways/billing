<?php
class Login extends CI_Controller{
function __construct(){
parent::__construct();
$this->load->helper('url');
$this->load->model('login_model');
}
    
    public function index($msg = NULL){
        $data['msg']=$msg;
		$this->load->view('index',$data);
    }
    public function process(){ 
			$uname=$this->input->post('email');
			$pwd=$this->input->post('password');
			$validate = $this->login_model->validate($uname,$pwd);
			if($validate == 0 )
			{
			 $msg='<font color=red>Invalid email and/or password.</font>';
			 $this->index($msg);
			}
			else
			{
			$data1['user_dat'] = $this->session->userdata('login_data');
			$usertype = $data1['user_dat'][0]->user_type;	
			
			if($usertype=='7'){
				redirect(base_url().'pages/workin_prog_list');
			}else{
				redirect(base_url().'pages/dash');
			}
			//$data1['user_acc'] = $data1['user_dat'][0]->user_access;
			//$data1['user_type'] = $data1['user_dat'][0]->user_type;	
			
			}  
        
    }


	public function change_pass()
	{
		$data1['user_dat'] = $this->session->userdata('login_data');
		$this->load->view('templates/header',$data1);
		$this->load->view('edit_password');
	}
	
	public function update_password()
	{
		$pwd=$this->input->post('changeid');
		$pwdd=$this->input->post('brand_name2');
		$pwddd=$this->input->post('brand_name3');
		if($pwdd==$pwddd)
		{
		$data=array(
            'password'=>$pwddd
        );	
		$s = $this->login_model->update_password($data,$pwd);
		if($s)
		{
			redirect('login/logout');
		}
		}
	}



public function logout(){
$this->session->sess_destroy();
redirect('login');
}
}