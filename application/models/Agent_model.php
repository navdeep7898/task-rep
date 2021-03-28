<?php
class Agent_model extends CI_model
{


	public function add($data){
		if($data){ 
			$res = $this->db->insert('users',$data);
			if($res){
				return TRUE;
			}else{
				return FALSE;
			}
		}else{
			return FALSE;
		}
	}
	public function getAgent(){
		$this->db->select('*');
		$this->db->from('users');
		$res = $this->db->get();
		if($res){
			return $res->result();
		}else{
			return FALSE;
		}
	}
	public function getreq(){
		// $this->db->select('*');
		// $this->db->from('users');
		$res = $this->db->get_where('users', array('auth_type' => '2'));
		if($res){
			return $res->result();
		}else{
			return FALSE;
		}
	}

	public function getask(){
		// $this->db->select('*');
		// $this->db->from('tasks');
		$res = $this->db->get_where('tasks', array('reported_by' => $this->session->userdata('name')));
		if($res){
			return $res->result();
		}else{
			return FALSE;
		}
	}
	public function getaskall(){
		 $this->db->select('*');
		 $this->db->from('tasks');
		$res = $this->db->get_where();
		if($res){
			return $res->result();
		}else{
			return FALSE;
		}
	}

	



	public function getAgentById($id){
		if($id){
			$res = $this->db->get_where('users', array('id' => $id));
		  
			return $res->row();
		}else{
			return FALSE;
		}
	}
	
	public function editAgent($data,$id){
		if($id){
			$this->db->set($data);
			$this->db->where('id',$id);
			$this->db->update('users');
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function deleteAgent($id){
		if($id) {
			$this->db->where('id',$id);
			$this->db->delete('users');
			return TRUE;
		} else{
			return FALSE; 
		}
	}

	public function getAgentProfile($id){
		if($id){
		   $res = $this->db->get_where('users',array('id'=>$id));
		   //echo $this->db->last_query();die;
		   return $res->row();
		}else{
			return FALSE;
		}
	}
	public function addproject($data){
        if($data){ 
			$res = $this->db->insert('project',$data);
			// echo $this->db->last_query();die;
			if($res){
				return TRUE;
			}else{
				return FALSE;
			}
		}else{
			return FALSE;
		}
    }
    public function getproject(){
		$this->db->select('*');
		$this->db->from('project');
		$res = $this->db->get();
		if($res){
			return $res->result();
		}else{
			return FALSE;
		}
	}
	public function deletepro($id){
		if($id) {
			$this->db->where('id',$id);
			$this->db->delete('project');
			return TRUE;
		} else{
			return FALSE; 
		}
	}
	public function getproid($id){
		if($id){
		   $res = $this->db->get_where('project',array('id'=>$id));
		   //echo $this->db->last_query();die;
		   return $res->row();
		}else{
			return FALSE;
		}
	}
	public function editpro($data,$id){
		if($id){
			$this->db->set($data);
			$this->db->where('id',$id);
			$this->db->update('project');
			//echo $this->db->last_query();die;
			return TRUE;
		}else{
			return FALSE;
		}
	}
	public function getissue(){
		$this->db->select('issues,title');
		$this->db->from('project');
		// echo $this->db->last_query();die;
		$res = $this->db->get();
		if($res){
			return $res->result();
		}else{
			return FALSE;
		}
	}
	public function addtask($data){
        if($data){ 
			$res = $this->db->insert('tasks',$data);
			// echo $this->db->last_query();die;
			if($res){
				return TRUE;
			}else{
				return FALSE;
			}
		}else{
			return FALSE;
		}
    }
    public function deletask($id){
		if($id) {
			$this->db->where('id',$id);
			$this->db->delete('tasks');
			return TRUE;
		} else{
			return FALSE; 
		}
	}

	public function taskinfo($id){
		if($id){
		   $res = $this->db->get_where('tasks',array('id'=>$id));
		   //echo $this->db->last_query();die;
		   return $res->row();
		}else{
			return FALSE;
		}
	}
	public function editask($data,$id){
		if($id){
			$this->db->set($data);
			$this->db->where('id',$id);
			$this->db->update('tasks');
			//echo $this->db->last_query();die;
			return TRUE;
		}else{
			return FALSE;
		}
	}
	public function getaskid($id){
		if($id){
		   $res = $this->db->get_where('tasks',array('id'=>$id));
		   //echo $this->db->last_query();die;
		   return $res->row();
		}else{
			return FALSE;
		}
	}
}