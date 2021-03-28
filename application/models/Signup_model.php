<?php 
class Signup_model extends CI_model
{

	//  public function add($formArray)
	//  {
	//  	$this->db->insert('users',$formArray);
	//  }

	 public function register($data){
		// print_r($data);die;
		if($data){ 
			$res = $this->db->insert('users',$data);
			if($res)
			{
			?><script>alert('insertion success');</script>><?php
				return TRUE;
			}else
			{
				?><script>alert('insertion failed due to some reason');</script>><?php
				return FALSE;
			}
		}else{
			return FALSE;
		}
	 } 

	 public function login($data){
		$isCorrect = $this->db->where($data)->get('users');
		// echo"<pre>";print_r($isCorrect->result());die;
		// echo $this->db->last_query();die;
        if ($isCorrect->num_rows()) {
            $res = $isCorrect->row();
//print_r($res->id);
            $userdata = array(
					'name'=>$res->name,
                    'email_id'=> $res->email_id,
					'password'=> $res->password,
					'auth_type'=> $res->auth_type
                           );
            // echo"<pre>";print_r($userdata->result());die;
             $temp = $this->session->set_userdata($userdata);
             
			// if ($temp==FALSE) {
			// 	// alert('hello');
			// 	echo "session is not set";
			// 	$this->session;
			// 	die();
			// }
			// else{
			// 	echo "session set";die();
			// }


            return TRUE;

        } else {
            return FALSE;
        }
	 }

	 public function check_email($email){
		 if($email){
			 $res = $this->db->get_where('users',array('user_email'=>$email));
			 //echo $this->db->last_query();die;
			 return $res->result();
		 }else{
			return FALSE;
		 }
	 }

	 public function profileEdit($data,$id){
		
		 $req = $this->db->where(['id'=>$id,'password'=>$data['current_pass']])->count_all_results('users');
		// echo $this->db->last_query();
		//print_r($req);print_r($data['new']);die;
		$res = $this->db->get_where('users',array('id'=>$id));
		$r=  $res->row();
		
        if ($req) {
			$d =  array('pass'=>$data['new_pass'],'spoc'=>$data['spoc'],'address'=>$data['address'],'logo'=>$data['logo'],'strength'=>$data['strength'],'updated'=>$data['updated']);
			if(!empty($data['logo'])){
              $d['logo'] = $data['logo'];
			}else{
				$d['logo'] = $r->logo;
			}
            $this->db->where('id',$id);
            $this->db->update('users',$d);
//echo $this->db->last_query();die;
            return TRUE;
        }

        return FALSE;
	 }

	 public function getProfile($id){
		 if($id){
			$res = $this->db->get_where('users',array('id'=>$id));
			return $res->row();
		 }else{
			 return FALSE;
		 }

	 }

}

?>