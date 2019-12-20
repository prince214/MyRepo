

<?php 


class Forgot_Model extends CI_Model{

	public function EmailCheck($uemail){

		$q = $this->db->where(['email'=>$uemail])
						->get('users');

		if($q->num_rows()){
			return $q->row()->id;
		}
		else
		{
			return false;
		}

	}

	public function newPasswordUpdate($newPassword,$token){
		
		$newPassword = md5($newPassword);
		$this->db->where('pwdResetToken',$token);
        $query=$this->db->get('pwdReset');
        $user_id = $query->result_array();
		
        echo "<pre>"; print_r($user_id);
		$this->db->where('id',$user_id[0]['userID']); 
        $this->db->set('password',$newPassword);
        if($this->db->update('users'))      
        {
        	return true;
        }
        else
        {
        	return false;
        }
        
		 
	}

	public function deleteForgotRequest($token){
		$this->db->where('pwdResetToken',$token)
				 ->delete('pwdReset');
	}


	
}

?>