<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

	public function index(){

       $this->form_validation->set_rules('uemail','Email','required');
       $this->form_validation->set_rules('upassword','Password','required|min_length[3]');
       $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');


       if($this->form_validation->run()){
           $uemail = $this->input->post('uemail');
           $upassword = $this->input->post('upassword');
           $this->load->model('Admin/LoginModel');
           $login_id = $this->LoginModel->isValidate($uemail,$upassword);
           
           if($login_id){
                $this->session->set_userdata('id',$login_id);
                
                return redirect('Theme/admin');
           }
           else
           {
               echo "No match";
           }
       }
       else{
       	$this->load->view('template/Login');
       }
		
	}

	public function forgotPass(){
		$this->load->view('template/forgotPass');
	}

  public function login(){
    $this->load->view('template/Login');
  }

}

