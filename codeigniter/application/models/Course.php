<?php
  class Course extends CI_model{
  	public function insert($d){
  		$this->db->insert('course',$d);
  		return true;
  	}
  	public function delete($d){
  		$this->db->where('id',$d);
  		if($this->db->delete('course'))
  			return true;
  		else
  			return false;
  	}
  	public function update($data,$d){
  		$this->db->where('id',$d);
  		if($this->db->update('course',$data))
  			return true;
  		else
  			return false;
  	}
    
    public function courses($limit,$start){

      $user_id = $this->session->userdata('id');
      $query = $this->db
                          ->select(['sname','id'])
                          ->from('course')
                          ->where('id',$id)
                          ->limit($limit,$start)
                          ->get();
              return $query->result();            
    }

    public function num_rows(){

      $user_id = $this->session->userdata('id');
      $query = $this->db
                          ->select(['user_name','id'])
                          ->form('course')
                          ->where('id',$id)
                          ->get();
              return $query->num_rows();            
    }
  }
  ?>



 <!-- <?php //function confirmation($id)
      {
        //var r=confirm("are you sure to delete?")
         //if (r==true)
        {
          //alert("pressed OK!")
          // call the controller
        }
        //else
        {
         //alert("pressed Cancel!");
         //return false;
        }
      }  //-->