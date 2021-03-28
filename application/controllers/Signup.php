<?php
class Signup extends CI_controller {
	
	public function __construct() {
		parent::__construct();  
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('signup_model');
		$this->load->model('agent_model');
		
}
	public function index() {
		echo "Access denied";die;
	}

	// public function signUp(){
		
	// 	$this->form_validation->set_rules('agency_name','Agency name','required');
	// 	$this->form_validation->set_rules('user_email','User Email','required');
	// 	$this->form_validation->set_rules('phone','Phone','required');
	// 	$this->form_validation->set_rules('password','Password','required');
		
	// 	if($this->form_validation->run() === FALSE){
	// 		$this->load->view('signup');

	// 	} else {
	// 		$existEmail = $this->signup_model->check_email($this->input->post('user_email'));
			
	// 		if(empty($existEmail)){
	// 			$data = array(
	// 				"uname" =>$this->input->post('agency_name'),
	// 				"user_email" =>$this->input->post('user_email'),
	// 				"pass" =>md5($this->input->post('user_email')),
	// 				"mobileno" =>$this->input->post('phone'),				
	// 				"address" =>$this->input->post('address'),
	// 				"spoc" =>$this->input->post('spac_name'),
	// 				"role" =>$this->input->post('role'),
	// 				"email" =>$this->input->post('email'),
	// 				"mobile" =>$this->input->post('mobile'),
	// 				"strength" =>$this->input->post('strength'),
	// 				"created" => date('Y-m-d H:i:s'),
	// 				"updated" => date('Y-m-d H:i:s'),
	// 			);
	// 			if (!empty($_FILES['logo']['name'])) {
	// 				$image = $this->uploadImg();
	// 				if (isset($image['error'])) {
	// 					$this->session->set_flashdata('error',$image['error']);
	// 					redirect('signup/signUp');
	// 				}elseif (isset($image['imageName'])) {
	// 					$data['logo'] = $image['imageName'];
	// 				}
	// 			}

	// 			$res = $this->signup_model->register($data);
	// 			if($res){
	// 				redirect('signin');
	// 			}else{
	// 				redirect('signup');
	// 			}
	// 		}else{
	// 			$this->session->set_flashdata('error','Email Already Exist');
	// 			redirect('signup');
	// 		}
	// 	}
	// } 

	public function signin(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('password','password','required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('signin');
		} else {
			$data = array('email_id'=>$this->input->post('email'), 'password'=>md5($this->input->post('password')));
			// var_dump($data);die();
			$isLoggedIn = $this->signup_model->login($data);
			if ($isLoggedIn === FALSE) {
				
			
				redirect('signin');
				alert("Incorrect id or password");
			}
			else{
			if($this->session->userdata('auth_type')==1){
				redirect('User_Panel');
			}
			elseif($this->session->userdata('auth_type')==0){
				redirect('Dashboard');
			}
			else{
				$this->session->set_flashdata('error','Not Verified By Admin');
				?><script>alert('not verified');</script><?php
				redirect('signin');

			}
		}
		}
	}

	public function profile(){
		$id = $this->session->userdata('id');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('spoc', 'Spoc', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('strength', 'Strength', 'required');
		$this->form_validation->set_rules('current_password', 'Current Password', 'required');
		$this->form_validation->set_rules('new_password', 'Password', 'required');
		$this->form_validation->set_rules('c_password', 'Password Confirmation', 'required|matches[new_password]');	
		if($this->form_validation->run() === FALSE){
			
		 $res['user'] = $this->signup_model->getProfile($id);
		 $this->load->view('header');
		 $this->load->view('content');
		 $this->load->view('user_profile',$res);
		} else {

			$data = array(
				"address" =>$this->input->post('address'),
				"spoc" =>$this->input->post('spoc'),
				"strength" =>$this->input->post('strength'),
				"current_pass" => md5($this->input->post('current_password')),
				"new_pass" => md5($this->input->post('new_password')),
				"updated" => date('Y-m-d H:i:s'),
			);
			if (!empty($_FILES['logo']['name'])) {
				$image = $this->uploadImg();
				if (isset($image['error'])) {
					$this->session->set_flashdata('error',$image['error']);
					redirect('signup/profile');
				}elseif (isset($image['imageName'])) {
					$data['logo'] = $image['imageName'];
				}
			}
			
			 $res = $this->signup_model->profileEdit($data,$id);
			 if($res){
				 redirect('signup/profile');
			 }else{
				redirect('signup/profile');
			 }
		}
	}

	public function logout(){
		$this->session->sess_destroy();
			redirect('signin');
	}
	public function request(){
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('pass','Password','required');
		$this->form_validation->set_rules('mob','Mobileno','required');
		
		if($this->form_validation->run() === FALSE){
		   
			// $this->load->view('header');
			// $this->load->view('content');
			$this->load->view('request');
			// $this->load->view('footer');
		} else { 
			
			$data = array(
				"name" =>$this->input->post('name'),
				"email_id" =>$this->input->post('email'),
				"password" =>md5($this->input->post('pass')),
				"mobileno" =>$this->input->post('mob'),
				"auth_type"=>'2'
				);
			$res = $this->agent_model->add($data);
			if($res==TRUE){
                $this->session->set_flashdata('success','Request Sent');
                 redirect('signup/request');
			}else{
                $this->session->set_flashdata('error','Request Failed');
				 redirect('signup/request');
			}
		}
	}

	
	
}

?>
