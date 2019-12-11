<?php
class User_model extends CI_model{
 
 
 
public function register_user($user){
 
 
$this->db->insert('user', $user);
 
}
 
public function login_u($email,$pass){
 
	  $this->db->select('*');
	  $this->db->from('user');
	  $this->db->where('user_email',$email);
	  $this->db->where('user_password',$pass);

	  if($query = $this->db->get())
	  {
	      return $query->row_array();
	  }
	  else{
	    return false;
	  }
 
 
}

/*function fetch_pass($session_id)
{ $fetch_pass=$this->db->query("select * from user_login where id='$session_id'");
$res=$fetch_pass->result();
}*/

function change_pass($session_id,$new_pass)
{
$update_pass=$this->db->query("UPDATE user set user_password='$new_pass' where id='$session_id'");
$this->db->last_query($update_pass);
//echo "<pre>"; print_r($update_pass); die;
return $update_pass;
}


public function email_check($email){
 	
  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('user_email',$email);
  
  $query=$this->db->get();
 
  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }
 
}
   
}
 
 
?>