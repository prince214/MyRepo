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
                $this->session->set_flashdata('invalid_user',"Email or Password doesn't match...");
                $this->load->view('template/Login');
                unset($_SESSION['invalid_user']);
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

  public function addUser(){

    $username = $this->input->post('username');
    $role = $this->input->post('role');
    $email = $this->input->post('email');
    $password = md5($this->input->post('password'));

    $data = array(
      'username' => $username,
      'role' => $role,
      'email' => $email,
      'password' => $password
    );

    $this->load->model('Admin/Admin_Model');

    if($this->Admin_Model->addUser($data)){
         redirect('Theme/admin');
    }
    
  }

  public function updateUser(){

    $user_id = $this->input->post('user_id');
    $username = $this->input->post('username');
    $role = $this->input->post('role');
    $email = $this->input->post('email');
    $password = md5($this->input->post('password'));

    $data = array(
      'id' => $user_id,
      'username' => $username,
      'role' => $role,
      'email' => $email,
      'password' => $password
    );

    $this->load->model('Admin/Admin_Model');

    if($this->Admin_Model->updateUser($data)){
         redirect('Theme/admin');
    }

  }

  public function deleteUser(){

    $user_id = $this->input->post('user_id');

    $this->load->model('Admin/Admin_Model');

    if($this->Admin_Model->deleteUser($user_id)){
         redirect('Theme/admin');
    }

  }

  public function toggle_status(){
      $this->load->model('Admin/Admin_Model');
      $this->Admin_Model->toggle_status();
  }

}

