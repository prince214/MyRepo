<?php

class Admin extends MY_Controller{

    public function index(){
       $this->load->library('form_validation');
       $this->form_validation->set_rules('uname','User Name','required|alpha');
       $this->form_validation->set_rules('upassword','Password','required|min_length[3]');
       $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

       if($this->form_validation->run()){
           echo "validation successfull";
           $uname = $this->input->post('uname');
           $upass = $this->input->post('upassword');

           echo "<br> Username: ".$uname;
           echo "<br> Password: ".$upass;
       }
       else{
           $this->load->view('Admin/Login');
       }
    }
}


?>