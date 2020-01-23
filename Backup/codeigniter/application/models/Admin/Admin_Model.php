

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
		$list = $query->result_array();
		foreach($list as $key => $user_list){
			$user_id = $user_list['id'];
			$user_images = $this->db->where('user_id',$user_id)
				          ->get('user_images');
		    $user_images = $user_images->result_array();
		    $list[$key]['user_images'] = $user_images;
		}

		return $list;

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

		$data = array();

		if($_SERVER["REQUEST_METHOD"] == "POST") {

	    $status = $_POST["status"];
	    $user_id = $_POST["user_id"];

	    if ($status == "active") {
	    	$query = $this->db->set('status', 'deactive')
					      ->where('id',$user_id)
				          ->update('users');

				if($query){
					$this->session->set_flashdata('status','User has been Activated');

					$data['status'] = 'active';
					echo json_encode($data);
					return $user_id;
				}
				else
					return false;
	    }
	    else{

	    	$query = $this->db->set('status', 'active')
					      ->where('id',$user_id)
				          ->update('users');

				if($query){
					$this->session->set_flashdata('status','User has been Deactivated');
					$data['status'] = 'deactive';
					echo json_encode($data);
					return $user_id;
				}
				else
					return false;

	    }



		}
	}

	public function logout(){
		$this->session->unset_userdata('id');
		session_destroy();
		redirect('Admin/login');

	}

	public function uploadFiles($image_paths,$user_email){

		 $query = $this->db->select('id')
		 			 		->where('email',$user_email)
		 			 		->get('users');

		if($query->num_rows()){
		$user_id = $query->row()->id;
		}

		print_r($image_paths);

		echo "<pre>";
		print_r($user_id);
		

		foreach ($image_paths as $path) { 
			$data = array(
        'user_id' => $user_id,
        'file_path' => $path,
		);
			$query = $this->db->insert('user_images',$data);

		}

				if($query){
					return true;
				}
				else
					return false;
	}

	public function display_images($id){

		$array = array();

		$query = $this->db->where('user_id',$id)
						  ->get('user_images');
		return $query->result_array();

	}

	public function show_featured_img($id){

		$query = $this->db->select('file_path')
						  ->where('user_id',$id)
						  ->get('user_images');
		return $query->result_array();
	}
	

	
}

?>