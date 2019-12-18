

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
}

?>