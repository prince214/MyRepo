<?php

class MyUserModel extends CI_model{
	public function getUserdata(){
		$q = $this->db->query("select * from x911_codeigniter1");
		return $q->result_array();
	}
}

?>