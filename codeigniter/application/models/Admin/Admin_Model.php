

<?php 


class Admin_Model extends CI_Model{

	public function addUser($data){

		if($this->db->insert('users',$data))
			return true;
		else
			return false;

	}

	public function showUser(){


		$query = $this->db->get('users');
		return $query->result_array();
		

	}

	public function editUser($id){
		$query = $this->db->where('id',$id)
				          ->get('users');
		return $query->result_array();
	}

	public function updateUser($data){
		$query = $this->db->where('id',$data['id'])
				->update('users', $data);

				if($query)
					return true;
				else
					return false;
	}

	public function deleteUser($user_id){
		$query = $this->db->set('account_status', '0')
					      ->where('id',$user_id)
				          ->update('users');

				if($query)
					return true;
				else
					return false;
	}

	public function toggle_status(){
		if($_SERVER["REQUEST_METHOD"] == "POST") {

	    echo $status = $_POST["status"];
	    $user_id = $_POST["user_id"];

	    if ($status == "active") {
	    	$query = $this->db->set('status', 'deactive')
					      ->where('id',$user_id)
				          ->update('users');

				if($query)
					return "deactive";
				else
					return false;
	    }
	    else{

	    	$query = $this->db->set('status', 'active')
					      ->where('id',$user_id)
				          ->update('users');

				if($query)
					return "active";
				else
					return false;

	    }



		}
	}
	

	
}

?>