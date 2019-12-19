<?php 


class LoginModel extends CI_Model{

	public function isValidate($uemail,$upassword){

		$upassword = md5($upassword);

		$q = $this->db->where(['email'=>$uemail,'password'=>$upassword])
						->get('users');

		if($q->num_rows()){
			return $q->row()->id;
		}
		else
		{
			return false;
		}



	}
}