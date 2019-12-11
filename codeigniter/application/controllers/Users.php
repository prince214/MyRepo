<?php

class Users extends CI_controller{
	
	public function user(){
		$this->load->model('MyUserModel');
		$data['users'] = $this->MyUserModel->getUserdata();
		
		$this->load->view('Users/userlist',$data);
	}

}

?>