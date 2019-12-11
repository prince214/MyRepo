<?php
   class Student extends CI_model{
   		public function insert($d){
  		if($this->db->insert('student',$d));
  			return true;
  		else
  			return false;
  	}
  	public function delete($d){
  		$this->db->where('id',$d);
  		if($this->db->delete('student'))
  			return true;
  		else
  			return false;
  	}
  	public function update($data,$d){
  		$this->db->where('id',$d);
  		if($this->db->update('student',$data))
  			return true;
  		else
  			return false;
  	}
   	
   }
?>