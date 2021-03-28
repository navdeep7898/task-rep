<?php
class Agent extends CI_controller {
	
	public function __construct() {
		parent::__construct();  
		///die('jdfhdf');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('agent_model');
		if (!$this->session->userdata('email_id')) {
			redirect('signin');
		}
		
	}
	public function dashb()
	{
		$data['task'] = $this->agent_model->getask();
		$this->load->view('header');
		$this->load->view('dashboard',$data);
		$this->load->view('contentu');
	}

	public function index(){
		$data['agent'] = $this->agent_model->getAgent();
		$this->load->view('header');
		$this->load->view('content');
		$this->load->view('agent_list',$data);
	}
	public function requests(){
		$data['agent'] = $this->agent_model->getreq();
		$this->load->view('header');
		$this->load->view('content');
		$this->load->view('agent_list',$data);
	}

	public function add(){
	   
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('pass','Password','required');
		$this->form_validation->set_rules('mob','Mobileno','required');
		
		if($this->form_validation->run() === FALSE){
		   
			$this->load->view('header');
			$this->load->view('content');
			$this->load->view('add_agent');
			$this->load->view('footer');
		} else { 
			
			$data = array(
				"name" =>$this->input->post('name'),
				"email_id" =>$this->input->post('email'),
				"password" =>md5($this->input->post('pass')),
				"mobileno" =>$this->input->post('mob'),
				"auth_type"=>'1'
				);
			$res = $this->agent_model->add($data);
			if($res==TRUE){
                $this->session->set_flashdata('success','User Added Successfully');
                 redirect('agent');
			}else{
                $this->session->set_flashdata('error','User Addition Failed');
				 redirect('agent/add');
			}
		}
	}

	public function edit($id){
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('pass','Password','required');
		$this->form_validation->set_rules('mob','Mobileno','required');
		
		
		
		if($this->form_validation->run() === FALSE){
			$res['agent'] = $this->agent_model->getAgentById($id);

			$this->load->view('header');
			$this->load->view('content');
			$this->load->view('edit_agent',$res);
			$this->load->view('footer');
		} else { 
			
			$data = array(
				"name" =>$this->input->post('name'),
				"email_id" =>$this->input->post('email'),
				"password" =>md5($this->input->post('pass')),
				"mobileno" =>$this->input->post('mob'),
				"auth_type"=>$this->input->post('auth'),
			);
			$res = $this->agent_model->editAgent($data,$id);
			if($res){
				 $this->session->set_flashdata('success','User Edited Successfully');
				 redirect('agent');
			}else{
				$this->session->set_flashdata('error','User Not Edited ');
				 redirect('agent/edit/'.$id);
			}
		}
	}

	public function profile($id){
	  $res['agent'] = $this->agent_model->getAgentProfile($id);
	 
		$this->load->view('header');
		$this->load->view('content');
		$this->load->view('agent_profile',$res);
		//$this->load->view('footer');
	}

	// 
   public function delete($id){
		$res = $this->agent_model->deleteAgent($id);
		if($res){
			$this->session->set_flashdata('success','User Delete Successfully');
			redirect('agent');
		}else{
			$this->session->set_flashdata('error','User Not Deleted');
			redirect('agent');
		}
   }
   public function project(){
   	$data['project'] = $this->agent_model->getproject();
	$this->load->view('header');
	$this->load->view('content');
	$this->load->view('projectlist',$data);
	//$this->load->view('footer');
   }
   public function issues(){
	$data['issue'] = $this->agent_model->getissue();
	$this->load->view('header');
	$this->load->view('issue',$data);
	$this->load->view('content');
   }
	
   public function addproject(){
	   
		$this->form_validation->set_rules('name','Title','required');
		$this->form_validation->set_rules('statu','Status','required');
		if($this->form_validation->run() === FALSE){
		   
			$this->load->view('header');
			$this->load->view('content');
			$this->load->view('projectadd');
			$this->load->view('footer');
		} else { 
				$data = array(
				"title" =>$this->input->post('name'),
				"status" =>$this->input->post('statu'),
				"deadline" =>$this->input->post('deadl'),
				"issues" =>$this->input->post('issue')
				);
			$res = $this->agent_model->addproject($data);
			if($res==TRUE){
                $this->session->set_flashdata('success','Project Added Successfully');
                 redirect('agent/project');
			}else{
                $this->session->set_flashdata('error','Project Addition Failed');
				 redirect('agent/addproject');
			}
		}
	}
	public function monitor(){
	$data['task'] = $this->agent_model->getaskall();
		$this->load->view('header');
		$this->load->view('content');
		$this->load->view('monitor',$data);	
	}
	public function deletepro($id){
		$res = $this->agent_model->deletepro($id);
		if($res){
			$this->session->set_flashdata('success','Project Deleteed Successfully');
			redirect('agent/project');
		}else{
			$this->session->set_flashdata('error','Project Not Deleted');
			redirect('agent/project');
		}
	}
	public function editpro($id){
		$this->form_validation->set_rules('name','Title','required');
		$this->form_validation->set_rules('statu','Status','required');
		
		if($this->form_validation->run() === FALSE){
			$res['agent'] = $this->agent_model->getproid($id);
			$this->load->view('header');
			$this->load->view('content');
			$this->load->view('editpro',$res);
			$this->load->view('footer');
		} else { 
				$data = array(
				"title" =>$this->input->post('name'),
				"status" =>$this->input->post('statu'),
				"deadline" =>$this->input->post('deadl'),
				"issues" =>$this->input->post('issue')
				);
			$res = $this->agent_model->editpro($data,$id);
			if($res){
				 $this->session->set_flashdata('success','User Edited Successfully');
				 redirect('agent/project');
			}else{
				$this->session->set_flashdata('error','User Not Edited ');
				 redirect('agent/editpro'.$id);
			}
		}
	}
	public function infopro($id){
		$res['project'] = $this->agent_model->getproid($id);
	 
		$this->load->view('header');
		$this->load->view('content');
		$this->load->view('proinfo',$res);
	}
public function addtask(){
	   
		$this->form_validation->set_rules('name','Title','required');
		$this->form_validation->set_rules('statu','Status','required');
		if($this->form_validation->run() === FALSE){
		   
			$this->load->view('header');
			$this->load->view('content');
			$this->load->view('dashboard');
			$this->load->view('footer');
		} else { 
				$data = array(
				"task_name" =>$this->input->post('name'),
				"status" =>$this->input->post('statu'),
				"spend_hours" =>$this->input->post('hours'),
				"description" =>$this->input->post('des'),
				"issues" =>$this->input->post('issue'),
				"plansfort" =>$this->input->post('plan'),
				"reported_by"=>$this->session->userdata('name')
				);
			$res = $this->agent_model->addtask($data);
			if($res==TRUE){
                $this->session->set_flashdata('success','Task Added Successfully');
                 redirect('agent/dashb');
			}else{
                $this->session->set_flashdata('error','Task Addition Failed');
				 redirect('agent/dashb');
			}
		}
	}

	public function deletetask($id){
		$res = $this->agent_model->deletask($id);
		if($res){
			$this->session->set_flashdata('danger','Task Deleted Successfully');
			redirect('agent/dashb');
		}else{
			$this->session->set_flashdata('error','Task Not Deleted');
			redirect('agent/dashb');
		}
	}
public function taskinfo($id){
		$res['project'] = $this->agent_model->taskinfo($id);
	 
		$this->load->view('header');
		$this->load->view('content');
		$this->load->view('tinfo',$res);
	}
public function editask($id){
		$this->form_validation->set_rules('name','task_name','required');
		$this->form_validation->set_rules('statu','Status','required');
		
		if($this->form_validation->run() === FALSE){
			$res['agent'] = $this->agent_model->getaskid($id);
			$this->load->view('header');
			$this->load->view('contentu');
			$this->load->view('editask',$res);
			$this->load->view('footer');
		} else { 
				$data = array(
				"task_name" =>$this->input->post('name'),
				"status" =>$this->input->post('statu'),
				"spend_hours" =>$this->input->post('hours'),
				"plansfort" =>$this->input->post('plan'),
				"description" =>$this->input->post('des')

				);
			$res = $this->agent_model->editask($data,$id);
			if($res){
				 $this->session->set_flashdata('success','User Edited Successfully');
				 redirect('agent/dashb');
			}else{
				$this->session->set_flashdata('error','User Not Edited ');
				 redirect('agent/editask'.$id);
			}
		}
	}
	public function profiletask($id){
		$res['project'] = $this->agent_model->taskinfo($id);
	 
		$this->load->view('header');
		$this->load->view('content');
		$this->load->view('tinfo',$res);
	}
	public function info($id){
		$res['project'] = $this->agent_model->taskinfo($id);
	 
		$this->load->view('header');
		$this->load->view('contentu');
		$this->load->view('tinfo',$res);
	}
}


?>