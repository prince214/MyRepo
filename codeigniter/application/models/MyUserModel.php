<?php

class MyUserModel extends CI_model{
	public function getUserdata(){

		// $this->db->select("FirstName");
		// $this->db->where("FirstName",'Prince Paraste');
		// $q = $this->db->get("x911_codeigniter1");

		$q = $this -> db -> where("FirstName",'Prince Paraste')
				   		 -> get("x911_codeigniter1");


		return $q->result_array();
	}
}

?>